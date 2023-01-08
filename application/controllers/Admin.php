<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Models','m');
        cekuser();
    }
	public function index()
	{
		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | Admin';
		// echo "Selamat Datang" . $data->nama;

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('templates_admin/dashboard',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);
	}

	function listayam()
	{
		
		$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Ayam';
		$select = $this->db->select('*');
		$data['read'] = $this->m->Get_All('ayam', $select);

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/ayam/listayam',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);
	}
	function Createayam()
	{
		$this->form_validation->set_rules(
			'idayam',
			'IdAyam',
			'required|trim',
			[
				'required' => 'Field id ayam tidak boleh kosong'
			]
		);

		$this->form_validation->set_rules(
			'namaayam',
			'NamaAyam',
			'required|trim',
			[
				'required' => 'Field nama ayam tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'hargajual',
			'HargaJual',
			'required|trim',
			[
				'required' => 'Field hargajual tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'hargabeli',
			'HargaBeli',
			'required|trim',
			[
				'required' => 'Field harga beli tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'stok',
			'Stok',
			'required|trim',
			[
				'required' => 'Field stok tidak boleh kosong'
			]
		);
	

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Ayam';


			$data['id_ayam'] = $this->m->kodeayam();

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('pages/admin/master/ayam/createayam', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		} elseif($this->input->post('hargajual') < $this->input->post('hargabeli') ) {

			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Harga jual harus lebih besar dari harga beli<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdataayam');
		}
		else {

			$data = array(
				'id_ayam'         =>	$this->input->post('idayam'),
				'nama'            =>	$this->input->post('namaayam'),
				'harga_jual'      =>	$this->input->post('hargajual'),
				'harga_beli'      =>	$this->input->post('hargabeli'),
				'persediaan_awal' =>	$this->input->post('stok'),
				'ayam_keluar'     =>	0,
				'ayam_mati'     =>	0,
				'ayam_masuk'      =>	0,
				'ayam_hilang'     =>	0,
			);

			$this->m->Save($data, 'ayam');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listayam');
		}
	}
	function editayam($id_ayam)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Ayam'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_ayam', $id_ayam);
		$data['ayam'] = $this->m->Get_All('ayam', $select);


		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/ayam/editayam', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function Updateayam()
	{
		if($this->input->post('hargajual') < $this->input->post('hargabeli') ) {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal di ubah <br>Harga jual harus lebih besar dari harga beli<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listayam');
		}else{
			$table = 'ayam';
		$where = array(
			'id_ayam'		=>	$this->input->post('idayam')
		);
		$data = array(
				'nama'            =>	$this->input->post('namaayam'),
				'harga_jual'      =>	$this->input->post('hargajual'),
				'harga_beli'      =>	$this->input->post('hargabeli'),
				'persediaan_awal' =>	$this->input->post('stok'),
			);

		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listayam');
		}
		
	}
	function deleteayam()
	{
		$table = 'ayam';
		$where = array(
			'id_ayam'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listayam');
	}

	function listsupplier()
	{
		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Supplier';
		$select = $this->db->select('*');
		$select = $this->db->where('role_id', '3');
		$data['read'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/supplier/listsupplier',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);
	}
	function Createsupplier()
	{
		

		$this->form_validation->set_rules(
			'namasupplier',
			'NamaSupplier',
			'required|trim',
			[
				'required' => 'Field nama supplier tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'email',
			'email',
			'required|trim|valid_email|is_unique[user.email]',

			[
				'required'    => 'Field email tidak boleh kosong',
				'valid_email' => 'Format email harus sesuai',
				'is_unique'   => 'email sudah terdaftar'
			]
		);
		$this->form_validation->set_rules(
			'provinsi',
			'provinsi',
			'required|trim',
			[
				'required' => 'Provinsi Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'kota',
			'kota',
			'required|trim',
			[
				'required' => 'Kota Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'kecamatan',
			'kecamatan',
			'required|trim',
			[
				'required' => 'Kecamatan Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'alamat',
			'alamat',
			'required|trim',
			[
				'required' => 'Alamat Tidak Boleh Kosong'
			]
		);
		

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data supplier';



			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('pages/admin/master/supplier/createsupplier', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		}else {

			$data = array(
				'nama'           =>	htmlspecialchars($this->input->post('namasupplier', true)),
				'email'          =>	htmlspecialchars($this->input->post('email', true)),
				'image'          =>	'default.png',
				'password'       =>	password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'        =>	'3',
				'is_active'      =>	'1',
				'tanggal_daftar' =>	date('y-m-d'),
				'provinsi'       =>	$this->input->post('provinsi'),
				'kota'           =>	$this->input->post('kota'),
				'kecamatan'      =>	$this->input->post('kecamatan'),
				'alamat'         =>	$this->input->post('alamat'),


			);

			$this->m->Save($data, 'user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data supplier berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listsupplier');
		}
	}
	function editsupplier($id_user)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Supplier'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$select = $this->db->where('id_user', $id_user);
		$data['supplier'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/supplier/editsupplier', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function Updatesupplier()
	{
		
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('iduser')
		);
		$data = array(
				'nama'      =>	htmlspecialchars($this->input->post('namasupplier', true)),
				'email'     =>	htmlspecialchars($this->input->post('email', true)),
				'image'     =>	'default.png',
				'is_active' =>	$this->input->post('status'),
				'provinsi'  =>	$this->input->post('provinsi'),
				'kota'      =>	$this->input->post('kota'),
				'kecamatan' =>	$this->input->post('kecamatan'),
				'alamat'    =>	$this->input->post('alamat'),
			);
		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data supplier berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listsupplier');
	}
	function deletesupplier()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data supplier berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listsupplier');
	}
	function listagen()
	{
		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Agen';
		$select = $this->db->select('*');
		$select = $this->db->where('role_id', '4');
		$data['read'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/agen/listagen',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);
	}

	function Createagen()
	{
		

		$this->form_validation->set_rules(
			'namaagen',
			'Namaagen',
			'required|trim',
			[
				'required' => 'Field nama agen tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'email',
			'email',
			'required|trim|valid_email|is_unique[user.email]',

			[
				'required'    => 'Field email tidak boleh kosong',
				'valid_email' => 'Format email harus sesuai',
				'is_unique'   => 'email sudah terdaftar'
			]
		);
		$this->form_validation->set_rules(
			'provinsi',
			'provinsi',
			'required|trim',
			[
				'required' => 'Provinsi Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'kota',
			'kota',
			'required|trim',
			[
				'required' => 'Kota Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'kecamatan',
			'kecamatan',
			'required|trim',
			[
				'required' => 'Kecamatan Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'alamat',
			'alamat',
			'required|trim',
			[
				'required' => 'Alamat Tidak Boleh Kosong'
			]
		);
		

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Agen';



			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('pages/admin/master/agen/createagen', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		}elseif($this->input->post('kota') != "Sidoarjo" and $this->input->post('kota') != "sidoarjo" and $this->input->post('kota') != "Surabaya" and $this->input->post('kota') != "surabaya") {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf cabang kami belum ada di kota anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdataagen');
		}else {

			$data = array(
				'nama'           =>	htmlspecialchars($this->input->post('namaagen', true)),
				'email'          =>	htmlspecialchars($this->input->post('email', true)),
				'image'          =>	'default.png',
				'password'       =>	password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'        =>	'4',
				'is_active'      =>	'1',
				'tanggal_daftar' =>	date('y-m-d'),
				'provinsi'       =>	$this->input->post('provinsi'),
				'kota'           =>	$this->input->post('kota'),
				'kecamatan'      =>	$this->input->post('kecamatan'),
				'alamat'         =>	$this->input->post('alamat'),


			);

			$this->m->Save($data, 'user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data agen berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listagen');
		}
	}
	function editagen($id_user)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Agen'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$select = $this->db->where('id_user', $id_user);
		$data['agen'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/agen/editagen', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function Updateagen()
	{
		
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('iduser')
		);
		$data = array(
				'nama'      =>	htmlspecialchars($this->input->post('namaagen', true)),
				'email'     =>	htmlspecialchars($this->input->post('email', true)),
				'image'     =>	'default.png',
				'is_active' =>	$this->input->post('status'),
				'provinsi'  =>	$this->input->post('provinsi'),
				'kota'      =>	$this->input->post('kota'),
				'kecamatan' =>	$this->input->post('kecamatan'),
				'alamat'    =>	$this->input->post('alamat'),
			);
		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data agen berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listagen');
	}
	function deleteagen()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data agen berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listagen');
	}
	function listpimpinan()
	{
		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Pimpinan';
		$select = $this->db->select('*');
		$select = $this->db->where('role_id', '1');
		$data['read'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/pimpinan/listpimpinan',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);
	}
	function Createpimpinan()
	{
		

		$this->form_validation->set_rules(
			'namapimpinan',
			'namapimpinan',
			'required|trim',
			[
				'required' => 'Field nama pimpinan tidak boleh kosong'
			]
		);
		
		$this->form_validation->set_rules(
			'email',
			'email',
			'required|trim|valid_email|is_unique[user.email]',

			[
				'required'    => 'Field email tidak boleh kosong',
				'valid_email' => 'Format email harus sesuai',
				'is_unique'   => 'email sudah terdaftar'
			]
		);
		$this->form_validation->set_rules(
			'kecamatan',
			'kecamatan',
			'required|trim',
			[
				'required' => 'Kecamatan Tidak Boleh Kosong'
			]
		);
		$this->form_validation->set_rules(
			'alamat',
			'alamat',
			'required|trim',
			[
				'required' => 'Alamat Tidak Boleh Kosong'
			]
		);
		

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'PT.MMM | Tambah Data Agen';



			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('pages/admin/master/pimpinan/createpimpinan', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		
		}else {

			$data = array(
				'nama'           =>	htmlspecialchars($this->input->post('namapimpinan', true)),
				'email'          =>	htmlspecialchars($this->input->post('email', true)),
				'image'          =>	'default.png',
				'password'       =>	password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'        =>	'1',
				'is_active'      =>	'1',
				'tanggal_daftar' =>	date('y-m-d'),
				'provinsi'       =>	"Jawa Timur",
				'kota'           =>	"Surabaya",
				'kecamatan'      =>	$this->input->post('kecamatan'),
				'alamat'         =>	$this->input->post('alamat'),


			);

			$this->m->Save($data, 'user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pimpinan berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listpimpinan');
		}
	}
	function editpimpinan($id_user)
	{

		$data = [
			'title' => 'PT.MMM | Edit Data Pimpinan'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);
		$select = $this->db->where('id_user', $id_user);
		$data['pimpinan'] = $this->m->Get_All('user', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/master/pimpinan/editpimpinan', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function Updatepimpinan()
	{
		
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('iduser')
		);
		$data = array(
				'nama'       =>	htmlspecialchars($this->input->post('namapimpinan', true)),
				'email'      =>	htmlspecialchars($this->input->post('email', true)),
				'image'      =>	'default.png',
				'is_active'  =>	$this->input->post('status'),
				'kecamatan'  =>	$this->input->post('kecamatan'),
				'alamat'     =>	$this->input->post('alamat'),
			);
		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pimpinan berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listpimpinan');
	}
	function deletepimpinan()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pimpinan berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listpimpinan');
	}
	function listayamhilang()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);


		$data['title'] = 'PT.MMM | List Ayam Hilang';
		$select = $this->db->select('*, user.nama');
		$select = $this->db->join('user', 'user.id_user = ayamhilang.id_user ');
		$select = $this->db->join('ayamhilang_detail', 'ayamhilang_detail.id_transaksi = ayamhilang.id_transaksi ');
		$select = $this->db->order_by('ayamhilang.tgl_transaksi');
		$data['read'] = $this->m->Get_All('ayamhilang', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/transaksi/ayamhilang/listayamhilang', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function addlistayam()
	{
		if ( $this->input->post('jumlahayam') > $this->input->post('stokawal')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jumlah ayam hilang melebihi stock awal <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdataayamhilang');
		}
		
			$data = array(

			'id_transaksi' =>	"2",
			'id_ayam'      =>	$this->input->post('idayam'),
			'jumlah_ayam'  =>	$this->input->post('jumlahayam'),

		);

		$this->m->Save($data, 'ayamhilang_detail');

		$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_hilang'          => $this->input->post('jumlahayam')+$this->input->post('ayamhilang')
			);
			$this->m->Update($where, $data, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdataayamhilang');
	
		
	}
	function updatelistayam()
	{
		
		$table = 'ayamhilang_detail';
		$where = array(
			'id'		=>	$this->input->post('id')
		);
		$data = array(
			'jumlah_ayam' => $this->input->post('jumlahayam'),
		);
		$this->m->Update($where, $data, $table);


		if ($this->input->post('jumlahayam')>$this->input->post('jumlahayamasal')) {
			$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_hilang'          => ($this->input->post('jumlahayam')-$this->input->post('jumlahayamasal')+$this->input->post('ayamhilang'))
			);
			$this->m->Update($where, $data, $table);
		}elseif ($this->input->post('jumlahayam')<$this->input->post('jumlahayamasal')) {
			$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_hilang'          => $this->input->post('ayamhilang')+$this->input->post('jumlahayam')-($this->input->post('jumlahayamasal'))
			);
			$this->m->Update($where, $data, $table);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil di ubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdataayamhilang');
	
		
	}
	function deletelistayam()
	{
		
		$table = 'ayamhilang_detail';
		$where = array(
			'id'		=>	$this->input->post('id')		
		);
		$this->m->Delete($where, $table);

		$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_hilang'          => $this->input->post('ayamhilang')- $this->input->post('jumlahayam')
			);
			$this->m->Update($where, $data, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdataayamhilang');
	}
	function Createayamhilang()
	{


		$this->form_validation->set_rules(
			'tanggaltransaksi',
			'TanggalTransaksi',
			'required|trim',
			[
				'required' => 'Field tanggal transaksi tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);


			$data['id_transaksi'] = $this->m->kodeayamhilang();


			$id_transaksi 	 			= $this->input->post('idtransaksi');

			$select = $this->db->select('*, ayam.nama, ayam.persediaan_awal, ayam.id_ayam');
			$select = $this->db->join('ayam', 'ayam.id_ayam = ayamhilang_detail.id_ayam ');
			$select          = $this->db->where('tbl_ayamhilang_detail.id_transaksi', 2);
			$data['read'] = $this->m->Get_All('ayamhilang_detail', $select);


			$select = $this->db->select('*, nama');
			$data['ayam'] = $this->m->Get_All('ayam', $select);

			$data['user'] = $this->m->Get_Where($where, $table);

			$data['title'] = 'PT.MMM | Transaksi Ayam Hilang';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('pages/admin/transaksi/ayamhilang/createayamhilang', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		} else {
			$data = array(
				'id_transaksi'     =>	$this->input->post('idtransaksi'),
				'id_user'           =>	$this->input->post('iduser'),
				'tgl_transaksi'        =>	date("Y-m-d"),
				
				

			);

			$this->m->Save($data, 'ayamhilang');


			$table = 'ayamhilang_detail';
			$where = array(
				'id_transaksi'		=>	"2"
			);

			$data = array(
				'id_transaksi'     =>	$this->input->post('idtransaksi')
			);
			$this->m->Update($where, $data, $table);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam hilang berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listayamhilang');
		}
	}
	function detailayamhilang($id_transaksi)
	{


		$data = [
			'title' => 'PT.MMM | Detail Transaksi Ayam Hilang'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*,  user.nama');
		$select = $this->db->join('user', 'user.id_user = ayamhilang.id_user ');
		$select = $this->db->join('ayamhilang_detail', 'ayamhilang_detail.id_transaksi = ayamhilang.id_transaksi');
		$select          = $this->db->where('tbl_ayamhilang.id_transaksi', $id_transaksi);
		$data['head'] = $this->m->Get_All('ayamhilang', $select);

		$select = $this->db->select('*, ayam.nama, ayam.persediaan_awal, ayam.id_ayam');
			$select = $this->db->join('ayam', 'ayam.id_ayam = ayamhilang_detail.id_ayam ');
			$select          = $this->db->where('tbl_ayamhilang_detail.id_transaksi', $id_transaksi);
			$data['detail'] = $this->m->Get_All('ayamhilang_detail', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/transaksi/ayamhilang/detailayamhilang', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}

	function listayammati()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);


		$data['title'] = 'PT.MMM | List Ayam Mati';
		$select = $this->db->select('*, user.nama');
		$select = $this->db->join('user', 'user.id_user = ayammati.id_user ');
		$select = $this->db->join('ayammati_detail', 'ayammati_detail.id_transaksi = ayammati.id_transaksi ');
		$select = $this->db->order_by('ayammati.tgl_transaksi');
		$data['read'] = $this->m->Get_All('ayammati', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/transaksi/ayammati/listayammati', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}

	function Createayammati()
	{


		$this->form_validation->set_rules(
			'tanggaltransaksi',
			'TanggalTransaksi',
			'required|trim',
			[
				'required' => 'Field tanggal transaksi tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);


			$data['id_transaksi'] = $this->m->kodeayammati();


			$id_transaksi 	 			= $this->input->post('idtransaksi');

			$select = $this->db->select('*, ayam.nama, ayam.persediaan_awal, ayam.id_ayam');
			$select = $this->db->join('ayam', 'ayam.id_ayam = ayammati_detail.id_ayam ');
			$select          = $this->db->where('tbl_ayammati_detail.id_transaksi', 2);
			$data['read'] = $this->m->Get_All('ayammati_detail', $select);


			$select = $this->db->select('*, nama');
			$data['ayam'] = $this->m->Get_All('ayam', $select);

			$data['user'] = $this->m->Get_Where($where, $table);

			$data['title'] = 'PT.MMM | Transaksi Ayam Mati';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('pages/admin/transaksi/ayammati/createayammati', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		} else {
			$data = array(
				'id_transaksi'     =>	$this->input->post('idtransaksi'),
				'id_user'           =>	$this->input->post('iduser'),
				'tgl_transaksi'        =>	date("Y-m-d"),
				
				

			);

			$this->m->Save($data, 'ayammati');


			$table = 'ayammati_detail';
			$where = array(
				'id_transaksi'		=>	"2"
			);

			$data = array(
				'id_transaksi'     =>	$this->input->post('idtransaksi')
			);
			$this->m->Update($where, $data, $table);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam mati berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('listayammati');
		}
	}
	function addlistayammati()
	{
		if ( $this->input->post('jumlahayam') > $this->input->post('stokawal')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jumlah ayam mati melebihi stock awal <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahdataayammati');
		}
			$data = array(

			'id_transaksi' =>	"2",
			'id_ayam'      =>	$this->input->post('idayam'),
			'jumlah_ayam'  =>	$this->input->post('jumlahayam'),

		);

		$this->m->Save($data, 'ayammati_detail');

		$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_mati'          => $this->input->post('jumlahayam')+$this->input->post('ayammati')
			);
			$this->m->Update($where, $data, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdataayammati');
	
		
	}
	function updatelistayammati()
	{
		
		$table = 'ayammati_detail';
		$where = array(
			'id'		=>	$this->input->post('id')
		);
		$data = array(
			'jumlah_ayam' => $this->input->post('jumlahayam'),
		);
		$this->m->Update($where, $data, $table);


		if ($this->input->post('jumlahayam')>$this->input->post('jumlahayamasal')) {
			$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_mati'          => ($this->input->post('jumlahayam')-$this->input->post('jumlahayamasal')+$this->input->post('ayammati'))
			);
			$this->m->Update($where, $data, $table);
		}elseif ($this->input->post('jumlahayam')<$this->input->post('jumlahayamasal')) {
			$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_mati'          => $this->input->post('ayammati')+$this->input->post('jumlahayam')-($this->input->post('jumlahayamasal'))
			);
			$this->m->Update($where, $data, $table);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil di ubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdataayammati');
	
		
	}
	function deletelistayammati()
	{
		
		$table = 'ayammati_detail';
		$where = array(
			'id'		=>	$this->input->post('id')		
		);
		$this->m->Delete($where, $table);

		$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_mati'          => $this->input->post('ayammati')- $this->input->post('jumlahayam')
			);
			$this->m->Update($where, $data, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ayam berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahdataayammati');
	}

	function detailayammati($id_transaksi)
	{


		$data = [
			'title' => 'PT.MMM | Detail Transaksi Ayam Mati'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*,  user.nama');
		$select = $this->db->join('user', 'user.id_user = ayammati.id_user ');
		$select = $this->db->join('ayammati_detail', 'ayammati_detail.id_transaksi = ayammati.id_transaksi');
		$select          = $this->db->where('tbl_ayammati.id_transaksi', $id_transaksi);
		$data['head'] = $this->m->Get_All('ayammati', $select);

		$select = $this->db->select('*, ayam.nama, ayam.persediaan_awal, ayam.id_ayam');
			$select = $this->db->join('ayam', 'ayam.id_ayam = ayammati_detail.id_ayam ');
			$select          = $this->db->where('tbl_ayammati_detail.id_transaksi', $id_transaksi);
			$data['detail'] = $this->m->Get_All('ayammati_detail', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/transaksi/ayammati/detailayammati', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function listpenjualan()
	{
		$id_user = $this->session->userdata('id_user');

		$table = 'user';
		$where=array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$select = $this->db->select('*, user.nama');
		$this->db->where('penjualan.status BETWEEN "' . 0 . '" and "' . 1 . '"');
		$select = $this->db->join('user', 'user.id_user = penjualan.id_user ');
		$data['read'] = $this->m->Get_All('penjualan', $select);	

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'PT.MMM | List Penjualan';
		
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/transaksi/penjualan/listpenjualan',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);	
	}
	function updatelistkeranjang()
	{
		$id_penjualan = $this->input->post('idpenjualan');
		$table = 'penjualan_detail';
		$where = array(
			'id'		=>	$this->input->post('id')
		);
		$data = array(
			'jumlah_ayam' => $this->input->post('jumlahbeli'),
			'sub_total'     => $this->input->post('jumlahbeli') * $this->input->post('hargajual')
		);
		$this->m->Update($where, $data, $table);

		

		if ($this->input->post('jumlahbeli')>$this->input->post('jumlahbeliasal')) {
			$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_keluar'          => ($this->input->post('jumlahbeli')-$this->input->post('jumlahbeliasal') + $this->input->post('ayamkeluar') )
			);
			$this->m->Update($where, $data, $table);
		}elseif ($this->input->post('jumlahbeli')<$this->input->post('jumlahbeliasal')) {
			$table = 'ayam';
			$where = array(
				'id_ayam'		=>	$this->input->post('idayam')
			);
			$data = array(
				'ayam_keluar'          => $this->input->post('ayamkeluar')-($this->input->post('jumlahbeliasal')-$this->input->post('jumlahbeli'))
			);
			$this->m->Update($where, $data, $table);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data keranjang berhasil di ubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		
		$this->detailpenjualan($id_penjualan);
		
	}
	function Updatestatustransaksi()
	{

		
		$table = 'penjualan';
		$where = array(
			'id_penjualan'		=>	$this->input->post('idpenjualan')
		);
		$data = array(
				'status'                  =>	1,
				'total_bayar'             =>	$this->input->post('totalbayar'),
				'dikonfirmasijumlah_oleh' =>	$this->input->post('namapetugas'),
				'tanggalkonfirmasi_jumlah' =>	date("y-m-d"),
			);

		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status transaksi berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('listpenjualan-admin');
	}
	function detailpenjualan($id_penjualan)
	{

		$data = [
			'title' => 'PT.MMM | Detail Penjualan'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where=array(
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

			$select = $this->db->select('*,sum(tbl_penjualan_detail.sub_total) as total_bayar');
			$select = $this->db->where('id_penjualan', $id_penjualan);
		    $data['read1']=$this->m->Get_All('penjualan_detail',$select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('pages/admin/transaksi/penjualan/detailpenjualan', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function laporanayamhilang()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
				'name'     => 'CV Ayam Adi Boiler',
				'title'    => 'Laporan Data Transaksi Ayam Hilang',
				'subtitle' => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')) ,
	        ];


			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = ayamhilang.id_user ');
			$select = $this->db->join('ayamhilang_detail', 'ayamhilang_detail.id_transaksi = ayamhilang.id_transaksi ');
			$data['read'] = $this->m->Get_All('ayamhilang', $select);


			$this->load->view('pages/admin/laporan/laporanayamhilang', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporandatatransaksiayamhilang", array('Attachment' =>0));
	}
	function laporanayamhilangtigabulan()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
				'name'     => 'CV Ayam Adi Boiler',
				'title'    => 'Laporan Data Transaksi Ayam Hilang Tiga Bulan Terakhir',
				'subtitle' => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')) ,
			];


			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = ayamhilang.id_user ');
			$select = $this->db->join('ayamhilang_detail', 'ayamhilang_detail.id_transaksi = ayamhilang.id_transaksi ');
			$select = $this->db->where('tgl_transaksi BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
			$data['read'] = $this->m->Get_All('ayamhilang', $select);


			$this->load->view('pages/admin/laporan/laporanayamhilang', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporandatatransaksiayamhilang_tigabulanterakhir", array('Attachment' =>0));
	}
	function laporanayammati()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
				'name'     => 'CV Ayam Adi Boiler',
				'title'    => 'Laporan Data Transaksi Ayam Mati',
				'subtitle' => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')) ,
	        ];


			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = ayammati.id_user ');
			$select = $this->db->join('ayammati_detail', 'ayammati_detail.id_transaksi = ayammati.id_transaksi ');
			$data['read'] = $this->m->Get_All('ayammati', $select);


			$this->load->view('pages/admin/laporan/laporanayammati', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporandatatransaksiayammati", array('Attachment' =>0));
	}
	function laporanayammatitigabulan()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
				'name'     => 'CV Ayam Adi Boiler',
				'title'    => 'Laporan Data Transaksi Ayam Mati',
				'subtitle' => 'Dicetak Pada Tanggal : ' . format_indo(date('Y-m-d')) ,
	        ];


			$select = $this->db->select('*, user.nama');
			$select = $this->db->join('user', 'user.id_user = ayammati.id_user ');
			$select = $this->db->join('ayammati_detail', 'ayammati_detail.id_transaksi = ayammati.id_transaksi ');
			$select = $this->db->where('tgl_transaksi BETWEEN  date(NOW()) - interval 3 month and date(now()) ');
			$data['read'] = $this->m->Get_All('ayammati', $select);


			$this->load->view('pages/admin/laporan/laporanayammati', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporandatatransaksiayammati", array('Attachment' =>0));
	}
	public function profile()
    {
        $role_id = $this->session->userdata('role_id');
        $table = 'user';
        $where=array(
            'id_user'       =>  $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);
        $data['title'] = 'CIO Herbal | Profile';
        
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('templates_admin/navigation', $data);
            $this->load->view('pages/admin/profile/profile', $data);
            $this->load->view('templates_admin/script');
            $this->load->view('templates_admin/footer', $data);
    }
    public function edit()
    {
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'CIO Herbal | Edit Profile';
        $table = 'user';
        $where = array(
            'id_user'        =>    $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        if ($this->form_validation->run() == false) {
          
                $this->load->view('templates_admin/header', $data);
                $this->load->view('templates_admin/sidebar', $data);
                $this->load->view('templates_admin/navigation', $data);
                $this->load->view('pages/admin/profile/edit', $data);
                $this->load->view('templates_admin/script');
                $this->load->view('templates_admin/footer');
            
        } else {

            $table = 'user';
            $where = array(
                'id_user'        =>    $this->input->post('id')
            );
            $data = array(
                'nama'          => $this->input->post('name'),
                'email'           => $this->input->post('email'),
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

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            redirect('profile-admin');
        }
    }

    public function changePassword()
    {
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'CIO Herbal | Ubah Password';
        $table = 'user';
        $where=array(
            'id_user'       =>  $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);



        $this->form_validation->set_rules(
            'current_password',
            'Current Password',
            'required|trim',
            [
                'required' => 'Password Lama Tidak Boleh Kosong'
            ]
        );

        $this->form_validation->set_rules(
            'new_password1',
            'New Password',
            'required|min_length[5]|matches[new_password2]',
            [
                'required' => 'Password Baru Tidak Boleh Kosong',
                'matches'  => 'Password Tidak Sama',
                'min_length' => 'Password Minimal 5 karakter',
            ]
        );

        $this->form_validation->set_rules(
            'new_password2',
            'Confirm New Password',
            'required|min_length[5]|matches[new_password1]|trim',
            [
                'required' => 'Password Baru Tidak Boleh Kosong',
                'matches'  => 'Password Tidak Sama',
                'min_length' => 'Password Minimal 5 karakter',
            ]
        );
        if ($this->form_validation->run() == false) {
           

                $this->load->view('templates_admin/header', $data);
                $this->load->view('templates_admin/sidebar', $data);
                $this->load->view('templates_admin/navigation', $data);
                $this->load->view('pages/admin/profile/changepassword', $data);
                $this->load->view('templates_admin/script');
                $this->load->view('templates_admin/footer');
           
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('profile-admin');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama Dengan Password Baru!<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('profile-admin');
                } else {
                    //password ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $table = 'user';
                    $where = array(
                        'email' => $this->session->userdata('email')
                    );
                    $data = array(
                        'password' =>    $password_hash
                    );
                    $this->m->Update($where, $data, $table);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('profile-admin');
                }
            }
        }
    }

}
