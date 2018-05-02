<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_image extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_crud_image');
        $this->load->library('form_validation');
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
        # mengambil data row untuk unlink
        $row = $this->Model_crud_image->get_gambar_id($id);

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # hanya menampiklan data yang ingin di update
            $data_gambar['data_gambar'] = $this->Model_crud_image->get_gambar_id($id);
            $this->load->view('image/v_edit_image', $data_gambar);
        }else{
            # menyimpan ke dalam database
            if ( $_FILES AND $_FILES['input_gambar']['name'] ) {
                $config = array(
                    'upload_path' => './images/',
                    'allowed_types' => 'jpeg|jpg|png',
                    'max_size' => '2048',
                    'max_width' => '2000',
                    'max_height' => '2000'
                );
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('input_gambar')) {
                    $this->session->set_flashdata('message', $this->upload->display_errors());
                } else {

                    // Remove old image in folder 'images' using unlink()
                    // unlink() use for delete files like image.
                    unlink('images/'.$row['nama_file']);

                    $data = $this->upload->data();
                    $name_file = $data['file_name'];
                    $file_size = $data['file_size'];
                    $file_type = $data['file_type'];
                }
            }

            $this->Model_crud_image->proses_update($name_file,$file_size,$file_type,$id);
            // $this->session->set_flashdata('pesan', 'Data ' . $id . ' berhasil di update...');
            redirect(base_url('crud_image'));
        }   

    }

    public function delete($id)
    {
        echo 'delete';
    }
}

/* End of file Crud_image.php */
/* Location: ./application/controllers/Crud_image.php */