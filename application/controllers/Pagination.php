<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('url'));
        $this->load->model('model_pagination');
    }

    public function index()
    {
        $jumlah_data = $this->model_pagination->jumlah_data();

        $this->load->library('pagination');
        
        $config['base_url'] = base_url().'pagination/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     

        $data['halaman'] = $this->pagination->create_links();
        $data['data_pagination'] = $this->model_pagination->data($config['per_page'],$from);


        $this->load->view('pagination/v_data_pagination',$data);

    }

}

/* End of file Pagination.php */
/* Location: ./application/controllers/Pagination.php */