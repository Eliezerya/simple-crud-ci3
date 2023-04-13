<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('data');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertData($data){
        $this->db->insert('data',$data);
    }

    public function EditData($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('data',$data);
    }

    public function getDataById($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('data');
        return $query->row();
    }

    public function deleteData($id){
        $this->db->where('id',$id);
        $this->db->delete('data');
    }


}