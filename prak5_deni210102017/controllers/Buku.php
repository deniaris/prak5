<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    var $table='buku';
    var $data = [
        'id' => '',
        'isbn' => '',
        'judul' => '',
        'pengarang' => '',
        'tanggal_rilis' => '',
        'jumlah_halaman' => '',
        'sinopsis' => ''
    ];

    public function __construct(){
        parent::__construct();
        $this->load->model("buku_model",$this->table);
    }
    public function form1() {
        $data['penerbit'] = $this->buku_model->ambil_semua_penerbit(); // Ambil data penerbit
        $this->load->view('buku/form', $data); // Kirim data penerbit ke view
    }

    public function index(){
        $data['records'] = $this->buku->find_all();
        $this->load->view("buku/index",$data);
    }

    //menampilkan detail data
    function detail(){
        $id = $this->uri->segment(3);
        $data = $this->buku->find_by_id($id);
        $this->load->view("buku/detail",$data);
    }

    //menghapus data
    function hapus(){
        $id = $this->uri->segment(3);
        $this->buku->delete($id);
        redirect(base_url("buku"));
    }

    function form(){
        
        $id = $this->uri->segment(3);
        if($id){
            $this->data = $this->buku->find_by_id($id);
        }
        $this->load->view('buku/form',$this->data);
    }

    

    function save(){
        $id = $this->input->post('id');
        $this->form_validation->set_rules('isbn','isbn','required');
        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('pengarang','pengarang','required');
        $this->form_validation->set_rules('tanggal_rilis','tanggal_rilis','required');
        $this->data = [
            'isbn' =>  $this->input->post('isbn'),
            'judul' =>  $this->input->post('judul'),
            'pengarang' =>  $this->input->post('pengarang'),
            'tanggal_rilis' =>  $this->input->post('tanggal_rilis'),
            'jumlah_halaman' =>  $this->input->post('jumlah_halaman')
        ];
        if($this->form_validation->run() == FALSE){
            $this->load->view('buku/form',$this->data);
        }else{
            if($id == ''){
                $this->buku->insert($this->data);
            }else{
                $this->buku->update($id,$this->data);
            }
            redirect(base_url('buku'));
        }
    }
}