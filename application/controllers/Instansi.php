<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_instansi','record');
        $this->load->model('m_instansi');
    }

	public function index()
	{
		$data['data'] = $this->record->index();
		$this->load->view('v_instansi',$data);
	}

	// Wilayah
    public function getdatawil()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->m_instansi->getwil($searchTerm);
        echo json_encode($response);
    }
      // Provinsi
    public function getdataprov($wilayah_id)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->m_instansi->getprov($wilayah_id,$searchTerm);
        echo json_encode($response);
    }

    // Kabupaten
    public function getdatakab($id_prov)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->m_instansi->getkab($id_prov, $searchTerm);
        echo json_encode($response);
    }

	function create(){
        if(!isset($_POST))
            show_404();
        $namainstansi     = addslashes($_POST['namainstansi']);
        $wilayah          = addslashes($_POST['wilayah']);
        $provinsi         = addslashes($_POST['provinsi']);
        $kabupaten        = addslashes($_POST['kabupaten']);
        $alamat           = addslashes($_POST['alamat']);

        echo $this->record->create($namainstansi,$provinsi,$wilayah,$kabupaten,$alamat);
    }
}
