<?php
    
function adminCategorycontroller_list() {

if(empty($_SESSION['username'])){
	header("Locati
        ;';';';'on: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
}
    $data=array();
    $data['username']=$_SESSION['username'];
    $data['category']=model('category')->category();
    $data['template_file'] = 'admin/category/list.php';
    render('admin/adminlayout.php', $data);
}


function adminCategorycontroller_remove() {

if(empty($_SESSION['username'])){
	header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
}
    $data=array();
	$id= $_GET['id']; 
	$m=model('category')->deleteadmincategory($id);
	if($m==true)
	{
		echo "<script>alert('Xóa Thành Công ')</script>";
        echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=adminCategorycontroller&m=list';\",150);</script>";
        exit();
	}
	else{
		echo "<script>alert('Xóa Thành Công ')</script>";
        echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=adminCategorycontroller&m=list';\",150);</script>";
        exit();


	}


}



function adminCategorycontroller_add() {

if(empty($_SESSION['username'])){
	header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
}
	$data= array();
    $data['username']=$_SESSION['username'];
    $data['category']=model('category')->category();
    $data['template_file'] = 'admin/category/add.php';
    if(($_SERVER['REQUEST_METHOD'])=='POST')
    {
    	$formdata=$_POST;
    	if(model('category')->addadmincategory($formdata)){
            echo "<script>alert('Thêm Thành Công ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=adminCategorycontroller&m=list';\",150);</script>";
            exit();
    	}
    	else {
    		echo "<script>alert('Thêm Thành Công ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=adminCategorycontroller&m=add';\",150);</script>";
            exit();
    	}
    }
    render('admin/adminlayout.php', $data);
}



function adminCategorycontroller_update(){
$id= $_GET['id'];
if(empty($_SESSION['username'])){
	header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
}
	$data= array();
    $data['username']=$_SESSION['username'];
    $data['category']=model('category')->categoryByid($id);
    $data['template_file'] = 'admin/category/update.php';
    if(($_SERVER['REQUEST_METHOD'])=='POST')
    {
    	$formdata=$_POST;
    	if(model('category')->updateadmincategory($formdata,$id)){
            echo "<script>alert('update Thành Công ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=adminCategorycontroller&m=list';\",150);</script>";
            exit();
    	}
    	else {
    		echo "<script>alert('update không Thành Công ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=adminCategorycontroller&m=add';\",150);</script>";
            exit();
    	}
    }
    render('admin/adminlayout.php', $data);
}




