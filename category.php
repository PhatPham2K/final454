<?php get_header(); ?>
	<nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php single_term_title() ?></li>
                </ol>
            </div>
        </nav>
        <main id="content">
            <div class="container">
                <h1 class="entry-title"><span>Màn hình</span></h1>
                <div class="row san-pham-group">
                	<?php 
                		if ( have_posts() ) {
                			while ( have_posts() ) {
                				the_post();
                	 ?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <article class="group-product">
                            <a href='<?php the_permalink(); ?>'>
                                <div class="group-info">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <div class="info-hover">
                                    	<?php the_content() ?>
                                    </div>
                                </div>
                                <div class="san-pham-title"><?php the_title() ?></div>
                                <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                            </a>
                        </article>
                    </div>
                    <?php 
                    		} 
                		} 	
                     ?>
                </div>
            </div>
        </main>
<?php get_footer(); ?>
