<?php namespace App\Controllers;

use App\Models\Request_model;
use Config\Services;
use CodeIgniter\I18n\Time;
use CodeIgniter\Session\Session;

class Request extends BaseController
{
    protected $modul = 'request';
    public function __construct(){
    helper('form');
    helper('file');   
    }
    
    public function index(){
            $data['arr'] = 'Surat Permintaan';
            $data['title'] = 'Daftar Surat Permintaan'; 
            $model = new Request_model();
            $data['surats'] = $model->getRequestByUser(session('id'));
            Services::template('request/index',$data);
    }

    public function add(){
        
            $data['urlmethod'] = $this->modul.'/save';
            $data['arr'] = 'add';
            $data['title'] = 'Form Tambah Penerimaan Surat'; 
            Services::template('request/form',$data);
    }

    public function save(){
        $model= new Request_model();
        $myTime = new Time('now', 'Asia/Jakarta', 'en_ID');
        $pengirim = session('id');
        $isi = $this->request->getPost('isi');
  
                $data =[
                        'isi' => $isi,
                        'tgl_pengiriman' => $myTime,
                        'pengirim' => $pengirim,
                        'status' => 1,
                    ];
            
                $model->saveRequest($data);
   
        session()->setFlashData('success', 'Berhasil Mensave Surat');
        return redirect()->to ('/request');
    }

    public function edit($id){
        $model =new Request_model();
        $data['urlmethod'] = $this->modul.'/update';
        $data['arr'] = 'add';
        $data['title'] = 'Form Edit Penerimaan Surat'; 
        $data['surat'] = $model->getRequest($id)->getRow();
        Services::template('request/form',$data);
     }

//         public function view($id){
//         $model = new Surat_user_model();
//         $data['urlmethod'] = $this->modul.'/save';
//         $data['title'] = 'Form View Penerimaan Surat';
//         $data['arr'] = 'add';
//         $data['v'] = "";
//         $data['surat'] = $model->getSuratUser($id)->getRow();
//         Services::template('request/form',$data);
//     }

    public function update(){
        $model= new Request_model();
        $id = $this->request->getPost('id');
        $myTime = new Time('now', 'Asia/Jakarta', 'en_ID');
        $pengirim = session('id');
        $isi = $this->request->getPost('isi');
  
                $data =[
                        'isi' => $isi,
                        'tgl_pengiriman' => $myTime,
                        'pengirim' => $pengirim,

                    ];
                $model->updateRequest($data, $id);
        
                session()->setFlashData('info', 'Berhasil Mengupdate Surat');
                return redirect()->to ('/request');
    }

    public function delete($id){
        try {
                $model = new Request_model();
                $model->deleteRequest($id);
                session()->setFlashData('error', 'Berhasil Menghapus Data');
                return redirect()->to('/request');
        } catch (\Throwable $th) {
                session()->setFlashData('error', 'Pesan : Tidak bisa dihapus karena  '.$th->getMessage());
                return redirect()->to('/request');
        }
    }

    

}