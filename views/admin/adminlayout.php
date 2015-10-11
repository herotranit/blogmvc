
<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>BLOG HAY</title>
      <link rel="stylesheet" href="styles/css/bootstrap.min.css">
      <link rel="stylesheet" href="styles/css/bootstrap-theme.css">
      <link rel="stylesheet" href="styles/css/style.css">
   </head>
   <body style="background:#F8F8FF">
      <nav class="navbar navbar-default navbar-static-top" style="background:#DCDCDC5">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li><a href="index.php?c=adminCategorycontroller&m=list">Quản Lí Danh Mục</a></li>
                  <!--class="active" -->
                  <li><a href="index.php?c=post&m=list">Quản Lí Tin</a></li>
                  <li><a href="#contact">Quản Lí User</a></li>
                  <li><a href="#contact">Quản Lí Comment</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <?php if(empty($_SESSION['username'])){ ?>
                  <li><a href="#">Đăng Nhập</a></li>
                  <li><a href="./">Đăng Kí</a></li>
                  <?php }?>
                  <li><a href="index.php?c=admincontroller&m=logout">Logout</a></li>
                  
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
      <br><br>
      <div class="container" >
         <div class="row" >
            <div class="col-md-3">
               <strong> 
               <a>Xin Chào<strong> <?php echo $username ?></strong></a><br><br> <br>     
               </strong>
            </div>
            <div class="col-md-9">
                 <?php include ROOT . DS . 'views' . DS . $template_file; ?>
            </div>
            <div class="col-md-4">
            </div>
         </div>
         <div class="row" >
         </div>
      </div>
      <!-- /container -->
      <br><br><br><br>
      <div class="panel panel-default" style="text-align:center">
      <div class="panel-body" style="text-align:center">
      <span class="label label-primary">Liên Hệ</span>
      <span class="label label-primary">Giới Thiệu</span></br><br>
      <div>
         <a >Bản Quyền Thuộc Về HeroTran</a>
         <div>
         </div>
      </div>
      <script type="text/javascript" src="styles/js/jquery-1.11.3.min"></script>
      <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
   </body>
</html>

