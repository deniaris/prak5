<?php
class Buku_model extends CI_Model{
    //nama tabel
    var $table = "tbl_buku";

    public function __construct(){
        parent::__construct();
        //$this->db->db_debug = false;
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        return $this->db->update($this->table,$data);
    }

    public function ambil_semua_penerbit() {
        return $this->db->get('tbl_penerbit')->result_array();
    }

    
    // public function find_all(){
    //     return $this->db->query("SELECT tbl_buku.*,tbl_penerbit.nama as nama_penerbit
    //     FROM tbl_buku
    //     INNER JOIN tbl_penerbit ON tbl_penerbit.id = tbl_buku.id_penerbit")->result_array();
    // }

    // public function find_by_id($id){
    //     return $this->db->query("SELECT tbl_buku.*,tbl_penerbit.nama as nama_penerbit
    //     FROM tbl_buku
    //     INNER JOIN tbl_penerbit ON tbl_penerbit.id = tbl_buku.id_penerbit
    //     WHERE tbl_buku.id='$id'")->row_array();
    // }

    public function find_all(){
        return $this->db->get($this->table)->result_array();
    }

    public function find_by_id($id){
        return $this->db->get_where($this->table,['id' => $id])->row_array();
    }
    
    public function delete($id){
        $this->db->db_debug = false;
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }

    
}