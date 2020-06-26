<?php 
 

class Kelola extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

		if($this->session->userdata('login')==null){
			redirect('login');
		}
 
	}
 
	function index(){
		$data['tb_user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_tambah');
	}
 
	function tambah_data(){
        $nama = $this->input->post('nama');
        $jenis_kel = $this->input->post('jenis_kel');
		$email = $this->input->post('email');
		
		$data = array(
            'nama' => $nama,
            'jenis_kel' => $jenis_kel,
			'email' => $email,
			);
		
		// var_dump($data); die;
		$this->m_data->input_data($data,'tb_user');
		redirect('Kelola/index');
	}
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_user');
		redirect('Kelola/index');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$data['tb_user'] = $this->m_data->edit_data($where,'tb_user')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $jenis_kel = $this->input->post('jenis_kel');
	$email = $this->input->post('email');
 
	$data = array(
        'nama' => $nama,
        'jenis_kel' => $jenis_kel,
		'email' => $email,
		
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'tb_user');
	redirect('Kelola/index');
}
 
}
?>