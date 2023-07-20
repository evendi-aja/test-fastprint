<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Test FastPrint / Produk';
        $data['produk'] = $this->Produk_model->getAllProdukKondisi();
        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Test FastPrint / Tambah Data';
        $this->form_validation->set_rules('idProduk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('namaProduk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('hargaProduk', 'Harga Produk', 'required');
        $this->form_validation->set_rules('kategoriProduk', 'Kategori Produk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('produk/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Produk_model->tambahDataProduk();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('produk');
        }
    }


    public function hapus($no)
    {
        $this->Produk_model->hapusDataProduk($no);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('produk');
    }

    public function ubah($no)
    {
        $data['judul'] = 'Test FastPrint / Ubah Data';
        $data['pdk'] = $this->Produk_model->getProdukById($no);
        $data['status'] = ['bisa dijual', 'tidak bisa dijual'];

        $this->form_validation->set_rules('idProduk', 'ID Produk', 'required');
        $this->form_validation->set_rules('namaProduk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('hargaProduk', 'Harga Produk', 'required');
        $this->form_validation->set_rules('kategoriProduk', 'Kategori Produk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('produk/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Produk_model->ubahDataProduk();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('produk');
        }
    }
}
