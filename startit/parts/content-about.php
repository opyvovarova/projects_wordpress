
  <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
                            <h2><?= get_cat_name( 8 ); ?></h2>
                            <p><?= category_description( 8 )?></p>
                            </div>
                            <?php
                            $args = array(
                            'p'         => 331, // ID of a page, post, or custom type
                            'post_type' => 'about'
                            );
                            ?>

                            <?php $my_posts = new WP_Query($args); ?>
                            <?php while  ($my_posts->have_posts() ) : $my_posts->the_post(); ?>
                            <?=the_content();?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content_box box-right">
                            <?php
                            $args = array(
                            'p'         => 340, // ID of a page, post, or custom type
                            'post_type' => 'about'
                            );
                            ?>

                            <?php $my_posts = new WP_Query($args); ?>
                            <?php while  ($my_posts->have_posts() ) : $my_posts->the_post(); ?>
                            <?=the_content();?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata();?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

