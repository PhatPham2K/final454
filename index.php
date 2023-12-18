<?php get_header() ?>
<main class="">
    <div class="container slogan-group">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/gia-ca-canh-tranh.png" class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Giá cả cạnh tranh</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/san-pham-chinh-hang.png" class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Sản phẩm chính hãng</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/hang-hoa-da-dang.png" class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Hàng hóa đa dạng</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="slogan">
                    <div class="media">
                        <img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/dich-vu-toi-uu.png" class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <h5 class="">Dịch vụ tối ưu</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php 
            $best_seller = new WP_query(
                array(
                    'category_name' => 'best-seller',
                    'posts_per_page'=> 4
                )
            );

            if($best_seller ->have_posts()){
         ?>
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <h2>SẢN PHẨM BÁN CHẠY</h2>
            </div>
            <div class="row">
                <?php 
                    while($best_seller->have_posts()){
                        $best_seller->the_post();
                ?>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="<?php the_permalink() ?>">
                            <div class="group-info">
                                <?php the_post_thumbnail("full", array('class'=> 'img-fluid')) ?>
                            </div>
                            <div class="san-pham-title"><?php the_title() ?></div>
                            <div class="san-pham-price">Giá: <span>170.000</span></div>
                        </a>
                    </article>
                </div>
                <?php 
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    <?php } ?>
        <div class="loi-cam-on">
            Vi tính <b>ĐỨC THÀNH</b> xin cảm ơn Quý khách đã tin tưởng và sử dụng sản phẩm của chúng tôi
        </div>
        <!-- Laptop -->
        <?php dynamic_sidebar('sidebar-1') ?>
        <?php 
            $laptops = new WP_query(
                array(
                    'category_name' => 'laptop',
                    'posts_per_page'=> 4
                )
            );

            if($laptops ->have_posts()){
         ?>
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <a href="<?php the_permalink() ?>">
                    <h2>LAPTOP</h2>
                </a>
            </div>
            <div class="row">
                <?php 
                    while($laptops->have_posts()){
                        $laptops->the_post();
                 ?>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="<?php the_permalink() ?>">
                            <div class="group-info">
                                <?php the_post_thumbnail('full', array('class'=>'img-fluid')) ?>
                                <div class="info-hover">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="san-pham-title"><?php the_title(); ?></div>
                            <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                        </a>
                    </article>
                </div>
            <?php 
                }
                wp_reset_postdata();
             ?>
            </div>
        </div>
    <?php } ?>
    <!-- May bo -->
    <?php dynamic_sidebar('sidebar-2') ?>
        <?php 
            $cpus = new WP_query(
                array(
                    'category_name' => 'may-bo',
                    'posts_per_page'=> 4
                )
            );

            if($cpus->have_posts()){
         ?>
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <a href="https://www.vitinhducthanh.com/./may-bo">
                    <h2>MÁY BỘ</h2>
                </a>
            </div>
            <div class="row">
                 <?php 
                    while($cpus->have_posts()){
                        $cpus->the_post();
                 ?>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href=" <?php the_permalink() ?>">
                            <div class="group-info">
                                <?php the_post_thumbnail('full', array('class' =>'img-fluid')) ?>
                                <div class="info-hover">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="san-pham-title"><?php the_title(); ?></div>
                            <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                        </a>
                    </article>
                </div>
               <?php 
                }
                wp_reset_postdata();
             ?>
            </div>
        </div>
         <?php } ?>

        <!-- Màn hình -->
        <?php dynamic_sidebar('sidebar-3') ?>
        <?php 
            $screen = new WP_query(
                array(
                    'category_name' => 'man-hinh',
                    'posts_per_page'=> 4
                )
            );

            if($screen->have_posts()){
         ?>
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <a href="https://www.vitinhducthanh.com/./man-hinh">
                    <h2>MÀN HÌNH</h2>
                </a>
            </div>
            <div class="row">
            <?php while ($screen->have_posts()) {
                $screen->the_post();
            ?>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="<?php the_permalink() ?>">
                            <div class="group-info">
                                <?php the_post_thumbnail("full", array('class' => 'img-fluid')) ?> 
                            </div>
                            <div class="san-pham-title"><?php the_title() ?></div>
                            <div class="san-pham-price">Giá: <span>6.500.000</span></div>
                        </a>
                    </article>
                </div>
                <?php 
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    <?php } ?>
        <!-- Gears -->
        <?php 
            $gear = new WP_query(
                array(
                    'category_name' => 'ban-phim',
                    'posts_per_page' => 4
                )
            );
            if ($gear->have_posts()) {
        ?>
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <a href="https://www.vitinhducthanh.com/./gears">
                    <h2>GEARS</h2>
                </a>
            </div>
            <div class="row">
                <?php 
                    while ($gear->have_posts()) {
                        $gear->the_post();
                ?>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="<?php the_permalink() ?>">
                            <div class="group-info">
                                <?php the_post_thumbnail("full", array('class' => 'img-fluid')) ?>
                            </div>
                            <div class="san-pham-title"><?php the_title() ?></div>
                            <div class="san-pham-price">Giá: <span>690.000</span></div>
                        </a>
                    </article>
                </div>
                <?php 
                    }
                    wp_reset_postdata();
                ?>                            
                </div>
            </div>
        <?php } ?>
        <!-- Bàn ghế Gaming -->
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <a href="https://www.vitinhducthanh.com/./ban-ghe-gaming">
                    <h2>BÀN GHẾ GAMING</h2>
                </a>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/ban-ghe-gaming/ghe-gaming-e-dra-citizen-den.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/152319bf915b118cddf8d40ea0dace49.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">GHẾ GAMING E-DRA CITIZEN ( Đen )</div>
                            <div class="san-pham-price">Giá: <span>2.100.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/ban-ghe-gaming/ghe-gaming-e-dra-citizen-egc200-trang-hong.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/1.png">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">Ghế Gaming E-Dra Citizen (Trắng/Hồng )</div>
                            <div class="san-pham-price">Giá: <span>1.900.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/ban-ghe-gaming/ban-chu-z-gaming-e-dra-transformer-chan-khuyet.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/ban-gaming-edra-1.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">Bàn chữ Z Gaming E-Dra Transformer ( Chân Khuyết )</div>
                            <div class="san-pham-price">Giá: <span>1.350.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/ban-ghe-gaming/ban-chu-z-gaming.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/03/images-3.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">Bàn chữ Z Gaming</div>
                            <div class="san-pham-price">Giá: <span>1.190.000</span></div>
                        </a>
                    </article>
                </div>
            </div>
        </div>
        <!-- Camera -->
        <div class="san-pham-group mt-25">
            <div class="title-background">
                <a href="https://www.vitinhducthanh.com/./camera">
                    <h2>CAMERA</h2>
                </a>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-4-camera-2-0mp.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/DS-7204HQHI-K1-1_yaru-1v.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">BỘ HIKVISION 4 CAMERA 2.0MP</div>
                            <div class="san-pham-price">Giá: <span>7.000.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-8-camera-2-0mp.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/455f62bc382ec712fe004dc096129f49.jpg">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">BỘ HIKVISION 8 CAMERA 2.0MP</div>
                            <div class="san-pham-price">Giá: <span>12.000.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-4-camera-1-0mp.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/tron-bo-camera-hikvision-hdtvi1-4.png">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">BỘ HIKVISION 4 CAMERA 1.0MP</div>
                            <div class="san-pham-price">Giá: <span>4.700.000</span></div>
                        </a>
                    </article>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <article class="group-product">
                        <a href="https://www.vitinhducthanh.com/camera/bo-hikvision-8-camera-1-0mp.html">
                            <div class="group-info">
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2021/01/Tron-bo-8-than-dome-camera-hikvision-720p.png">
                                <div class="info-hover"></div>
                            </div>
                            <div class="san-pham-title">BỘ HIKVISION 8 CAMERA 1.0MP</div>
                            <div class="san-pham-price">Giá: <span>8.400.000</span></div>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <a href="https://www.vitinhducthanh.com/./tin-tuc">
                <h3 class="news-title"><span>TIN TỨC</span></h3>
            </a>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <article class="news-item">
                        <a href="https://www.vitinhducthanh.com/tin-tuc/intel-ra-mat-cpu-core-i9-10900k-10-nhan-20-luong-max-5-3ghz.html">
                            <div>
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/2068314-1024x476.jpg">
                            </div>
                            <div class="news-sub-title">Intel Ra mắt CPU Core I9-10900K 10 nhân 20 luồng Max 5.3Ghz</div>
                        </a>
                        <div class="news-excerpt">Intel Core i9-10900K thuộc dòng vi xử lý cho phép mở khoá hệ số nhân, hỗ trợ ép xung, xung...</span></div>
                        <a class="btn btn-outline-primary" href="https://www.vitinhducthanh.com/tin-tuc/intel-ra-mat-cpu-core-i9-10900k-10-nhan-20-luong-max-5-3ghz.html" role="button">Xem thêm</a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <article class="news-item">
                        <a href="https://www.vitinhducthanh.com/tin-tuc/bo-mach-chu-amd-b550-ra-mat-vao-thang-6.html">
                            <div>
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/2-CPU-Moi-cua-AMD-se-gia-nhap-dong-Ryzen-3000-1.png">
                            </div>
                            <div class="news-sub-title">Bo mạch chủ AMD B550 ra mắt vào tháng 6</div>
                        </a>
                        <div class="news-excerpt">Đầu năm nay, có thông tin rằng AMD sẽ bắt đầu sản xuất hàng loạt chipset B550 và A520 vào...</span></div>
                        <a class="btn btn-outline-primary" href="https://www.vitinhducthanh.com/tin-tuc/bo-mach-chu-amd-b550-ra-mat-vao-thang-6.html" role="button">Xem thêm</a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <article class="news-item">
                        <a href="https://www.vitinhducthanh.com/tin-tuc/card-nvidia-geforce-rtx-3000-series-se-ra-mat-vao-thang-9-2020.html">
                            <div>
                                <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/nvidia-rtx-3080-ti-1140x570-1-1024x512-1.jpg">
                            </div>
                            <div class="news-sub-title">Card NVIDIA GeForce RTX-3000 series Sẽ ra mắt vào tháng 9/2020</div>
                        </a>
                        <div class="news-excerpt">Như chúng ta đã biết NVIDIA đã giới thiệu cấu trúc Ampere sử dụng trên card đồ họa mới của...</span></div>
                        <a class="btn btn-outline-primary" href="https://www.vitinhducthanh.com/tin-tuc/card-nvidia-geforce-rtx-3000-series-se-ra-mat-vao-thang-9-2020.html" role="button">Xem thêm</a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>
