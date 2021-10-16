<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ApiMahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mahasiswa_model');
    }

    public function getAllData()
    {
        $data = $this->mahasiswa_model->select_all()->result();
        $rownumber =  $this->mahasiswa_model->select_all()->num_rows();
        $reponse = array (
            'status' => 'ok',
                'totalResults' => $rownumber,
                'daftar_mahasiswa' => $data
            );
            header('Content-Type: application/json');
            echo json_encode($reponse);
        }


        public function getOneData($id)
        {       
            $data = $this->mahasiswa_model->select_by_id($id)->row();
            $rownumber =  $this->mahasiswa_model->select_by_id($id)->num_rows();
            $reponse = array (
                'status' => 'ok',
                    'totalResults' => $rownumber,
                    'data_mahasiswa' => $data
            );
            header('Content-Type: application/json');
            echo json_encode($reponse);
        }
    }
    