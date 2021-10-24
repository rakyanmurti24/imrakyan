<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Model_review');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'nama Pembeli', 'required',[
            'required' => 'Nama Pembeli harus diisi'
        ]);
        $this->form_validation->set_rules('nhp', 'Nomor HP', 'required', [
            'required' =>'Nomor HP harus diisi'
        ]);
        if($this->form_validation->run() == false){
            $this->load->view('review/view_input');

        }  else {
            $data=[
                'nama'=>$this->input->post('nama'),
                'nhp'=>$this->input->post('nhp'),
                'merk'=>$this->input->post('merk'),
                'ukuran'=>$this->input->post('ukuran'),
                'harga'=>$this->Model_review->proses($this->input->post('merk'))

            ];
            $this->load->view('review/view_output',$data);
        } 
    } 
} 