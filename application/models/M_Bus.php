<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Bus extends CI_Model
{
    private $_table = "bus";

    public $id_bus;
    public $plat;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'plat',
            'label' =>'Plat',
            'rules' => 'required'],
            ['field' => 'status',
            'label' =>'Status',
            'rules' => 'required']
        ];
    }

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getIdBus($id)
    {
        return $this->db->get_where($this->_table, ["id_bus" => $id]) -> row();
    }

    public function saveDataBus()
    {
        $post = $this->input->post();//ambil data dari form

        $this -> plat = $post["plat"];
        $this -> status = $post["status"];

        return $this->db->insert($this->_table, $this); //menyimpan ke database
    }

    public function updateDataBus()
    {
        $post = $this->input->post();

        $this -> id_bus = $post["id"];
        $this -> plat = $post["plat"];
        $this -> status = $post["status"];

        return $this->db->update($this->_table, $this, array('id_bus' => $post['id']));
    }

    public function deleteDataBus($id)
    {
        return $this->db->delete($this->_table, array("id_bus" => $id));
    }
}