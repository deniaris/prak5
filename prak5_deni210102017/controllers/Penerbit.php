<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {

    var $table='penerbit';
    var $data = [
        'no' => '',
        'nama' => '',
        'alamat' => '',
        'telpon' => '',
        'email' => ''
        
    ];

    public function __construct(){
        parent::__construct();
        $this->load->model("penerbit_model",$this->table);
    }

    public function index(){
        $data['records'] = $this->penerbit->find_all();
        $this->load->view("penerbit/index",$data);
    }

    //menampilkan detail data
    function detail(){
        $id = $this->uri->segment(3);
        $data = $this->penerbit->find_by_id($id);
        $this->load->view("penerbit/detail",$data);
    }

    //menghapus data
    function hapus(){
        $id = $this->uri->segment(3);
        $this->buku->delete($id);
        redirect(base_url("penerbit"));
    }

    function form(){
        $id = $this->uri->segment(3);
        if($id){
            $this->data = $this->penerbit->find_by_id($id);
        }
        $this->load->view('penerbit/form',$this->data);
    }

    

    function save(){
        $id = $this->input->post('id');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('telpon','telpon','required');
        $this->form_validation->set_rules('email','email','required');
        $this->data = [
            'nama' =>  $this->input->post('nama'),
            'alamat' =>  $this->input->post('alamat'),
            'telpon' =>  $this->input->post('telpon'),
            'email' =>  $this->input->post('email')
        ];
        if($this->form_validation->run() == FALSE){
            $this->load->view('penerbit/form',$this->data);
        }else{
            if($id == ''){
                $this->penerbit->insert($this->data);
            }else{
                $this->penerbit->update($id,$this->data);
            }
            redirect(base_url('penerbit'));
        }
    }
}