<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
	add_theme_support('post-thumbnails');
	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'category-menu' => 'Category Menu',
			'footer-menu' =>'Footer Menu'
		)
	);
}
 // Register additional sidebars\
my_register_sidebar( array( 'name' => 'Sidebar 1', 'id' => 'sidebar-1' ) );
my_register_sidebar( array( 'name' => 'Sidebar 2', 'id' => 'sidebar-2' ) );
my_register_sidebar( array( 'name' => 'Sidebar 3', 'id' => 'sidebar-3' ) );
add_action( 'widgets_init', 'my_register_sidebar' );

function my_register_sidebar( $args = array() ) {
	global $wp_registered_sidebars;

	$i = count( $wp_registered_sidebars ) + 1;

	$id_is_empty = empty( $args['id'] );

	$defaults = array(
		/* translators: %d: Sidebar number. */
		'name'           => sprintf( __( 'Sidebar %d' ), $i ),
		'id'             => "sidebar-$i",
		'description'    => '',
		'class'          => '',
		'before_widget'  => '',
		'after_widget'   => "",
		'before_title'   => '',
		'after_title'    => "",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	);

	$sidebar = wp_parse_args( $args, apply_filters( 'register_sidebar_defaults', $defaults ) );

	if ( $id_is_empty ) {
		_doing_it_wrong(
			__FUNCTION__,
			sprintf(
				/* translators: 1: The 'id' argument, 2: Sidebar name, 3: Recommended 'id' value. */
				__( 'No %1$s was set in the arguments array for the "%2$s" sidebar. Defaulting to "%3$s". Manually set the %1$s to "%3$s" to silence this notice and keep existing sidebar content.' ),
				'<code>id</code>',
				$sidebar['name'],
				$sidebar['id']
			),
			'4.2.0'
		);
	}

	$wp_registered_sidebars[ $sidebar['id'] ] = $sidebar;

	add_theme_support( 'widgets' );

	do_action( 'register_sidebar', $sidebar );

	return $sidebar['id'];
}
add_action( 'widgets_init', 'register_foo' );
function register_foo() {
	register_widget( 'Foo_Widget' );
}
class Foo_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'Custom-Category', // Base ID
			'Custom-Category', // Name
			array( 'description' =>'show a custom category to Index Page' ) // Args
		);
	}

	public function widget( $args, $instance ) {
		$title = ! empty($instance['title']) ? $instance['title'] : "Default Title";
		$categoryName = $instance['categoryName'];
	?>
            <div class="san-pham-group mt-25">
                <div class="title-background">
                    <h2><?php echo $title; ?></h2>
                </div>
                <div class="row">
                <?php
                    $products = new WP_query(
                    	array(
                    		'category_name' =>$categoryName,
                    		'posts_per_page' =>4
                    	)
                    );
                    if($products->have_posts()){
                    while ( $products->have_posts() ) {
                        $products->the_post();
                ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <article class="group-product">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="group-info">
                                        <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
                                        <div class="info-hover"><?php the_content(); ?></div>
                                    </div>
                                    <div class="san-pham-title"><?php the_title(); ?></div>
                                    <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                                </a>
                            </article>
                        </div>
                <?php
                    	}
                    	wp_reset_postdata();
                    }
                ?>
                </div>
            </div>
    <?php

    }
    
	public function form( $instance ) {

		$title = ! empty($instance['title']) ? $instance['title'] : '';
	?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><Title</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		 </p>
		 <p>
			<label for="<?php echo $this->get_field_id( 'categoryName' ); ?>">SelectCategory</label>
			<select class="widefat" id="<?php echo $this->get_field_id('categoryName'); ?>" name="<?php echo $this->get_field_name('categoryName'); ?>">
		<?php 
				$categories = get_categories(array(
					'orderby' =>'name',
					'oder' => 'ASC',
					'hide_empty' =>false,
				));
				foreach ($categories as $category) {
		?>
				<option value="<?php echo $category->slug ?>" <?php echo $category->slug == $instance['categoryName'] ? 'selected':''; ?>> <?php echo $category->name ?>
				</option>
			<?php } ?>		
			</select>
		 </p>
		<?php
	}
	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['categoryName'] = ( ! empty( $new_instance['categoryName']))?$new_instance['categoryName'] : '';
		return $instance;
	}
} // class Foo_Widget
$Foo_Widget = new Foo_Widget();
?>
