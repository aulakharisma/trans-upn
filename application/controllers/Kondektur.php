<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kondektur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Kondektur");
        $this->load->model("M_Dashboard");
        $this->load->library('form_validation');
    }

    public function index() {
        $data = array(
            'title' => 'Kondektur',
            'kondektur' => $this->M_Kondektur->getAllData()
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/kondektur/data_kondektur', $data);
        $this->load->view('template/footer');
    }

    public function addDataKondektur()
    {
        $data['title'] = "Kondektur";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/kondektur/new_form');
        $this->load->view('template/footer');
    }

    public function saveDataKondektur()
    {
        
        $kondektur = $this->M_Kondektur; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation -> set_rules($kondektur->rules()); //menerapkan rules

        if ($validation->run()) { //melakukan validasi
            $kondektur -> saveDataKondektur(); //menyimpan ke db
            $this->session->set_flashdata('success', 'data berhasil disimpan'); //menampilkan pesan berhasil
        }
        redirect('kondektur');
    }

    public function editDataKondektur($id = null) {
        $data['title'] = "Kondektur";

        if (!isset($id)) redirect('content/kondektur'); //jika id tidak ditemukan atau null ada diredirect kesini

        $kondektur = $this->M_Kondektur; //object model
        $validation = $this->form_validation; //object validation
        $validation->set_rules($kondektur->rules()); //menerapkan rules

        if ($validation -> run()) {
            $kondektur -> updateDataKondektur(); //menyimpan data
            $this->session->set_flashdata('success', 'data berhasil di update');
        }

        $data["kondektur"] = $kondektur -> getIdKondektur($id); //mengambil data untuk ditampilkan pada form
        if (!$data["kondektur"]) show_404(); //jika data tidak ada, akan menampilkan error 404

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/kondektur/edit_form', $data);
        $this->load->view('template/footer');

    }

    public function deleteDataKondektur($id = null) 
    {
        if (!isset($id)) show_404();

        if ($this->M_Kondektur->deleteDataKondektur($id)) {
            redirect(site_url('kondektur'));
        }
    }

    public function gajiKondektur()
    {
        $data = array(
            'title' => 'Gaji Kondektur',
            'trans_upn' => $this->M_Dashboard->getAllData(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/kondektur/pilih_gaji_kondektur', $data);
        $this->load->view('template/footer');
    }

    public function hitungGaji() {
        $jumlah_km = $this->input->post('jumlah_km');

        $hasil = 1500*$jumlah_km;

        $trans_upn = $this->M_Dashboard->getAllData();
        $kondektur = $this->M_Kondektur->getAllData();


        $data = array(
            'title' => 'Gaji Kondektur',
            'hasil' => $hasil,
            'trans_upn' => $trans_upn,
            'kondektur' => $kondektur
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('content/kondektur/hasil_gaji_kondektur', $data);
        $this->load->view('template/footer');
    }
}