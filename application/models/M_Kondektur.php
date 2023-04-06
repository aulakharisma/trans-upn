<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kondektur extends CI_Model
{
    private $_table = "kondektur";

    public $id_kondektur;
    public $nama_kondektur;

    public function rules()
    {
        return [
            ['field' => 'nama_kondektur',
            'label' =>'Nama kondektur',
            'rules' => 'required']
        ];
    }

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getIdKondektur($id)
    {
        return $this->db->get_where($this->_table, ["id_kondektur" => $id]) -> row();
    }

    public function saveDataKondektur()
    {
        $post = $this->input->post();//ambil data dari form

        $this -> nama_kondektur = $post["nama_kondektur"];

        return $this->db->insert($this->_table, $this); //menyimpan ke database
    }

    public function updateDataKondektur()
    {
        $post = $this->input->post();

        $this -> id_kondektur = $post["id"];
        $this -> nama_kondektur = $post["nama_kondektur"];

        return $this->db->update($this->_table, $this, array('id_kondektur' => $post['id']));
    }

    public function deleteDataKondektur($id)
    {
        return $this->db->delete($this->_table, array("id_kondektur" => $id));
    }
}