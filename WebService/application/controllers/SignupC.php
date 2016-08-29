<?php 
	/**
	* 
	*/
	class SignupC extends CI_Controller
	{
		
		function signupControl()
		{
			/*$this->load->helper(array('form'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fname','Name','required');
			$this->form_validation->set_rules('lname','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('re-email','Email','matches[email]');
			$this->form_validation->set_rules('password','Password','required');
			#$this->form_validation->set_rules('profilepic','profile','required');
			$this->form_validation->set_rules('dob','Date','required');
			
			for($user as $ind=>$val) 
			{
			    $org = $organization[$i];
			    $dept = $department[$i];
			    $pos = $positions[$i];
			    $dura = $duration[$i];
			
			if ($this->form_validation->run()==false)
			{
				echo "error";
			}
			else
			{
				echo "success";
			}*/


			////////////get values\\\\\\\\\\
			$user['vchr_user_fname']=$this->input->get_post('fname');
			$user['vchr_user_lname']=$this->input->get_post('lname');
			$user['vchr_user_email']=$this->input->get_post('email');
			#$user['vchr_user_re-email']=$this->input->get_post('re-email');
			$user['vchr_user_password']=$this->input->get_post('password');
			$user['vchr_user_profile_pic']=$this->input->get_post('profile_pic');
			$user['vchr_user_dob']=$this->input->get_post('dob');
			$user['vchr_user_gender']=$this->input->get_post('gender');
			$user['active']='1';


			//////////validation\\\\\\\\\\

			$this->load->helper(array('form'));
			$this->load->library('form_validation');
			#foreach ($user as $key => $value) {
				$fname=$user['vchr_user_fname'];
				echo $fname;
			#}
			/*$this->form_validation->set_rules($fname,'Name','required');
			if ($this->form_validation->run()==false)
			{
				echo "error";
			}
			else
			{*/


				$this->load->model('SignupM');	
				$result=$this->SignupM->signupModel($user);
				#$this->load->library('session');
				#echo $this->session->userdata('Fname');
			
			#$abc=array("responsecode"=>1);
			#echo json_encode($abc);

		}
	}
 ?>