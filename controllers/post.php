<?php 
function post_list(){



	if(empty($_SESSION['username'])){
	header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
	}
    $data=array();
    $data['username']=$_SESSION['username'];
	$data['post']=model('post')->getAllpost();
	// var_dump($data['post']);
	// die();
	$data['template_file'] = 'admin/post/list.php';
    render('admin/adminlayout.php', $data);

}



function post_add(){

	if(empty($_SESSION['username'])){
	header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
	}
    $data=array();
    $data['username']=$_SESSION['username'];
   
    $data['user_id']= model('admincontroller')->getalluser();
    $data['category_id']=model('category')->category();
    $postdata=$_POST;
	if(($_SERVER['REQUEST_METHOD'])=='POST'	){
		if(model('post')->postadd($postdata)){
			echo "<script>alert('Thêm Thành Công ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=post&m=list';\",150);</script>";
            exit();
		}
		else{

			echo "<script>alert('Thêm Thất Bại')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=post&m=add';\",150);</script>";
            exit();
		}
	}
	$data['template_file'] = 'admin/post/add.php';
	render('admin/adminlayout.php', $data);

}



function post_delete(){
	if(empty($_SESSION['username'])){
	header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
}
	$id=$_GET['id'];
	$data=array();
	if((model('post')->postdelete($id))==true)
	{

				echo "<script>alert('Xóa Thành Công ')</script>";
        echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=post&m=list';\",150);</script>";
        exit();
	}
	else{

				echo "<script>alert('Không Thể Xóa ')</script>";
        echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=post&m=list';\",150);</script>";
        exit();
	}


}



function post_update(){
	if(empty($_SESSION['username'])){
	header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
	}	
		$data=array();
	$data['username']=$_SESSION['username'];
	$id=$_GET['id'];

	$data['datapost']=model('post')->getpostByid($id);
	$data['user_id']= model('admincontroller')->getalluser();
    $data['category_id']=model('category')->category();


    if($_SERVER['REQUEST_METHOD']==('POST')){
    	$postdata=$_POST;
    	if((model('post')->postupdate($postdata,$id))==true){
    		echo "<script>alert('Thêm Thành Công ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=post&m=list';\",150);</script>";
            exit();
    	}
    	else{
    		echo "<script>alert('Thêm Thất Bại ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=post&m=update';\",150);</script>";
            exit();
    	}
    }
	$data['template_file'] = 'admin/post/update.php';
	render('admin/adminlayout.php', $data);
}


function post_home(){

	$data=array();
	$limit='3';
	$data['posthome']=model('post')->getAllpost($limit);
	$data['template_file']='website/post/postview.php';
	render('website/layout.php',$data);



}


?>