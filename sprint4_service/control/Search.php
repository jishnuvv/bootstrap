<?php
class Search extends CI_controller
{
	public function request()
	{
		$fname=$this->input->get_post('fname');
		//echo $fname;
		$this->load->model('Searchm');
		$json=$this->Searchm->friend($fname);
		echo json_encode($json);
	}
	public function feriendrequest()
	{
		$friend['sender']=$this->input->get_post('sender');
		$friend['receiver']=$this->input->get_post('receiver');
		$friend['active']=0;
		print_r($friend);
		$this->load->model('Searchm');
		$this->Searchm->sendrequest($friend);
	}
	public function veiwrequest()
	{
		$friend['receiver']=$this->input->get_post('receiver');
		//print_r($friend);
		$this->load->model('Searchm');
		$json=$this->Searchm->veiw($friend);
		echo json_encode($json);

	  /*$this->load->library('session');
	  $this->session->set_userdata($json);
	  echo  $this->session->userdata('mobileno');*/
	

	}
	public function approvefriend()
	{
		$friend['sender']=$this->input->get_post('sender');
		$friend['receiver']=$this->input->get_post('receiver');
		$email['emailid']=$this->input->get_post('mobileno');
		print_r($friend);
		print_r($email);
		$this->load->model('Searchm');
		$this->Searchm->conform($friend);

		         $config= Array( 
				'crlf' => '\r\n',      //should be "\r\n"
				'newline' => '\r\n',   //should be "\r\n"
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.googlemail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'jishnuvv61@gmail.com',// here goes your mail 
				'smtp_pass' => '9986075016', // here goes your mail password 
				'mailtype'  => 'html', 
    			'charset'   => 'utf-8',
    			'wordwrap' => TRUE 
				
				);
				$this->load->library('email', $config);
				$this->email->initialize($config);    
				$message = 'hiiiiii'; 
				$this->email->set_newline("\r\n"); 
				$this->email->from('jishnuvv61@gmail.com'); // here goes your mail 
				$this->email->to($email['emailid']);// here goes your mail 
				$this->email->subject('conform '); 
				$this->email->message($message); 
				if($this->email->send()) 
				{ 
					
				//$this->load->view('emailverify');
					echo"mail send";
				}
				else 
				{
					show_error($this->email->print_debugger()); 
					
				}
				
				
	


	}
	public function veiwfriends()
	{

		$friend['uid']=$this->input->get_post('uid');
		$this->load->model('Searchm');
		$json=$this->Searchm->veiw_confromfriends($friend);
		echo json_encode($json);
	}
	public function unfriend_control()
	{

		$friend['uid']=$this->input->get_post('uid');
		$friend['fid']=$this->input->get_post('fid');
		$this->load->model('Searchm');
		$this->Searchm->model_unfriend($friend);
		print_r($friend);
	}

}
?>