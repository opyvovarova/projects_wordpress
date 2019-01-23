
<div class="main-wrapper">

<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <h2><?= get_cat_name( 7 ); ?></h2>
            <p><?= category_description( 7 )?></p>
        </div>
        
        <div class="row">
        <?php
	// параметры по умолчанию
	$args = array(
	  'numberposts' => 0,
	  'orderby'     => 'date',
	  'order'       => 'ASC',
	  'include'     => array(),
	  'exclude'     => array(),
	  'meta_key'    => '',
	  'meta_value'  =>'',
	  'post_type'   => 'services',
	  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	);

	$posts = get_posts( $args );
$count = 0;
	foreach($posts as $post) : 
        setup_postdata($post);
	?>
            <div class="col-lg-4 col-md-6">
            
                <div class="servicebox">
                    <div class="srv_desc">
                        <h5 class="count"><?= 0 . $count += 1; ?></h5>
                        <h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?> </a></h4> 
                        <p><?= the_content(); ?></p>
                    </div>
                </div>
            </div>
            <?php
    
    endforeach;
    wp_reset_postdata();
            ?>

    </div>
</section>