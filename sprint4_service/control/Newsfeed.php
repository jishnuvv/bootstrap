<?php
class Newsfeed extends CI_controller
{
	public function status()
	{
		$Newsfeed['id']=$this->input->get_post('id');
		$Newsfeed['status']=$this->input->get_post('status');
		$Newsfeed['fname']=$this->input->get_post('firstname');
		$Newsfeed['file']=$this->input->get_post('file');
		$Newsfeed['lname']=$this->input->get_post('lastname');
		print_r($Newsfeed);
		$this->load->model('NewsupdateM');
		$this->NewsupdateM->newsfeed($Newsfeed);
	}
	public function photo_upload()
	{
	$photo['id']=$this->input->get_post('id');
	$photo['photo']=$this->input->get_post('photo');
	$photo['fname']=$this->input->get_post('firstname');
	$photo['file']=$this->input->get_post('file');
	$photo['lname']=$this->input->get_post('lastname');
	print_r($photo);
	
	$this->load->model('NewsupdateM');
	$this->NewsupdateM->upload_photo($photo);
	}
	public function veiw_status()
	{
		$stid=$this->input->get_post('stid');
		//echo $stid;
		$this->load->model('NewsupdateM');
		$json=$this->NewsupdateM->staus_view($stid);
		 echo json_encode($json);
	}
	public function status_veiw()
	{
		
		$stid=$this->input->get_post('stid');
		//echo $stid;
		$this->load->model('NewsupdateM');
		$json=$this->NewsupdateM->status_veiw($stid);
		 echo json_encode($json);
	}
}
?>