 <?php 
foreach ($category as $c) {

 ?>


 <form class="form-horizontal" method="post" action="" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tiêu Đề:</label>
    <div class="col-sm-2">
      <input type="text" name="category_name" class="form-control" placeholder="<?php echo $c['category_name'];?>"  required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Trạng Thái:</label>
    <div class="col-sm-2">
      <select class="form-control" name="status" id="sel1">
        <?php if($c['status']==0){ ?>
        <option value="0" selected>ẩn</option>
        <option value="1" >hiện</option>
         <?php } ?>
             <?php if($c['status']==1){ ?>
        <option value="0">ẩn</option>
        <option value="1" selected>hiện</option>
         <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>
<?php   # code...
}
?>