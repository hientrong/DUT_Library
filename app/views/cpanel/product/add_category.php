<?php
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
		}
	}	
?>
<h2 style="text-align:center">Thêm danh mục sản phẩm</h2>
<div class="col-md-12">
	<form action="<?php echo BASE_URL ?>product/insert_category" method="POST">
	  <div class="form-group">
	    <label for="email">Tên sách</label>
	    <input type="text" name="title_category_product" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả</label>
	    <input type="text" name="desc_category_product" class="form-control">
	  </div>
	  <button type="submit" class="btn btn-default">Thêm sách</button>
	</form>
</div>