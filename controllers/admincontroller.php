<?php
    
function admincontroller_login() {
    $data = array();
    if(($_SERVER['REQUEST_METHOD'])=='POST')
    {
    	$formdata=$_POST;
    	if(model('admincontroller')->checklogin($formdata)){
    		echo "<script>alert('hu hu dăng nhập thành công ')</script>";
    		$_SESSION['username'] = $formdata['username'];
            echo "<script>alert('Đăng Nhập Thành Công ')</script>";
            echo "<script>setTimeout(\"location.href = 'http://localhost/blogtome/?c=adminCategorycontroller&m=list';\",150);</script>";
            exit();
    	}
    	else {
    		$data['notification']="vui lòng kiểm tra lại thông tin";
    	}

    }

    render('/admin/auth/login.php', $data);
}




// function admincontroller_register(){
//     $


// }


function admincontroller_logout() {

            session_unset();
            header("Location: http://localhost/blogtome/?c=admincontroller&m=login");
            exit();
        }