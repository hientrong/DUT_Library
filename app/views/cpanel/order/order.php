<?php
  if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
      echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
    }
  } 
?>

<h2 style="text-align:center">Liệt kê đơn hàng</h2>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Code đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Quản lý</th>
        <th>Tình trạng đơn hàng</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
        foreach ($order as $key => $ord) {
          $i++;

      ?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $ord['order_code']?></td>
        <td><?php echo $ord['order_date']?></td>
        <td><a href="<?php echo BASE_URL ?>order/orderdetails/<?php echo $ord['order_code']?>">Xem đơn hàng</a></td>
        <td><?php if( $ord['order_status']==0 ){echo 'Đơn hàng mới';}else{echo 'Đã xử lý';}?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>