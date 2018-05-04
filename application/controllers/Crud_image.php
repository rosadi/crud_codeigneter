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
                // Panggil function save yang ada di Model_crud_image.php untuk menyimpan data ke database
                $this->Model_crud_image->save($upload);
                $this->session->set_flashdata('pesan', 'Data berhasil di tambah');
                redirect('crud_image'); // Redirect kembali ke halaman awal / halaman view data
            }else{ // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
        $this->load->view('image/v_tambah_image', $data);
    }

    public function edit($id)
    {
        # mengambil data row untuk unlink nama file
        $row = $this->Model_crud_image->get_gambar_id($id);

        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            # hanya menampiklan data yang ingin di update
            $data_gambar['data_gambar'] = $this->Model_crud_image->get_gambar_id($id);
            $this->load->view('image/v_edit_image', $data_gambar);
        }else{
            # update deskripsi saja tanpa update photo
            if ( empty($_FILES['input_gambar']['name']) ) {
                echo 'udate foto tanpa gambar berhasil';
                # meng update deskripsi saja disini
                $this->Model_crud_image->proses_update_deskripsi($id);
                $this->session->set_flashdata('pesan', 'Data dengan ID : ' . $id . ' berhasil di update deskripsi nya saja');
                redirect(base_url('crud_image'));

            }else{
                # update deskripsi dan gambar 
                
                $nama_photo = $_FILES['input_gambar']['name']; # menggunakan $_FILES
                $type_photo = $_FILES['input_gambar']['type']; # menggunakan $_FILES
                $size_photo = $_FILES['input_gambar']['size']; # menggunakan $_FILES
                # cek dulu data harus berupa gambar
                if ( $type_photo != "image/gif" && $type_photo != "image/jpg" && $type_photo != "image/jpeg" && $type_photo != "image/png" ) {
                    
                    # kalau tidak sesuai muncul pesan
                    $this->session->set_flashdata('pesan', 'Data yang di upload tidak sesuai');
                    redirect(base_url('crud_image/edit/'. $row['id']));

                }else{
                    echo '<h3>UPDATE DESKRIPSI DAN GAMBAR BERHASIL LOAD ... </h3>';
                    # disini meng update gambar dan deskripsi
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
                            $this->session->set_flashdata('pesan', $this->upload->display_errors());
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
                    $this->Model_crud_image->proses_update_gambar($name_file,$file_size,$file_type,$id);
                    $this->session->set_flashdata('pesan', 'Data dengan ID : ' . $id . ' berhasil di update deskripsi dan gambar');
                    #redirect(base_url('crud_image'));
                    header('refresh:2; url=http://localhost/app_ci/crud_latihan/crud_image');
                }
            }
        }
    }

    public function delete($id)
    {
        # mengambil data row untuk unlink nama file
        $row = $this->Model_crud_image->get_gambar_id($id);
        if ( $row ) {
            // unlink unutk menghapus gambar
            unlink('images/'.$row['nama_file']);
            $this->Model_crud_image->delete($id);
            $this->session->set_flashdata('pesan', 'Data dengan ID : ' . $id . ' Berhasil di hapus');
            redirect(base_url('crud_image'));
        } else {
            $this->session->set_flashdata('pesan', 'Data dengan ID : ' . $id . ' Data tidak ditemukan');
            redirect(base_url('crud_image'));
        }
    }
}

/* End of file Crud_image.php */
/* Location: ./application/controllers/Crud_image.php */