<?php

class Penerima extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penerimaModels');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index()
    {      
        $data ['judul'] = 'Data KIP';
        $data['penerima'] = $this->penerimaModels->getAllPenerima();
        if ( $this->input->post('keyword')){
            $data['penerima'] = $this->penerimaModels->cariDataKIP();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('penerima/index', $data);
        $this->load->view('templates/footer');
        
    }
    public function tambah()
    {
        $data ['judul'] = 'Tambah Data KIP';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('templates/header', $data);
            $this->load->view('penerima/tambah', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->penerimaModels->tambahDataKIP();
            redirect('penerima');
        }
    }

    public function hapus($id)
    {
        $this->penerimaModels->hapusDataKIP($id);
        redirect('penerima');
    }

    public function detail($id)
    {
        $data ['judul'] = 'Detail Penerima KIP';
        $data['penerima'] = $this->penerimaModels->detailKIP($id);
        $this->load->view('templates/header', $data);
        $this->load->view('penerima/detail', $data);
        $this->load->view('templates/footer');  
    }

    public function edit($id)
    {
        $data ['judul'] = 'Mengubah Data KIP';
        $data['penerima'] = $this->penerimaModels->detailKIP($id);
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('templates/header', $data);
            $this->load->view('penerima/edit', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->penerimaModels->editKIP();
            redirect('penerima');
        }
    }

    public function pembuat()
    {
        $this->load->view('templates/header');
        $this->load->view('penerima/pembuat');
        $this->load->view('templates/footer');   
    }

    public function penjelasan()
    {
        $this->load->view('templates/header');
        $this->load->view('penerima/penjelasan');
        $this->load->view('templates/footer');   
    }
}