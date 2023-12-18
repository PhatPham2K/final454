<?php 
    get_header();
    $categories = get_the_category();
 ?>
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://www.vitinhducthanh.com">Trang chủ</a></li>
                    <li class="breadcrumb-item">
                        <?php 
                            // if ( ! empty( $categories ) ) {
                                echo $categories[0]->name;  
                            // }
                        // echo $categories[0] -> name;
                         ?> 
                    </li>
                </ol>
            </div>
        </nav>

        <?php 
            if(in_category('news')){
         ?>

        <main id="content">
            <div class="container">
                <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                 ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-content">
                       <?php the_content(); ?>
                    </div>
                <?php 
                        } 
                    } 
                 ?>
                <div class="related-article">
                    <h2 class="block-title line-left mb-40">Bài viết cùng chuyên mục</h2>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <article class="article-group">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-4">
                                        <a href="https://www.vitinhducthanh.com/tin-tuc/bo-mach-chu-amd-b550-ra-mat-vao-thang-6.html">
                                        <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/2-CPU-Moi-cua-AMD-se-gia-nhap-dong-Ryzen-3000-1.png">
                                        </a>                            
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-8">
                                        <a href="https://www.vitinhducthanh.com/tin-tuc/bo-mach-chu-amd-b550-ra-mat-vao-thang-6.html">
                                            <h2 class="article-title">Bo mạch chủ AMD B550 ra mắt vào tháng 6</h2>
                                        </a>
                                        <p class="article-date"><i class="fa fa-calendar" aria-hidden="true"></i> 04/11/2020</p>
                                        <p class="article-excerpt d-none d-sm-block" >Đầu năm nay, có thông tin rằng AMD sẽ bắt đầu sản xuất hàng loạt chipset B550 và A520 vào...</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <article class="article-group">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-4">
                                        <a href="https://www.vitinhducthanh.com/tin-tuc/card-nvidia-geforce-rtx-3000-series-se-ra-mat-vao-thang-9-2020.html">
                                        <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/nvidia-rtx-3080-ti-1140x570-1-1024x512-1.jpg">
                                        </a>                            
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-8">
                                        <a href="https://www.vitinhducthanh.com/tin-tuc/card-nvidia-geforce-rtx-3000-series-se-ra-mat-vao-thang-9-2020.html">
                                            <h2 class="article-title">Card NVIDIA GeForce RTX-3000 series Sẽ ra mắt vào tháng 9/2020</h2>
                                        </a>
                                        <p class="article-date"><i class="fa fa-calendar" aria-hidden="true"></i> 04/11/2020</p>
                                        <p class="article-excerpt d-none d-sm-block" >Như chúng ta đã biết NVIDIA đã giới thiệu cấu trúc Ampere sử dụng trên card đồ họa mới của...</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php 
            }else{
                if ( have_posts() ) {
                    while ( have_posts() ) {
                    the_post();
         ?>
        <main id="content">
            <div class="container">
              <!--   <article id="post-310" class="post-310 post type-post status-publish format-standard has-post-thumbnail hentry category-may-bo-moi"> -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <?php 
                                            the_post_thumbnail('full', array(
                                                'class' => 'd-block w-100'
                                            ))
                                         ?>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> 
                                <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> 
                                <ol class="carousel-indicators list-inline">
                                    <li class="list-inline-item active"> 
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> 
                                        <?php 
                                            the_post_thumbnail('full', array(
                                                'class' => 'img-fluid'
                                            ))
                                         ?>
                                        </a> 
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <h1 class="entry-title"><?php the_title() ?></h1>
                            <div class="entry-price">Giá: <span>Liên hệ</span></div>
                            <div class="entry-content">
                               <?php the_content() ?>
                            </div>
                            <div class="promotion-groups">
                                <div class="promotion-title">Khuyến mãi</div>
                                <div class="promotion-detail">Tặng kèm phím chuột khi mua cùng màn hình LCD<br />
                                    Bảo hành 3 năm
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-product">
                        <h2 class="product-sub-title"><span>MÔ TẢ SẢN PHẨM</span></h2>
                    </div>
                <!-- </article> -->
                <div class="related-article">
                    <h2 class="block-title line-left mb-40">Bài viết cùng chuyên mục</h2>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <article class="article-group">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-4">
                                        <a href="https://www.vitinhducthanh.com/may-bo/may-bo-moi/may-bo-gaming-pubg-i3-th10-colorful-gtx-1650-4gb.html">
                                        <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/10749.png">
                                        </a>                            
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-8">
                                        <a href="https://www.vitinhducthanh.com/may-bo/may-bo-moi/may-bo-gaming-pubg-i3-th10-colorful-gtx-1650-4gb.html">
                                            <h2 class="article-title">Máy Bộ Gaming PUBG – i3 th10 – Colorful GTX 1650 4GB</h2>
                                        </a>
                                        <p class="article-date">Giá: <span>Liên hệ</span></p>
                                        <p class="article-excerpt d-none d-sm-block" >– Mainboard: Gigabyte B460M Gaming HD – Cpu: Intel Core i3 10100F 3.6Ghz – Ram: DDR4 Corsair 8G/3000 tải nhiệt...</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <article class="article-group">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-4">
                                        <a href="https://www.vitinhducthanh.com/may-bo/may-bo-moi/may-bo-gaming-ffol4-g6400-ram-8gb.html">
                                        <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/unnamed1.jpg">
                                        </a>                            
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-8">
                                        <a href="https://www.vitinhducthanh.com/may-bo/may-bo-moi/may-bo-gaming-ffol4-g6400-ram-8gb.html">
                                            <h2 class="article-title">Máy Bộ Gaming FFOL4 &#8211; G6400 – Gigabyte GTX1030 2GB</h2>
                                        </a>
                                        <p class="article-date">Giá: <span>Liên hệ</span></p>
                                        <p class="article-excerpt d-none d-sm-block" >– Mainboard: Gigabyte H410M-H – Cpu: Intel G6400 Gold – Ram: DDR4 Kingston 8Gb/2666 – SSD: Kingmax 120GB – Nguồn:...</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php 
            }
            } 
                } 
         ?>
<?php get_footer(); ?>
