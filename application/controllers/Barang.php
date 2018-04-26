<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_barang');
    }

    public function index()
    {
        $data_barang['data_barang'] = $this->Model_barang->get_barang();
        $this->load->view('barang/v_data_barang', $data_barang);
    }   

    public function tambah_barang()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # apa bila tidak ketik tombol save maka tetep di halaman ini
            $this->load->view('barang/v_tambah_barang');
        }else{
            # memasukan data kedalam database
            $this->Model_barang->set_barang();
            # notifikasi barang di input
            $this->session->set_flashdata('pesan', 'Data berhasil di input...');
            # redirect ke halaman barang
            redirect(base_url('Barang'));
        }
    }

    public function edit($id_barang)
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # menampilkan data yang mau di edit terlebih dahulu
            $data['data_barang'] = $this->Model_barang->get_barang_id($id_barang);
            $this->load->view('barang/v_edit_barang', $data);
        }else{
            # proses update data
            $this->Model_barang->update_barang($id_barang);

            $this->session->set_flashdata('pesan', 'Data ' . $id_barang . ' berhasil di update...');

            redirect('Barang');
        }
    }

    public function delete($id_barang)
    {
        $this->Model_barang->delete_barang($id_barang);

        $this->session->set_flashdata('pesan', 'Data ' . $id_barang . ' Telah di hapus...');

        redirect(base_url('Barang'));
    }

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */