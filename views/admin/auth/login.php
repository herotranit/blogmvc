 




<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Title of the document</title>
	<link ref="stylesheet" href="">
	<link rel="stylesheet" href="./styles/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="./styles/admin/css/bootstrap-theme.css">
	<link rel="stylesheet" href="./styles/admin/css/style.css">
	
</head>

<body>

	<div class"container">



	<div class="row">

	<div class="col-md-6">

	<form class="login-form" role="form" method="post" action="">
		<h3>Đăng Nhập Hệ Thống</h3>
		<span><?php if(isset($notification)) echo $notification; ?> </span>
		<div class="form-group">
			<label for="email">Username:</label>
			<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" name="password">
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		</div>
		<button type="submit" class="btn btn-default" name="login">Đăng nhập</button>
	</form>
</div>
</div>



</div>

</body>

</html> 