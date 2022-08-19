<?php
  if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
      echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
    }
  } 
?>

<h2 style="text-align:center">Liệt kê đơn hàng chi tiết</h2>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên người đặt</th>
        <th>email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Ghi chú</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
        foreach ($order_info as $key => $ord_info) {
          $i++;

      ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $ord_info['name']?></td>
        <td><?php echo $ord_info['email']?></td>
        <td><?php echo $ord_info['sodienthoai']?></td>
        <td><?php echo $ord_info['diachi']?></td>
        <td><?php echo $ord_info['noidung']?></td>
        <td></td>
      </tr>
      <?php
      }
      ?>
      </tbody>
  </table>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sách</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      $total = 0;
        foreach ($order_details as $key => $ord) {
          $total += $ord['price_product']*$ord['product_quantity'];
          $i++;

      ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $ord['title_product']?></td>
        <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $ord['image_product']?>" height="100" width="100"></td>
        <td><?php echo $ord['product_quantity']?></td>
        <td><?php echo number_format($ord['price_product'],0,',','.').'vnđ'?></td>
        <td><?php echo number_format($ord['price_product']*$ord['product_quantity'],0,',','.').'vnđ'?></td>
        <td></td>
      </tr>
      <?php
      }
      ?>
      <form method="POST" action="<?php echo BASE_URL ?>order/order_confirm/<?php echo $ord['order_code'] ?>">
      <tr>
        <td><input type="submit" name="update_order" value="Đã xử lý" class="btn btn-default btn-warning"></td>
        <td align="right" colspan="6">Tổng tiền: <?php echo number_format($total,0,',','.').'vnđ'?></td>
      </tr>
    </form>
    </tbody>
  </table>