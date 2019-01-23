<?php
/*
Template Name: Portfolio
*/
?>

<section id="works" class="works">
                <div class="container">
                    <div class="section-title">
                    <h2><?= get_cat_name( 9 ); ?></h2>
                    <p><?= category_description( 9 )?></p>
                    </div>

                    <ul id="filters" class="clearfix text-center">
                        <li><span class="filter active" data-filter="*">All</span></li>
                        <li><span class="filter" data-filter=".web">Web Design</span></li>
                        <li><span class="filter" data-filter=".art">Art Direction</span></li>
                        <li><span class="filter" data-filter=".creative">Creative</span></li>
                        <li><span class="filter" data-filter=".wordpress">WordPress</span></li>
                    </ul>
                    <div id="portfoliolist">
                    <div class="row">
                    <?php
                        $portfolios = array(
                            'numberposts' => 0,
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'portfolio',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            );

                            $posts = get_posts( $portfolios );

                            foreach($posts as $post) : 
                                setup_postdata($post);
                                
                            ?>
                            <div class="col-md-4 col-lg-3 portfolio <?php
                         $terms = get_the_terms( $post->ID, 'portfolio_tag' );
                                if ($terms) {
                                    foreach($terms as $term) {
                                    echo " " . $term->name . " ";
                                    } 
                                }
                           
                            ?>" style="display: inline-block;" data-bound>
                                <div class="portfoliso-wrapper"> 
                                    <div class="works-img">
                                        <a href="<?= the_permalink(  ) ?>" data-fancybox="images">
                                            <?=the_post_thumbnail( array (  360, 272 ) );?>
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <?= the_content();?>
                                    </div>
                                </div>
                            </div>
                            <?php
    
                        endforeach;
                        wp_reset_postdata();
                                ?>
                            
                        

                        </div>
                   
                   </div>
                   
                </div>
            </section>