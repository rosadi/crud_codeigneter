<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_crud_image extends CI_Model {

    public function get_gambar()
    {
        $query = $this->db->get('tbl_image');
        return $query->result_array();
    }

    // Fungsi untuk melakukan proses upload file
    public function upload(){

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    
    // Fungsi untuk menyimpan data ke database
    public function save($upload){
        $data = array(
            'deskripsi'     =>$this->input->post('input_deskripsi'),
            'nama_file'     => $upload['file']['file_name'],
            'ukuran_file'   => $upload['file']['file_size'],
            'tipe_file'     => $upload['file']['file_type']
        );
        
        $this->db->insert('tbl_image', $data);
    }

    // Fungsi untuk menampilkan data id ke database
    public function get_gambar_id($id)
    {
        $query = $this->db->get_where('tbl_image', array('id' => $id));
        return $query->row_array();
    }

    public function proses_update($name_file,$file_size,$file_type,$id)
    {
        $data = $this->upload->data();
        $data_gambar = array(
            'deskripsi'      => htmlspecialchars($this->input->POST('deskripsi')),
            'nama_file' => $name_file,
            'ukuran_file' => $file_size,
            'tipe_file' => $file_type
        );
        
        $this->db->where('id', $id);
        return $this->db->update('tbl_image', $data_gambar);

    }

}

/* End of file Model_crud_image.php */
/* Location: ./application/models/Model_crud_image.php */