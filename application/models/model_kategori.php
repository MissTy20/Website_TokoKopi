<?php

class Model_kategori extends CI_Model{
    public function data_kopi_1(){
        return $this->db->get_where("tb_barang",array('kategori'=>'kopi 1'));
    }

    public function data_kopi_2(){
        return $this->db->get_where("tb_barang",array('kategori'=>'kopi 2'));
    }

    public function data_kopi_3(){
        return $this->db->get_where("tb_barang",array('kategori'=>'kopi 3'));
    }
}