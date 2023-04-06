<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Dashboard");
        $this->load->model("M_Driver");
        $this->load->library('form_validation');
    }

    public function index() {
        $data = array(
            'title' => 'Driver',
            'driver' => $this->M_Driver->getAllData()
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/driver/data_driver', $data);
        $this->load->view('template/footer');
    }

    public function addDataDriver()
    {
        $data['title'] = "Driver";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/driver/new_form');
        $this->load->view('template/footer');
    }

    public function saveDataDriver()
    {
        
        $driver = $this->M_Driver; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation -> set_rules($driver->rules()); //menerapkan rules

        if ($validation->run()) { //melakukan validasi
            $driver -> saveDataDriver(); //menyimpan ke db
            $this->session->set_flashdata('success', 'data berhasil disimpan'); //menampilkan pesan berhasil
        }
        redirect('driver');
    }

    public function editDataDriver($id = null) {
        $data['title'] = "Driver";

        if (!isset($id)) redirect('content/driver'); //jika id tidak ditemukan atau null ada diredirect kesini

        $driver = $this->M_Driver; //object model
        $validation = $this->form_validation; //object validation
        $validation->set_rules($driver->rules()); //menerapkan rules

        if ($validation -> run()) {
            $driver -> updateDataDriver(); //menyimpan data
            $this->session->set_flashdata('success', 'data berhasil di update');
        }

        $data["driver"] = $driver -> getIdDriver($id); //mengambil data untuk ditampilkan pada form
        if (!$data["driver"]) show_404(); //jika data tidak ada, akan menampilkan error 404

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/driver/edit_form', $data);
        $this->load->view('template/footer');

    }
    


    public function deleteDataDriver($id = null) 
    {
        if (!isset($id)) show_404();

        if ($this->M_Driver->deleteDataDriver($id)) {
            redirect(site_url('content/driver'));
        }
    }


    public function gajiDriver()
    {
        $data = array(
            'title' => 'Gaji Driver',
            'trans_upn' => $this->M_Dashboard->getAllData(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/driver/pilih_gaji_driver', $data);
        $this->load->view('template/footer');
    }

    public function hitungGaji() {
        $jumlah_km = $this->input->post('jumlah_km');

        $hasil = 3000*$jumlah_km;

        $data = array(
            'title' => 'Gaji driver',
            'hasil' => $hasil
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/driver/hasil_gaji_driver', $data);
        $this->load->view('template/footer');
    }
}