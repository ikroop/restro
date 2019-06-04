<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		$this->load->view('index');
	}
	public function mobileExists($mobile){
		$filter = array('mobile'=>$mobile);
		$exits  = $this->Admin_model->getCustomerDetails($filter);
		if($exits){
			return false;
		}else{
			return true;
		}
	}
	public function registration(){
		$this->form_validation->set_rules('name','Name','required|xss_clean|max_length[255]');
		$this->form_validation->set_rules('mobile','Mobile','required|xss_clean|max_length[255]|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('email','Email','trim|xss_clean|max_length[255]|valid_email');
		$this->form_validation->set_rules('birthdate','Birthdate','trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('anniversary_date','Anniversary Date','trim|xss_clean|max_length[255]');
		if($this->form_validation->run()){
			$input_data = $this->input->post();


			$filter     = array('mobile'=>$input_data['mobile']);
			$CheckExists = $this->Admin_model->getCustomerDetails($filter);

			if($CheckExists){
				$data['registration_id'] = $CheckExists['id'];
			}else{
				$data = array('name'		=>$input_data['name'],
						  'email'		=>$input_data['email'],
						  'mobile'		=>$input_data['mobile'],
						  'birthdate'	=>date('Y-m-d',strtotime($input_data['birthdate'])),
						  'anniversary_date' =>date('Y-m-d',strtotime($input_data['anniversary_date']))	
						);

				$data['registration_id'] = $this->Admin_model->addRegistration($data);
			}

			if($data){
				$this->load->view('feedback',$data);
			}else{
				$this->load->view('index');
			}
		}else{	
			$this->load->view('index');
		}
	}
	public function feedback(){
		$this->load->view('feedback');
	}
	public function addRating(){
		$this->form_validation->set_rules('customer_id','Customer Id','required|trim|xss_clean');
		$this->form_validation->set_rules('question_1','required|trim|xss_clean');
		$this->form_validation->set_rules('question_2','required|trim|xss_clean');
		$this->form_validation->set_rules('question_3','required|trim|xss_clean');
		$this->form_validation->set_rules('question_4','required|trim|xss_clean');
		$this->form_validation->set_rules('question_5','required|trim|xss_clean');
		$this->form_validation->set_rules('question_6','required|trim|xss_clean');
		$this->form_validation->set_rules('question_7','required|trim|xss_clean');

		if($this->form_validation->run()){	
			$input_data = $this->input->post();

			$data = array('customer_id'    =>$input_data['customer_id'],
						  'question_1'     =>isset($input_data['question_1']) ? $input_data['question_1'] : 2,
						  'question_2'     =>isset($input_data['question_2']) ? $input_data['question_2'] : 2,
						  'question_3'     =>isset($input_data['question_3']) ? $input_data['question_3'] : 2,
						  'question_4'     =>isset($input_data['question_4']) ? $input_data['question_4'] : 2,
						  'question_5'     =>isset($input_data['question_5']) ? $input_data['question_5'] : 2,
						  'question_6'     =>isset($input_data['question_6']) ? $input_data['question_6'] : 2,
						  'question_7'     =>isset($input_data['question_7']) ? $input_data['question_7'] : 2,
						  'comment'		   =>$input_data['comment']
						);

			$addRating = $this->Admin_model->addRating($data);

			if($addRating){
				// $to = 'naikjay75@gmail.com';
				// $from = 'smartads.darshan@gmail.com';
				// $subject = 'Thanks';
				// $message = ' Thanks for your valuable feedback';
				// $send_mail = sendEmail_helper($to,$from,$subject,$message);
				$this->load->view('thank_you');
			}else{
				$this->load->view('feedback');
			}
		}else{
			$this->load->view('feedback');
		}
	}
	public function sendmsg(){
		$to = 'naikjay75@gmail.com';
		$from = 'smartads.darshan@gmail.com';
		$subject = 'Thanks';
		$message = ' Thanks for your valuable feedback';
		$send_mail = sendEmail_helper($to,$from,$subject,$message);
	}
}
