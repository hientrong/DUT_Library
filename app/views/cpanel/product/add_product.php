<?php
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
		}
	}	
?>
<h2 style="text-align:center">Thêm sản phẩm</h2>
<div class="col-md-12">
	<form action="<?php echo BASE_URL ?>product/insert_product" method="POST" enctype="multipart/form-data"	>
	  <div class="form-group">
	    <label for="email">Tên sách</label>
	    <input type="text" name="title_product" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="email">Hình ảnh</label>
	    <input type="file" name="image_product" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="email">Giá sách</label>
	    <input type="text" name="price_product" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="email">Số lượng</label>
	    <input type="text" name="quantity_product" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả</label>
	    <textarea name="desc_product" row="5" style="resize: none" class="form-control"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="email">Danh mục</label>
	    <select name="category_product" class="form-control">
	    	<?php 
	    	foreach ($category as $key => $cate){
	    	?>
	    	<option value="<?php echo $cate['id_category_product']?>"><?php echo $cate['title_category_product']?></option>
	    	<?php
	    	}
	    	?>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="email">Sách hot</label>
	    <select name="product_hot" class="form-control">

	    	<option value="1">Có</option>
	    	<option value="0">Không</option>

	    </select>
	  </div>

	  <button type="submit" class="btn btn-default">Thêm sách</button>
	</form>
</div>