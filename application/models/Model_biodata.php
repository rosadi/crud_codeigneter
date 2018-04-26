<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_biodata extends CI_Model {

    public function get_biodata()
    {
        $query = $this->db->get('tbl_biodata');
        return $query->result_array();
    }

    public function set_biodata()
    {
        $nama_lengkap = htmlspecialchars($this->input->POST('nama_lengkap'));
        $jenis_kelamin = htmlspecialchars($this->input->POST('jenis_kelamin'));
        $jurusan       = $this->input->POST('jurusan');

        # meng-input data dengan menggunakan checkbox
        # hobi ============================================
        $hobi = $this->input->POST('hobi');
        @$hobi_implode  = implode(", " , $hobi);
        if ( $hobi_implode == null ) {
            # code...
            $hobi_null = "data hobi tidak di isi";
        }else{
            $hobi_ada = "$hobi_implode";
        }
        # hasil dari eksekusi jadi hasil_hobi
        $hasil_hobi = @$hobi_null ." ". @$hobi_ada;
        # hobi ============================================
        
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'jenis_kelamin' => $jenis_kelamin,
            'hobi' => $hasil_hobi,
            'jurusan' => $jurusan
        );

        $data = $this->db->insert('tbl_biodata', $data);
        var_dump($data);
    }
    

}

/* End of file Model_biodata.php */
/* Location: ./application/models/Model_biodata.php */