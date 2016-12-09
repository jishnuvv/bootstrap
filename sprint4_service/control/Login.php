<?php
class Login extends CI_controller
{
	public function loginService()
	{
		$user['mobileno']=$this->input->get_post('email');
		$user['password']=$this->input->get_post('password');
		
		$this->load->model('loginm');
		$this->loginm->loginmService($user);

	}

	/*public function store()
	{
		$user=array('entrollment'=>5,'name'=>'meenakshi','city'=>'calicut','mobile'=>'9866584553','dob'=>'1994-05-10','status'=>'very good');

		$this->load->model('Signupm');
		ini_set('max_execution_time', 30000); 
		for ($i=0; $i =1000000 ; $i++) { 
			$this->Signupm->storeprocedure($user);

		}
	
	}*/

}

?>