    <section>
        <div class="bg_in">
            <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:30px;">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="item active">
                        <img src="<?php echo BASE_URL ?>public/images/library_banner1.jpg" alt="DUT Library">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:30px;margin-top:5px;">
                <div class="row">
                    <div class="panel  panel-warning panel-styling">
                        <div class="panel-heading">Tin tức cập nhật</div>
                        <div class="panel-body scrollable-panel">

                            <?php foreach ($post_index as $key => $post_in){

                            ?>
                                
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <img href="<?php echo BASE_URL ?>tintuc/chitiettin/<?php echo $post_in['id_post'] ?>" src="<?php echo BASE_URL ?>public/uploads/post/<?php echo $post_in['image_post'] ?>">
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <h4><?php echo $post_in['title_post'] ?></h4>
                                    <p><?php echo substr($post_in['content_post'], 0,90).'...' ?></p>
                                </div>
                            </div>
                            <hr>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </section>