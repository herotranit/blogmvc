<?php 
class post{
	public $table='post';
	public $primary_key='post_id';

	function getAllpost($limit=0){
		// 		var_dump($limit);
		// die();
		$data=array();
		if($limit == 0){
		$sql="select * from post";
		$query=mysql_query($sql);
		if($query){
			while($row=mysql_fetch_assoc($query)){
				$data[]=$row;
			}
		}
		}
		else{
		$sql="select * from post limit ".$limit." ";
		$query=mysql_query($sql);
		if($query){
			while($row=mysql_fetch_assoc($query)){
				$data[]=$row;
			}
		 }
		}
		return $data;
		}
	
	function getpostByid($id){

				$data=array();
		$sql="select * from post where post_id='".$id."'";
		$query=mysql_query($sql);
		if($query){
			while($row=mysql_fetch_assoc($query)){
				$data[]=$row;
			}
		}
		return $data;

	}



	function postadd($postdata){
				// var_dump($postdata);
				// die();
		$title=$postdata['title'];
		$description=$postdata['description'];
		$content=$postdata['content'];
		$user_id=$postdata['user_id'];
		$category_id=$postdata['category_id'];
		$status=$postdata['status'];
		$images=$postdata['images'];
		$sql="insert into post(title,description,content,user_id,category_id,status,images) 
		value('".$title."','".$description."','".$content."','".$user_id."','".$category_id."','".$status."',images='".$images."')";

		$query=mysql_query($sql);

		if($query){
			return true;
		}
		return false;
	}


	function postdelete($id){
		$sql="delete from post where post_id='".$id."'";
		$query=mysql_query($sql);
		if($query){

			return true;
		}
		return false;
	}
	function postupdate($postdata,$id){
		$title=$postdata['title'];
		$description=$postdata['description'];
		$content=$postdata['content'];
		$user_id=$postdata['user_id'];
		$category_id=$postdata['category_id'];
		$status=$postdata['status'];
		$images=$postdata['images'];
		$sql="update post set  
		title='".$title."',content='".$content."',description='".$description."',user_id='".$user_id."',category_id='".$category_id."',status='".$status."',images='".$images."'
		where post_id='".$id."'";

		$query=mysql_query($sql);
		if($query){

			return true;
		}
		return false;

	}



	function getpostBycategory($category_id){
		$data=array();
		$sql="select * from post where category_id='".$category_id."'";
		$query=mysql_query($sql);
		if($query){
			while($row=mysql_fetch_assoc($query)){
				$data[]=$row;
			}
		}
		return $data;



	}


	function getpostview($post_id){
		$data=array();
		$sql="select * from post where post_id='".$post_id."'";
		$query=mysql_query($sql);
		if($query){
			while($row=mysql_fetch_assoc($query)){
				$data[]=$row;
			}
		}
		return $data;



	}






	
}



?>