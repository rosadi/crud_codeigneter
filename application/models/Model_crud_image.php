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
            'deskripsi'=>$this->input->post('input_deskripsi'),
            'nama_file' => $upload['file']['file_name'],
            'ukuran_file' => $upload['file']['file_size'],
            'tipe_file' => $upload['file']['file_type']
        );
        
        $this->db->insert('tbl_image', $data);
    }

}

/* End of file Model_crud_image.php */
/* Location: ./application/models/Model_crud_image.php */