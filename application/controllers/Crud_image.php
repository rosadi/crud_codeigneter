<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_image extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_crud_image');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $data_gambar['data_gambar'] = $this->Model_crud_image->get_gambar();
        $this->load->view('image/v_data_image', $data_gambar);
    }

    public function tambah()
    {   
        $data = array();

        if ( $this->input->POST('submit') ) {// Jika user menekan tombol Submit (Simpan) pada form
             // lakukan function save file dengan memanggil function upload yang ada di Model_crud_image.php
            $upload = $this->Model_crud_image->upload();

            if($upload['result'] == "success"){ // Jika proses upload sukses
                // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                $this->Model_crud_image->save($upload);

                redirect('crud_image'); // Redirect kembali ke halaman awal / halaman view data
            }else{ // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
        $this->load->view('image/v_tambah_image', $data);
    }

    public function edit($id)
    {
        echo 'berhasil';
    }

    
}

/* End of file Crud_image.php */
/* Location: ./application/controllers/Crud_image.php */