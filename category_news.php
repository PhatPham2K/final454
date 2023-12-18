<?php get_header(); ?>
	        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php bloginfo('url') ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php single_term_title() ?></li>
                </ol>
            </div>
        </nav>
        <main id="content">
            <div class="container">
                <h1 class="entry-title"><span>Tin tức</span></h1>
                <div class="row san-pham-group">
                	<?php 
	                	if ( have_posts() ) {
	                		while ( have_posts() ) {
	                			the_post();
                	 ?>
                    <div class="col-12 col-sm-6 col-md-4">
                        <article class="news-item">
                            <a href="<?php the_permalink() ?>">
                                <div>
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                                </div>
                                <div class="news-sub-title"><?php the_title() ?></div>
                            </a>
                            <div class="news-excerpt">
                            	<?php the_excerpt() ?>
                            </div>
                            <a class="btn btn-outline-primary" href="<?php the_permalink() ?>" role="button">Xem thêm</a>
                        </article>
                    </div>
                    <?php 
                    		} 
                		} 
                     ?>
                </div>
                <div class="pagination-group">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" >1</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Sau</a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
<?php get_footer(); ?>
