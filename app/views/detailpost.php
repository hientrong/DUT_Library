<?php
  foreach ($detail_post as $key => $value) {
      $name_post = $value['title_post'];
      $name_category_post = $value['title_category_post'];
      $id_cate = $value['id_category_post'];
      $content = $value['content_post'];
  }
?> 
<section>
         <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right">
                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>sanpham/danhmuc/<?php echo $id_cate ?>">
                           <span itemprop="name">Tin tức</span></a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           <?php echo $name_post ?>
                           </strong>
                           </span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
                  </div>
                  <!--breadcrumbs-->
                  <div class="content_page">
                     <div class="box-title">
                        <div class="title-bar">
                           <h1><?php echo $name_category_post ?></h1>
                        </div>
                     </div>
                     <div class="content_text">
                        <?php echo $content ?>
                     </div>
                     <div class="clear"></div>
                  </div>

               </div>
               <a href="<?php echo $_SERVER["HTTP_REFERER"] ?>" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục xem tin</a>
               <div class="clear"></div>
               <div class="module_pro_all">
                     <div class="box-title">
                        <div class="title-bar">
                           <h3>Tin tức liên quan</h3>
                        </div>
                     </div>
                     <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                           <?php
                           foreach ($related as $key => $rel) {
                           ?>
                        <div class="grids">
                       <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="<?php echo BASE_URL ?>/tintuc/chitiettin/<?php echo $rel['id_post'] ?>">
                           <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/post/<?php echo $rel['image_post'] ?>" data-original="<?php echo BASE_URL ?>public/images/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>
                        </div>
                        <div class="name-pro-right">
                           <a href="<?php echo BASE_URL ?>/tintuc/chitiettin/<?php echo $rel['id_post'] ?>">
                              <h3><?php echo $rel['title_post'] ?></h3>
                           </a>
                        </div>
                        <div class="name-pro-right">
                           <a href="<?php echo BASE_URL ?>/tintuc/danhmuc/<?php echo $rel['id_category_post'] ?>">
                              <h3>Danh mục: <?php echo $rel['title_category_post'] ?></h3>
                           </a>
                        </div>
                     </div>
                  </div>

               <!--start:left-->
               <div class="wrapper_all_main_left">

               </div>
               <!--end:left-->
               <div class="clear"></div>
            </div>
            <?php
         }
            ?>
            <div class="clear"></div>
         </div>
      </section>