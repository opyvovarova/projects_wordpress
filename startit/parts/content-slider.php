<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Start_It
 */

?>

<section id="slider" class="slider_1" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/inc/images/slider/slider-bg1.jpg) ">
            <div class="slider">
                <div class="container">
                    <div class="slide-content">
                        <h6 class="sub_heading"><?= get_field('description_slider'); ?></h6>
                        <div class="typing_content">
                            <?= get_field('title_slider');?>
                        </div>
                    </div>
                </div>
                <div class="scroll_btn"><a href="index.html#about"><i class="fa fa-angle-down"></i></a></div>
                <div class="section-shape">
                    <img src="<?php bloginfo('template_directory')?>/inc/images/shape1.png)" alt="shape image">
                </div>
            </div>
        </section>