<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models extends CI_Model
{
	public function Get_All($table, $select)
	{
		$select;
		$query = $this->db->get($table);
		return $query->result();
	}
	function getMaterial($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record

			$this->db->where("material like '%" . $postData['search'] . "%'");
			$this->db->where('tbl_material.deleted', 0);
			$this->db->limit(5);

			$records = $this->db->get('tbl_material')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->id_material, "label" => $row->material, "labelsatuan" => $row->satuan);
			}
		}

		return $response;
	}
	function getWarnaProduk($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record


			$this->db->where("warnaproduk like '%" . $postData['search'] . "%'");
			$this->db->where('tbl_warnaproduk.deleted', 0);
			$this->db->limit(5);

			$records = $this->db->get('tbl_warnaproduk')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->id_warnaproduk, "label" => $row->warnaproduk);
			}
		}

		return $response;
	}
	function getOngkos($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record


			$this->db->where("ongkos like '%" . $postData['search'] . "%'");
			$this->db->where('tbl_ongkos.deleted', 0);
			$this->db->limit(5);

			$records = $this->db->get('tbl_ongkos')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->id_ongkos, "label" => $row->ongkos, "labelharga" => $row->harga);
			}
		}

		return $response;
	}
	function getFinishing($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record


			$this->db->where("finishing like '%" . $postData['search'] . "%'");
			$this->db->where('tbl_finishing.deleted', 0);
			$this->db->limit(5);

			$records = $this->db->get('tbl_finishing')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->id_finishing, "label" => $row->finishing);
			}
		}

		return $response;
	}

	function getTipeProduk($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record


			$this->db->where("tipeproduk like '%" . $postData['search'] . "%'");
			$this->db->where('tbl_tipe.deleted', 0);
			$this->db->limit(5);

			$records = $this->db->get('tbl_tipe')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->id_tipe, "label" => $row->tipeproduk);
			}
		}

		return $response;
	}
	function getkonsepkepala($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record


			$this->db->where("konsepkepala like '%" . $postData['search'] . "%'");
			$this->db->where('tbl_konsepkepala.deleted', 0);
			$this->db->limit(5);

			$records = $this->db->get('tbl_konsepkepala')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->id_konsepkepala, "label" => $row->konsepkepala);
			}
		}

		return $response;
	}
	function getAkunCoaSatu($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record
			$this->db->join('tbl_groupakun', 'tbl_groupakun.id_groupakun = tbl_coa.id_groupakun');
			$this->db->where("akun like '%" . $postData['search'] . "%'");
			$this->db->where('groupakun', "CASH BANK");
			$this->db->where('tbl_coa.deleted', 0);
			$this->db->where('headerdetail', "D");

			$records = $this->db->get('tbl_coa')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->namaakun, "label" => $row->akun);
			}
		}

		return $response;
	}
	function getAkunCoaDua($postData)
	{

		$response = array();

		$this->db->select('*');

		if ($postData['search']) {

			// Select record
			$this->db->join('tbl_groupakun', 'tbl_groupakun.id_groupakun = tbl_coa.id_groupakun');
			$this->db->where("akun like '%" . $postData['search'] . "%'");
			$this->db->where('tbl_coa.deleted', 0);
			$this->db->where('headerdetail', "D");

			$records = $this->db->get('tbl_coa')->result();

			foreach ($records as $row) {
				$response[] = array("value" => $row->namaakun, "label" => $row->akun);
			}
		}

		return $response;
	}
	public function Get_Where($where, $table)
	{
		$query = $this->db->get_where($table, $where);
		return $query->row();
	}
	function Save($data, $table)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}
	function Update($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}
	function Update_All($data, $table)
	{
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}
	function Delete($where, $table)
	{
		$result = $this->db->delete($table, $where);
		return $result;
	}
	function Delete_All($table)
	{
		$result = $this->db->delete($table);
		return $result;
	}
	public function Masuk($username, $userpass)
	{
		$this->db->select('*');
		$this->db->from('user');

		$this->db->where('id', $username);
		$this->db->where('password', $userpass);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function get_by_id($id, $table)
	{
		$this->db->from($table);
		$this->db->where('id_penjualan', $id);
		$query = $this->db->get();

		return $query->row();
	}
	public function levelotomatis($kode)
	{

		$this->db->select('RIGHT(tbl_coa.level,1)as level', FALSE);
		$this->db->order_by('id_coa', 'desc');
		$this->db->where('headerdetail', 'H');
		$this->db->where('kode', $kode);
		$this->db->limit(1);
		$query = $this->db->get('tbl_coa');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->level) + 1;
		} else {
			$kode = 1;
		}
		$batas = str_pad($kode, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}

	public function id_cashbankheader()
	{

		$this->db->select('RIGHT(tbl_cashbankheader.id_cashbankheader,1)as id_cashbankheader', FALSE);
		$this->db->order_by('id_cashbankheader', 'desc');

		$this->db->limit(1);
		$query = $this->db->get('tbl_cashbankheader');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->id_cashbankheader) + 1;
		} else {
			$kode = 1;
		}
		$batas = str_pad($kode, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function nomorcashbank()
	{

		$this->db->select('RIGHT(tbl_cashbankheader.nomor,5)as nomor', FALSE);
		$this->db->order_by('id_cashbankheader', 'DESC');
		$this->db->where('deleted', 0);
		$this->db->limit(1);
		$query = $this->db->get('tbl_cashbankheader');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->nomor) + 1;
		} else {
			$kode = 1;
		}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}




	public function id_header()
	{

		$this->db->select('RIGHT(tbl_2ddesainheader.id_header,1)as id_header', FALSE);
		$this->db->order_by('id_header', 'desc');

		$this->db->limit(1);
		$query = $this->db->get('tbl_2ddesainheader');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->id_header) + 1;
		} else {
			$kode = 1;
		}
		$batas = str_pad($kode, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function id_detail()
	{

		$this->db->select('RIGHT(tbl_2ddesaindetail.id_detail,1)as id_detail', FALSE);
		$this->db->order_by('id_detail', 'desc');

		$this->db->limit(1);
		$query = $this->db->get('tbl_2ddesaindetail');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->id_detail) + 1;
		} else {
			$kode = 1;
		}
		$batas = str_pad($kode, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function nomor2ddesain()
	{

		$this->db->select('RIGHT(tbl_2ddesainheader.nomor,5)as nomor', FALSE);
		$this->db->order_by('id_header', 'DESC');
		$this->db->where('deleted', 0);
		$this->db->limit(1);
		$query = $this->db->get('tbl_2ddesainheader');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->nomor) + 1;
		} else {
			$kode = 1;
		}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}


	public function get_by_tanggal($dari, $sampai, $table1)
	{
		$this->db->from($table1);
		$this->db->where('tgl_ayamhilang BETWEEN "' . date('Y-m-d', strtotime($dari)) . '" and "' . date('Y-m-d', strtotime($sampai)) . '"');
		$query = $this->db->get();
		return $query->result();
	}
	public function checking($kode)
	{


		// $this->db->select('*');
		// $this->db->from('');
		// echo $this->db->count_all_results();

		// echo $this->db-> count_all_results ( 'tbl_coa' );   // Menghasilkan bilangan bulat, seperti 25 
		$this->db->where('kode', $kode);
		$this->db->where('headerdetail', "D");
		$this->db->where('deleted', 0);
		$hasil = $this->db->count_all_results('tbl_coa');
		return $hasil;
	}
}
