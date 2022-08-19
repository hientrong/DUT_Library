<?php
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
		}
	}	
?>
<h2 style="text-align:center">Cập nhật danh mục bài viết</h2>
<div class="col-md-12">
	<?php
		foreach ($categorybyid as $key => $cate) {

	?>
	<form action="<?php echo BASE_URL ?>post/update_category_post/<?php echo $cate['id_category_post'] ?>" method="POST">
	  <div class="form-group">
	    <label for="email">Tên bài viết</label>
	    <input type="text" value="<?php echo $cate['title_category_post'] ?>" name="title_category_post" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả</label>
	    <textarea name="desc_category_post" row="5" style="resize: none;" class="form-control "><?php echo $cate['desc_category_post'] ?></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Cập nhật bài viết</button>
	</form>
	<?php
	}
	?>
</div>