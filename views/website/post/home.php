

<?php foreach ($posthome as $p) {

  
 ?>
<div class="col-md-1"></div>
<div class="col-md-10" style="border-bottom:1px solid #F8F8FF;">
  <?php 
    foreach ($p['post'] as $key =>$pp) {
    if($key==0){
      # code... ?>
<div class="col-md-4" style="border-right:1px solid #F8F8FF;">
  <a href="index.php?c=post&m=bycategory&key=<?php echo $pp['category_id']; ?>&id=<?php echo $pp['post_id'];  ?>"> 
    <img style="margin-top:15px;" width=250px height=200px src="<?php echo $pp['images']; ?>">
  </a>
 <h2> <a href="index.php?c=post&m=bycategory&key=<?php echo $pp['category_id']; ?>&id=<?php echo $pp['post_id'];  ?>"><?php  echo $pp['title']; ?></a></h2>
</div>
<?php } if($key!=0) {
            if(isset($key)){
  ?>

<div class="col-md-7">
  <div class="panel-body">
          <div class="col-md-3">
              <a href="index.php?c=post&m=bycategory&key=<?php echo $pp['category_id']; ?>&id=<?php echo $pp['post_id'];  ?>" style="margin-top:10px" >
                  <img height=100 width=100  src="<?php echo $pp['images']; ?>" />
              </a>

          </div>
          <div class="col-md-7">
                  <a href="index.php?c=post&m=bycategory&key=<?php echo $pp['category_id']; ?>&id=<?php echo $pp['post_id'];  ?>"><?php echo $pp['title'];?></a>
                  <p><?php echo $pp['description'];?></p>
          </div>
        </div><br>
</div>
<?php } if(!isset($key)) {  echo "sdsad"; ?>     


<div class="col-md-7">
  <h1>sdfdsfdsf</h1>
</div>




      <?php } }   } ?>


</div>

<div class="clearfix"></div>

<?php  } ?>
      











