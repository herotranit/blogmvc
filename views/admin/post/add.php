



<form class="form-horizontal" method="post" action="" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Tiêu Đề:</label>
		<div class="col-sm-2">
			<textarea type="text" name="title" class="form-control" ></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Tóm Tắt:</label>
		<div class="col-sm-2">
			<textarea type="text" name="description" class="form-control" ></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Nội Dung:</label>
		<div class="col-sm-9">
			<textarea type="text" name="content" id="content" class="form-control" ></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Hình Ảnh:</label>
		<div class="col-sm-2">
			<input type="file" name="image"  >
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Người Đăng:</label>
		<div class="col-sm-2">
			<select class="form-control" name="user_id">
				<?php foreach ($user_id as $u) {
					# code...
				 ?>
				<option value="<?php echo $u['user_id']; ?>"><?php echo $u['username']; ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
			<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Danh Mục:</label>
		<div class="col-sm-2">

			<select class="form-control" name="category_id">
				<?php foreach ($category_id as $c) {
					
				 ?>
				<option value="<?php echo $c['category_id']; ?>"><?php echo $c['category_name']; ?></option>
				<?php } ?>
			</select>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Trạng Thái:</label>
			<div class="col-sm-2">
				<select class="form-control" name="status" id="sel1">
					<option value="0">ẩn</option>
					<option value="1" selected>hiện</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Thêm</button>
			</div>
		</div>
	</form>

<script type="text/javascript" src="./public/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="./public/ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="./puclic/ckeditor/jqueryeditor.js"></script>
<script type="text/javascript" src="./puclic/editor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>



