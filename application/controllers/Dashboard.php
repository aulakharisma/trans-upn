<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Dashboard");
        $this->load->model("M_Bus");
        $this->load->model("M_Driver");
        $this->load->model("M_Kondektur");
    }

    public function index() {
        $data = array(
            'title' => 'Dashboard',
            'trans_upn' => $this->M_Dashboard->getAllData()
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/dashboard/dashboard', $data);
        $this->load->view('template/footer');
    }

    public function addDataUtama()
    {
        $data = array(
            'title' => 'Dashboard',
            'kondektur' => $this->M_Kondektur->getAllData(),
            'bus' => $this->M_Bus->getAllData(),
            'driver' => $this->M_Driver->getAllData()
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/dashboard/new_form', $data);
        $this->load->view('template/footer');
    }

    public function saveDataUtama()
    {
        $trans_upn = $this->M_Dashboard; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation -> set_rules($trans_upn->rules()); //menerapkan rules

        if ($validation->run()) { //melakukan validasi
            $trans_upn -> saveDataUtama(); //menyimpan ke db
            $this->session->set_flashdata('success', 'data berhasil disimpan'); //menampilkan pesan berhasil
        }
        redirect('dashboard');
    }

    public function editDataUtama($id = null) {
        $data = array(
            'title' => 'Dashboard',
            'kondektur' => $this->M_Kondektur->getAllData(),
            'bus' => $this->M_Bus->getAllData(),
            'driver' => $this->M_Driver->getAllData()
        );

        if (!isset($id)) redirect('content/dashboard'); //jika id tidak ditemukan atau null ada diredirect kesini

        $trans_upn = $this->M_Dashboard; //object model
        $validation = $this->form_validation; //object validation
        $validation->set_rules($trans_upn->rules()); //menerapkan rules

        if ($validation -> run()) {
            $trans_upn -> updateDataUtama(); //menyimpan data
            $this->session->set_flashdata('success', 'data berhasil di update');
        }

        $data["trans_upn"] = $trans_upn -> getIdUtama($id); //mengambil data untuk ditampilkan pada form
        if (!$data["trans_upn"]) show_404(); //jika data tidak ada, akan menampilkan error 404

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/dashboard/edit_form', $data);
        $this->load->view('template/footer');

    }
    


    public function deleteDataUtama($id = null) 
    {
        if (!isset($id)) show_404();

        if ($this->M_Dashboard->deleteDataUtama($id)) {
            redirect(site_url('dashboard'));
        }
    }

}