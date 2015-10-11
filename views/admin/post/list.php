        <a href="index.php?c=post&m=add">Thêm Bài Viết</a><br><br>
        <table style="width:100%" border="2">
        <tbody><tr>
          <td>STT(post_id)</td>
          <td>Tiêu Đề Bài Viết(title)</td>
          <td>Tóm Tắt</td>
          <td>Nội Dung</td>
          <td>Trạng Thái</td>
          <td>Người Đăng</td>
          <td>Danh Mục</td>
          <td>Thao Tác</td>
        </tr>
                  <?php 
          foreach ($post as $c) {
          ?>
        <tr>
          <td><?php echo $c['post_id']; ?></td>
          <td><a href="index.php?c=post&m=update&id=<?php echo $c['post_id']; ?>"><?php echo $c['title']; ?></a></td>
          <td><?php echo $c['description']; ?></td>
          <!--><td><?php //echo $c['content']; ?></td>-->
          <td><?php echo $c['status']; ?></td>
          <td><?php echo $c['user_id']; ?></td>
          <td><?php echo $c['category_id']; ?></td>
          <td>
            <a href="index.php?c=post&m=delete&id=<?php echo $c['post_id']; ?>">Xóa</a>
            <a href="index.php?c=post&m=update&id=<?php echo $c['post_id']; ?>">Sửa</a>
          </td>

        </tr>
                  <?php 
                  }
                   ?>
      </tbody></table>

