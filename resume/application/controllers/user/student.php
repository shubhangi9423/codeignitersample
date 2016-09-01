<?php

class student extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->helper('url');   
        $this->load->helper('array');
        $this->load->helper('form');  
                 /***** LOADING HELPER TO AVOID PHP ERROR ****/
        $this->load->model('student/student_model','studentModel'); /* LOADING MODEL * Welcome_model as welcome */
    }

	public function index()
	{
		$data['val']=$this->studentModel->view_data();
	$this->load->view('student/student_view',$data);

        
		//$this->data['view_data']= $this->studentModel->view_data();
		//$this->load->view('student/student_view', $this->data, FALSE);
	}

	public function adds()
	{
		//$this->load->view('student/student_add');
	$data['courses']=$this->studentModel->getcourse();
	$this->load->view('student/student_add',$data);
	


	}

   
	
	public function insert_data()
	{
			$data=array(
			'first_name'    =>$this->input->post('first_name'),
            'last_name'     =>$this->input->post('last_name'),
			'photo'         =>$this->input->post('photo'),
			'email_id'      =>$this->input->post('emailid'),
			'mobile_no'     =>$this->input->post('mobile_no'),
			'zipcode'       =>$this->input->post('zipcode'),
			'address1'      =>$this->input->post('address1'),
			'address2'      =>$this->input->post('address2'),
			'city'          =>$this->input->post('city'),
			'state'         =>$this->input->post('state'),
			'courses'   =>$this->input->post('course'),
			'skill_name'    =>$this->input->post('skill'),
			'skill_desc'    =>$this->input->post('skill_desc')

			       );
   $insert = $this->studentModel->insert_data($data);
           $data['val']=$this->studentModel->view_data();
	$this->load->view('student/student_view',$data);
	}

public function delete_data($id)
    {  
    $this->db->where('sid', $id);
    $this->db->delete('student_details');
     redirect('user/student');
    
    }
    public function single_view($id)
    {  
    $this->load->model('student/student_model');
    $data['val']=$this->studentModel->single_record($id);
	$this->load->view('student/single_view',$data);

    
    }
	
}?>