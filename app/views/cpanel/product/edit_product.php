<?php
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
		}
	}	
?>
<h2 style="text-align:center">Cập nhật sản phẩm</h2>
<div class="col-md-12">
	<?php
		foreach ($productbyid as $key => $pro) {

	?>
	<form action="<?php echo BASE_URL ?>product/update_product/<?php echo $pro['id_product'] ?>" method="POST" enctype="multipart/form-data"	>
	  <div class="form-group">
	    <label for="email">Tên sách</label>
	    <input type="text" name="title_product" value="<?php echo $pro['title_product'] ?>" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="email">Hình ảnh</label>
	    <input type="file" name="image_product" class="form-control">
	    <p><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $pro['image_product']?>" height="100" width="100"></p>
	  </div>
	  <div class="form-group">
	    <label for="email">Giá sách</label>
	    <input type="text" name="price_product" value="<?php echo $pro['price_product'] ?>" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="email">Số lượng</label>
	    <input type="text" name="quantity_product" value="<?php echo $pro['quantity_product'] ?>" class="form-control">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả</label>
	    <textarea name="desc_product" row="5" style="resize: none" class="form-control"><?php echo $pro['desc_product'] ?></textarea>
	  </div>
	  <div class="form-group">
	    <label for="email">Danh mục</label>
	    <select name="category_product" class="form-control">
	    	<?php 
	    	foreach ($category as $key => $cate){
	    	?>
	    	<option <?php if($cate['id_category_product']==$pro['id_category_product']) echo 'selected'; else echo '' ?> value="<?php echo $cate['id_category_product']?>"><?php echo $cate['title_category_product']?></option>
	    	<?php
	    	}
	    	?>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="email">Sách hot</label>
	    <select name="product_hot" class="form-control">
	    	<?php
	    	if($pro['product_hot']==0){
	    	?>
	    	<option value="1">Có</option>
	    	<option selected value="0">Không</option>
	    	<?php
			}else{
	    	?>
	    	<option selected value="1">Có</option>
	    	<option value="0">Không</option>
	    	<?php
	    	}
	    	?>
	    </select>
	  </div>

	  <button type="submit" class="btn btn-default">Cập nhật sách</button>
	</form>
	<?php
			}
	?>
</div>