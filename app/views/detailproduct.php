<?php
  foreach ($detail_product as $key => $value) {
      $name_product = $value['title_product'];
      $name_category_product = $value['title_category_product'];
      $id_cate = $value['id_category_product'];
  }
?>

<section>
  <?php
  foreach ($detail_product as $key => $detail) {

  ?>
   <div class="bg_in">
      <div class="wrapper_all_main">
         <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
            <div class="breadcrumbs">
               <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL ?>">
                     <span itemprop="name">Trang chủ</span></a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL ?>sanpham/danhmuc/<?php echo $id_cate ?>">
                     <span itemprop="name">Sách</span></a>
                     <meta itemprop="position" content="2" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <span itemprop="item">
                     <strong itemprop="name">
                     <?php echo $name_product ?>
                     </strong>
                     </span>
                     <meta itemprop="position" content="3" />
                  </li>
               </ol>
            </div>
            <div class="content_page">
               <div class="content-right-items margin0">
                  <div class="title-pro-des-ct">
                     <h1><?php echo $name_product ?></h1>
                  </div>
                  <div class="slider-galery ">
                     <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                     </div>
                     <div id="sync2" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                        <div class="item">
                           <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                        </div>
                     </div>
                  </div>
                  <div class="content-des-pro">
                     <div class="content-des-pro_in">
                        <div class="pro-des-sum">
                           <div class="price">
                              <p class="code_skin" style="margin-bottom:10px">
                                 <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                              </p>
                              <div class="status_pro">
                                 <span><b>Trạng thái:</b>  Còn hàng</span>
                              </div>
                              <div class="status_pro"><span><b>Xuất xứ:</b>  Việt Nam</span></div>
                           </div>
                           <div class="color_price">
                              <span class="title_price bg_green">Giá</span> <?php echo number_format($detail['price_product'],0,',','.') ?> <span>vnđ</span>
                              <div class="clear"></div>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="content-pro-des">
                        <div class="content_des">
                           <p style="font-size: 16px;font-weight: bold;"><?php echo $name_product ?></p>
                           <br />
                           <?php echo $detail['desc_product'] ?>
                        </div>
                     </div>
                     <div class="ct">
                        <div class="number_price">
                           <div class="clear"></div>
                        </div>
                        <div class="wp_a">
                           <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <a href="<?php echo $_SERVER["HTTP_REFERER"] ?>" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục xem sách</a>
                      <div class="clear"></div>
                     <div class="tags_products prodcut_detail">
                        <div class="tab_link">
                           <h3 class="title_tab_link">TAGS: </h3>
                           <div class="content_tab_link"> <a href="tag/"></a></div>
                        </div>
                     </div>
                  </div>
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
            <script type="text/javascript">
               CloudZoom.quickStart();
               
               jQuery(function($) {
               
                   var $userName = $('.name');
               
                   if ($userName.length) {
               
                       $userName.avatarMe({
               
                           className: 'avatar-me',
               
                           maxChar: 1
               
                       });
               
                   }
               
               });
               
            </script>
            <div class="clear"></div>
              <?php 
              }
              ?>
            <div class="dmsub">
               <div class="tags_products desktop">
                  <div class="tab_link">
                     <h3 class="title_tab_link">TAGS: </h3>
                     <div class="content_tab_link">
                      <?php 
                      foreach ($related as $key => $rel) {
                      ?> 
                        <a href="<?php echo BASE_URL ?>sanpham/danhmuc/<?php echo $rel['id_category_product'] ?>"><?php echo $rel['title_product'] ?></a>
                      <?php
                        }
                      ?>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="content-brank">
               <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
               </div> -->
            <div class="module_pro_all">
               <div class="box-title">
                  <div class="title-bar">
                     <h3>Sách liên quan</h3>
                  </div>
               </div>
               <div class="pro_all_gird">
                  <div class="girds_all list_all_other_page ">
                    <?php 
                      $i = 0;
                      foreach ($related as $key => $rel) {
                        $i += 1;
                        if($i<5){
                    ?>
                     <div class="grids">
                        <div class="grids_in">
                           <div class="content">
                              <div class="img-right-pro">
                                 <a href="<?php echo BASE_URL ?>sanpham/chitietsanpham/<?php echo $rel['id_product'] ?>">
                                 <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $rel['image_product'] ?>" data-original="<?php echo BASE_URL ?>public/images/iphone.png" alt="Máy in Canon MF229DW" />
                                 </a>
                                 <div class="content-overlay"></div>
                                 </div>
                              </div>
                              <div class="name-pro-right">
                                 <a href="<?php echo BASE_URL ?>sanpham/chitietsanpham/<?php echo $rel['id_product'] ?>">
                                    <h3><?php echo $rel['title_product'] ?></h3>
                                 </a>
                              </div>
                              <div class="add_card">
                              </div>
                              <div class="price_old_new">
                                 <div class="price">
                                    <span style="font-family: center;" class="news_price"><?php echo number_format($rel['price_product'],0,',','.').'vnđ' ?></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                      }else{

                      }
                      }
                     ?>
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
         <!--end:left-->
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
   <script>
      jQuery(document).ready(function() {
      
      
      
          var div_fixed = jQuery('.product_detail_info').offset().top;
      
          jQuery(window).scroll(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              } else {
      
                  jQuery('.tabs-animation').removeClass('fix_top');
      
              }
      
          });
      
          jQuery(window).load(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              }
      
          });
      
      });
      
   </script>
</section>