



      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
      <?php 
      foreach ($category as $menu) {
      ?>
            <li><a href="#"><?php  echo $menu['category_name'];  ?></a></li>  
      <?php 
      }
      ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?c=admincontroller&m=login">Đăng Nhập </a></li>
            <li><a href="#">Đăng Kí</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->