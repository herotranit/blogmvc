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


	$data=array();
	if(empty($_SESSION['username'])){
		header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
		exit();
	}
	$data['username']=$_SESSION['username'];
	$data['user_id']= model('admincontroller')->getalluser();
	$data['category_id']=model('category')->category();


	if(($_SERVER['REQUEST_METHOD'])=='POST'	){
		$post=$_POST;
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Kiểm tra có phải file hình ảnh k
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check !== false) {
			$uploadOk = 1;
		} 
		else {
			echo "<script>alert('Không phải file hình ảnh')</script>";
			$uploadOk = 0;
		}

// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "<script>alert('Kích Thước File Quá Lớn')</script>.";
			$uploadOk = 0;
		}
// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			echo "<script>alert('Không phải file hình ảnh')</script>.";
		$uploadOk = 0;
	}
// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "<script>alert('file hình ảnh của bạn chưa đúng')</script>";
// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {




			$post=$_POST;
			$image['images']=$target_file;

			$postdata = array('title' =>$post['title'] ,'content' =>$post['content'],'description' =>$post['description'],'user_id' =>$post['user_id'],'category_id' =>$post['category_id'],'status' =>$post['status'],'images' =>$image['images']  );
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
		} else {
			echo "<script>alert('không thể lấy file hình ảnh')</script>";
		}
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


	if(($_SERVER['REQUEST_METHOD'])=='POST'	){
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Kiểm tra có phải file hình ảnh k
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check !== false) {
			$uploadOk = 1;
		} 
		else {
			echo "<script>alert('Không phải file hình ảnh')</script>";
			$uploadOk = 0;
		}

// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "<script>alert('Kích Thước File Quá Lớn')</script>.";
			$uploadOk = 0;
		}
// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			echo "<script>alert('Không phải file hình ảnh')</script>.";
		$uploadOk = 0;
	}
// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "<script>alert('file hình ảnh của bạn chưa đúng')</script>";
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
// if everything is ok, try to upload file
			$post=$_POST;
			$image['images']=$target_file;

			$postdata = array('title' =>$post['title'] ,'content' =>$post['content'],'description' =>$post['description'],'user_id' =>$post['user_id'],'category_id' =>$post['category_id'],'status' =>$post['status'],'images' =>$image['images']  );

			// var_dump($postdata);
			// die();
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
		} else {
			echo "<script>alert('không thể lấy file hình ảnh')</script>";
		}
	}
}
	$data['template_file'] = 'admin/post/update.php';
	render('admin/adminlayout.php', $data);
}


function post_home(){
	$data=array();
	$limit='3';
	$data['posthome']=model('post')->getAllpost($limit);
	$data['template_file']='website/post/post_view.php';
	render('website/layout.php',$data);
}




function post_bycategory(){
	$data=array();
	$category_id=$_GET['key'];
	$data['category1']=model('category')->categoryByid($category_id);
	$data['bycategory']=model('post')->getpostBycategory($category_id);
	$data['category2']=model('category')->category();	
	if(isset($_GET['id'])){
		$post_id=$_GET['id'];
		$data['postview']=model('post')->getpostview($post_id);
		$data['template_file']='website/post/detail.php';
	}else{
		$data['template_file']='website/post/bycategory.php';
	}
	render('website/layout.php',$data);

}





?>