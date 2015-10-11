    

<div class="col-md-8">
  <?php 
  foreach ($posthome as $k) {
    ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" style="text-align:center"><?php echo $k['title']; ?></h3>
      </div>
      <div class="panel-body">
        <br><br>
        <?php echo $k['content']; ?>
        <br><br><br><br>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="col-md-4">


      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Bài Viết Mới Nhất</h3>
        </div>
            <?php 
    foreach ($posthome1 as $k) {
      ?>
        <div class="panel-body">
          <div class="jumbotron">
            <p><?php echo $k['title']; ?></p>
            <h2></h2><?php echo $k['description']; ?></h2>
            
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

