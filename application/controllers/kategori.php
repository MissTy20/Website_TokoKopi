<?php

class Kategori extends CI_Controller{
    public function kopi_1()
    {
        $data['kopi_1'] = $this->model_kategori->data_kopi_1()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kopi_1',$data);
        $this->load->view('templates/footer'); 
    }

    public function kopi_2()
    {
        $data['kopi_2'] = $this->model_kategori->data_kopi_2()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kopi_2',$data);
        $this->load->view('templates/footer'); 
    }

    public function kopi_3()
    {
        $data['kopi_3'] = $this->model_kategori->data_kopi_3()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kopi_3',$data);
        $this->load->view('templates/footer'); 
    }
}