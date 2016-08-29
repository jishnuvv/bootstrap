<?php 
	/**
	* 
	*/
	class SignupM extends CI_Model
	{
		
		function signupModel($data)
		{
			#print_r($data);
			foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
			}
			$values=implode(',',$data);
			$this->db->query("call userInsert({$values})");
			#$this->db->insert('tbl_user',$data);
			
			/*foreach ($variable as $key => $value) {
				# code...
			}*/
		}
	}

 ?>