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
        # menampilkan data
        $data_biodata['data_biodata'] = $this->Model_biodata->get_biodata();
        $this->load->view('biodata/v_data_biodata', $data_biodata);
    }

    public function tambah()
    {   
        # validation error
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            $this->load->view('biodata/v_tambah_biodata');
        }else{
            # input ke database
            $this->Model_biodata->set_biodata();
            # memberikan pesan notif ke halaman biodata
            $this->session->set_flashdata('pesan', 'Data biodata telah ter-input...');
            # ke halaman biodata
            redirect(base_url('biodata'));
        }
    }

    # meng-edit data dan proses update
    public function edit($id)
    {
        # validation error
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            $data_biodata['data_biodata'] = $this->Model_biodata->get_biodata_id($id);
            $this->load->view('biodata/v_edit_biodata', $data_biodata);
        }else{
            # update ke database
            $this->Model_biodata->proses_update($id);
            # memberikan pesan notif ke halaman biodata
            $this->session->set_flashdata('pesan', 'Hampura ID '. $id .' sudah di update, cuman hobi tidak di update');
            # ke halaman biodata
            redirect(base_url('biodata'));
        }
    }

    public function delete($id)
    {
        $this->Model_biodata->delete_data($id);
        $this->session->set_flashdata('pesan', 'Data dengan ID ' . $id . ' telah terhapus');
        redirect(base_url('biodata'));
    }


}

/* End of file Biodata.php */
/* Location: ./application/controllers/Biodata.php */