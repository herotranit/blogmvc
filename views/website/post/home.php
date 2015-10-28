    

<div class="col-md-8">
  <?php 
  foreach ($posthome as $k) {
    ?>
    <div class="panel panel-default">
      
        <h1 ><?php echo $k['title']; ?></h1>


    
      <div class="panel-body">
        <h4 style=" font-size:12px;opacity:0.6;"><?php echo $k['datetime']; ?></h4>
        <h2 ><?php echo $k['description']; ?></h2>
        <?php echo $k['content']; ?>
        <br><br><br><br>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="col-md-4">
      


      <div class="panel panel-default">
        
        
          <h3 style="text-align:center;" >Bài Viết Mới Nhất</h3>

            <?php 
    foreach ($posthome1 as $k) {
      ?>
        <div class="panel-body" style="background-color:#F8F8FF">
          <div class="col-md-4" >
              <a href="index.php?c=post&m=">
                  <img width=100 height=100 src="./<?php echo $k['images']; ?>"/>
              </a>
          </div>
          <div class="col-md-8">
                  <p style=" font-weight: bold;"><?php echo $k['title']; ?></p>

          </div>
        </div><br>
                <?php } ?>
    </div >
    </div>

