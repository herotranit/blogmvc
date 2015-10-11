                          <a href="index.php?c=adminCategorycontroller&m=add">Thêm Danh Mục</a><br><br>
        <table style="width:100%" border="2">
        <tbody><tr>
          <td>STT</td>
          <td>Tiêu Đề Danh mục</td>
          <td>Thao Tác</td>
        </tr>
                  <?php 
          foreach ($category as $c) {
          ?>
        <tr>
          <td><?php echo $c['category_id']; ?></td>
          <td><?php echo $c['category_name']; ?></td>
          <td>
            <a href="index.php?c=adminCategorycontroller&m=remove&id=<?php echo $c['category_id']; ?>">Xóa</a>
            <a href="index.php?c=adminCategorycontroller&m=update&id=<?php echo $c['category_id']; ?>">Sửa</a>
          </td>

        </tr>
                            <?php 
                  }
                   ?>
      </tbody></table>

