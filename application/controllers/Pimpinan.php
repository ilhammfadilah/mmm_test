<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Models', 'm');
		cekuser();
	}
	public function index()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		// $select = $this->db->select('*, count(kode_barang) as jumlahbarang');
		// $data['read']=$this->m->Get_All('barang',$select);
		$data['title'] = 'PT.MMM | Pimpinan';
		// echo "Selamat Datang" . $data->nama;

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('templates_pimpinan/dashboard', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	public function pengaturan()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		// $select = $this->db->select('*, count(kode_barang) as jumlahbarang');
		// $data['read']=$this->m->Get_All('barang',$select);
		$data['title'] = 'PT.MMM | Pengaturan';
		// echo "Selamat Datang" . $data->nama;

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/pengaturan/pengaturan', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function listclarity()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Clarity';
		$select = $this->db->select('*');
		$select = $this->db->order_by('clarity');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('clarity', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/clarity/listclarity', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createclarity()
	{

		$this->form_validation->set_rules(
			'namaclarity',
			'namaclarity',
			'required|trim',
			[
				'required' => 'Field Clarity tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Clarity';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/diamond/clarity/createclarity', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'clarity'           =>	$this->input->post('namaclarity'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'clarity');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data clarity berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listclarity');
		}
	}
	function editclarity($id_clarity)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Clarity'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_clarity', $id_clarity);
		$data['clarity'] = $this->m->Get_All('clarity', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/clarity/updateclarity', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updateclarity()
	{
		$table = 'clarity';
		$where = array(
			'id_clarity'		    =>	$this->input->post('idclarity')
		);

		$data = array(
			'clarity'           =>	$this->input->post('namaclarity'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data clarity berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listclarity');
	}
	function deleteclarity()
	{
		$table = 'clarity';
		$where = array(
			'id_clarity'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data clarity berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listclarity');
	}

	function listshape()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Shape';
		$select = $this->db->select('*');
		$select = $this->db->order_by('shape');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('shape', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/shape/listshape', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function createshape()
	{

		$this->form_validation->set_rules(
			'namashape',
			'namashape',
			'required|trim',
			[
				'required' => 'Field Clarity tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Shape';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/diamond/shape/createshape', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'shape'             =>	$this->input->post('namashape'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'shape');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data shape berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listshape');
		}
	}
	function editshape($id_shape)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Shape'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_shape', $id_shape);
		$data['shape'] = $this->m->Get_All('shape', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/shape/updateshape', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updateshape()
	{
		$table = 'shape';
		$where = array(
			'id_shape'		    =>	$this->input->post('idshape')
		);

		$data = array(
			'shape'           =>	$this->input->post('namashape'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data shape berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listshape');
	}
	function deleteshape()
	{
		$table = 'shape';
		$where = array(
			'id_shape'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data shape berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listshape');
	}
	function listcolor()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Color';
		$select = $this->db->select('*');
		$select = $this->db->where('deleted', 0);
		$select = $this->db->order_by('color');
		$data['read'] = $this->m->Get_All('color', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/color/listcolor', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createcolor()
	{

		$this->form_validation->set_rules(
			'namacolor',
			'namacolor',
			'required|trim',
			[
				'required' => 'Field Color tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Color';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/diamond/color/createcolor', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'color'             =>	$this->input->post('namacolor'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'color');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data color berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listcolor');
		}
	}
	function editcolor($id_color)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Color'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_color', $id_color);
		$data['color'] = $this->m->Get_All('color', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/color/updatecolor', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatecolor()
	{
		$table = 'color';
		$where = array(
			'id_color'		    =>	$this->input->post('idcolor')
		);

		$data = array(
			'color'           =>	$this->input->post('namacolor'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data color berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listcolor');
	}
	function deletecolor()
	{
		$table = 'color';
		$where = array(
			'id_color'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data color berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listcolor');
	}

	function listdiagroup()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Diagroup';
		$select = $this->db->select('*');
		$select = $this->db->where('deleted', 0);
		$select = $this->db->order_by('diagroup');
		$data['read'] = $this->m->Get_All('diagroup', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/diagroup/listdiagroup', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function creatediagroup()
	{

		$this->form_validation->set_rules(
			'namadiagroup',
			'namadiagroup',
			'required|trim',
			[
				'required' => 'Field diagroup tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Diagroup';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/diamond/diagroup/creatediagroup', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'diagroup'             =>	$this->input->post('namadiagroup'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'diagroup');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diagroup berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listdiagroup');
		}
	}
	function editdiagroup($id_diagroup)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Diagroup'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_diagroup', $id_diagroup);
		$data['diagroup'] = $this->m->Get_All('diagroup', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/diagroup/updatediagroup', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatediagroup()
	{
		$table = 'diagroup';
		$where = array(
			'	'		    =>	$this->input->post('iddiagroup')
		);

		$data = array(
			'diagroup'           =>	$this->input->post('namadiagroup'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diagroup berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listdiagroup');
	}
	function deletediagroup()
	{
		$table = 'diagroup';
		$where = array(
			'id_diagroup'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diagroup berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listdiagroup');
	}


	function listdiameter()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Diameter';
		$select = $this->db->select('*, tbl_diagroup.diagroup');
		$select = $this->db->join('tbl_diagroup', 'tbl_diagroup.id_diagroup = tbl_diameter.id_diagroup');
		$select = $this->db->where('tbl_diameter.deleted', 0);
		$select = $this->db->order_by('diagroup asc, diameter_from asc, diameter_to asc');
		$data['read'] = $this->m->Get_All('diameter', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/diameter/listdiameter', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function creatediameter()
	{

		$this->form_validation->set_rules(
			'diameterto',
			'diameterto',
			'required|trim',
			[
				'required' => 'Field diameter to tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'diameterfrom',
			'diameterfrom',
			'required|trim',
			[
				'required' => 'Field diameter from tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'carat',
			'carat',
			'required|trim',
			[
				'required' => 'Field carat tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);


			$select = $this->db->select('*');
			$select = $this->db->where('deleted', 0);
			$select = $this->db->order_by('diagroup');
			$data['diagroup'] = $this->m->Get_All('diagroup', $select);

			$data['title'] = 'PT.MMM | Tambah Data Diameter';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/diamond/diameter/creatediameter', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'id_diagroup'       =>	$this->input->post('diagroup'),
				'diameter_from'     =>	$this->input->post('diameterfrom'),
				'diameter_to'       =>	$this->input->post('diameterto'),
				'carat'        		=>	$this->input->post('carat'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'diameter');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diameter berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listdiameter');
		}
	}

	function editdiameter($id_diameter)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Diameter'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*, tbl_diagroup.diagroup');
		$select = $this->db->join('tbl_diagroup', 'tbl_diagroup.id_diagroup = tbl_diameter.id_diagroup');
		$select = $this->db->where('id_diameter', $id_diameter);
		$data['diameter'] = $this->m->Get_All('diameter', $select);

		$select = $this->db->select('*');
		$select = $this->db->where('deleted', 0);
		$data['diagroup'] = $this->m->Get_All('diagroup', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/diameter/updatediameter', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatediameter()
	{
		$table = 'diameter';
		$where = array(
			'id_diameter'		    =>	$this->input->post('iddiameter')
		);

		$data = array(
			'id_diagroup'       =>	$this->input->post('diagroup'),
			'diameter_from'     =>	$this->input->post('diameterfrom'),
			'diameter_to'       =>	$this->input->post('diameterto'),
			'carat'        		=>	$this->input->post('carat'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diameter berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listdiameter');
	}
	function deletediameter()
	{
		$table = 'diameter';
		$where = array(
			'id_diameter'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diameter berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listdiameter');
	}

	function listparcel()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Parcel';

		$select = $this->db->select('*, tbl_diagroup.diagroup, tbl_diameter.id_diagroup, tbl_diameter.diameter_to, tbl_diameter.diameter_from, tbl_diameter.carat');
		$select = $this->db->join('tbl_diameter', 'tbl_diameter.id_diameter = tbl_parcel.id_diameter');
		$select = $this->db->join('tbl_diagroup', 'tbl_diagroup.id_diagroup = tbl_diameter.id_diagroup');
		$select = $this->db->join('tbl_clarity', 'tbl_clarity.id_clarity = tbl_parcel.id_clarity');
		$select = $this->db->join('tbl_shape', 'tbl_shape.id_shape = tbl_parcel.id_shape');
		$select = $this->db->join('tbl_color', 'tbl_color.id_color = tbl_parcel.id_color');
		$select = $this->db->where('tbl_parcel.deleted', 0);
		$select = $this->db->order_by('diagroup asc, parcel asc, diameter_from asc, diameter_to asc');
		$data['read'] = $this->m->Get_All('parcel', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/parcel/listparcel', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createparcel()
	{

		$this->form_validation->set_rules(
			'parcel',
			'parcel',
			'required|trim',
			[
				'required' => 'Field parcel to tidak boleh kosong'
			]
		);

		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);


			$select = $this->db->select('*, tbl_diagroup.diagroup');
			$select = $this->db->join('tbl_diagroup', 'tbl_diagroup.id_diagroup = tbl_diameter.id_diagroup');
			$select = $this->db->where('tbl_diameter.deleted', 0);
			$select = $this->db->order_by('diagroup asc, diameter_from asc, diameter_to asc');
			$data['diameter'] = $this->m->Get_All('diameter', $select);

			$select = $this->db->select('*');
			$select = $this->db->where('deleted', 0);
			$data['clarity'] = $this->m->Get_All('clarity', $select);

			$select = $this->db->select('*');
			$select = $this->db->where('deleted', 0);
			$data['shape'] = $this->m->Get_All('shape', $select);

			$select = $this->db->select('*');
			$select = $this->db->where('deleted', 0);
			$data['color'] = $this->m->Get_All('color', $select);

			$data['title'] = 'PT.MMM | Tambah Data Parcel';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/diamond/parcel/createparcel', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'parcel'            =>	$this->input->post('parcel'),
				'hargabeli'         =>	$this->input->post('hargabeli'),
				'hargajual'         =>	$this->input->post('hargajual'),
				'id_diameter'       =>	$this->input->post('iddiameter'),
				'id_clarity'        =>	$this->input->post('idclarity'),
				'id_shape'          =>	$this->input->post('idshape'),
				'id_color'          =>	$this->input->post('idcolor'),
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
				'deleted'           =>	0,
			);

			$this->m->Save($data, 'parcel');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diameter berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listparcel');
		}
	}

	function editparcel($id_parcel)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Parcel'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*, tbl_clarity.clarity,tbl_shape.shape, tbl_color.color, tbl_diagroup.id_diagroup, tbl_diagroup.diagroup, tbl_diameter.diameter_to, tbl_diameter.diameter_from, tbl_diameter.carat');
		$select = $this->db->join('tbl_diameter', 'tbl_diameter.id_diameter = tbl_parcel.id_diameter');
		$select = $this->db->join('tbl_diagroup', 'tbl_diagroup.id_diagroup = tbl_diameter.id_diagroup');
		$select = $this->db->join('tbl_clarity', 'tbl_clarity.id_clarity = tbl_parcel.id_clarity');
		$select = $this->db->join('tbl_shape', 'tbl_shape.id_shape = tbl_parcel.id_shape');
		$select = $this->db->join('tbl_color', 'tbl_color.id_color = tbl_parcel.id_color');
		$select = $this->db->where('id_parcel', $id_parcel);
		$data['parcel'] = $this->m->Get_All('parcel', $select);

		$select = $this->db->select('*, tbl_diagroup.diagroup');
		$select = $this->db->join('tbl_diagroup', 'tbl_diagroup.id_diagroup = tbl_diameter.id_diagroup');
		$select = $this->db->order_by('diagroup asc, diameter_from asc, diameter_to asc');
		$select = $this->db->where('tbl_diameter.deleted', 0);
		$data['diameter'] = $this->m->Get_All('diameter', $select);

		$select = $this->db->select('*');
		$select = $this->db->where('deleted', 0);
		$data['clarity'] = $this->m->Get_All('clarity', $select);

		$select = $this->db->select('*');
		$select = $this->db->where('deleted', 0);
		$data['shape'] = $this->m->Get_All('shape', $select);

		$select = $this->db->select('*');
		$select = $this->db->where('deleted', 0);
		$data['color'] = $this->m->Get_All('color', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/diamond/parcel/updateparcel', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updateparcel()
	{
		$table = 'parcel';
		$where = array(
			'id_parcel'		    =>	$this->input->post('idparcel')
		);

		$data = array(
			'parcel'            =>	$this->input->post('parcel'),
			'hargabeli'         =>	$this->input->post('hargabeli'),
			'hargajual'         =>	$this->input->post('hargajual'),
			'id_diameter'       =>	$this->input->post('iddiameter'),
			'id_clarity'        =>	$this->input->post('idclarity'),
			'id_shape'          =>	$this->input->post('idshape'),
			'id_color'          =>	$this->input->post('idcolor'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diameter berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listparcel');
	}
	function deleteparcel()
	{
		$table = 'parcel';
		$where = array(
			'id_parcel'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data parcel berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listparcel');
	}

	function listmaterial()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Material';
		$select = $this->db->select('*');
		$select = $this->db->order_by('material');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('material', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/material/listmaterial', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function creatematerial()
	{

		$this->form_validation->set_rules(
			'namamaterial',
			'namamaterial',
			'required|trim',
			[
				'required' => 'Field material tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'satuan',
			'satuan',
			'required|trim',
			[
				'required' => 'Field satuan tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data material';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/material/creatematerial', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'material'              =>	$this->input->post('namamaterial'),
				'satuan'            =>	$this->input->post('satuan'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'material');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data material berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listmaterial');
		}
	}
	function editmaterial($id_material)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data material'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_material', $id_material);
		$data['material'] = $this->m->Get_All('material', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/material/updatematerial', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatematerial()
	{
		$table = 'material';
		$where = array(
			'id_material'		    =>	$this->input->post('idmaterial')
		);

		$data = array(
			'material'              =>	$this->input->post('namamaterial'),
			'satuan'            =>	$this->input->post('satuan'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data material berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listmaterial');
	}
	function deletematerial()
	{
		$table = 'material';
		$where = array(
			'id_material'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data material berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listmaterial');
	}
	function listbahanbaku()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List bahanbaku';
		$select = $this->db->select('*');
		$select = $this->db->order_by('bahanbaku');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('bahanbaku', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/bahanbaku/listbahanbaku', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createbahanbaku()
	{

		$this->form_validation->set_rules(
			'namabahanbaku',
			'namabahanbaku',
			'required|trim',
			[
				'required' => 'Field bahan baku tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'satuan',
			'satuan',
			'required|trim',
			[
				'required' => 'Field satuan tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Bahan Baku';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/bahanbaku/createbahanbaku', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'bahanbaku'              =>	$this->input->post('namabahanbaku'),
				'satuan'            =>	$this->input->post('satuan'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'bahanbaku');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bahan baku berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listbahanbaku');
		}
	}
	function editbahanbaku($id_bahanbaku)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data bahanbaku'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_bahanbaku', $id_bahanbaku);
		$data['bahanbaku'] = $this->m->Get_All('bahanbaku', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/bahanbaku/updatebahanbaku', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatebahanbaku()
	{
		$table = 'bahanbaku';
		$where = array(
			'id_bahanbaku'		    =>	$this->input->post('idbahanbaku')
		);

		$data = array(
			'bahanbaku'              =>	$this->input->post('namabahanbaku'),
			'satuan'            =>	$this->input->post('satuan'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bahan baku berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listbahanbaku');
	}
	function deletebahanbaku()
	{
		$table = 'bahanbaku';
		$where = array(
			'id_bahanbaku'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bahan baku berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listbahanbaku');
	}

	function listtipeproduk()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Tipe Produk';
		$select = $this->db->select('*');
		$select = $this->db->order_by('tipeproduk');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('tipe', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/tipeproduk/listtipeproduk', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createtipeproduk()
	{

		$this->form_validation->set_rules(
			'tipeproduk',
			'tipeproduk',
			'required|trim',
			[
				'required' => 'Field tipe produk tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Tipe Produk';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/lainlain/tipeproduk/createtipeproduk', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'tipeproduk'        =>	$this->input->post('tipeproduk'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'tipe');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tipe produk berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listtipeproduk');
		}
	}
	function edittipeproduk($id_tipe)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Tipe Produk'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_tipe', $id_tipe);
		$data['tipeproduk'] = $this->m->Get_All('tipe', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/tipeproduk/updatetipeproduk', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatetipeproduk()
	{
		$table = 'tipe';
		$where = array(
			'id_tipe'		    =>	$this->input->post('idtipe')
		);

		$data = array(
			'tipeproduk'           =>	$this->input->post('tipeproduk'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tipeproduk berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listtipeproduk');
	}
	function deletetipeproduk()
	{
		$table = 'tipe';
		$where = array(
			'id_tipe'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tipeproduk berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listtipeproduk');
	}

	function listfinishing()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Finishing';
		$select = $this->db->select('*');
		$select = $this->db->order_by('finishing');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('finishing', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/finishing/listfinishing', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createfinishing()
	{

		$this->form_validation->set_rules(
			'namafinishing',
			'namafinishing',
			'required|trim',
			[
				'required' => 'Field finishing tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Finishing';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/lainlain/finishing/createfinishing', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'finishing'           =>	$this->input->post('namafinishing'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'finishing');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data finishing berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listfinishing');
		}
	}
	function editfinishing($id_finishing)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Finishing'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_finishing', $id_finishing);
		$data['finishing'] = $this->m->Get_All('finishing', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/finishing/updatefinishing', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatefinishing()
	{
		$table = 'finishing';
		$where = array(
			'id_finishing'		    =>	$this->input->post('idfinishing')
		);

		$data = array(
			'finishing'           =>	$this->input->post('namafinishing'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data finishing berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listfinishing');
	}
	function deletefinishing()
	{
		$table = 'finishing';
		$where = array(
			'id_finishing'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data finishing berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listfinishing');
	}

	function listwarnaproduk()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Warna Produk';
		$select = $this->db->select('*');
		$select = $this->db->order_by('warnaproduk');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('warnaproduk', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/warnaproduk/listwarnaproduk', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createwarnaproduk()
	{

		$this->form_validation->set_rules(
			'namawarnaproduk',
			'namawarnaproduk',
			'required|trim',
			[
				'required' => 'Field warna produk tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Warna Produk';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/lainlain/warnaproduk/createwarnaproduk', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'warnaproduk'       =>	$this->input->post('namawarnaproduk'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'warnaproduk');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data warna produk berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listwarnaproduk');
		}
	}
	function editwarnaproduk($id_warnaproduk)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Warna Produk'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_warnaproduk', $id_warnaproduk);
		$data['warnaproduk'] = $this->m->Get_All('warnaproduk', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/warnaproduk/updatewarnaproduk', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatewarnaproduk()
	{
		$table = 'warnaproduk';
		$where = array(
			'id_warnaproduk'		    =>	$this->input->post('idwarnaproduk')
		);

		$data = array(
			'warnaproduk'           =>	$this->input->post('namawarnaproduk'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data warnaproduk berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listwarnaproduk');
	}
	function deletewarnaproduk()
	{
		$table = 'warnaproduk';
		$where = array(
			'id_warnaproduk'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data warna produk berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listwarnaproduk');
	}

	function listkonsepkepala()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Konsep Kepala';
		$select = $this->db->select('*');
		$select = $this->db->order_by('konsepkepala');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('konsepkepala', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/konsepkepala/listkonsepkepala', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function createkonsepkepala()
	{

		$this->form_validation->set_rules(
			'namakonsepkepala',
			'namakonsepkepala',
			'required|trim',
			[
				'required' => 'Field konsep kepala tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Konsep Kepala';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/lainlain/konsepkepala/createkonsepkepala', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'konsepkepala'       =>	$this->input->post('namakonsepkepala'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'konsepkepala');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data  konsep kepala berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listkonsepkepala');
		}
	}

	function editkonsepkepala($id_konsepkepala)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Warna Produk'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_konsepkepala', $id_konsepkepala);
		$data['konsepkepala'] = $this->m->Get_All('konsepkepala', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/konsepkepala/updatekonsepkepala', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatekonsepkepala()
	{
		$table = 'konsepkepala';
		$where = array(
			'id_konsepkepala'		    =>	$this->input->post('idkonsepkepala')
		);

		$data = array(
			'konsepkepala'           =>	$this->input->post('namakonsepkepala'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data konsep kepala berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listkonsepkepala');
	}
	function deletekonsepkepala()
	{
		$table = 'konsepkepala';
		$where = array(
			'id_konsepkepala'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data konsep kepala berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listkonsepkepala');
	}

	function listongkos()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Ongkos';
		$select = $this->db->select('*');
		$select = $this->db->order_by('ongkos');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('ongkos', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/ongkos/listongkos', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createongkos()
	{

		$this->form_validation->set_rules(
			'ongkos',
			'ongkos',
			'required|trim',
			[
				'required' => 'Field ongkos tidak boleh kosong'
			]
		);

		$this->form_validation->set_rules(
			'harga',
			'harga',
			'required|trim',
			[
				'required' => 'Field harga tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Konsep Kepala';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/lainlain/ongkos/createongkos', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'ongkos'            =>	$this->input->post('ongkos'),
				'harga'             =>	$this->input->post('harga'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'ongkos');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data  ongkos berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listongkos');
		}
	}


	function editongkos($id_ongkos)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Ongkos'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_ongkos', $id_ongkos);
		$data['ongkos'] = $this->m->Get_All('ongkos', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/lainlain/ongkos/updateongkos', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updateongkos()
	{
		$table = 'ongkos';
		$where = array(
			'id_ongkos'		    =>	$this->input->post('idongkos')
		);

		$data = array(
			'ongkos'            =>	$this->input->post('ongkos'),
			'harga'             =>	$this->input->post('harga'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data konsep kepala berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listongkos');
	}
	function deleteongkos()
	{
		$table = 'ongkos';
		$where = array(
			'id_ongkos'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ongkos berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listongkos');
	}

	function listbagian()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Bagian';
		$select = $this->db->select('*');
		$select = $this->db->order_by('bagian');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('bagian', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/bagian/listbagian', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createbagian()
	{

		$this->form_validation->set_rules(
			'namabagian',
			'namabagian',
			'required|trim',
			[
				'required' => 'Field bagian tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Bagian';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/bagian/createbagian', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'bagian'            =>	$this->input->post('namabagian'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'bagian');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bagian berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listbagian');
		}
	}
	function editbagian($id_bagian)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Bagian'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_bagian', $id_bagian);
		$data['bagian'] = $this->m->Get_All('bagian', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/bagian/updatebagian', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatebagian()
	{
		$table = 'bagian';
		$where = array(
			'id_bagian'		    =>	$this->input->post('idbagian')
		);

		$data = array(
			'bagian'           =>	$this->input->post('namabagian'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bagian berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listbagian');
	}
	function deletebagian()
	{
		$table = 'bagian';
		$where = array(
			'id_bagian'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bagian berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listbagian');
	}

	function listmatauang()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Mata Uang';
		$select = $this->db->select('*');
		$select = $this->db->order_by('kodematauang');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('matauang', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/matauang/listmatauang', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function creatematauang()
	{

		$this->form_validation->set_rules(
			'namamatauang',
			'namamatauang',
			'required|trim',
			[
				'required' => 'Field nama mata uang tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'kodematauang',
			'kodematauang',
			'required|trim',
			[
				'required' => 'Field kode mata uang tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Mata Uang';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/matauang/creatematauang', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'kodematauang'      =>	$this->input->post('kodematauang'),
				'namamatauang'      =>	$this->input->post('namamatauang'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'matauang');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mata uang berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listmatauang');
		}
	}
	function editmatauang($id_matauang)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Mata Uang'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_matauang', $id_matauang);
		$data['matauang'] = $this->m->Get_All('matauang', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/matauang/updatematauang', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatematauang()
	{
		$table = 'matauang';
		$where = array(
			'id_matauang'		    =>	$this->input->post('idmatauang')
		);

		$data = array(
			'kodematauang'      =>	$this->input->post('kodematauang'),
			'namamatauang'      =>	$this->input->post('namamatauang'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mata uang berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listmatauang');
	}
	function deletematauang()
	{
		$table = 'matauang';
		$where = array(
			'id_matauang'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mata uang berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listmatauang');
	}

	function listkurs()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Kurs';
		$select = $this->db->select('*, tbl_matauang.kodematauang, tbl_matauang.namamatauang');
		$select = $this->db->join('tbl_matauang', 'tbl_matauang.id_matauang = tbl_kurs.id_matauang');
		$select = $this->db->order_by('tbl_matauang.kodematauang');
		$select = $this->db->where('tbl_kurs.deleted', 0);
		$data['read'] = $this->m->Get_All('kurs', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/kurs/listkurs', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createkurs()
	{

		$this->form_validation->set_rules(
			'rate',
			'rate',
			'required|trim',
			[
				'required' => 'Field rate tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Kurs';

			$select = $this->db->select('*');
			$select = $this->db->order_by('kodematauang');
			$select = $this->db->where('deleted', 0);
			$data['matauang'] = $this->m->Get_All('matauang', $select);


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/kurs/createkurs', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'id_matauang'       =>	$this->input->post('idmatauang'),
				'rate'              =>	$this->input->post('rate'),
				'deleted'           =>	0,
				'tanggal'           =>	date('Y-m-d h:i:s'),
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'kurs');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data kurs berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listkurs');
		}
	}

	function editkurs($id_kurs)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Mata Uang'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->join('tbl_matauang', 'tbl_matauang.id_matauang = tbl_kurs.id_matauang');
		$select = $this->db->where('id_kurs', $id_kurs);
		$data['kurs'] = $this->m->Get_All('kurs', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('kodematauang');
		$select = $this->db->where('deleted', 0);
		$data['matauang'] = $this->m->Get_All('matauang', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/kurs/updatekurs', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatekurs()
	{
		$table = 'kurs';
		$where = array(
			'id_kurs'		    =>	$this->input->post('idkurs')
		);

		$data = array(
			'id_matauang'       =>	$this->input->post('idmatauang'),
			'rate'      		=>	$this->input->post('rate'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mata uang berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listkurs');
	}
	function deletekurs()
	{
		$table = 'kurs';
		$where = array(
			'id_kurs'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data kurs berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listkurs');
	}

	function listclient()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Client';
		$select = $this->db->select('*');
		$select = $this->db->order_by('nama');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('client', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/client/listclient', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function createclient()
	{

		$this->form_validation->set_rules(
			'subaccount',
			'subaccount',
			'required|trim|min_length[10]|is_unique[client.subaccount]',
			[
				'required' => 'Field sub account tidak boleh kosong',
				'min_length' => "Field sub account tidak boleh kurang dari 10 karakter",
				'is_unique'  => "Sub account yang dimasukkan sudah ada pada database"
			]
		);
		$this->form_validation->set_rules(
			'nama',
			'nama',
			'required|trim',
			[
				'required' => 'Field nama tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'alamat',
			'alamat',
			'required|trim|max_length[400]',
			[
				'required' => 'Field alamat tidak boleh kosong',
				'max_length' => "Field alamat tidak boleh lebih dari 400 karakter"
			]
		);
		$this->form_validation->set_rules(
			'kota',
			'kota',
			'required|trim',
			[
				'required' => 'Field kota tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'provinsi',
			'provinsi',
			'required|trim',
			[
				'required' => 'Field provinsi tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'kodepos',
			'kodepos',
			'required|trim',
			[
				'required' => 'Field kode pos tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'phone',
			'phone',
			'required|trim',
			[
				'required' => 'Field phone tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'kontak',
			'kontak',
			'required|trim',
			[
				'required' => 'Field kontak tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'email',
			'email',
			'required|trim|valid_email',
			[
				'required' => 'Field email tidak boleh kosong',
				'valid_email' => 'Format Email Harus Sesuai'
			]
		);
		$this->form_validation->set_rules(
			'npwp',
			'npwp',
			'required|trim',
			[
				'required' => 'Field npwp tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Client';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/client/createclient', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'subaccount'        =>	$this->input->post('subaccount'),
				'nama'     			=>	$this->input->post('nama'),
				'alamat'     		=>	$this->input->post('alamat'),
				'kota'     			=>	$this->input->post('kota'),
				'provinsi'     		=>	$this->input->post('provinsi'),
				'kodepos'     		=>	$this->input->post('kodepos'),
				'phone'     		=>	$this->input->post('phone'),
				'kontak'     		=>	$this->input->post('kontak'),
				'email'     		=>	$this->input->post('email'),
				'npwp'     			=>	$this->input->post('npwp'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'client');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Client berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listclient');
		}
	}

	function editclient($id_client)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Client'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_client', $id_client);
		$data['client'] = $this->m->Get_All('client', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/client/updateclient', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updateclient()
	{
		$table = 'client';
		$where = array(
			'id_client'		    =>	$this->input->post('idclient')
		);

		$data = array(
			'subaccount'        =>	$this->input->post('subaccount'),
			'nama'     			=>	$this->input->post('nama'),
			'alamat'     		=>	$this->input->post('alamat'),
			'kota'     			=>	$this->input->post('kota'),
			'provinsi'     		=>	$this->input->post('provinsi'),
			'kodepos'     		=>	$this->input->post('kodepos'),
			'phone'     		=>	$this->input->post('phone'),
			'kontak'     		=>	$this->input->post('kontak'),
			'email'     		=>	$this->input->post('email'),
			'npwp'     			=>	$this->input->post('npwp'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Client berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listclient');
	}
	function deleteclient()
	{
		$table = 'client';
		$where = array(
			'id_client'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Client berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listclient');
	}


	function detailclient($id_client)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Client'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_client', $id_client);
		$data['client'] = $this->m->Get_All('client', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/client/detailclient', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function listkaryawan()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Karyawan';
		$select = $this->db->select('*');
		$select = $this->db->join('tbl_bagian', 'tbl_bagian.id_bagian = tbl_karyawan.id_bagian');
		$select = $this->db->order_by('nama');
		$select = $this->db->where('tbl_karyawan.deleted', 0);
		$data['read'] = $this->m->Get_All('karyawan', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/karyawan/listkaryawan', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createkaryawan()
	{

		$this->form_validation->set_rules(
			'nik',
			'nik',
			'required|trim|min_length[16]|is_unique[karyawan.nik]',
			[
				'required' => 'Field sub account tidak boleh kosong',
				'min_length' => "Field sub account tidak boleh kurang dari 16 karakter",
				'is_unique'  => "NIK yang dimasukkan sudah terdaftar pada database"
			]
		);
		$this->form_validation->set_rules(
			'nama',
			'nama',
			'required|trim',
			[
				'required' => 'Field nama tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'alamat',
			'alamat',
			'required|trim|max_length[400]',
			[
				'required' => 'Field alamat tidak boleh kosong',
				'max_length' => "Field alamat tidak boleh lebih dari 400 karakter"
			]
		);
		$this->form_validation->set_rules(
			'kota',
			'kota',
			'required|trim',
			[
				'required' => 'Field kota tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'provinsi',
			'provinsi',
			'required|trim',
			[
				'required' => 'Field provinsi tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'kodepos',
			'kodepos',
			'required|trim',
			[
				'required' => 'Field kode pos tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'phone',
			'phone',
			'required|trim',
			[
				'required' => 'Field phone tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'kontak',
			'kontak',
			'required|trim',
			[
				'required' => 'Field kontak tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'email',
			'email',
			'required|trim|valid_email',
			[
				'required' => 'Field email tidak boleh kosong',
				'valid_email' => 'Format Email Harus Sesuai'
			]
		);
		$this->form_validation->set_rules(
			'npwp',
			'npwp',
			'required|trim',
			[
				'required' => 'Field npwp tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'tanggalmasuk',
			'tanggalmasuk',
			'required|trim',
			[
				'required' => 'Field tanggalmasuk tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'bagian',
			'bagian',
			'required|trim',
			[
				'required' => 'Field bagian tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Karyawan';

			$select = $this->db->select('*');
			$select = $this->db->order_by('bagian');
			$select = $this->db->where('deleted', 0);
			$data['bagian'] = $this->m->Get_All('bagian', $select);


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/karyawan/createkaryawan', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'nik'               =>	$this->input->post('nik'),
				'nama'     			=>	$this->input->post('nama'),
				'alamat'     		=>	$this->input->post('alamat'),
				'kota'     			=>	$this->input->post('kota'),
				'provinsi'     		=>	$this->input->post('provinsi'),
				'kodepos'     		=>	$this->input->post('kodepos'),
				'phone'     		=>	$this->input->post('phone'),
				'kontak'     		=>	$this->input->post('kontak'),
				'email'     		=>	$this->input->post('email'),
				'npwp'     			=>	$this->input->post('npwp'),
				'tanggalmasuk'     =>	$this->input->post('tanggalmasuk'),
				'bagian'     	    =>	$this->input->post('bagian'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'karyawan');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listkaryawan');
		}
	}
	function editkaryawan($id_karyawan)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Karyawan'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->join('tbl_bagian', 'tbl_bagian.id_bagian = tbl_karyawan.id_bagian');
		$select = $this->db->where('id_karyawan', $id_karyawan);
		$data['karyawan'] = $this->m->Get_All('karyawan', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('bagian');
		$select = $this->db->where('deleted', 0);
		$data['bagian'] = $this->m->Get_All('bagian', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/karyawan/updatekaryawan', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatekaryawan()
	{
		$table = 'karyawan';
		$where = array(
			'id_karyawan'		    =>	$this->input->post('idkaryawan')
		);

		$data = array(
			'nik'               =>	$this->input->post('nik'),
			'nama'     			=>	$this->input->post('nama'),
			'alamat'     		=>	$this->input->post('alamat'),
			'kota'     			=>	$this->input->post('kota'),
			'provinsi'     		=>	$this->input->post('provinsi'),
			'kodepos'     		=>	$this->input->post('kodepos'),
			'phone'     		=>	$this->input->post('phone'),
			'kontak'     		=>	$this->input->post('kontak'),
			'email'     		=>	$this->input->post('email'),
			'npwp'     			=>	$this->input->post('npwp'),
			'tanggalmasuk'     	=>	$this->input->post('tanggalmasuk'),
			'bagian'     	    =>	$this->input->post('bagian'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listkaryawan');
	}
	function deletekaryawan()
	{
		$table = 'karyawan';
		$where = array(
			'id_karyawan'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listkaryawan');
	}


	function detailkaryawan($id_karyawan)
	{

		$data = [
			'title' => 'PT.MMM | Detail Data Karyawan'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_karyawan', $id_karyawan);
		$data['karyawan'] = $this->m->Get_All('karyawan', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/karyawan/detailkaryawan', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function listbsis()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List BSIS';
		$select = $this->db->select('*');
		$select = $this->db->order_by('akun');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('bsis', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/bsis/listbsis', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function createbsis()
	{

		$this->form_validation->set_rules(
			'namaakun',
			'namaakun',
			'required|trim',
			[
				'required' => 'Field nama akun tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'akun',
			'akun',
			'required|max_length[2]|is_unique[bsis.akun]|trim',
			[
				'required'   => 'Field akun tidak boleh kosong',
				'max_length' => 'Field akun tidak boleh lebih dari dua digit',
				'is_unique'  => 'Akun yang dimasukkan sudah terdaftar pada database',
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data BSIS';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/coa/bsis/createbsis', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'normal'            =>	$this->input->post('normal'),
				'namaakun'          =>	$this->input->post('namaakun'),
				'pengurang'         =>	$this->input->post('pengurang'),
				'bsis'              =>	$this->input->post('bsis'),
				'akun'              =>	$this->input->post('akun'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'bsis');

			$data = array(

				'namaakun'          =>	$this->input->post('namaakun'),
				'akun'              =>	$this->input->post('akun'),
				'kode'              =>	$this->input->post('akun'),
				'level'             =>	1,
				'headerdetail'      =>	"H",
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'coa');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bsis berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listbsis');
		}
	}

	function editbsis($id_bsis)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data BSIS'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_bsis', $id_bsis);
		$data['bsis'] = $this->m->Get_All('bsis', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/bsis/updatebsis', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatebsis()
	{
		$id_bsis = $this->input->post('idbsis');


		$this->form_validation->set_rules(
			'akun',
			'akun',
			'max_length[2]|is_unique[bsis.akun]|trim',
			[
				'max_length' => 'Field akun tidak boleh lebih dari dua digit',
				'is_unique'  => 'Akun yang dimasukkan sudah terdaftar pada database',
			]
		);
		if ($this->form_validation->run() == false) {
			$this->editbsis($id_bsis);
		} else {
			if ($this->input->post('akun') == "") {
				$table = 'bsis';
				$where = array(
					'id_bsis'		    =>	$this->input->post('idbsis')
				);

				$data = array(
					'normal'            =>	$this->input->post('normal'),
					'namaakun'          =>	$this->input->post('namaakun'),
					'pengurang'         =>	$this->input->post('pengurang'),
					'bsis'              =>	$this->input->post('bsis'),
					'akun'              =>	$this->input->post('akun_'),
					'update_by'         =>	$this->session->userdata('nama'),
					'update_date'       =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);


				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bsis berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listbsis');
			} elseif ($this->input->post('akun') != "") {
				$table = 'bsis';
				$where = array(
					'id_bsis'		    =>	$this->input->post('idbsis')
				);

				$data = array(
					'normal'            =>	$this->input->post('normal'),
					'namaakun'          =>	$this->input->post('namaakun'),
					'pengurang'         =>	$this->input->post('pengurang'),
					'bsis'              =>	$this->input->post('bsis'),
					'akun'              =>	$this->input->post('akun'),
					'update_by'         =>	$this->session->userdata('nama'),
					'update_date'       =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);


				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bsis berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listbsis');
			}
		}
	}
	function deletebsis()
	{
		$table = 'bsis';
		$where = array(
			'id_bsis'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bsis berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listbsis');
	}

	function listcoa()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List COA';
		$select = $this->db->select('*');
		$select = $this->db->order_by('kode asc');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('coa', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/coa/listcoa', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function addcoa($id_coa)
	{

		$data = [
			'title' => 'PT.MMM | Tambah Data COA'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);



		$select = $this->db->select('*');
		$select = $this->db->where('id_coa', $id_coa);
		$data['coa'] = $this->m->Get_All('coa', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('groupakun asc, nama asc');
		$select = $this->db->where('deleted', 0);
		$data['groupakun'] = $this->m->Get_All('groupakun', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/coa/createcoa', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function createcoa()
	{
		$id_coa = $this->input->post('idcoa');


		$this->form_validation->set_rules(
			'akunbaru',
			'akunbaru',
			'required|is_unique[coa.akun]|trim',
			[
				'required'   => 'Field akun baru tidak boleh kosong',
				'is_unique'  => 'Akun yang dimasukkan sudah terdaftar pada database',
			]
		);
		if ($this->form_validation->run() == false) {

			$this->addcoa($id_coa);
		} else {

			$kode = $this->input->post('code');
			$level = $this->m->levelotomatis($kode);

			if ($this->input->post('headerdetail') == "H") {

				$data = array(

					'namaakun'          =>	$this->input->post('namaakun'),
					'level'				=>  $level,
					'akun'              =>	$this->input->post('akunbaru'),
					'kode'              =>	$this->input->post('code'),
					'headerdetail'      =>	$this->input->post('headerdetail'),
					'id_groupakun'      =>	$this->input->post('idgroupakun'),
					'create_by'         =>	$this->session->userdata('nama'),
					'create_date'       =>	date("Y-m-d"),
				);
				$this->m->Save($data, 'coa');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data coa berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcoa');
			} else if ($this->input->post('headerdetail') == "D") {

				$data = array(

					'namaakun'          =>	$this->input->post('namaakun'),
					'level'				=>  $level,
					'akun'              =>	$this->input->post('akunbaru'),
					'kode'              =>	$this->input->post('code'),
					'headerdetail'      =>	$this->input->post('headerdetail'),
					'id_groupakun'      =>	$this->input->post('idgroupakun'),
					// 'status'            =>	0,
					'create_by'         =>	$this->session->userdata('nama'),
					'create_date'       =>	date("Y-m-d"),
				);
				$this->m->Save($data, 'coa');

				// $table = 'coa';
				// $where = array(
				// 	'kode'		    =>	$this->input->post('code'),
				// 	'headerdetail'  =>	"H",
				// );

				// $data = array(
				// 		'status'				=>  1
				// );
				// $this->m->Update($where, $data, $table);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data coa berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcoa');
			}
		}
	}
	function editcoa($id_coa)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data COA'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->join('groupakun', 'groupakun.id_groupakun = tbl_coa.id_groupakun', 'left');
		$select = $this->db->where('id_coa', $id_coa);
		$data['coa'] = $this->m->Get_All('coa', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('groupakun asc, nama asc');
		$select = $this->db->where('deleted', 0);
		$data['groupakun'] = $this->m->Get_All('groupakun', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/coa/updatecoa', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatecoa()
	{
		$table = 'coa';
		$where = array(
			'id_coa'		    =>	$this->input->post('idcoa')
		);

		$data = array(
			'namaakun'          =>	$this->input->post('namaakun'),
			'headerdetail'      =>	$this->input->post('headerdetail'),
			'id_groupakun'      =>	$this->input->post('idgroupakun'),
			'update_by'         =>	$this->session->userdata('nama'),
			// 'status'            =>	0,
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data coa berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listcoa');
	}
	function deletecoa()
	{
		$kode = $this->input->post('kode');
		$hasil = $this->m->checking($kode);

		if ($this->input->post('headerdetail') == "H") {
			if ($hasil == 0) {
				$table = 'coa';
				$where = array(
					'akun'		    =>	$this->input->post('akun')
				);

				$data = array(
					'deleted'           =>	1
				);
				$this->m->Update($where, $data, $table);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data coa berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcoa');
			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data ini tidak bisa dihapus, karena sudah mempunyai detail <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcoa');
			}
		} elseif ($this->input->post('headerdetail') == "D") {
			$table = 'coa';
			$where = array(
				'akun'		    =>	$this->input->post('akun')
			);

			$data = array(
				'deleted'           =>	1
			);
			$this->m->Update($where, $data, $table);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data coa berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listcoa');
		}


		// var_dump($hasil);
		// die;


		// if ($this->input->post('status') == "0") {

		// }else if ($this->input->post('status') == "1") {

		// }

	}

	function listcostcenter()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Cost Center';
		$select = $this->db->select('*');
		$select = $this->db->order_by('kodecostcenter asc, namacostcenter asc');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('costcenter', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/costcenter/listcostcenter', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function createcostcenter()
	{
		$this->form_validation->set_rules(
			'kodecostcenter',
			'kodecostcenter',
			'required|is_unique[costcenter.kodecostcenter]|trim',
			[
				'required'  => 'Field kode cost center tidak boleh kosong',
				'is_unique' => 'Kode cost center sudah terdaftar pada database',
			]
		);

		$this->form_validation->set_rules(
			'namacostcenter',
			'namacostcenter',
			'required|trim',
			[
				'required' => 'Field nama cost center tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Cost Center';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/coa/costcenter/createcostcenter', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'kodecostcenter'    =>	$this->input->post('kodecostcenter'),
				'namacostcenter'    =>	$this->input->post('namacostcenter'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'costcenter');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data cost center berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listcostcenter');
		}
	}

	function editcostcenter($id_costcenter)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Cost Center'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_costcenter', $id_costcenter);
		$data['costcenter'] = $this->m->Get_All('costcenter', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/costcenter/updatecostcenter', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatecostcenter()
	{
		$table = 'costcenter';
		$where = array(
			'id_costcenter'		    =>	$this->input->post('idcostcenter')
		);

		$data = array(
			'kodecostcenter'    =>	$this->input->post('kodecostcenter'),
			'namacostcenter'    =>	$this->input->post('namacostcenter'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data costcenter berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listcostcenter');
	}
	function deletecostcenter()
	{
		$table = 'costcenter';
		$where = array(
			'id_costcenter'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data costcenter berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listcostcenter');
	}

	function listgroupakun()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Group Akunr';
		$select = $this->db->select('*');
		$select = $this->db->order_by('groupakun asc, nama asc');
		$select = $this->db->where('deleted', 0);
		$data['read'] = $this->m->Get_All('groupakun', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/groupakun/listgroupakun', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function creategroupakun()
	{
		$this->form_validation->set_rules(
			'groupakun',
			'groupakun',
			'required|trim',
			[
				'required'  => 'Field group akun tidak boleh kosong'
			]
		);

		$this->form_validation->set_rules(
			'nama',
			'nama',
			'required|trim',
			[
				'required' => 'Field nama cost center tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createby',
			'CreateBy',
			'required|trim',
			[
				'required' => 'Field create by tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'createdate',
			'CreateDate',
			'required|trim',
			[
				'required' => 'Field create date tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Group Akun';


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/coa/groupakun/creategroupakun', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'groupakun'         =>	$this->input->post('groupakun'),
				'nama'              =>	$this->input->post('nama'),
				'deleted'           =>	0,
				'create_by'         =>	$this->session->userdata('nama'),
				'create_date'       =>	date("Y-m-d"),
			);

			$this->m->Save($data, 'groupakun');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data group akun berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listgroupakun');
		}
	}

	function editgroupakun($id_groupakun)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Group Akun'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_groupakun', $id_groupakun);
		$data['groupakun'] = $this->m->Get_All('groupakun', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/coa/groupakun/updategroupakun', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updategroupakun()
	{
		$table = 'groupakun';
		$where = array(
			'id_groupakun'		    =>	$this->input->post('idgroupakun')
		);

		$data = array(
			'groupakun'         =>	$this->input->post('groupakun'),
			'nama'              =>	$this->input->post('nama'),
			'update_by'         =>	$this->session->userdata('nama'),
			'update_date'       =>	date("Y-m-d"),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data group akun berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listgroupakun');
	}
	function deletegroupakun()
	{
		$table = 'groupakun';
		$where = array(
			'id_groupakun'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data group akun berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listgroupakun');
	}

	function listcashbank()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Cash Bank';
		$select = $this->db->select('*, tbl_matauang.namamatauang as matauang');
		$select = $this->db->join('matauang', 'matauang.id_matauang = cashbankheader.id_matauang');
		$select = $this->db->order_by('nomor');
		$select = $this->db->where('tbl_cashbankheader.deleted', 0);
		$data['read'] = $this->m->Get_All('cashbankheader', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/cashbank/listcashbank', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function editcashbank($id_cashbankheader)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Cash Bank Detail'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->order_by('kodematauang');
		$select = $this->db->where('deleted', 0);
		$data['matauang'] = $this->m->Get_All('matauang', $select);

		$select = $this->db->select('*, tbl_matauang.namamatauang as matauang, tbl_client.nama');
		$select = $this->db->join('matauang', 'matauang.id_matauang = cashbankheader.id_matauang');
		$select = $this->db->join('client', 'client.subaccount = cashbankheader.subaccount');
		$select = $this->db->order_by('nomor');
		$select = $this->db->where('tbl_cashbankheader.id_cashbankheader', $id_cashbankheader);
		$data['cashbankheader'] = $this->m->Get_All('cashbankheader', $select);

		$select = $this->db->select('CAST(SUM(tbl_cashbankdetail.nilai) as DECIMAL(9,3)) totalnilai1, CAST(SUM(tbl_cashbanklawan.nilai) as DECIMAL(9,3)) totalnilai2 ');
		$select = $this->db->join('cashbankdetail', 'cashbankdetail.id_cashbankheader = cashbankheader.id_cashbankheader');
		$select = $this->db->join('cashbanklawan', 'cashbanklawan.id_cashbankheader = cashbankheader.id_cashbankheader');
		$select = $this->db->where('tbl_cashbankheader.id_cashbankheader', $id_cashbankheader);
		$data['totalcashbankheader'] = $this->m->Get_All('cashbankheader', $select);

		$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbankdetail.akun');
		$select       = $this->db->where('tbl_cashbankdetail.id_cashbankheader', $id_cashbankheader);
		$select 	  = $this->db->where('tbl_cashbankdetail.deleted', 0);
		$data['cashbankdetail'] = $this->m->Get_All('cashbankdetail', $select);

		$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbanklawan.akun');
		$select       = $this->db->where('tbl_cashbanklawan.id_cashbankheader', $id_cashbankheader);
		$select 	  = $this->db->where('tbl_cashbanklawan.deleted', 0);
		$data['cashbanklawan'] = $this->m->Get_All('cashbanklawan', $select);

		$select       = $this->db->select('SUM(nilai) as totalnilai');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbankdetail.akun');
		$select       = $this->db->where('tbl_cashbankdetail.id_cashbankheader', $id_cashbankheader);
		$select       = $this->db->where('cashbankdetail.deleted', 0);
		$data['totalcashbankdetail'] = $this->m->Get_All('cashbankdetail', $select);

		$select       = $this->db->select('SUM(nilai) as totalnilai');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbanklawan.akun');
		$select       = $this->db->where('tbl_cashbanklawan.id_cashbankheader', $id_cashbankheader);
		$select       = $this->db->where('cashbanklawan.deleted', 0);
		$data['totalcashbanklawan'] = $this->m->Get_All('cashbanklawan', $select);

		$select = $this->db->select('*, tbl_matauang.kodematauang, tbl_matauang.namamatauang');
		$select = $this->db->join('tbl_matauang', 'tbl_matauang.id_matauang = tbl_kurs.id_matauang');
		$select = $this->db->order_by('tbl_kurs.tanggal desc');
		$select = $this->db->where('tbl_kurs.deleted', 0);
		$data['kurs'] = $this->m->Get_All('kurs', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('subaccount asc');
		$select = $this->db->where('deleted', 0);
		$data['subaccount'] = $this->m->Get_All('client', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/cashbank/updatecashbankheader', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatecashbankheader()
	{
		$id_cashbankheader = $this->input->post('idcashbankheader');

		if ($this->input->post('total') == "0") {
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Total tidak boleh 0 <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			$this->editcashbank($id_cashbankheader);
		} elseif ($this->input->post('totalnilaicashbankdetail') != $this->input->post('totalnilaicashbanklawan')) {
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Total debet kredit tidak sama <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			$this->editcashbank($id_cashbankheader);
		} else {
			if ($this->input->post('typetransaksi') == "Reguler") {
				$table = 'cashbankheader';
				$where = array(
					'id_cashbankheader'		    =>	$this->input->post('idcashbankheader')
				);

				$data = array(
					'id_matauang'        =>	$this->input->post('idmatauang'),
					'nomor'              =>	$this->input->post('nomor'),
					'tanggal'            =>	$this->input->post('tanggaltransaksi'),
					'inout'              =>	$this->input->post('inout'),
					'typetransaksi'      =>	$this->input->post('typetransaksi'),
					'rate'               =>	$this->input->post('rate'),
					'subaccount'         =>	$this->input->post('subaccount'),
					'total'              =>	$this->input->post('total'),
					'memo'               =>	$this->input->post('memo'),
					'update_by'          =>	$this->session->userdata('nama'),
					'update_date'        =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);

				$table = 'cashbankdetail';
				$where = array(
					'id_cashbankheader'		    =>	$this->input->post('iddashbankheader')
				);

				$data = array(
					'update_by'         =>	$this->session->userdata('nama'),
					'update_date'       =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);

				$table = 'cashbanklawan';
				$where = array(
					'id_cashbankheader'		    =>	$this->input->post('iddashbankheader')
				);

				$data = array(
					'update_by'         =>	$this->session->userdata('nama'),
					'update_date'       =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);


				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data cash bank header berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcashbank');
			} else {
				$table = 'cashbankheader';
				$where = array(
					'id_cashbankheader'		    =>	$this->input->post('idcashbankheader')
				);

				$data = array(
					'id_matauang'        =>	$this->input->post('idmatauang'),
					'nomor'              =>	$this->input->post('nomor'),
					'tanggal'            =>	$this->input->post('tanggaltransaksi'),
					'inout'              =>	$this->input->post('inout'),
					'typetransaksi'      =>	$this->input->post('typetransaksi'),
					'rate'               =>	$this->input->post('rate'),
					'subaccount'         =>	$this->input->post('subaccount'),
					'total'              =>	$this->input->post('total'),
					'memo'               =>	$this->input->post('memo'),
					'update_by'          =>	$this->session->userdata('nama'),
					'update_date'        =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);

				$table = 'cashbankdetail';
				$where = array(
					'id_cashbankheader'		    =>	$this->input->post('iddashbankheader')
				);

				$data = array(
					'update_by'         =>	$this->session->userdata('nama'),
					'update_date'       =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);

				$table = 'cashbanklawan';
				$where = array(
					'id_cashbankheader'		    =>	$this->input->post('iddashbankheader')
				);

				$data = array(
					'update_by'         =>	$this->session->userdata('nama'),
					'update_date'       =>	date("Y-m-d"),
				);
				$this->m->Update($where, $data, $table);


				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data cash bank header berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcashbank');
			}
		}
	}
	function deletecashbankheader()
	{
		$table = 'cashbankheader';
		$where = array(
			'id_cashbankheader'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);

		$table = 'cashbanklawan';
		$where = array(
			'id_cashbankheader'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);

		$table = 'cashbankdetail';
		$where = array(
			'id_cashbankheader'		    =>	$this->input->post('id')
		);

		$data = array(
			'deleted'           =>	1
		);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data cash bank berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listcashbank');
	}

	function detailcashbankheader($id_cashbankheader)
	{

		$data = [
			'title' => 'PT.MMM | Detail Data Cash Bank'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->order_by('kodematauang');
		$select = $this->db->where('deleted', 0);
		$data['matauang'] = $this->m->Get_All('matauang', $select);

		$select = $this->db->select('*, tbl_matauang.namamatauang as matauang');
		$select = $this->db->join('matauang', 'matauang.id_matauang = cashbankheader.id_matauang');
		$select = $this->db->order_by('nomor');
		$select = $this->db->where('tbl_cashbankheader.id_cashbankheader', $id_cashbankheader);
		$data['cashbankheader'] = $this->m->Get_All('cashbankheader', $select);

		$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbankdetail.akun');
		$select       = $this->db->where('tbl_cashbankdetail.id_cashbankheader', $id_cashbankheader);
		$select 	  = $this->db->where('tbl_cashbankdetail.deleted', 0);
		$data['cashbankdetail'] = $this->m->Get_All('cashbankdetail', $select);

		$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbanklawan.akun');
		$select       = $this->db->where('tbl_cashbanklawan.id_cashbankheader', $id_cashbankheader);
		$select 	  = $this->db->where('tbl_cashbanklawan.deleted', 0);
		$data['cashbanklawan'] = $this->m->Get_All('cashbanklawan', $select);

		$select       = $this->db->select('sum(nilai) as totalnilai');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbankdetail.akun');
		$select       = $this->db->where('tbl_cashbankdetail.id_cashbankheader', $id_cashbankheader);
		$select 	  = $this->db->where('tbl_cashbankdetail.deleted', 0);
		$data['totalcashbankdetail'] = $this->m->Get_All('cashbankdetail', $select);

		$select       = $this->db->select('sum(nilai) as totalnilai');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbanklawan.akun');
		$select       = $this->db->where('tbl_cashbanklawan.id_cashbankheader', $id_cashbankheader);
		$select 	  = $this->db->where('tbl_cashbanklawan.deleted', 0);
		$data['totalcashbanklawan'] = $this->m->Get_All('cashbanklawan', $select);

		$select = $this->db->select('*, tbl_matauang.kodematauang, tbl_matauang.namamatauang');
		$select = $this->db->join('tbl_matauang', 'tbl_matauang.id_matauang = tbl_kurs.id_matauang');
		$select = $this->db->order_by('tbl_kurs.tanggal desc');
		$select = $this->db->where('tbl_kurs.deleted', 0);
		$data['kurs'] = $this->m->Get_All('kurs', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('subaccount asc');
		$select = $this->db->where('deleted', 0);
		$data['subaccount'] = $this->m->Get_All('client', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/cashbank/detailcashbankheader', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function addcashdetail()
	{
		$data = array(

			'id_cashbankheader'  =>	"0",
			'nomor'              =>	"2",
			'akun'               =>	$this->input->post('akun'),
			'keterangan'         =>	$this->input->post('keterangan'),
			'nilai     '         =>	str_replace('.', '', $this->input->post('nilai')),
			'deleted'           =>	0,
			'create_by'         =>	$this->session->userdata('nama'),
			'create_date'       =>	date("Y-m-d"),
		);

		$this->m->Save($data, 'cashbankdetail');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data cash bank detail berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdatacashbank');
	}
	function editdetailcashbank($id_cashbankdetail)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Cash Bank Detail'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbankdetail.akun');
		$select       = $this->db->where('tbl_cashbankdetail.id_cashbankdetail', $id_cashbankdetail);
		$data['read'] = $this->m->Get_All('cashbankdetail', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/cashbank/updatedetailcashbank', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatedetailcashbank()
	{
		if ($this->input->post('idcashbankheader') == 0) {

			$table = 'cashbankdetail';
			$where = array(
				'id_cashbankdetail'		    =>	$this->input->post('idcashbankdetail'),
			);

			$data = array(
				'akun'              =>	$this->input->post('akun'),
				'keterangan'        =>	$this->input->post('keterangan'),
				'nilai'             =>	str_replace('.', '', $this->input->post('nilai')),
				'update_by'         =>	$this->session->userdata('nama'),
				'update_date'       =>	date("Y-m-d"),
			);
			$this->m->Update($where, $data, $table);


			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdatacashbank');
		} elseif ($this->input->post('idcashbankheader') != 0) {
			$id_cashbankheader = $this->input->post('idcashbankheader');


			$table = 'cashbankdetail';
			$where = array(
				'id_cashbankdetail'		    =>	$this->input->post('idcashbankdetail')
			);

			$data = array(
				'akun'              =>	$this->input->post('akun'),
				'keterangan'        =>	$this->input->post('keterangan'),
				'nilai'             =>	$this->input->post('nilai'),
				'update_by'         =>	$this->session->userdata('nama'),
				'update_date'       =>	date("Y-m-d"),
			);
			$this->m->Update($where, $data, $table);


			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');

			$this->editcashbank($id_cashbankheader);
		}
	}
	function deletecashbankdetail()
	{
		if ($this->input->post('id_cashbankheader') == "0") {
			$table = 'cashbankdetail';
			$where = array(
				'id_cashbankdetail'		    =>	$this->input->post('id_cashbankdetail')
			);

			$data = array(
				'deleted'           =>	1
			);
			$this->m->Update($where, $data, $table);



			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdatacashbank');
		} elseif ($this->input->post('id_cashbankheader') != "0") {
			$id_cashbankheader = $this->input->post('id_cashbankheader');

			$table = 'cashbankdetail';
			$where = array(
				'id_cashbankdetail'		    =>	$this->input->post('id_cashbankdetail')
			);

			$data = array(
				'deleted'           =>	1
			);
			$this->m->Update($where, $data, $table);



			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			$this->editcashbank($id_cashbankheader);
		}
	}

	function addcashlawan()
	{
		$data = array(

			'id_cashbankheader'  =>	"0",
			'nomor'              =>	"2",
			'akun'               =>	$this->input->post('akun'),
			'keterangan'         =>	$this->input->post('keterangan'),
			'nilai     '         =>	str_replace('.', '', $this->input->post('nilai')),
			'deleted'           =>	0,
			'create_by'         =>	$this->session->userdata('nama'),
			'create_date'       =>	date("Y-m-d"),

		);

		$this->m->Save($data, 'cashbanklawan');

		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data cash bank lawan berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdatacashbank');
	}

	function editdetailcashbanklawan($id_cashbanklawan)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Cash Bank Detail'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
		$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbanklawan.akun');
		$select       = $this->db->where('tbl_cashbanklawan.id_cashbanklawan', $id_cashbanklawan);
		$data['read'] = $this->m->Get_All('cashbanklawan', $select);


		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/cashbank/updatecashbanklawan', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function updatedetailcashbanklawan()
	{
		if ($this->input->post('idcashbankheader') == 0) {
			$table = 'cashbanklawan';
			$where = array(
				'id_cashbanklawan'		    =>	$this->input->post('idcashbanklawan')
			);

			$data = array(
				// 'id_cashbanklawan'  =>	$this->input->post('idcashbanklawan'),
				'akun'              =>	$this->input->post('akun'),
				'keterangan'        =>	$this->input->post('keterangan'),
				'nilai     '        =>	str_replace('.', '', $this->input->post('nilai')),
				'update_by'         =>	$this->session->userdata('nama'),
				'update_date'       =>	date("Y-m-d"),
			);
			$this->m->Update($where, $data, $table);


			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank lawan berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdatacashbank');
		} elseif ($this->input->post('idcashbankheader') != 0) {
			$id_cashbankheader = $this->input->post('idcashbankheader');


			$table = 'cashbanklawan';
			$where = array(
				'id_cashbanklawan'		    =>	$this->input->post('idcashbanklawan')
			);

			$data = array(
				'akun'              =>	$this->input->post('akun'),
				'keterangan'        =>	$this->input->post('keterangan'),
				'nilai'             =>	$this->input->post('nilai'),
				'update_by'         =>	$this->session->userdata('nama'),
				'update_date'       =>	date("Y-m-d"),
			);
			$this->m->Update($where, $data, $table);


			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank lawan berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');

			$this->editcashbank($id_cashbankheader);
		}
	}
	function deletecashbanklawan()
	{
		if ($this->input->post('id_cashbankheader') == "0") {
			$table = 'cashbanklawan';
			$where = array(
				'id_cashbanklawan'		    =>	$this->input->post('id_cashbanklawan')
			);

			$data = array(
				'deleted'           =>	1
			);
			$this->m->Update($where, $data, $table);



			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank lawan berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdatacashbank');
		} elseif ($this->input->post('id_cashbankheader') != "0") {

			$id_cashbankheader = $this->input->post('id_cashbankheader');
			$table = 'cashbanklawan';
			$where = array(
				'id_cashbanklawan'		    =>	$this->input->post('id_cashbanklawan')
			);

			$data = array(
				'deleted'           =>	1
			);
			$this->m->Update($where, $data, $table);



			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail cash bank lawan berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			$this->editcashbank($id_cashbankheader);
		}
	}
	function get_akuncoasatu()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getAkunCoaSatu($postData);

		echo json_encode($data);
	}
	function get_akuncoadua()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getAkunCoaDua($postData);

		echo json_encode($data);
	}
	function get_material()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getMaterial($postData);

		echo json_encode($data);
	}

	function get_warnaproduk()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getWarnaProduk($postData);

		echo json_encode($data);
	}
	function get_ongkos()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getOngkos($postData);

		echo json_encode($data);
	}
	function get_finishing()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getFinishing($postData);

		echo json_encode($data);
	}
	function get_tipeproduk()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getTipeProduk($postData);

		echo json_encode($data);
	}
	function get_konsepkepala()
	{
		$postData = $this->input->post();

		// get data
		$data = $this->m->getKonsepKepala($postData);

		echo json_encode($data);
	}
	function Createcashbank()
	{
		$this->form_validation->set_rules(
			'tanggaltransaksi',
			'tanggaltransaksi',
			'required|trim',
			[
				'required' => 'Field tanggal transaksi tidak boleh kosong'
			]
		);


		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');
			$nama = $this->session->userdata('nama');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Cash Bank';


			// $data['id_penjualan'] = $this->m->kodepenjualan();
			$select = $this->db->select('CAST(SUM(tbl_cashbankdetail.nilai) as DECIMAL(9,3)) + CAST(SUM(tbl_cashbanklawan.nilai) as DECIMAL(9,3)) as totalcashbankheader ');
			$select = $this->db->join('cashbankdetail', 'cashbankdetail.id_cashbankheader = cashbankheader.id_cashbankheader');
			$select = $this->db->join('cashbanklawan', 'cashbanklawan.id_cashbankheader = cashbankheader.id_cashbankheader');
			$select = $this->db->where('tbl_cashbankdetail.create_by', $nama);
			$select = $this->db->where('tbl_cashbanklawan.create_by', $nama);
			$select = $this->db->where('tbl_cashbankdetail.deleted', 0);
			$select = $this->db->where('tbl_cashbanklawan.deleted', 0);
			$select = $this->db->where('tbl_cashbankdetail.id_cashbankheader', 0);
			$select = $this->db->where('tbl_cashbanklawan.id_cashbankheader', 0);
			$data['totalcashbankheader'] = $this->m->Get_All('cashbankheader', $select);

			$select = $this->db->select('*, tbl_groupakun.groupakun');
			$select = $this->db->join('tbl_groupakun', 'tbl_groupakun.id_groupakun = tbl_coa.id_groupakun');
			$select = $this->db->order_by('kode asc');
			$select = $this->db->where('tbl_coa.deleted', 0);
			$select = $this->db->where('headerdetail', "D");
			$select = $this->db->where('groupakun', "CASH BANK");
			$data['coasat'] = $this->m->Get_All('coa', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('kode asc');
			$select = $this->db->where('tbl_coa.deleted', 0);
			$select = $this->db->where('headerdetail', "D");
			$data['coadua'] = $this->m->Get_All('coa', $select);

			$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
			$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbankdetail.akun');
			$select       = $this->db->where('tbl_cashbankdetail.id_cashbankheader', 0);
			$select       = $this->db->where('cashbankdetail.create_by', $nama);
			$select       = $this->db->where('cashbankdetail.deleted', 0);
			$data['cashbankdetail'] = $this->m->Get_All('cashbankdetail', $select);

			$select       = $this->db->select('*, tbl_coa.namaakun, tbl_coa.akun');
			$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbanklawan.akun');
			$select       = $this->db->where('tbl_cashbanklawan.id_cashbankheader', 0);
			$select       = $this->db->where('cashbanklawan.create_by', $nama);
			$select       = $this->db->where('cashbanklawan.deleted', 0);
			$data['cashbanklawan'] = $this->m->Get_All('cashbanklawan', $select);

			$select       = $this->db->select('SUM(nilai) as totalnilai');
			$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbankdetail.akun');
			$select       = $this->db->where('tbl_cashbankdetail.id_cashbankheader', 0);
			$select       = $this->db->where('cashbankdetail.create_by', $nama);
			$select       = $this->db->where('cashbankdetail.deleted', 0);
			$data['totalcashbankdetail'] = $this->m->Get_All('cashbankdetail', $select);

			$select       = $this->db->select('SUM(nilai) as totalnilai');
			$select       = $this->db->join('tbl_coa', 'coa.akun = tbl_cashbanklawan.akun');
			$select       = $this->db->where('tbl_cashbanklawan.id_cashbankheader', 0);
			$select       = $this->db->where('cashbanklawan.create_by', $nama);
			$select       = $this->db->where('cashbanklawan.deleted', 0);
			$data['totalcashbanklawan'] = $this->m->Get_All('cashbanklawan', $select);

			$select = $this->db->select('*, tbl_matauang.kodematauang, tbl_matauang.namamatauang');
			$select = $this->db->join('tbl_matauang', 'tbl_matauang.id_matauang = tbl_kurs.id_matauang');
			$select = $this->db->order_by('tbl_kurs.tanggal desc');
			$select = $this->db->where('tbl_kurs.deleted', 0);
			$data['kurs'] = $this->m->Get_All('kurs', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('subaccount asc');
			$select = $this->db->where('deleted', 0);
			$data['subaccount'] = $this->m->Get_All('client', $select);



			$data['id_cashbankheader'] = $this->m->id_cashbankheader();
			$data['nomor']             = $this->m->nomorcashbank();

			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/cashbank/createcashbank', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {
			if ($this->input->post('total') == "0,00") {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Total tidak boleh 0 <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('tambahdatacashbank');
			} elseif ($this->input->post('totalnilaicashbankdetail') != $this->input->post('totalnilaicashbanklawan')) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Total debet kredit tidak sama <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('tambahdatacashbank');
			} else {
				$data = array(
					'id_cashbankheader'  =>	$this->input->post('id_cashbankheader'),
					'id_matauang'        =>	$this->input->post('idmatauang'),
					'nomor'              =>	$this->input->post('nomor'),
					'tanggal'            =>	$this->input->post('tanggaltransaksi'),
					'inout'              =>	$this->input->post('inout'),
					'typetransaksi'      =>	$this->input->post('typetransaksi'),
					'rate'               =>	$this->input->post('rate'),
					'subaccount'         =>	$this->input->post('subaccount'),
					'total'              =>	$this->input->post('total'),
					'memo'               =>	$this->input->post('memo'),
					'create_by'          =>	$this->session->userdata('nama'),
					'create_date'        =>	date("Y-m-d"),

				);

				$this->m->Save($data, 'cashbankheader');

				$table = 'cashbankdetail';
				$where = array(
					'id_cashbankheader'		=>	0,
					'nomor'					=>	2,
					'deleted'			    =>	0,
				);
				$data = array(
					'id_cashbankheader'		=>	$this->input->post('id_cashbankheader'),
					'nomor'       			=>	$this->input->post('nomor'),
				);
				$this->m->Update($where, $data, $table);

				$table = 'cashbanklawan';
				$where = array(
					'id_cashbankheader'		=>	0,
					'nomor'					=>	2,
					'deleted'			    =>	0,
				);
				$data = array(
					'id_cashbankheader'		=>	$this->input->post('id_cashbankheader'),
					'nomor'       			=>	$this->input->post('nomor'),
				);
				$this->m->Update($where, $data, $table);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Transaksi Cash Bank Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcashbank');
			}
		}
	}

	function list2ddesain()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List 2D Desain';
		$select = $this->db->select('*, tbl_karyawan.nama, tbl_bagian.bagian');
		$select = $this->db->join('karyawan', 'karyawan.id_karyawan = 2ddesainheader.id_karyawan');
		$select = $this->db->join('client', 'client.id_client = 2ddesainheader.id_client', 'left');
		$select = $this->db->join('bagian', 'bagian.id_bagian = karyawan.id_bagian');
		$select = $this->db->order_by('nomor');
		$select = $this->db->where('tbl_2ddesainheader.deleted', 0);
		$data['read'] = $this->m->Get_All('2ddesainheader', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/2ddesain/list2ddesain', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function Create2ddesain()
	{
		$this->form_validation->set_rules(
			'tanggaltransaksi',
			'tanggaltransaksi',
			'required|trim',
			[
				'required' => 'Field tanggal transaksi tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');
			$nama = $this->session->userdata('nama');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data 2D Desain';

			$select = $this->db->select('*');
			$select = $this->db->join('tbl_bagian', 'tbl_bagian.id_bagian = tbl_karyawan.id_bagian');
			$select = $this->db->order_by('nama');
			// $select = $this->db->where('tbl_bagian.bagian', 'DESIGNER 2D');
			$select = $this->db->where('tbl_karyawan.deleted', 0);
			$data['karyawan'] = $this->m->Get_All('karyawan', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('material');
			$select = $this->db->where('deleted', 0);
			$data['material'] = $this->m->Get_All('material', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('tipeproduk');
			$select = $this->db->where('deleted', 0);
			$data['tipeproduk'] = $this->m->Get_All('tipe', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('warnaproduk');
			$select = $this->db->where('deleted', 0);
			$data['warnaproduk'] = $this->m->Get_All('warnaproduk', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('finishing');
			$select = $this->db->where('deleted', 0);
			$data['finishing'] = $this->m->Get_All('finishing', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('konsepkepala');
			$select = $this->db->where('deleted', 0);
			$data['konsepkepala'] = $this->m->Get_All('konsepkepala', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('ongkos');
			$select = $this->db->where('deleted', 0);
			$data['ongkos'] = $this->m->Get_All('ongkos', $select);

			$select = $this->db->select('sum(harga*berat)as hargadiamond, sum(jumlah)as totaljumlah, sum(berat)as totalberat, sum(harga*berat) as total');
			$select = $this->db->where('id_detail', 0);
			$select = $this->db->where('id_user', $this->session->userdata('id_user'));
			$select = $this->db->where('deleted', 0);
			$data['diamond'] = $this->m->Get_All('2ddesainsubdetail', $select);

			$select = $this->db->select('*, tbl_diagroup.diagroup, tbl_diameter.id_diagroup, tbl_diameter.diameter_to, tbl_diameter.diameter_from, tbl_diameter.carat');
			$select = $this->db->join('tbl_diameter', 'tbl_diameter.id_diameter = tbl_parcel.id_diameter');
			$select = $this->db->join('tbl_diagroup', 'tbl_diagroup.id_diagroup = tbl_diameter.id_diagroup');
			$select = $this->db->join('tbl_clarity', 'tbl_clarity.id_clarity = tbl_parcel.id_clarity');
			$select = $this->db->join('tbl_shape', 'tbl_shape.id_shape = tbl_parcel.id_shape');
			$select = $this->db->join('tbl_color', 'tbl_color.id_color = tbl_parcel.id_color');
			$select = $this->db->where('tbl_parcel.deleted', 0);
			$select = $this->db->order_by('diagroup asc, parcel asc, diameter_from asc, diameter_to asc');
			$data['parcel'] = $this->m->Get_All('parcel', $select);


			$select = $this->db->select('*');
			$select = $this->db->join('tbl_parcel', 'tbl_parcel.id_parcel = tbl_2ddesainsubdetail.id_parcel');
			$select = $this->db->join('tbl_diameter', 'tbl_parcel.id_diameter = tbl_parcel.id_diameter');
			$select = $this->db->join('tbl_clarity', 'tbl_parcel.id_clarity = tbl_clarity.id_clarity');
			$select = $this->db->join('tbl_shape', 'tbl_parcel.id_shape = tbl_shape.id_shape');
			$select = $this->db->join('tbl_color', 'tbl_parcel.id_color = tbl_color.id_color');

			$select = $this->db->where('tbl_2ddesainsubdetail.id_user', $this->session->userdata('id_user'));
			$select = $this->db->where('tbl_2ddesainsubdetail.id_detail', 0);
			$select = $this->db->where('tbl_2ddesainsubdetail.deleted', 0);
			$select = $this->db->where('tbl_parcel.id_diameter = tbl_diameter.id_diameter');
			$select = $this->db->where('tbl_parcel.id_clarity = tbl_clarity.id_clarity');
			$select = $this->db->where('tbl_parcel.id_shape = tbl_shape.id_shape');
			$select = $this->db->where('tbl_parcel.id_color = tbl_color.id_color');
			$data['duaddesainsubdetail'] = $this->m->Get_All('2ddesainsubdetail', $select);

			$select       = $this->db->select('*, tbl_tipe.tipeproduk, tbl_warnaproduk.warnaproduk, tbl_material.material, tbl_finishing.finishing, tbl_konsepkepala.konsepkepala, tbl_ongkos.ongkos');
			$select       = $this->db->join('tbl_tipe', 'tipe.id_tipe = tbl_2ddesaindetail.id_tipe');
			$select       = $this->db->join('tbl_warnaproduk', 'warnaproduk.id_warnaproduk = tbl_2ddesaindetail.id_warnaproduk');
			$select       = $this->db->join('tbl_material', 'material.id_material = tbl_2ddesaindetail.id_material');
			$select       = $this->db->join('tbl_finishing', 'finishing.id_finishing = tbl_2ddesaindetail.id_finishing');
			$select       = $this->db->join('tbl_konsepkepala', 'konsepkepala.id_konsepkepala = tbl_2ddesaindetail.id_konsepkepala');
			$select       = $this->db->join('tbl_ongkos', 'ongkos.id_ongkos = tbl_2ddesaindetail.id_ongkos');
			$select       = $this->db->where('tbl_2ddesaindetail.id_header', 0);
			$select 	  = $this->db->where('tbl_2ddesaindetail.deleted', 0);
			$data['detaildesain'] = $this->m->Get_All('2ddesaindetail', $select);

			// $select = $this->db->Get_All('client');
			$select = $this->db->select('*');
			$data["subaccount"] = $this->m->Get_All('client', $select);

			$select = $this->db->select('*');
			$data["ongkos"] = $this->m->Get_All('ongkos', $select);


			$data['id_header'] 				   = $this->m->id_header();
			$data['id_detail'] 				   = $this->m->id_detail();
			$data['nomor2ddesain']             = $this->m->nomor2ddesain();

			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/2ddesain/create2ddesain', $data);
			$this->load->view('templates_pimpinan/script', $data);
			$this->load->view('templates_pimpinan/footer', $data);
		} else {
			if ($this->input->post('total') == "0,00") {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Total tidak boleh 0 <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('tambahdataduaddesain');
			} elseif ($this->input->post('totalnilaicashbankdetail') != $this->input->post('totalnilaicashbanklawan')) {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Total debet kredit tidak sama <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('tambahdataduaddesain');
			} else {
				$data = array(
					'id_cashbankheader'  =>	$this->input->post('id_cashbankheader'),
					'id_matauang'        =>	$this->input->post('idmatauang'),
					'nomor'              =>	$this->input->post('nomor'),
					'tanggal'            =>	$this->input->post('tanggaltransaksi'),
					'inout'              =>	$this->input->post('inout'),
					'typetransaksi'      =>	$this->input->post('typetransaksi'),
					'rate'               =>	$this->input->post('rate'),
					'subaccount'         =>	$this->input->post('subaccount'),
					'total'              =>	$this->input->post('total'),
					'memo'               =>	$this->input->post('memo'),
					'create_by'          =>	$this->session->userdata('nama'),
					'create_date'        =>	date("Y-m-d"),

				);

				$this->m->Save($data, 'cashbankheader');

				$table = 'cashbankdetail';
				$where = array(
					'id_cashbankheader'		=>	0,
					'nomor'					=>	2,
					'deleted'			    =>	0,
				);
				$data = array(
					'id_cashbankheader'		=>	$this->input->post('id_cashbankheader'),
					'nomor'       			=>	$this->input->post('nomor'),
				);
				$this->m->Update($where, $data, $table);

				$table = 'cashbanklawan';
				$where = array(
					'id_cashbankheader'		=>	0,
					'nomor'					=>	2,
					'deleted'			    =>	0,
				);
				$data = array(
					'id_cashbankheader'		=>	$this->input->post('id_cashbankheader'),
					'nomor'       			=>	$this->input->post('nomor'),
				);
				$this->m->Update($where, $data, $table);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Transaksi Cash Bank Berhasil Ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listcashbank');
			}
		}
	}

	function adddetaildesain()
	{
		$this->form_validation->set_rules(
			'model',
			'Model',
			'required|trim|is_unique[2ddesaindetail.model]',
			[
				'required' => 'Field model tidak boleh kosong',
				'is_unique'  => "Model yang dimasukkan sudah terdaftar pada database"
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');
			$nama = $this->session->userdata('nama');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Cash Bank';




			$select = $this->db->select('*');
			$select = $this->db->join('tbl_bagian', 'tbl_bagian.id_bagian = tbl_karyawan.id_bagian');
			$select = $this->db->order_by('nama');
			$select = $this->db->where('tbl_bagian.bagian', 'Designer 2D');
			$select = $this->db->where('tbl_karyawan.deleted', 0);
			$data['karyawan'] = $this->m->Get_All('karyawan', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('material');
			$select = $this->db->where('deleted', 0);
			$data['material'] = $this->m->Get_All('material', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('tipeproduk');
			$select = $this->db->where('deleted', 0);
			$data['tipeproduk'] = $this->m->Get_All('tipe', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('warnaproduk');
			$select = $this->db->where('deleted', 0);
			$data['warnaproduk'] = $this->m->Get_All('warnaproduk', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('finishing');
			$select = $this->db->where('deleted', 0);
			$data['finishing'] = $this->m->Get_All('finishing', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('konsepkepala');
			$select = $this->db->where('deleted', 0);
			$data['konsepkepala'] = $this->m->Get_All('konsepkepala', $select);

			$select = $this->db->select('*');
			$select = $this->db->order_by('ongkos');
			$select = $this->db->where('deleted', 0);
			$data['ongkos'] = $this->m->Get_All('ongkos', $select);


			$select       = $this->db->select('*, tbl_tipe.tipeproduk, tbl_warnaproduk.warnaproduk, tbl_material.material, tbl_finishing.finishing, tbl_konsepkepala.konsepkepala, tbl_ongkos.ongkos');
			$select       = $this->db->join('tbl_tipe', 'tipe.id_tipe = tbl_2ddesaindetail.id_tipe');
			$select       = $this->db->join('tbl_warnaproduk', 'warnaproduk.id_warnaproduk = tbl_2ddesaindetail.id_warnaproduk');
			$select       = $this->db->join('tbl_material', 'material.id_material = tbl_2ddesaindetail.id_material');
			$select       = $this->db->join('tbl_finishing', 'finishing.id_finishing = tbl_2ddesaindetail.id_finishing');
			$select       = $this->db->join('tbl_konsepkepala', 'konsepkepala.id_konsepkepala = tbl_2ddesaindetail.id_konsepkepala');
			$select       = $this->db->join('tbl_ongkos', 'ongkos.id_ongkos = tbl_2ddesaindetail.id_ongkos');
			$select       = $this->db->where('tbl_2ddesaindetail.id_header', 0);
			$select 	    = $this->db->where('tbl_2ddesaindetail.deleted', 0);
			$data['detaildesain'] = $this->m->Get_All('2ddesaindetail', $select);

			$data['id_header'] 				   = $this->m->id_header();
			$data['nomor2ddesain']             = $this->m->nomor2ddesain();

			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/2ddesain/create2ddesain', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$config['upload_path']          = 'assets/file/2ddesain/';
			$config['allowed_types']        = 'jpg|jpeg|png|mp4';
			$config['max_size']             = 100000; //set max size allowed in Kilobyte
			$config['max_width']            = 1000000; // set max width image allowed
			$config['max_height']           = 1000000; // set max height allowed 
			$config['encrypt_name']           = true; // set max height allowed 
			$this->load->library('upload', $config);

			if (!empty($_FILES['gambar1']['name'])) {

				$size = $_FILES['gambar1']['size'];
				$nama = $_FILES['gambar1']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);
				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar 1 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "jpg" and $format != "png" and $format != "jpeg") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar 1 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('gambar1');
					$data1 = $this->upload->data();
					$gambar1 = $data1['file_name'];
				}
			} else {
				$gambar1 = "Tidak Ada File";
			}

			if (!empty($_FILES['gambar2']['name'])) {

				$size = $_FILES['gambar2']['size'];
				$nama = $_FILES['gambar2']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);



				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar 2 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "jpg" and $format != "png" and $format != "jpeg") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar 2 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('gambar2');
					$data1 = $this->upload->data();
					$gambar2 = $data1['file_name'];
				}
			} else {
				$gambar2 = "Tidak Ada File";
			}

			if (!empty($_FILES['gambar3']['name'])) {

				$size = $_FILES['gambar3']['size'];
				$nama = $_FILES['gambar3']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);



				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar 3 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "jpg" and $format != "png" and  $format != "jpeg") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar 3 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('gambar3');
					$data1 = $this->upload->data();
					$gambar3 = $data1['file_name'];
				}
			} else {
				$gambar3 = "Tidak Ada File";
			}

			if (!empty($_FILES['gambar4']['name'])) {

				$size = $_FILES['gambar4']['size'];
				$nama = $_FILES['gambar4']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);



				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar 4 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "jpg" and $format != "png" and $format != "jpeg") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar 4 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('gambar4');
					$data1 = $this->upload->data();
					$gambar4 = $data1['file_name'];
				}
			} else {
				$gambar4 = "Tidak Ada File";
			}

			if (!empty($_FILES['gambar5']['name'])) {

				$size = $_FILES['gambar5']['size'];
				$nama = $_FILES['gambar5']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);



				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar 5 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "jpg" and $format != "png" and $format != "jpeg") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar 5 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('gambar5');
					$data1 = $this->upload->data();
					$gambar5 = $data1['file_name'];
				}
			} else {
				$gambar5 = "Tidak Ada File";
			}


			if (!empty($_FILES['video1']['name'])) {

				$size = $_FILES['video1']['size'];
				$nama = $_FILES['video1']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);



				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Video 1 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "mp4" and $format != "mkv" and $format != "mpg" and $format != "afi") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format video 1 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('video1');
					$data1 = $this->upload->data();
					$video1 = $data1['file_name'];
				}
			} else {
				$video1 = "Tidak Ada File";
			}

			if (!empty($_FILES['video2']['name'])) {

				$size = $_FILES['video2']['size'];
				$nama = $_FILES['video2']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);



				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Video 2 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "mp4" and $format != "mkv" and $format != "mpg" and $format != "afi") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format Video 2 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('video2');
					$data1 = $this->upload->data();
					$video2 = $data1['file_name'];
				}
			} else {
				$video2 = "Tidak Ada File";
			}

			if (!empty($_FILES['video3']['name'])) {

				$size = $_FILES['video3']['size'];
				$nama = $_FILES['video3']['name'];

				$format = pathinfo($nama, PATHINFO_EXTENSION);



				if ($size > 10000000) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Video 3 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} elseif ($format != "mp4" and $format != "mkv" and $format != "mpg" and $format != "afi") {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format Video 3 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('tambahdata2ddesain');
				} else {
					$this->upload->do_upload('video3');
					$data1 = $this->upload->data();
					$video3 = $data1['file_name'];
				}
			} else {
				$video3 = "Tidak Ada File";
			}


			$data = array(
				'id_header'          =>	"0",
				'id_detail'          =>	$this->input->post('iddetail'),
				'model'              =>	$this->input->post('model'),
				'submodel'           =>	$this->input->post('submodel'),
				'ukuran'             =>	$this->input->post('ukuran'),
				'hargadiamond'       =>	$this->input->post('diamond'),
				'totaljumlah'        =>	$this->input->post('totaljumlah'),
				'totalberat'         =>	$this->input->post('totalberat'),
				'hargakepala'        =>	0,
				'totalharga'         =>	$this->input->post('total'),
				'ongkos'             =>	$this->input->post('ongkos'),
				'beratmaterial'      =>	$this->input->post('beratmaterial'),
				'id_material'        =>	$this->input->post('idmaterial'),
				'id_tipe'            =>	$this->input->post('idtipeproduk'),
				'id_warnaproduk'     =>	$this->input->post('idwarnaproduk'),
				'id_finishing'       =>	$this->input->post('idfinishing'),
				'id_konsepkepala'    =>	$this->input->post('idkonsepkepala'),
				// 'id_ongkos'          =>	$this->input->post('idongkos'),
				'id_ongkos'          =>	1,
				'jsfinishing'        =>	$this->input->post('jsfinishing'),
				'jspolesrangka'      =>	$this->input->post('jspolesrangka'),
				'jspasangbatu'       =>	$this->input->post('jspasangbatu'),
				'gender'             =>	$this->input->post('jeniskelamin'),
				'jsrakit'            =>	$this->input->post('jspolesrakit'),
				'jspoleschrome'      =>	$this->input->post('jspoleschrome'),
				'gambar1'            =>	$gambar1,
				'gambar2'            =>	$gambar2,
				'gambar3'            =>	$gambar3,
				'gambar4'            =>	$gambar4,
				'gambar5'            =>	$gambar5,
				'video1'             =>	$video1,
				'video2'             =>	$video2,
				'video3'             =>	$video3,
			);

			$this->m->Save($data, '2ddesaindetail');

			$id_user = $this->session->userdata('id_user');
			$table = '2ddesainsubdetail';
			$where = array(
				'id_detail'		       =>   0,
				'id_user'		       =>   $id_user
			);

			$data = array(
				'id_detail'         =>	$this->input->post('iddetail'),
			);
			$this->m->Update($where, $data, $table);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data detail desain detail berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdata2ddesain');
		}
	}

	function editdetaildesain($id_detail)
	{

		$data = [
			'title' => 'PT.MMM | Edit Detail Desain'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->join('tbl_bagian', 'tbl_bagian.id_bagian = tbl_karyawan.id_bagian');
		$select = $this->db->order_by('nama');
		$select = $this->db->where('tbl_bagian.bagian', 'Designer 2D');
		$select = $this->db->where('tbl_karyawan.deleted', 0);
		$data['karyawan'] = $this->m->Get_All('karyawan', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('material');
		$select = $this->db->where('deleted', 0);
		$data['material'] = $this->m->Get_All('material', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('tipeproduk');
		$select = $this->db->where('deleted', 0);
		$data['tipeproduk'] = $this->m->Get_All('tipe', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('warnaproduk');
		$select = $this->db->where('deleted', 0);
		$data['warnaproduk'] = $this->m->Get_All('warnaproduk', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('finishing');
		$select = $this->db->where('deleted', 0);
		$data['finishing'] = $this->m->Get_All('finishing', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('konsepkepala');
		$select = $this->db->where('deleted', 0);
		$data['konsepkepala'] = $this->m->Get_All('konsepkepala', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('ongkos');
		$select = $this->db->where('deleted', 0);
		$data['ongkos'] = $this->m->Get_All('ongkos', $select);

		$select = $this->db->select('*');
		$select       = $this->db->join('tbl_2ddesaindetail', '2ddesaindetail.id_detail = tbl_2ddesainsubdetail.id_detail');
		$select       = $this->db->join('tbl_parcel', 'tbl_parcel.id_parcel = tbl_2ddesainsubdetail.id_parcel');
		$select = $this->db->where('tbl_2ddesainsubdetail.id_detail', $id_detail);
		$select = $this->db->where('tbl_2ddesainsubdetail.deleted', 0);
		$data['duaddesainsubdetail'] = $this->m->Get_All('2ddesainsubdetail', $select);

		$select = $this->db->select('*');
		$select = $this->db->order_by('parcel');
		$select = $this->db->where('deleted', 0);
		$data['parcel'] = $this->m->Get_All('parcel', $select);

		$select       = $this->db->select('*, tbl_2ddesaindetail.ongkos as hargaongkos, tbl_tipe.id_tipe, tbl_tipe.tipeproduk, tbl_warnaproduk.id_warnaproduk, tbl_warnaproduk.warnaproduk, tbl_material.material, tbl_material.id_material, tbl_finishing.finishing, tbl_finishing.id_finishing, tbl_konsepkepala.id_konsepkepala, tbl_konsepkepala.konsepkepala, tbl_ongkos.id_ongkos, tbl_ongkos.ongkos as ongkos');
		$select       = $this->db->join('tbl_tipe', 'tipe.id_tipe = tbl_2ddesaindetail.id_tipe');
		$select       = $this->db->join('tbl_warnaproduk', 'warnaproduk.id_warnaproduk = tbl_2ddesaindetail.id_warnaproduk');
		$select       = $this->db->join('tbl_material', 'material.id_material = tbl_2ddesaindetail.id_material');
		$select       = $this->db->join('tbl_finishing', 'finishing.id_finishing = tbl_2ddesaindetail.id_finishing');
		$select       = $this->db->join('tbl_konsepkepala', 'konsepkepala.id_konsepkepala = tbl_2ddesaindetail.id_konsepkepala');
		$select       = $this->db->join('tbl_ongkos', 'ongkos.id_ongkos = tbl_2ddesaindetail.id_ongkos');
		$select       = $this->db->where('tbl_2ddesaindetail.id_detail', $id_detail);
		$data['detaildesain'] = $this->m->Get_All('2ddesaindetail', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/2ddesain/editdetaildesain', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}

	function updatedetaildesain()
	{
		$id_detail = $this->input->post('iddetail');



		$this->form_validation->set_rules(
			'model',
			'model',
			'is_unique[2ddesaindetail.model]|trim',
			[
				'is_unique'  => 'Model yang dimasukkan sudah terdaftar pada database',
			]
		);

		if ($this->form_validation->run() == false) {
			$this->editdetaildesain($id_detail);
		} else {


			if ($this->input->post('model') == "") {
				$table = '2ddesaindetail';
				$where = array(
					'id_detail'		    =>	$id_detail
				);
				$data = array(

					'model'              =>	$this->input->post('model_'),
					'submodel'           =>	$this->input->post('submodel'),
					'ukuran'             =>	$this->input->post('ukuran'),
					'diamond'            =>	$this->input->post('diamond'),
					'harga'              =>	$this->input->post('harga'),
					'beratmaterial'      =>	$this->input->post('beratmaterial'),
					'id_material'        =>	$this->input->post('idmaterial'),
					'id_tipe'            =>	$this->input->post('idtipeproduk'),
					'id_warnaproduk'     =>	$this->input->post('idwarnaproduk'),
					'id_finishing'       =>	$this->input->post('idfinishing'),
					'id_konsepkepala'    =>	$this->input->post('idkonsepkepala'),
					'id_ongkos'          =>	$this->input->post('idongkos'),
					'deleted'            =>	0,
				);
				$gambar1 = $_FILES['gambar1']['name'];
				if ($gambar1) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar1')) {

						$id_detail = $this->input->post('iddetail');
						$size = $_FILES['gambar1']['size'];
						$nama = $_FILES['gambar1']['name'];


						$format = pathinfo($nama, PATHINFO_EXTENSION);

						if ($size > 10000000) {
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar 1 terlalu besar <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
							$this->editdetaildesain($id_detail);
						} elseif ($format != "jpg" and $format != "png" and $format != "jpeg") {
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Format gambar1 tidak sesuai <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
							$this->editdetaildesain($id_detail);
						} else {
							$oldgambar1 = $this->input->post('gambar1_');

							$path1 = './assets/file/2ddesain/' . $oldgambar1;
							unlink($path1);

							$new_image = $this->upload->data('file_name');
							$this->db->set('gambar1', $new_image);
						}
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar1']['name'])) {
					$this->upload->do_upload('gambar1');
					$data1 = $this->upload->data();
					$gambar1 = $data1['file_name'];
				} else {
					$gambar1 = "Tidak Ada File";
				}

				$gambar2 = $_FILES['gambar2']['name'];
				if ($gambar2) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar2')) {
						$oldgambar2 = $this->input->post('gambar2_');

						$path2 = './assets/file/2ddesain/' . $oldgambar2;
						unlink($path2);

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar2', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar2']['name'])) {
					$this->upload->do_upload('gambar2');
					$data1 = $this->upload->data();
					$gambar2 = $data1['file_name'];
				} else {
					$gambar2 = "Tidak Ada File";
				}

				$gambar3 = $_FILES['gambar3']['name'];
				if ($gambar3) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar3')) {
						$oldgambar3 = $this->input->post('gambar3_');

						$path3 = './assets/file/2ddesain/' . $oldgambar3;
						unlink($path3);

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar3', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar3']['name'])) {
					$this->upload->do_upload('gambar3');
					$data1 = $this->upload->data();
					$gambar3 = $data1['file_name'];
				} else {
					$gambar3 = "Tidak Ada File";
				}

				$gambar4 = $_FILES['gambar4']['name'];
				if ($gambar4) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar4')) {
						$oldgambar4 = $this->input->post('gambar4_');

						$path4 = './assets/file/2ddesain/' . $oldgambar4;
						unlink($path4);

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar4', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar4']['name'])) {
					$this->upload->do_upload('gambar4');
					$data1 = $this->upload->data();
					$gambar4 = $data1['file_name'];
				} else {
					$gambar4 = "Tidak Ada File";
				}

				$gambar5 = $_FILES['gambar5']['name'];
				if ($gambar5) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar5')) {
						$oldgambar5 = $this->input->post('gambar5_');

						$path5 = './assets/file/2ddesain/' . $oldgambar5;
						unlink($path5);

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar5', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar5']['name'])) {
					$this->upload->do_upload('gambar5');
					$data1 = $this->upload->data();
					$gambar5 = $data1['file_name'];
				} else {
					$gambar5 = "Tidak Ada File";
				}

				$video1 = $_FILES['video1']['name'];
				if ($video1) {
					$config['allowed_types'] = 'mp4|mkv|mpg|avi';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('video1')) {
						$oldvideo1 = $this->input->post('video1_');

						$pathvideo1 = './assets/file/2ddesain/' . $oldvideo1;
						unlink($pathvideo1);

						$new_image = $this->upload->data('file_name');
						$this->db->set('video1', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['video1']['name'])) {
					$this->upload->do_upload('video1');
					$data1 = $this->upload->data();
					$video1 = $data1['file_name'];
				} else {
					$video1 = "Tidak Ada File";
				}

				$video2 = $_FILES['video2']['name'];
				if ($video2) {
					$config['allowed_types'] = 'mp4|mkv|mpg|avi';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('video2')) {
						$oldvideo2 = $this->input->post('video2_');

						$pathvideo2 = './assets/file/2ddesain/' . $oldvideo2;
						unlink($pathvideo2);

						$new_image = $this->upload->data('file_name');
						$this->db->set('video2', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['video2']['name'])) {
					$this->upload->do_upload('video2');
					$data1 = $this->upload->data();
					$video2 = $data1['file_name'];
				} else {
					$video2 = "Tidak Ada File";
				}


				$video3 = $_FILES['video3']['name'];
				if ($video3) {
					$config['allowed_types'] = 'mp4|mkv|mpg|avi';
					$config['max_size'] = '100000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('video3')) {
						$oldvideo2 = $this->input->post('video3_');

						$pathvideo2 = './assets/file/2ddesain/' . $oldvideo2;
						unlink($pathvideo2);

						$new_image = $this->upload->data('file_name');
						$this->db->set('video2', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['video3']['name'])) {
					$this->upload->do_upload('video3');
					$data1 = $this->upload->data();
					$video3 = $data1['file_name'];
				} else {
					$video3 = "Tidak Ada File";
				}

				$this->m->Update($where, $data, $table);


				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail desain berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('tambahdata2ddesain');
			} elseif ($this->input->post('model') != "") {
				$table = '2ddesaindetail';
				$where = array(
					'id_detail'		    =>	$this->input->post('iddetail')
				);
				$data = array(

					'model'              =>	$this->input->post('model'),
					'submodel'           =>	$this->input->post('submodel'),
					'ukuran'             =>	$this->input->post('ukuran'),
					'diamond'            =>	$this->input->post('diamond'),
					'harga'              =>	$this->input->post('harga'),
					'beratmaterial'      =>	$this->input->post('beratmaterial'),
					'id_material'        =>	$this->input->post('idmaterial'),
					'id_tipe'            =>	$this->input->post('idtipeproduk'),
					'id_warnaproduk'     =>	$this->input->post('idwarnaproduk'),
					'id_finishing'       =>	$this->input->post('idfinishing'),
					'id_konsepkepala'    =>	$this->input->post('idkonsepkepala'),
					'id_ongkos'          =>	$this->input->post('idongkos'),
					'deleted'            =>	0,
				);

				$gambar1 = $_FILES['gambar1']['name'];
				if ($gambar1) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar1')) {
						$old_image = $data['2ddesaindetail']['gambar1'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar1', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar1']['name'])) {
					$this->upload->do_upload('gambar1');
					$data1 = $this->upload->data();
					$gambar1 = $data1['file_name'];
				} else {
					$gambar1 = "Tidak Ada File";
				}

				$gambar2 = $_FILES['gambar2']['name'];
				if ($gambar2) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar2')) {
						$old_image = $data['2ddesaindetail']['gambar2'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar2', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar2']['name'])) {
					$this->upload->do_upload('gambar2');
					$data1 = $this->upload->data();
					$gambar2 = $data1['file_name'];
				} else {
					$gambar2 = "Tidak Ada File";
				}

				$gambar3 = $_FILES['gambar3']['name'];
				if ($gambar3) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar3')) {
						$old_image = $data['2ddesaindetail']['gambar3'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar3', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar3']['name'])) {
					$this->upload->do_upload('gambar3');
					$data1 = $this->upload->data();
					$gambar3 = $data1['file_name'];
				} else {
					$gambar3 = "Tidak Ada File";
				}

				$gambar4 = $_FILES['gambar4']['name'];
				if ($gambar4) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar4')) {
						$old_image = $data['2ddesaindetail']['gambar4'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar4', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar4']['name'])) {
					$this->upload->do_upload('gambar4');
					$data1 = $this->upload->data();
					$gambar4 = $data1['file_name'];
				} else {
					$gambar4 = "Tidak Ada File";
				}

				$gambar5 = $_FILES['gambar5']['name'];
				if ($gambar5) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar5')) {
						$old_image = $data['2ddesaindetail']['gambar5'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar5', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['gambar5']['name'])) {
					$this->upload->do_upload('gambar5');
					$data1 = $this->upload->data();
					$gambar5 = $data1['file_name'];
				} else {
					$gambar5 = "Tidak Ada File";
				}

				$video1 = $_FILES['video1']['name'];
				if ($video1) {
					$config['allowed_types'] = 'mp4|mkv|mpg|avi';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('video1')) {
						$old_image = $data['2ddesaindetail']['video1'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('video1', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['video1']['name'])) {
					$this->upload->do_upload('video1');
					$data1 = $this->upload->data();
					$video1 = $data1['file_name'];
				} else {
					$video1 = "Tidak Ada File";
				}

				$video2 = $_FILES['video1']['name'];
				if ($video2) {
					$config['allowed_types'] = 'mp4|mkv|mpg|avi';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('video2')) {
						$old_image = $data['2ddesaindetail']['video2'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('video2', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['video2']['name'])) {
					$this->upload->do_upload('video2');
					$data1 = $this->upload->data();
					$video2 = $data1['file_name'];
				} else {
					$video2 = "Tidak Ada File";
				}


				$video3 = $_FILES['video1']['name'];
				if ($video3) {
					$config['allowed_types'] = 'mp4|mkv|mpg|avi';
					$config['max_size'] = '1000000';
					$config['upload_path'] = './assets/file/2ddesain';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('video3')) {
						$old_image = $data['2ddesaindetail']['video3'];

						if ($old_image != 'default.jpg') {
							unlink(FCPATH . 'assets/file/2ddesain' . $old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('video2', $new_image);
					} else {
						echo $this->upload->display_errors();
					}
				} elseif (!empty($_FILES['video3']['name'])) {
					$this->upload->do_upload('video3');
					$data1 = $this->upload->data();
					$video3 = $data1['file_name'];
				} else {
					$video3 = "Tidak Ada File";
				}
				$this->m->Update($where, $data, $table);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail desain berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('tambahdata2ddesain');
			}
		}
	}
	function deletedetaildesain()
	{
		$oldgambar1 = $this->input->post('gambar1');
		$oldgambar2 = $this->input->post('gambar2');
		$oldgambar3 = $this->input->post('gambar3');
		$oldgambar4 = $this->input->post('gambar4');
		$oldgambar5 = $this->input->post('gambar5');
		$oldvideo1 = $this->input->post('video1');
		$oldvideo2 = $this->input->post('video2');
		$oldvideo3 = $this->input->post('video3');




		$table = '2ddesaindetail';
		$where = array(
			'id_detail'		    =>	$this->input->post('id_detail')
		);

		$data = array(
			'deleted'           =>	1
		);
		$path1 = './assets/file/2ddesain/' . $oldgambar1;
		unlink($path1);
		$path2 = './assets/file/2ddesain/' . $oldgambar2;
		unlink($path2);
		$path3 = './assets/file/2ddesain/' . $oldgambar3;
		unlink($path3);
		$path4 = './assets/file/2ddesain/' . $oldgambar4;
		unlink($path4);
		$path5 = './assets/file/2ddesain/' . $oldgambar5;
		unlink($path5);
		$path6 = './assets/file/2ddesain/' . $oldvideo1;
		unlink($path6);
		$path7 = './assets/file/2ddesain/' . $oldvideo2;
		unlink($path7);
		$path8 = './assets/file/2ddesain/' . $oldvideo3;
		unlink($path8);
		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail detail desain berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdata2ddesain');
	}

	function addsubdetail()
	{
		$idparcel = $this->input->post('id_parcel');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			'id_detail'  				 =>	0,
			'id_parcel'          =>	$this->input->post('id_parcel'),
			'jumlah'             =>	$this->input->post('jumlah'),
			'berat'              =>	$this->input->post('berat'),
			'harga'              =>	$this->input->post('harga'),
			'id_user'            =>	$this->session->userdata('id_user'),
			'deleted'            =>	0,
		);

		$this->m->Save($data, '2ddesainsubdetail');
		$response = array(
			'sukses' => 'data berhasil ditambahkan!',
			'msg' => $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data sub detail berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>'),
		);

		echo json_encode($response);


		// redirect('tambahdata2ddesain');
	}
	function addsubdetailkepala()
	{
	}
	function updatesubdetail()
	{
		$id_detail = $this->input->post('iddetail');
		$table = '2ddesainsubdetail';
		$where = array(
			'id_subdetail'		    =>	$this->input->post('idsubdetail')
		);

		$data = array(
			'id_parcel'           =>	$this->input->post('idparcel'),
			'jumlah'           =>	$this->input->post('jumlah'),
			'berat'           =>	$this->input->post('berat'),
		);
		$this->m->Update($where, $data, $table);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data detail diamond berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		$this->editdetaildesain($id_detail);
	}
	function deletesubdetail($id)
	{

		$id_detail = $this->input->post('iddetail');
		$table = '2ddesainsubdetail';
		$where = array(
			// 'id_subdetail'		    =>	$this->input->post('idsubdetail')
			'id_subdetail'		    =>	$id
		);

		$data = array(
			'deleted'           =>	1
		);

		$this->m->Update($where, $data, $table);



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail detail desain berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		$this->editdetaildesain($id_detail);
		return redirect('/tambahdata2ddesain');
	}
	function listbarang()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Barang';
		$select = $this->db->select('*');
		$data['read'] = $this->m->Get_All('barang', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/barang/listbarang', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function Createbarang()
	{

		$this->form_validation->set_rules(
			'kodebarang',
			'kodebarang',
			'required|trim',
			[
				'required' => 'Field nama barang tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'namabarang',
			'Namabarang',
			'required|trim',
			[
				'required' => 'Field nama barang tidak boleh kosong'
			]
		);



		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Barang';

			$data['kode_barang'] = $this->m->kodebarang();
			$data['kode_jenis'] = $this->m->kodejenis();

			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/barang/createbarang', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {
			if ($this->input->post('jenisbarang') == "Diamond") {
				$data = array(
					'kode_barang'       =>	$this->input->post('kodebarang'),
					'nama_barang'       =>	$this->input->post('namabarang'),
					'jenis_barang'      =>	$this->input->post('jenisbarang'),
				);

				$this->m->Save($data, 'barang');

				$data = array(
					'kode_barang'      =>	$this->input->post('kodebarang'),
					'kode_jenis'       =>	$this->input->post('kodediamond'),
					'samplesatu'       =>	$this->input->post('samplesatu'),
					'sampledua'        =>	$this->input->post('sampledua'),
					'sampletiga'       =>	"-",
					'sampleempat'      =>	"-",
					'samplelima'       =>	"-",
					'sampleenam'       =>	"-",
				);

				$this->m->Save($data, 'detailbarang');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listbarang');
			}
			if ($this->input->post('jenisbarang') == "material") {
				$data = array(
					'kode_barang'       =>	$this->input->post('kodebarang'),
					'nama_barang'       =>	$this->input->post('namabarang'),
					'jenis_barang'      =>	$this->input->post('jenisbarang'),
				);

				$this->m->Save($data, 'barang');

				$data = array(
					'kode_barang'       =>	$this->input->post('kodebarang'),
					'kode_jenis'        =>	$this->input->post('kodematerial'),
					'sampletiga'        =>	$this->input->post('sampletiga'),
					'sampleempat'       =>	$this->input->post('sampleempat'),
					'samplelima'        =>	"-",
					'sampleenam'        =>	"-",
					'samplesatu'        =>	"-",
					'sampledua'         =>	"-",
				);

				$this->m->Save($data, 'detailbarang');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listbarang');
			}
			if ($this->input->post('jenisbarang') == "Bahan Baku") {
				$data = array(
					'kode_barang'       =>	$this->input->post('kodebarang'),
					'nama_barang'       =>	$this->input->post('namabarang'),
					'jenis_barang'      =>	$this->input->post('jenisbarang'),
				);

				$this->m->Save($data, 'barang');

				$data = array(
					'kode_barang'       =>	$this->input->post('kodebarang'),
					'kode_jenis'        =>	$this->input->post('kodebahanbaku'),
					'samplelima'       =>	$this->input->post('samplelima'),
					'sampleenam'        =>	$this->input->post('sampleenam'),
					'samplesatu'        =>	"-",
					'sampledua'         =>	"-",
					'sampletiga'      =>	"-",
					'sampleempat'      =>	"-",

				);

				$this->m->Save($data, 'detailbarang');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('listbarang');
			}
		}
	}
	function editbarang($kode_barang)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Barang'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->join('tbl_detailbarang', 'detailbarang.kode_barang = barang.kode_barang');
		$select = $this->db->where('tbl_barang.kode_barang', $kode_barang);
		$data['barang'] = $this->m->Get_All('barang', $select);


		$data['kode_jenis'] = $this->m->kodejenis();

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/barang/editbarang', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function Updatebarang()
	{


		if ($this->input->post('jenisbarang') == "Diamond") {
			$table = 'barang';
			$where = array(
				'kode_barang'		=>	$this->input->post('kodebarang')
			);

			$data = array(
				'kode_barang'       =>	$this->input->post('kodebarang'),
				'nama_barang'       =>	$this->input->post('namabarang'),
				'jenis_barang'      =>	$this->input->post('jenisbarang'),
			);
			$this->m->Update($where, $data, $table);

			$table = 'detailbarang';
			$where = array(
				'kode_barang'		=>	$this->input->post('kodebarang')
			);

			$data = array(
				'kode_jenis'       =>	$this->input->post('kodediamond'),
				'samplesatu'       =>	$this->input->post('samplesatu'),
				'sampledua'        =>	$this->input->post('sampledua'),
				'sampletiga'       =>	"-",
				'sampleempat'      =>	"-",
				'samplelima'       =>	"-",
				'sampleenam'       =>	"-",
			);
			$this->m->Update($where, $data, $table);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data admin berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listbarang');
		}
		if ($this->input->post('jenisbarang') == "material") {
			$table = 'barang';
			$where = array(
				'kode_barang'		=>	$this->input->post('kodebarang')
			);

			$data = array(
				'kode_barang'       =>	$this->input->post('kodebarang'),
				'nama_barang'       =>	$this->input->post('namabarang'),
				'jenis_barang'      =>	$this->input->post('jenisbarang'),
			);
			$this->m->Update($where, $data, $table);

			$table = 'detailbarang';
			$where = array(
				'kode_barang'		=>	$this->input->post('kodebarang')
			);

			$data = array(
				'kode_barang'       =>	$this->input->post('kodebarang'),
				'kode_jenis'        =>	$this->input->post('kodematerial'),
				'sampletiga'        =>	$this->input->post('sampletiga'),
				'sampleempat'       =>	$this->input->post('sampleempat'),
				'samplelima'        =>	"-",
				'sampleenam'        =>	"-",
				'samplesatu'        =>	"-",
				'sampledua'         =>	"-",
			);
			$this->m->Update($where, $data, $table);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data admin berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listbarang');
		}
		if ($this->input->post('jenisbarang') == "Bahan Baku") {
			$table = 'barang';
			$where = array(
				'kode_barang'		=>	$this->input->post('kodebarang')
			);

			$data = array(
				'kode_barang'       =>	$this->input->post('kodebarang'),
				'nama_barang'       =>	$this->input->post('namabarang'),
				'jenis_barang'      =>	$this->input->post('jenisbarang'),
			);
			$this->m->Update($where, $data, $table);

			$table = 'detailbarang';
			$where = array(
				'kode_barang'		=>	$this->input->post('kodebarang')
			);
			$data = array(
				'kode_barang'       =>	$this->input->post('kodebarang'),
				'kode_jenis'        =>	$this->input->post('kodebahanbaku'),
				'samplelima'       =>	$this->input->post('samplelima'),
				'sampleenam'        =>	$this->input->post('sampleenam'),
				'samplesatu'        =>	"-",
				'sampledua'         =>	"-",
				'sampletiga'      =>	"-",
				'sampleempat'      =>	"-",

			);
			$this->m->Update($where, $data, $table);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data barang berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listbarang');
		}
	}

	function detailbarang($kode_barang)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Barang'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->join('tbl_detailbarang', 'detailbarang.kode_barang = barang.kode_barang');
		$select = $this->db->where('tbl_barang.kode_barang', $kode_barang);
		$data['barang'] = $this->m->Get_All('barang', $select);


		$data['kode_jenis'] = $this->m->kodejenis();

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/barang/detailbarang', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function deletebarang()
	{
		$table = 'barang';
		$where = array(
			'kode_barang'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$table = 'detailbarang';
		$where = array(
			'kode_barang'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data barang berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listbarang');
	}

	function listadmin()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Admin';
		$select = $this->db->select('*');
		$select = $this->db->where('role_id', '2');
		$data['read'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/admin/listadmin', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function Createadmin()
	{


		$this->form_validation->set_rules(
			'namaadmin',
			'Namaadmin',
			'required|trim',
			[
				'required' => 'Field nama admin tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'username',
			'username',
			'required|trim|valid_username|is_unique[user.username]',

			[
				'required'    => 'Field username tidak boleh kosong',
				'valid_username' => 'Format username harus sesuai',
				'is_unique'   => 'username sudah terdaftar'
			]
		);


		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Admin';



			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/master/admin/createadmin', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer', $data);
		} else {

			$data = array(
				'nama'				=>	htmlspecialchars($this->input->post('namaadmin', true)),
				'username'				=>	htmlspecialchars($this->input->post('username', true)),
				'image'				=>	'default.png',
				'password'			=>	password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'			=>	'2',
				'is_active'			=>	'1',
				'tanggal_daftar'	=>	date('y-m-d'),


			);

			$this->m->Save($data, 'user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Admin berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listadmin');
		}
	}
	function editadmin($id_user)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Admin'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->where('id_user', $id_user);
		$data['admin'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/admin/editadmin', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function Updateadmin()
	{

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('iduser')
		);
		$data = array(
			'nama'				=>	htmlspecialchars($this->input->post('namaadmin', true)),
			'username'				=>	htmlspecialchars($this->input->post('username', true)),
			'image'				=>	'default.png',
			'is_active'			=>	$this->input->post('status'),
		);
		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data admin berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listadmin');
	}
	function deleteadmin()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data admin berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listadmin');
	}
	function listayam()
	{

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Ayam';
		$select = $this->db->select('*');
		$data['read'] = $this->m->Get_All('ayam', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/ayam/listayam', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function laporandataayam()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'title' => 'Laporan Data Ayam',
		];


		$select = $this->db->select('*');
		$data['read'] = $this->m->Get_All('ayam', $select);


		$this->load->view('pages/pimpinan/master/ayam/laporandataayam', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporandataayam", array('Attachment' => 0));
	}
	function listagen()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Agen';
		$select = $this->db->select('*');
		$select = $this->db->where('role_id', '4');
		$data['read'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/agen/listagen', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function detailagen($id_user)
	{

		$data = [
			'title' => 'PT.MMM | Detail Data Agen'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->where('id_user', $id_user);
		$data['agen'] = $this->m->Get_All('user', $select);

		$select            = $this->db->select('*, user.nama, penjualan_detail.jumlah_ayam');
		$select            = $this->db->join('user', 'user.id_user = penjualan.id_user');
		$select            = $this->db->join('penjualan_detail', 'penjualan_detail.id_penjualan = penjualan.id_penjualan');
		$select            = $this->db->where('penjualan.id_user', $id_user);
		$data['transaksi'] = $this->m->Get_All('penjualan', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/agen/detailagen', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function laporanhistoryagen($id_user)
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'     => 'CV Ayam Adi Boiler',
			'title'    => 'Laporan History Transaksi Agen',
		];


		$select = $this->db->select('*');
		$select = $this->db->where('id_user', $id_user);
		$data['agen'] = $this->m->Get_All('user', $select);

		$select            = $this->db->select('*, user.nama, penjualan_detail.jumlah_ayam');
		$select            = $this->db->join('user', 'user.id_user = penjualan.id_user');
		$select            = $this->db->join('penjualan_detail', 'penjualan_detail.id_penjualan = penjualan.id_penjualan');
		$select            = $this->db->where('penjualan.id_user', $id_user);
		$data['transaksi'] = $this->m->Get_All('penjualan', $select);


		$this->load->view('pages/pimpinan/master/agen/laporanhistoryagen', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanhistoryagen", array('Attachment' => 0));
	}
	function listsupplier()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Supplier';
		$select = $this->db->select('*');
		$select = $this->db->where('role_id', '3');
		$data['read'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/supplier/listsupplier', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function detailsupplier($id_user)
	{

		$data = [
			'title' => 'PT.MMM | Detail Data Supplier'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$select = $this->db->where('id_user', $id_user);
		$data['supplier'] = $this->m->Get_All('user', $select);

		$select       = $this->db->select('*, user.nama as namasupplier');
		$select       = $this->db->join('user', 'user.id_user = pembelian.id_user');
		$select       = $this->db->join('pembelian_detail', 'pembelian_detail.id_pembelian = pembelian.id_pembelian');
		$select       = $this->db->where('pembelian.id_user', $id_user);
		$data['transaksi'] = $this->m->Get_All('pembelian', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/master/supplier/detailsupplier', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function laporanhistorysupplier($id_user)
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'     => 'CV Ayam Adi Boiler',
			'title'    => 'Laporan History Transaksi Supplier',
		];


		$select = $this->db->select('*');
		$select = $this->db->where('id_user', $id_user);
		$data['supplier'] = $this->m->Get_All('user', $select);

		$select       = $this->db->select('*, user.nama as namasupplier');
		$select       = $this->db->join('user', 'user.id_user = pembelian.id_user');
		$select       = $this->db->join('pembelian_detail', 'pembelian_detail.id_pembelian = pembelian.id_pembelian');
		$select       = $this->db->where('pembelian.id_user', $id_user);
		$data['transaksi'] = $this->m->Get_All('pembelian', $select);


		$this->load->view('pages/pimpinan/master/supplier/laporanhistorysupplier', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanhistorysupplier", array('Attachment' => 0));
	}
	function listpenjualan()
	{
		$id_user = $this->session->userdata('id_user');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$select = $this->db->select('*, user.nama');
		$this->db->where('penjualan.status BETWEEN "' . 2 . '" and "' . 3 . '"');
		$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
		$data['read'] = $this->m->Get_All('penjualan', $select);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Penjualan';

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/transaksi/penjualan/listpenjualan', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function detailpenjualan($id_penjualan)
	{

		$data = [
			'title' => 'PT.MMM | Detail Penjualan'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data['user'] = $this->m->Get_Where($where, $table);


		$select       = $this->db->select('*, user.nama');
		$select       = $this->db->join('user', 'user.id_user = penjualan.id_user');
		$select       = $this->db->where('penjualan.id_penjualan', $id_penjualan);
		$data['head'] = $this->m->Get_All('penjualan', $select);

		$select       = $this->db->select('*, ayam.id_ayam, ayam.nama, ayam.harga_jual');
		$select       = $this->db->join('ayam', 'ayam.id_ayam = penjualan_detail.id_ayam');
		$select       = $this->db->where('penjualan_detail.id_penjualan', $id_penjualan);
		$data['detail'] = $this->m->Get_All('penjualan_detail', $select);

		$select = $this->db->select('*,penjualan.gambar, sum(tbl_penjualan_detail.sub_total) as total_bayar');
		$select = $this->db->join('penjualan', 'penjualan.id_penjualan = penjualan_detail.id_penjualan');
		$select = $this->db->where('penjualan_detail.id_penjualan', $id_penjualan);
		$data['read1'] = $this->m->Get_All('penjualan_detail', $select);

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/transaksi/penjualan/detailpenjualan', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	function downloadgambar($id)
	{
		$this->load->helper('download');
		$table1 = 'penjualan';
		$penjualan = $this->m->get_by_id($id, $table1);

		$gambar = 'assets/img/buktitransfer/' . $penjualan->gambar;
		force_download($gambar, NULL);
	}
	function Updatetransaksi()
	{


		$table = 'penjualan';
		$where = array(
			'id_penjualan'		=>	$this->input->post('idpenjualan')
		);
		$data = array(
			'status'                      =>	3,
			'dikonfirmasipengiriman_oleh' =>	$this->input->post('namapetugas'),
			'tanggalkonfirmasi_pengiriman' =>	date('y-m-d'),
		);

		$this->m->Update($where, $data, $table);

		$data = array(
			'pemasukan'				=> $this->input->post('totalbayar'),
			'tgl_transaksi'			=> date("y-m-d"),

		);

		$this->m->Save($data, 'keuangan');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status transaksi berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listpenjualan-pimpinan');
	}

	function laporanpenjualan()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'     => 'CV Ayam Adi Boiler',
			'title'    => 'Laporan Data Penjualan Keseluruhan',
			'subtitle' => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')),
		];
		$status =  $this->input->post('status');


		if ($status == "Semua") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "0") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->where('status', 0);
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "1") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->where('penjualan.status = 1');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "2") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->where('penjualan.status = 2');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "3") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->where('penjualan.status = 3');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		}
		$this->load->view('pages/pimpinan/laporan/laporanpenjualan', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporandatapenjualan", array('Attachment' => 0));
	}
	function laporanpenjualantigabulan()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'  => 'CV Ayam Adi Boiler',
			'title' => 'Laporan Data Penjualan Tiga Bulan Terakhir',
			'subtitle'  => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')),
		];

		$status =  $this->input->post('status');

		if ($status == "Semua") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "0") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan BETWEEN  date(NOW()) - interval 3 month and date(now())');
			$select = $this->db->where('penjualan.status = 0');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "1") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan BETWEEN  date(NOW()) - interval 3 month and date(now())');
			$select = $this->db->where('penjualan.status = 1');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "2") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan BETWEEN  date(NOW()) - interval 3 month and date(now())');
			$select = $this->db->where('penjualan.status = 2');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "3") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan BETWEEN  date(NOW()) - interval 3 month and date(now())');
			$select = $this->db->where('penjualan.status = 3');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		}




		$this->load->view('pages/pimpinan/laporan/laporanpenjualan', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporandatapenjualan", array('Attachment' => 0));
	}
	function laporanpenjualanhariini()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'  => 'CV Ayam Adi Boiler',
			'title' => 'Laporan Data Penjualan Hari Ini',
			'subtitle'  => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')),
		];

		$status =  $this->input->post('status');

		if ($status == "Semua") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan = date(NOW())');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "0") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan = date(NOW())');
			$select = $this->db->where('penjualan.status = 0');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "1") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan = date(NOW())');
			$select = $this->db->where('penjualan.status = 1');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "2") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan = date(NOW())');
			$select = $this->db->where('penjualan.status = 2');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		} elseif ($status == "3") {
			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
			$select = $this->db->where('tgl_penjualan = date(NOW())');
			$select = $this->db->where('penjualan.status = 3');
			$data['penjualan'] = $this->m->Get_All('penjualan', $select);
		}




		$this->load->view('pages/pimpinan/laporan/laporanpenjualan', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporandatapenjualan", array('Attachment' => 0));
	}
	function laporanpembelian()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'  => 'CV Ayam Adi Boiler',
			'title' => 'Laporan Data Pembelian',
			'subtitle'  => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')),
		];


		$select = $this->db->select('*, user.nama');
		$select = $this->db->join('user', 'user.id_user = pembelian.id_user ');
		$data['pembelian'] = $this->m->Get_All('pembelian', $select);


		$this->load->view('pages/pimpinan/laporan/laporanpembelian', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporandatapembelian", array('Attachment' => 0));
	}
	function laporanpembeliantigabulan()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'  => 'CV Ayam Adi Boiler',
			'title' => 'Laporan Data Pembelian Tiga Bulan Terakhir',
			//'cv'    => 'Distributor CV Adi Ayam Boiler',
			'subtitle'  => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')),
		];


		$select = $this->db->select('*, user.nama');
		$select = $this->db->join('user', 'user.id_user = pembelian.id_user ');
		$select = $this->db->where('tgl_pembelian BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
		$data['pembelian'] = $this->m->Get_All('pembelian', $select);


		$this->load->view('pages/pimpinan/laporan/laporanpembelian', $data);

		$paper_size = 'A4';
		$orintation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporandatapembelian", array('Attachment' => 0));
	}
	function laporanuntungrugi()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'  => 'CV Ayam Adi Boiler',
			'title' => 'Laporan Untung Rugi',
			'subtitle'  => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')),
		];


		$select = $this->db->select('*, sum(pemasukan) as jumlahpemasukan');
		$data['read'] = $this->m->Get_All('keuangan', $select);

		$select = $this->db->select('*, sum(pengeluaran) as jumlahpengeluaran');
		$data['read1'] = $this->m->Get_All('keuangan', $select);

		$select = $this->db->select('*, sum(pemasukan) as jumlahpemasukan, sum(pengeluaran) as jumlahpengeluaran');
		$data['read2'] = $this->m->Get_All('keuangan', $select);


		$select       = $this->db->select('*, ayam.id_ayam, ayam.nama, ayam.harga_jual');
		$select       = $this->db->join('ayam', 'ayam.id_ayam = penjualan_detail.id_ayam');
		$data['detail'] = $this->m->Get_All('penjualan_detail', $select);


		$select       = $this->db->select('*, ayam.id_ayam, ayam.harga_beli');
		$select       = $this->db->join('ayam', 'ayam.id_ayam = pembelian_detail.id_ayam');
		$data['detail1'] = $this->m->Get_All('pembelian_detail', $select);

		$this->load->view('pages/pimpinan/laporan/laporanuntungrugi', $data);

		$paper_size = 'A4';
		$orintation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanuntungrugi", array('Attachment' => 0));
	}

	function laporanuntungrugitigabulan()
	{
		$this->load->library('dompdf_gen');
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);
		$data = [
			'name'  => 'CV Ayam Adi Boiler',
			'title' => 'Laporan Untung Rugi',
			'subtitle'  => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')),
		];


		$select = $this->db->select('*, sum(pemasukan) as jumlahpemasukan');
		$select = $this->db->where('tgl_transaksi BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
		$data['read'] = $this->m->Get_All('keuangan', $select);

		$select = $this->db->select('*, sum(pengeluaran) as jumlahpengeluaran');
		$select = $this->db->where('tgl_transaksi BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
		$data['read1'] = $this->m->Get_All('keuangan', $select);

		$select = $this->db->select('*, sum(pemasukan) as jumlahpemasukan, sum(pengeluaran) as jumlahpengeluaran');
		$select = $this->db->where('tgl_transaksi BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
		$data['read2'] = $this->m->Get_All('keuangan', $select);

		$select       = $this->db->select('*, ayam.id_ayam, ayam.nama, ayam.harga_jual, penjualan.tgl_penjualan');
		$select       = $this->db->join('ayam', 'ayam.id_ayam = penjualan_detail.id_ayam');
		$select       = $this->db->join('penjualan', 'penjualan.id_penjualan = penjualan_detail.id_penjualan');
		$select = $this->db->where('tgl_penjualan BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
		$data['detail'] = $this->m->Get_All('penjualan_detail', $select);


		$select       = $this->db->select('*, ayam.id_ayam, ayam.harga_beli, pembelian.tgl_pembelian');
		$select       = $this->db->join('ayam', 'ayam.id_ayam = pembelian_detail.id_ayam');
		$select       = $this->db->join('pembelian', 'pembelian.id_pembelian = pembelian_detail.id_pembelian');
		$select = $this->db->where('tgl_pembelian BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
		$data['detail1'] = $this->m->Get_All('pembelian_detail', $select);

		$this->load->view('pages/pimpinan/laporan/laporanuntungrugi', $data);

		$paper_size = 'A4';
		$orintation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orintation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanuntungrugi", array('Attachment' => 0));
	}
	public function profile()
	{
		$role_id = $this->session->userdata('role_id');
		$table = 'user';
		$where = array(
			'id_user'       =>  $this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | Profile';

		$this->load->view('templates_pimpinan/header', $data);
		$this->load->view('templates_pimpinan/sidebar', $data);
		$this->load->view('templates_pimpinan/navigation', $data);
		$this->load->view('pages/pimpinan/profile/profile', $data);
		$this->load->view('templates_pimpinan/script');
		$this->load->view('templates_pimpinan/footer', $data);
	}
	public function edit()
	{
		$role_id = $this->session->userdata('role_id');
		$data['title'] = 'PT.MMM | Edit Profile';
		$table = 'user';
		$where = array(
			'id_user'        =>    $this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		if ($this->form_validation->run() == false) {

			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/profile/edit', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer');
		} else {

			$table = 'user';
			$where = array(
				'id_user'        =>    $this->input->post('id')
			);
			$data = array(
				'nama'          => $this->input->post('name'),
				'username'           => $this->input->post('username'),
			);

			//cek jika ada gambar yg akan diupload
			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/profile';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->m->Update($where, $data, $table);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('profile');
		}
	}

	public function changePassword()
	{
		$role_id = $this->session->userdata('role_id');
		$data['title'] = 'PT.MMM | Ubah Password';
		$table = 'user';
		$where = array(
			'id_user'       =>  $this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);



		$this->form_validation->set_rules(
			'current_password',
			'Current Password',
			'required|trim',
			[
				'required' => 'Password lama tidak boleh kosong'
			]
		);

		$this->form_validation->set_rules(
			'new_password1',
			'New Password',
			'required|min_length[5]|matches[new_password2]',
			[
				'required' => 'Password baru tidak boleh kosong',
				'matches'  => 'Password tidak sama',
				'min_length' => 'Password minimal 5 karakter',
			]
		);

		$this->form_validation->set_rules(
			'new_password2',
			'Confirm New Password',
			'required|min_length[5]|matches[new_password1]|trim',
			[
				'required' => 'Password baru tidak boleh kosong',
				'matches'  => 'Password Tidak Sama',
				'min_length' => 'Password minimal 5 karakter',
			]
		);
		if ($this->form_validation->run() == false) {


			$this->load->view('templates_pimpinan/header', $data);
			$this->load->view('templates_pimpinan/sidebar', $data);
			$this->load->view('templates_pimpinan/navigation', $data);
			$this->load->view('pages/pimpinan/profile/changepassword', $data);
			$this->load->view('templates_pimpinan/script');
			$this->load->view('templates_pimpinan/footer');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
				redirect('ubahpassword');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama!<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('ubahpassword');
				} else {
					//password ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$table = 'user';
					$where = array(
						'username' => $this->session->userdata('username')
					);
					$data = array(
						'password' =>    $password_hash
					);
					$this->m->Update($where, $data, $table);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
					redirect('ubahpassword');
				}
			}
		}
	}

	// ajax routing
	public function hitungDiamond()
	{
		$idparcel = $this->input->post('idparcel');
		$berat = $this->input->post('berat');
		$hargaongkos = $this->input->post('hargaongkos');

		$where = array(
			'id_parcel'		=>	$idparcel
		);
		$parcel = $this->m->Get_Where($where, 'tbl_parcel');
		$hargajual = $parcel->hargajual;
		$diamond = (int)$hargajual * (int)$berat;
		$total = $diamond + (int)$hargaongkos;
		// addsubdetail();
		$response = array(
			'status' => 'OK',
			'diamond' => 'Rp. ' . number_format($diamond, 0, "", "."),
			'total' => number_format($total, 2, ",", "."),
		);
		echo json_encode($response);
	}

	public function getSubDetail()
	{
		$id_subdetail = $this->input->post('id_subdetail');
		// echo $id_subdetail;
		$table = "tbl_2ddesainsubdetail";
		$select = $this->db->join('tbl_parcel', 'tbl_parcel.id_parcel = tbl_2ddesainsubdetail.id_parcel');
		$select = $this->db->join('tbl_diameter', 'tbl_diameter.id_diameter = tbl_parcel.id_diameter');
		$select = $this->db->where('tbl_2ddesainsubdetail.id_subdetail', $id_subdetail);
		$select = $this->db->where('tbl_2ddesainsubdetail.deleted', 0);
		// $where = array(
		// 	'id_subdetail' => $id_subdetail
		// );

		$data = $this->m->Get_All($table, $select);

		$json = [
			'data' => $data
		];
		echo json_encode($json);
	}

	public function updatedetaildiamond()
	{
		$id_subdetail = $this->input->post('updateIdSubdetail');
		// echo $id_subdetail;
		$table = 'tbl_2ddesainsubdetail';
		$where = array(
			'id_subdetail'		    =>	$id_subdetail
		);

		$data = array(
			'jumlah'           =>	$this->input->post('updateInputJumlah'),
			'berat'		         =>	$this->input->post('updateInputBerat'),
		);
		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Detail Diamond berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		return redirect('tambahdata2ddesain');
	}
}
