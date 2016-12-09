<?php
class NewsupdateM extends CI_model
{
	public function newsfeed($data)
	{
	foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				//echo $data[$i]; 
			}
			
			$values=implode(',',$data);
			$this->db->query("call statusupdate({$values})");
	}
	public function upload_photo($data)
	{
	foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				//echo $data[$i]; 
			}
			
			$values=implode(',',$data);
			$this->db->query("call photo_upload({$values})");
			
	}
	public function staus_view($user)
	{
		//$query=$this->db->query("call viewstatus ('$user')");
		// echo $user;
		$query1=$this->db->query("call viewphotos ('$user')");
		//$result=$query->result_array();
		$result1=$query1->result_array();

		//print_r($result);
		//print_r($result1);
		return $result1;
		

	}
	public function status_veiw($user)
	{
	
		$query1=$this->db->query("call viewstatus ('$user')");	
		$result1=$query1->result_array();
		return $result1;
		
	}

}
?>