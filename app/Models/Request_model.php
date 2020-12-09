<?php namespace App\Models;
use CodeIgniter\Model;
 
class Request_model extends Model {

    //  menunjukkan bahwa model ini mengambil data pada table roles di database
    protected $table = 'surat_permintaan';

    public function getRequest($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table." b ")
            ->select('b.id as id,DATE_FORMAT(b.tgl_pengiriman, "%W,%M %e %Y") as waktu ,b.status AS status, b.isi AS isi, c.name AS pengirim')
            ->join('users c','b.pengirim = c.id','left')
            ->get()->getResultArray();
        } else {
            return $this->db->table($this->table." b ")
            ->select('b.id as id, DATE_FORMAT(b.tgl_pengiriman, "%W,%M %e %Y") as waktu ,b.status AS status, b.isi AS isi, c.name AS pengirim')
            ->join('users c','b.pengirim = c.id','left')
            ->getWhere(['b.id' => $id]);
        }
        
    }

    public function getRequestByUser($user_id)
    {
        return $this->db->table($this->table." b ")
        ->select('b.id as id,DATE_FORMAT(b.tgl_pengiriman, "%W,%M %e %Y") as waktu ,b.status AS status, b.isi AS isi, c.name AS pengirim')
        ->join('users c','b.pengirim = c.id','left')
        ->getWhere(['b.pengirim' => $user_id])->getResultArray();
    }

    public function saveRequest($data)
    {
       $query = $this->db->table($this->table)->insert($data);
       return $query;
    }

    public function updateRequest($data, $id){
        $query = $this->db->table($this->table)->update($data, ['id'=>$id]);
        return $query;
    }

    public function deleteRequest($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        if ( !$query)
        {
                        return $this->db->error();
        } else {
            return $query;
        }
    }
    



}