<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->Login(); 
	}

	public function Login(){
		$this->load->view('Login'); 
	}

	public function Phone(){
		
		$data = array(); 
		$data['header'] = $this->load->view('inc/header.php',$data);
		
		$this->load->model('Phone_model');
		$data['phone_lists'] = $this->Phone_model->select_all($data);
		
		$data['content'] = $this->load->view('files/phone.php',$data);
		$data['footer'] = $this->load->view('inc/footer.php',$data);

		$this->load->view('Home',$data);
	}

	public function phoneForm(){
		$data = array(); 

		$data['product_name'] = $this->input->post('product_name'); 
		$data['model_name'] = $this->input->post('model_name'); 
		$data['product_details'] = $this->input->post('product_details'); 

		$this->load->model('Phone_model');
		$result = $this->Phone_model->savePhone($data); 
		
		redirect('Home/phone'); 
	}

	public function phoneDelete($id){
		$this->load->model('Phone_model');
		$this->Phone_model->deletePhone($id); 
		redirect('Home/Phone'); 
	}

public function Car(){
		
		$data = array(); 
		$data['header'] = $this->load->view('inc/header.php',$data);
		
		$this->load->model('Phone_model');
		$data['phone_lists'] = $this->Phone_model->select_all($data);
		
		$data['content'] = $this->load->view('files/Car.php',$data);
		$data['footer'] = $this->load->view('inc/footer.php',$data);

		$this->load->view('Home',$data);
	}

/*
	public function phoneForm(){
		$data = array(); 

		$data['product_name'] = $this->input->post('product_name'); 
		$data['model_name'] = $this->input->post('model_name'); 
		$data['product_details'] = $this->input->post('product_details'); 

		$this->load->model('Phone_model');
		$result = $this->Phone_model->savePhone($data); 
		
		redirect('Home/phone'); 
	}
*/
}
