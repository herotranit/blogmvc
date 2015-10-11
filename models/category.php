<?php 
class category{
	public $table = 'category';
	public $primary_key='id';


	public function category(){

	$data=array();
	$sql="select * from category";
	$query=mysql_query($sql);
        if ($query) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
    }
    return $data;
	}


	 public function deleteadmincategory($id){

 	$sql= "delete from category where category_id='".$id."'";
 	$query=mysql_query($sql);
 	if($query){
 		return true;
 	}
 	return false;
 }

 	public function addadmincategory($formdata){
 		$name= $formdata['category_name'];
 		$status=$formdata['status'];

 	$sql= "INSERT INTO category(category_name,status)
	VALUES('".$name."','".$status."')";
 	$query=mysql_query($sql);
 	if($query){
 		return true;
 	}
 	return false;
 }


public function categoryByid($id){

	$data=array();
	$sql="select * from category where category_id='".$id."'";
	$query=mysql_query($sql);
        if ($query) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
    }
    // var_dump($data);
    // die();
    return $data;
	}


 public function updateadmincategory($formdata,$id){
 		$name= $formdata['category_name'];
 		$status=$formdata['status'];
 	$sql= "update category set category_name='".$name."',status='".$status."' where category_id='".$id."'";
 	$query=mysql_query($sql);
 	if($query){
 		return true;
 	}
 	return false;
 }


 }





?>