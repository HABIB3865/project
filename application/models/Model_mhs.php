<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mhs extends CI_Model 
{

	var $table = 'data_mhs';
	var $column_order = array('id_mhs','nama_mhs','nim_mhs','tgl_lahir','prodi_mhs');
	var $order = array('id_mhs','nama_mhs','nim_mhs','tgl_lahir','prodi_mhs');


	private function _get_query()
	{
		$this->db->from($this->table);
		if(isset($_POST['search']['value'])){
			$this->db->like('nama_mhs',$_POST['search']['value']);
			$this->db->or_like('nim_mhs',$_POST['search']['value']);
			$this->db->or_like('tgl_lahir',$_POST['search']['value']);
			$this->db->or_like('prodi_mhs',$_POST['search']['value']);
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('nama_mhs','ASC');
		}
	}

	public function getDataTable()
	{
		$this->_get_query();

		$query = $this->db->get();
		return $query->result();
	} 
	public function count_data(){
		$this->_get_query();
		$query = $this->db->get();
		return $query->num_rows();

	}

	public function count_all(){
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}
