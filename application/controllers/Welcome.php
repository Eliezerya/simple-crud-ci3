<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

		$this->load->model('M_data');

	}

	
	public function index(){
		$dataYangAda = $this->M_data->getData();
		// echo "<pre>";
		// print_r($dataYangAda);
		// echo "</pre>";

		$Data = array('user' => $dataYangAda);

		
		$this->load->view('home',$Data);
	}

	public function formInput(){
		$this->load->view('form_input');
	}

	public function formEdit($id){
		$recordData = $this->M_data->getDataById($id);

		$Data = array('data_user' => $recordData);


		$this->load->view('form_edit',$Data);
	}

	public function AksiInsert(){
		$name = $this->input->post('nama');
		$email = $this->input->post('email');
		
		$DataInsert = array(
			'nama' => $name,
			'email' => $email
		);

		$this->M_data->InsertData($DataInsert);
		redirect(base_url('Welcome'));
	}

	public function AksiEdit(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		
		$DataUpdate = array(
			'nama' => $nama,
			'email' => $email
		);

		$this->M_data->EditData($DataUpdate,$id);

		redirect(base_url());
	}

	public function AksiDelete($id){
	
		$this->M_data->deleteData($id);

		redirect(base_url());
	}

}
