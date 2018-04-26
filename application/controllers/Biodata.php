<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('Model_biodata');
    }

    public function index()
    {
        $data_biodata['data_biodata'] = $this->Model_biodata->get_biodata();
        $this->load->view('biodata/v_data_biodata', $data_biodata);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');


        if ( $this->form_validation->run() === FALSE ) {
            $this->load->view('biodata/v_tambah_biodata');
        }else{
            $this->Model_biodata->set_biodata();

            $this->session->set_flashdata('pesan', 'Data biodata telah ter-input...');

            redirect(base_url('biodata'));
        }
    }

}

/* End of file Biodata.php */
/* Location: ./application/controllers/Biodata.php */