<?php
$our_portfolio_title = get_field('our_portfolio_title');
$our_portfolio_description = get_field('our_portfolio_description');
?>

<section id="works" class="works">
                <div class="container">
                    <div class="section-title">
                        <h2><?= $our_portfolio_title; ?></h2>
                        <p><?= $our_portfolio_description; ?></p>
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
                        <?php if(get_field('web_portfolio')): ?>
                        <?php  while(has_sub_field('web_portfolio')): ?>

                            <div class="col-md-4 col-lg-3 portfolio web">

                                <div class="portfolio-wrapper"> 
                                    <div class="works-img">

                                        <a href="<?php the_sub_field('web_image'); ?>" data-fancybox="images">
                                            <img src="<?php the_sub_field('web_image'); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                        <h4><?php the_sub_field('title_image');?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php if(get_field('art_portfolio')): ?>
                            <?php  while(has_sub_field('art_portfolio')): ?>
                            <div class="col-md-4 col-lg-3 portfolio art">
                                <div class="portfolio-wrapper">
                                    <div class="works-img"> 
                                        <a href="<?php the_sub_field('art_image'); ?>" data-fancybox="images">
                                            <img src="<?php the_sub_field('art_image'); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                            <h4><?php the_sub_field('art_title');?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php if(get_field('creative_portfolio')): ?>
                            <?php  while(has_sub_field('creative_portfolio')): ?>
                            <div class="col-md-4 col-lg-3 portfolio creative ">
                                <div class="portfolio-wrapper">
                                    <div class="works-img"> 
                                        <a href="<?php the_sub_field('creative_image'); ?>" data-fancybox="images">
                                            <img src="<?php the_sub_field('creative_image'); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                        <h4><?php the_sub_field('creative_title');?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php if(get_field('wordpress_portfolio')): ?>
                            <?php  while(has_sub_field('wordpress_portfolio')): ?>
                            <div class="col-md-4 col-lg-3 portfolio wordpress">
                                <div class="portfolio-wrapper">
                                    <div class="works-img"> 
                                        <a href="<?php the_sub_field('wordpress_image'); ?>" data-fancybox="images">
                                            <img src="<?php the_sub_field('wordpress_image'); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                        <h4><?php the_sub_field('wordpress_title');?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                           

                        </div>
                    </div>
                </div>
            </section>