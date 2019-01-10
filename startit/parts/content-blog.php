
<?php
$latest_articles_title = get_field('latest_articles_title');
$latest_articles_description = get_field('latest_articles_description');
?>
<section id="blog" class="blog">
                <div class="container">
                    <div class="section-title">
                        <h2><?= $latest_articles_title; ?></h2>
                        <p><?= $latest_articles_description;?></p>
                    </div>
                    <?php if( get_field('content_articles') ):  ?>
                    <div class="row">
                    <?php

                    while(has_sub_field('content_articles') ):
                    ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog_post">
                            
                                <div class="post_img">
                                    <a href="<?= the_sub_field('url_image_articles'); ?>"><img src="<?= the_sub_field('image'); ?>" alt="img"></a>

                                </div>
                                <div class="post_content">
                                    <div class="post_header">
                                        <h2 class="post_title"><a href="<?= the_sub_field('title_articles_url');?>"><?= the_sub_field('articles_title_text'); ?></a></h2>
                                        <div class="read_more"><a href="<?= the_sub_field('go_articles_link');?>"><?= the_sub_field('go_articles_text'); ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>

                    </div>
                    <?php endif; ?>
                </div>
            </section>