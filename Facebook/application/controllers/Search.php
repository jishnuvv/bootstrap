<?php 
	/**
	* 
	*/
	class Search extends CI_Controller
	{
		
		public function searchControl()
		{
			$search['name']=$this->input->post('search');
			print_r($search);
			$url='http://WebService/index.php/SearchC/searchControl';
			$options=array(
							'http'=>array(
								'header'=>"Content-type: application/x-www-form-urlencoded\r\n",
								'method'=>'post',
								''
						);
		}
	}
 ?>