<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_image extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_crud_image', 'Crud_image');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $this->load->view('image/v_data_image');
    }

    public function tambah()
    {   
        $this->form_validation->set_rules('nama_file', 'Nama File', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            $this->load->view('image/v_tambah_image');    
        }else{

        }
       
        
    }

}

/* End of file Crud_image.php */
/* Location: ./application/controllers/Crud_image.php */