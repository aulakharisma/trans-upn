<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Driver extends CI_Model
{
    private $_table = "driver";

    public $id_driver;
    public $nama_driver;
    public $no_sim;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'nama_driver',
                'label' =>'Nama driver',
                'rules' => 'required'
            ],
            [
                'field' => 'no_sim',
                'label' => 'No SIM',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ]
        ];
    }

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getIdDriver($id)
    {
        return $this->db->get_where($this->_table, ["id_driver" => $id]) -> row();
    }

    public function saveDataDriver()
    {
        $post = $this->input->post();//ambil data dari form

        // $this -> id_driver = uniqid(); //mmebuat id unik

        $this -> nama_driver = $post["nama_driver"];
        $this -> no_sim = $post["no_sim"];
        $this -> alamat = $post["alamat"];

        return $this->db->insert($this->_table, $this); //menyimpan ke database
    }

    public function updateDataDriver()
    {
        $post = $this->input->post();

        $this -> id_driver = $post["id"];
        $this -> nama_driver = $post["nama_driver"];
        $this -> no_sim = $post["no_sim"];
        $this -> alamat = $post["alamat"];

        return $this->db->update($this->_table, $this, array('id_driver' => $post['id']));
    }

    public function deleteDataDriver($id)
    {
        return $this->db->delete($this->_table, array("id_driver" => $id));
    }
}