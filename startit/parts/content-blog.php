
<section id="blog" class="blog">
                <div class="container">
                    <div class="section-title">
                    <h2><?= get_cat_name( 10 ); ?></h2>
                    <p><?= category_description( 10 )?></p>
                    </div>
                    <div class="row">
                    <?php
	// параметры по умолчанию
	$articles = array(
	  'numberposts' => 0,
	  'orderby'     => 'date',
	  'order'       => 'ASC',
	  'include'     => array(),
	  'exclude'     => array(),
	  'meta_key'    => '',
	  'meta_value'  =>'',
	  'post_type'   => 'article',
	  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	);

	$posts = get_posts( $articles );

	foreach($posts as $post) : 
        setup_postdata($post);
        $featured_img = wp_get_attachment_image_src( $post->ID );

	?>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog_post">
                            
                                <div class="post_img">
                                <a href="<?= the_permalink( );?>"><?= the_post_thumbnail( array (  360, 272 ) ); ?></a>
                                </div>
                                <div class="post_content">
                                    <div class="post_header">
                                        <h2 class="post_title"><a href="<?= the_permalink( ); ?>"><?= the_title( ); ?></a></h2>
                                        <div class="read_more"><?= the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
    
endforeach;
wp_reset_postdata();
        ?>

                    </div>
                </div>
            </section>