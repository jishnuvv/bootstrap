<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	public function index()
	{

		$this->load->view("main");
	}
	public function wrong()
	{
		$this->load->view("wrong_pswd");
	}
	


	public function loginControl()
	{
	/*Step 1: fetch data passed from the main.php Login form 
		to fetch data passed with post method you can use $this->input->post('Key1');   --similar to $_POST['Key1']
		to fetch data passed with get method you can use $this->input->get('Key1');     --similar to $_GET['Key1']
		to fetch data passed irrespective of the method used to pass,you can use $this->input->get_post('Key1');    --similar to $_REQUEST['Key1']
		*/
		

		$user['email']=$this->input->post("email");  
		$user['password']=$this->input->post("password");
		//$url = 'http://localhost/LoginService/loginQuery.php';
		$url = 'http://localhost/WebService/index.php/LoginC/loginControl';
		#$url = 'http://api.baabtra.com/LoginService/login.php';
		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);

		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    // used to call the web service
		#print_r($result);
		

		$json=json_decode($result,true); //web service returns a json data, convert it to php array using json_decode
		$user['data']=$json;
		#print_r($json);

		//echo $json['Msg'];
		//echo $json['Name'];
		#echo $json['Profilepic'];
		

			if ($json['ResponseCode']==200)
			 {
				$this->load->view("facebook_home",$json);
			}
			elseif($json['ResponseCode']==500)
			{
				$this->load->view("wrong_pswd",$json);
			}
			elseif ($json['ResponseCode']==404) 
			{
				$this->load->view("wrong_user_id",$json);# code...
			}	
	}
}
 ?>