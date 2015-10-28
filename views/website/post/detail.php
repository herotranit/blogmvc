    

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


      <div class="panel-body">
        <h5> herotran@gmail.com</h5>
        <h4 style=" font-size:12px;opacity:0.6;">12:25:56</h4>
        <h5 >Đây là nội dung comment của tôi....</h5>
        
      </div>


      <div class="fb-comments" data-href="https://www.facebook.com/hero.tran.1004" data-width="100%" data-numposts="5"></div>
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<!--
      <div class="form-group" style="  margin:50px auto 50px 20px;">
        <input type="email" name="email" style="background-color:#F5F5F5; width:200px;" placeholder="Email" class="form-control" rows="1" id="comment"><br>
        <textarea type="text" name="comment"  placeholder="Nội Dung Bình Luận" class="form-control" rows="5" id="comment"></textarea>
        <button type="submit" class="btn btn-default">Gửi Bình Luận</button>
      </div>
      -->

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
          <div class="col-md-4">
              <a>
                  <img height=100 width=100 src="./<?php echo $b['images'];?>"/>
              </a>
          </div>
          <div class="col-md-8">
                  <a href="index.php?c=post&m=bycategory&key=<?php echo $b['category_id'];?>&id=<?php echo $b['post_id'];?>" style=" font-weight: bold;"><?php echo $b['title']; ?></a>
          </div>
        </div><br>
                <?php } ?>
    </div >
    </div>

