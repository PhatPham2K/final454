<?php get_header(); ?>
<nav aria-label="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php bloginfo('url') ?>">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php the_title()?></li>	
		</ol>
	</div>	
</nav>
<main id="content">
	<div class="container">
        <?php 
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
            <h1 class="entry-title"><span><?php the_title()?></span></h1>
            <div>
            	<?php the_content(); ?>
            </div>
        <?php 
        	} 
        }
    ?>
		
	</div>
</main>
<?php get_footer(); ?>
