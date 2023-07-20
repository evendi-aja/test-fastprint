<?php

class Produk_model extends CI_model
{
    public function getAllProduk()
    {
        return $this->db->get('produk')->result_array();
    }

    public function getAllProdukKondisi()
    {
        $query = $this->db->get_where('produk', array('status' => 'bisa dijual'));
        return $query->result_array();
    }

    public function tambahDataProduk()
    {
        $data =  [
            'id_produk' => $this->input->post('idProduk', true),
            'nama_produk' => $this->input->post('namaProduk', true),
            'harga' => $this->input->post('hargaProduk', true),
            'kategori' => $this->input->post('kategoriProduk', true),
            'status' => $this->input->post('statusProduk', true)
        ];

        $this->db->insert('produk', $data);
    }

    public function hapusDataProduk($no)
    {
        $this->db->where('no', $no);
        $this->db->delete('produk');
    }

    public function getProdukById($no)
    {
        return $this->db->get_where('produk', ['no' => $no])->row_array();
    }

    public function ubahDataProduk()
    {
        $data =  [
            'id_produk' => $this->input->post('idProduk', true),
            'nama_produk' => $this->input->post('namaProduk', true),
            'harga' => $this->input->post('hargaProduk', true),
            'kategori' => $this->input->post('kategoriProduk', true),
            'status' => $this->input->post('statusProduk', true)
        ];

        $this->db->where('no', $this->input->post('no'));
        $this->db->update('produk', $data);
    }
}
