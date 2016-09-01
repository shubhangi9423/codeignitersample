<?php
class Admin extends CI_Controller {
	

	public function index()
	{
		$this->load->model('model');
		$data['records']=$this->model->getdata();
		$this->load->view('test',$data);
	}
	
}