<section>
   <style type="text/css">
    .grids.home_product{
           height: 390px;
       }
    </style>
   <div class="bg_in">
   <div class="breadcrumbs">
      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href=".">
            <span itemprop="name">Trang chủ</span></a>
            <meta itemprop="position" content="1" />
         </li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item">
            <span itemprop="name">Sách HOT</span></a>
            <meta itemprop="position" content="2" />
         </li>
      </ol>
   </div>
   <div class="module_pro_all">
      <div class="box-title">
         <div class="title-bar">
            <h1>Tất cả sách HOT</h1>
            <!-- <a class="read_more" href="sanpham.php">
            Xem thêm
            </a> -->
         </div>
      </div>
      <div class="pro_all_gird">
         <div class="girds_all list_all_other_page ">
          <?php
            foreach ($product as $key => $pro) {
          ?>
            <div class="grids home_product">
               <div class="grids_in">
                  <div class="content">
                     <div class="img-right-pro">
                        <a href="sanpham.php">
                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                        </a>
                        <div class="content-overlay"></div>
                        <!-- <div class="content-details fadeIn-top">
                           <?php echo $pro['desc_product'] ?>
                        </div> -->
                     </div>
                     <div class="name-pro-right">
                        <a href="<?php echo BASE_URL ?>sanpham/chitietsanpham/<?php echo $pro['id_product'] ?>">
                           <h3><?php echo $pro['title_product'] ?></h3>
                        </a>
                     </div>
                     <div class="add_card">
                        <a onclick="return giohang(579);">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                        </a>
                     </div>
                     <div class="price_old_new">
                        <div class="price">
                           <span class="news_price"><?php echo number_format($pro['price_product'],0,',','.') ?> vnđ</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
            }
            ?>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
</section>