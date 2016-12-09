<?php
class Searchm extends CI_model
{
	public function friend($user)
	{
	//$this->db->query("call user1($fname)");
	$query=$this->db->query("call user1('$user')");
	$result=$query->result_array();
	//print_r($result);
	return $result;
	}
	public function sendrequest($data)
	{
		foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				//echo $data[$i]; 
			}
			
			$values=implode(',',$data);
			$this->db->query("call friend1({$values})");
	}
	public function veiw($data)
	{
		foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				//echo $data[$i]; 
			}
			
			$values=implode(',',$data);
			$query=$this->db->query("call friendrequest({$values})");
			$result=$query->result_array();
			return $result;
	}
	public function conform($data)
	{
		foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				//echo $data[$i]; 
			}
			
			$values=implode(',',$data);
			$query=$this->db->query("call conformrequest({$values})");
			
	}
	public function veiw_confromfriends($data)
	{
		foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				//echo $data[$i]; 
			}
			
			$values=implode(',',$data);
			$query=$this->db->query("call veiwfriends({$values})");
			$result=$query->result_array();
		return $result;
			
	}
	public function model_unfriend($data)
	{
		foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				//echo $data[$i]; 
			}
			
			$values=implode(',',$data);
			$query=$this->db->query("call unfriend({$values})");
			
	}
}
?>