<?php namespace App\Controllers;

use App\Models\Request_model;
use Config\Services;
use CodeIgniter\I18n\Time;

class Permintaan extends BaseController
{
    protected $modul = 'permintaan';
    public function __construct(){
    helper('form');
    helper('file');   
    }
    
    public function index(){
            $data['arr'] = 'Surat Balasan Permintaan';
            $data['title'] = 'Daftar Permintaan Surat';
            $model = new Request_model();
            $data['surats'] = $model->getRequest();
            Services::template('permintaan/index',$data);
    }

//     public function add(){
//             $modelUser = new User_model();
// 			$modelMasuk = new Masuk_model();
// 			$model = new Surat_user_model();
//             $data['users'] = $modelUser->getUsers();
//             $data['masuks'] = $modelMasuk->getMasuk();
//             $data['urlmethod'] = $this->modul.'/save';
//             $data['arr'] = 'add';
//             $data['title'] = 'Form Tambah Penerimaan Surat'; 
//             Services::template('permintaan/form',$data);
//     }

//     public function save(){
//         $model= new Surat_user_model();
//         $myTime = new Time('now', 'Asia/Jakarta', 'en_ID');
//         $pengirim = session('name');
//         $penerima = $this->request->getPost('penerima');
//         $surat = $this->request->getPost('surat');

//         for ($i=0; $i < count($penerima) ; $i++) { 
//                 $data =[
//                         'surat_id' => $surat,
//                         'user_id' => $penerima[$i],
//                         'tgl_kirim' => $myTime,
//                         'pengirim' => $pengirim,
//                         'status' => 1,
//                     ];
            
//                 $model->saveSurat($data);
//         }
//         session()->setFlashData('success', 'Berhasil Mensave Surat');
//         return redirect()->to ('/permintaan');
//     }

    public function edit($id){
        $model = new Request_model();
        $data['urlmethod'] = $this->modul.'/update';
        $data['arr'] = 'edit';
        $data['title'] = 'Form Edit Permintaan Surat'; 
        $data['surat'] = $model->getRequest($id)->getRow();
        Services::template('permintaan/form',$data);
     }

//         public function view($id){
//         $model = new Surat_user_model();
//         $data['urlmethod'] = $this->modul.'/save';
//         $data['title'] = 'Form View Penerimaan Surat';
//         $data['arr'] = 'add';
//         $data['v'] = "";
//         $data['surat'] = $model->getSuratUser($id)->getRow();
//         Services::template('permintaan/form',$data);
//     }

    public function update(){
        $model= new Request_model();
        $status = $this->request->getPost('status');
        $id = $this->request->getPost('id');

                $data =[
                        'status' => $status,
                        ];
                    
                $model->updateRequest($data, $id);
        
                session()->setFlashData('info', 'Berhasil Mengupdate Status permintaan');
                return redirect()->to ('/permintaan');
    }

//     public function delete($id){
//         try {
//                 $model = new Surat_user_model();
//                 $model->deleteSurat($id);
//                 session()->setFlashData('error', 'Berhasil Menghapus Data');
//                 return redirect()->to('/permintaan');
//         } catch (\Throwable $th) {
//                 session()->setFlashData('error', 'Pesan : Tidak bisa dihapus karena  '.$th->getMessage());
//                 return redirect()->to('/permintaan');
//         }
//     }

    

}