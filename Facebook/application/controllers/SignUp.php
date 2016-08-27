<?php 
	defined('BASEPATH') or exit('No direct script access allowed');
	/**
	* 
	*/
	class SignUp extends CI_Controller
	{

		public function signupControl()
		{

			
			//form validation
			/*$this->load->helper(array('form'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fname','Name','required');
			$this->form_validation->set_rules('lname','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('re-email','Email','matches[email]');
			$this->form_validation->set_rules('password','Password','required');
			#$this->form_validation->set_rules('profilepic','profile','required');
			$this->form_validation->set_rules('day','Date','required');
			$this->form_validation->set_rules('month','Date','required');
			$this->form_validation->set_rules('year','Date','required');
			if ($this->form_validation->run()==false) 
			{				
				$this->load->view('main');

			}
			else
			{*/
				$user['fname']=$this->input->post("fname");
				$user['lname']=$this->input->post("lname");
				$user['email']=$this->input->post("email");
				$user['re-email']=$this->input->post("re-email");
				$user['password']=$this->input->post("password");
				$user['profile_pic']=$_FILES['profilepic']['name'];
				$user['dob']=$this->input->post("day")."/".$this->input->post("month")."/".$this->input->post("year");
				$user['gender']=$this->input->post("gender");

				#print_r($user);
				#print_r($user['fname']);
				#print_r($_FILES);
				#$url = 'http://localhost/LoginService/SignUp.php';
				$url = 'http://localhost/WebService/index.php/SignupC/signupControl';
				$options=array(
								'http'=>array(
												'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        								'method'  => 'POST',
		        								'content' => http_build_query($user),
									),
								);
				$context=stream_context_create($options);
				$result=file_get_contents($url,false,$context);
				#print_r($result);
				$json=json_decode($result,true);
				#print_r($json);

					/*if ($json['ResponseCode']==1)
					{
						$this->load->view('email_verification');
					}*/

				//upload code
				$config['upload_path']   = './images/'; 
		        $config['allowed_types'] = 'gif|jpg|png'; 
		        $config['max_size']      = 1000; 
		        $config['max_width']     = 1024; 
		        $config['max_height']    = 768; 
				
		        $this->load->library('upload', $config);
					
		        if ( ! $this->upload->do_upload('profilepic')) {
		           echo "error"; 
		        }
					
		        else {
		            echo "picuploaded";
		        }
			#}



			//upload profie pic

			
				
		    #public function index() { 
		         #$this->load->view('uploadphoto', array('error' => ' ' )); 
		    #} 
				
		    #public function do_upload() { 
				    	
				 
      


		}
		
		public function emailVerification()
		{
			$this->load->view('email_verification');
		}

	}

 ?>