    

<div class="col-md-8">
  <?php 
  foreach ($postview as $p) {
    ?>
    <div class="panel panel-default">
      
        <h1 ><?php echo $p['title']; ?></h1>


    
      <div class="panel-body">
        <h4 style=" font-size:12px;opacity:0.6;"><?php echo $p['datetime']; ?></h4>
        <h2 ><?php echo $p['description']; ?></h2>
        <?php echo $p['content']; ?>
        <br><br><br><br>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="col-md-4">
      


      <div class="panel panel-default">
        
                    <?php 
    foreach ($category1 as $c) {
      ?>
          <h3 style="text-align:center;" >Bài Viết Mới Nhất Về <?php echo $c['category_name']; ?></h3>
<?php } ?>
            <?php 
    foreach ($bycategory as $b) {
      ?>
        <div class="panel-body" style="background-color:#F8F8FF">
          <div class="col-md-4" style="background-image:url(./upload/Ronaldo.jpg);background-size:cover; height:90px;width:100px; margin-right:10px;">
          </div>
          <div class="col-md-8"></div>
                  <a href="index.php?c=post&m=bycategory&key=<?php echo $b['category_id'];?>&id=<?php echo $b['post_id'];?>" style=" font-weight: bold; margin-left:0px;"><?php echo $b['title']; ?></a>

            
        </div><br>
                <?php } ?>
    </div >
    </div>

