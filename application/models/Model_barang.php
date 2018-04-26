<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

    public function get_barang()
    {
        $query = $this->db->get('tbl_barang');
        return $query->result_array();
    }

    public function set_barang()
    {
        $data_barang = array(
                        'nama_barang' => htmlspecialchars($this->input->POST('nama_barang')),
                        'jenis_barang' => htmlspecialchars($this->input->POST('jenis_barang')),
                        'harga_barang' => htmlspecialchars($this->input->POST('harga_barang'))
                    );
                                 #nama table,  # array barang
        return $this->db->insert('tbl_barang', $data_barang);
    }

    # tampilkan data barang dulu sebelum di edit
    public function get_barang_id($id_barang)
    {
        $query = $this->db->get_where('tbl_barang', array('id_barang' => $id_barang));
        return $query->row_array();
    }

    # setelah di tampilkan lalu data di update
    public function update_barang($id_barang)
    {
        $data_barang_update = array(
                            'nama_barang' => htmlspecialchars($this->input->POST('nama_barang')),
                            'jenis_barang' => htmlspecialchars($this->input->POST('jenis_barang')),
                            'harga_barang' => htmlspecialchars($this->input->POST('harga_barang'))
                        );

        $this->db->where('id_barang', $id_barang);
        return $this->db->update('tbl_barang', $data_barang_update);
    }

    public function delete_barang($id_barang)
    {
        return $this->db->delete('tbl_barang', array('id_barang' => $id_barang));
    }

}

/* End of file Model_barang.php */
/* Location: ./application/models/Model_barang.php */