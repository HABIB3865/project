<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_mhs');
	}

	public function index(){
		$data['title'] = 'Data Mahasiswa';
		$view = 'mahasiswa/index';
		$this->render_page($data,$view);
	}

	public function getData()
	{
		$result = $this->Model_mhs->getDataTable();
		$data = [];
		$no = $_POST['start'];

		foreach ($result as $r) {
			$row = array();
			$row[] = ++$no;
			$row[] = $r->nama_mhs;
			$row[] = $r->nim_mhs;
			$row[] = $r->tgl_lahir;
			$row[] = $r->prodi_mhs;
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" =>$this->Model_mhs->count_all(),
			"recordsFiltered" =>$this->Model_mhs->count_data(),
			"data" => $data,
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function render_page($data,$view){
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view($view,$data);
		$this->load->view('template/footer');
	}
}