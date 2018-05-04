<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pagination extends CI_Model {

    
    public function data($number, $offset)
    {
        return $query = $this->db->get('tbl_pagination', $number, $offset)->result();
    }

    public function jumlah_data()
    {
        return $this->db->get('tbl_pagination')->num_rows();
    }

}

/* End of file Model_pagination.php */
/* Location: ./application/models/Model_pagination.php */