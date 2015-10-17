<div class="col-md-1"></div>
    

<div class="col-md-10">

    <div class="panel panel-default">
            <?php  foreach ($category1 as $c) {
      ?>
        <br><strong style="padding-left:20px"><?php echo $c['category_name']; ?></strong>
        <?php } ?>

    <?php  foreach ($bycategory as $b) {
      ?>
      <div class="panel-body">
          <div class="panel-body" style="background-color:#F8F8FF">
          <div class="col-md-4" style="background-image:url(./upload/anhnen.jpg);background-size:cover; height:90px;width:100px;">
          </div>
          <div class="col-md-8">
                  <p style=" font-weight: bold;"><?php echo $b['title'] ?></p>
                  <p style=""><?php echo $b['description'] ?></p>
                  </div>
        </div><br>

      </div>
      <?php }  ?>
    </div>
  </div>
