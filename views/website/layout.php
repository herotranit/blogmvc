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

<body >
  <div class="container" >
<!--  header  !-->
    <nav class="navbar navbar-default">
      <?php 
      include('category/menu.php');
      ?>
    </nav>
    <br><br>

<!--  content  !-->
  <div class="row">

    <?php include ROOT . DS . 'views' . DS . $template_file; ?>
  </div>

  </div> <!-- /container -->
  <br><br><br><br>



<!--  footer  !-->

  <div class="panel panel-default" style="text-align:center">
    <div class="panel-body" style="text-align:center">
      <span class="label label-primary">Liên Hệ</span>
      <span class="label label-primary">Giới Thiệu</span></br><br>
      <div><a >Bản Quyền Thuộc Về HeroTran</a><div>

      </div>

    </div>


    <script type="text/javascript" src="../styles/js/jquery-1.11.3.min"></script>
    <script type="text/javascript" src="../styles/js/bootstrap.min.js"></script>

  </body>

  </html> 