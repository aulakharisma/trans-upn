<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
    }

    private $_table = "trans_upn";

    public $id_trans_upn;
    public $id_kondektur;
    public $id_driver;
    public $id_bus;
    public $jumlah_km;
    public $tanggal;

    public function rules()
    {
        return [
            ['field' => 'id_kondektur',
            'label' =>'id kondektur',
            'rules' => 'required'],
            ['field' => 'id_driver',
            'label' =>'id driver',
            'rules' => 'required'],
            ['field' => 'id_bus',
            'label' =>'id bus',
            'rules' => 'required'],
            ['field' => 'jumlah_km',
            'label' =>'Jumlah KM',
            'rules' => 'required'],
            ['field' => 'tanggal',
            'label' =>'tanggal',
            'rules' => 'required']
        ];
    }

    public function getAllData() 
    {
        $this->db->select('*');
        $this->db->from('trans_upn');
        $this->db->join('driver', 'driver.id_driver = trans_upn.id_driver', 'left');
        $this->db->join('kondektur', 'kondektur.id_kondektur = trans_upn.id_kondektur', 'left');
        $this->db->join('bus', 'bus.id_bus = trans_upn.id_bus', 'left');
        // $query = $this->db->get();
        // $result = $query->result();
        // return $this->db->get()->result();
        return $this->db->get()->result();
    }

    public function getIdUtama($id)
    {
        return $this->db->get_where($this->_table, ["id_trans_upn" => $id]) -> row();
    }

    public function saveDataUtama()
    {
        $post = $this->input->post();//ambil data dari form

        $this -> id_kondektur = $post["id_kondektur"];
        $this -> id_bus = $post["id_bus"];
        $this -> id_driver = $post["id_driver"];
        $this -> jumlah_km = $post["jumlah_km"];
        $this -> tanggal = $post["tanggal"];

        return $this->db->insert($this->_table, $this); //menyimpan ke database
    }

    public function updateDataUtama()
    {
        $post = $this->input->post();

        $this -> id_trans_upn = $post["id"];
        $this -> id_kondektur = $post["id_kondektur"];
        $this -> id_bus = $post["id_bus"];
        $this -> id_driver = $post["id_driver"];
        $this -> jumlah_km = $post["jumlah_km"];
        $this -> tanggal = $post["tanggal"];

        return $this->db->update($this->_table, $this, array('id_trans_upn' => $post['id']));
    }

    public function deleteDataUtama($id)
    {
        return $this->db->delete($this->_table, array("id_trans_upn" => $id));
    }

}