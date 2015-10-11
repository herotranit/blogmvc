<?php 

class admincontroller {

	public $table='user';
	public $primary_key='id';

	public function checklogin($formdata){
		$u=$formdata['username'];
		$p=($formdata['password']);
		// var_dump($p);die();
		$sql="select * from user where username='".$u."' and password='".$p."'";

		$query=mysql_query($sql);
		if(mysql_num_rows($query)== 0){
			return false;
		}
		else
		{
			return true;
		}
	}

	// public function register($)


	public function getalluser(){
		$sql="select * from user";
		$query=mysql_query($sql);
		if($query){
			while($row=mysql_fetch_assoc($query)) {
				$data[]=$row;
			}
		}
		return $data;
	}


}


