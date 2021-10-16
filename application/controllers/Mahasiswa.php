<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->helper('url');
$this->load->model('mahasiswa_model');
}
public function index()
{
$data['konten'] = 'mahasiswa/daftar_mahasiswa';
$data['title'] = 'Daftar Mahasiswa';    
$data['daftar_mahasiswa'] = $this->mahasiswa_model->select_all()->result();
$this->load->view('template_back/template', $data);
}

public function tambah()
{
    
$data['title'] = 'Tambah Data Mahasiswa';  
$data['konten'] = 'mahasiswa/tambah_mahasiswa';
$this->load->view('template_back/template', $data);
}
public function proses_simpan(){
$data['npm'] = $this->input->post('npm');
$data['nama'] = $this->input->post('nama');
$data['alamat'] = $this->input->post('alamat');
$data['telepon'] = $this->input->post('telepon');
$this->mahasiswa_model->insert($data);
redirect(base_url().'mahasiswa');
}

public function edit($id)
{
$data['title'] = 'Edit Data Mahasiswa';
$data['konten'] = 'mahasiswa/edit_mahasiswa';
$data['mahasiswa'] = $this->mahasiswa_model->select_by_id($id)->row();
$this->load->view('template_back/template', $data);
}
public function proses_update(){
$id = $this->input->post('id');
$data['npm'] = $this->input->post('npm');
$data['nama'] = $this->input->post('nama');
$data['alamat'] = $this->input->post('alamat');
$data['telepon'] = $this->input->post('telepon');
$this->mahasiswa_model->update( $id,$data);
redirect(base_url().'mahasiswa');
}
public function proses_hapus($id){
    $table = "tbl_mhs";
    $this->mahasiswa_model->delete($id,$table);
    redirect(base_url().'mahasiswa');
}
}