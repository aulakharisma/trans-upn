<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Bus");
        $this->load->library('form_validation');
    }

    public function index() {
        $data = array(
            'title' => 'Bus',
            'bus' => $this->M_Bus->getAllData()
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/bus/data_bus', $data);
        $this->load->view('template/footer');
    }

    public function addDataBus()
    {
        $data['title'] = "Bus";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/bus/new_form');
        $this->load->view('template/footer');
    }

    public function saveDataBus()
    {
        
        $bus = $this->M_Bus; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation -> set_rules($bus->rules()); //menerapkan rules

        if ($validation->run()) { //melakukan validasi
            $bus -> saveDataBus(); //menyimpan ke db
            $this->session->set_flashdata('success', 'data berhasil disimpan'); //menampilkan pesan berhasil
        }
        redirect('bus');
    }

    public function editDataBus($id = null) {
        $data['title'] = "Bus";

        if (!isset($id)) redirect('content/bus'); //jika id tidak ditemukan atau null ada diredirect kesini

        $bus = $this->M_Bus; //object model
        $validation = $this->form_validation; //object validation
        $validation->set_rules($bus->rules()); //menerapkan rules

        if ($validation -> run()) {
            $bus -> updateDataBus(); //menyimpan data
            $this->session->set_flashdata('success', 'data berhasil di update');
        }

        $data["bus"] = $bus -> getIdBus($id); //mengambil data untuk ditampilkan pada form
        if (!$data["bus"]) show_404(); //jika data tidak ada, akan menampilkan error 404

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/bus/edit_form', $data);
        $this->load->view('template/footer');

    }
    


    public function deleteDataBus($id = null) 
    {
        if (!isset($id)) show_404();

        if ($this->M_Bus->deleteDataBus($id)) {
            redirect(site_url('content/bus'));
        }
    }
}