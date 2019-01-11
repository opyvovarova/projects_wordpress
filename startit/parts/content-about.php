

<?php
$about_company_title = get_field('about_company_title');
$about_company_description = get_field('about_company_description');
?>
<section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
                                <h2><?= $about_company_title; ?></h2>
                                <p><?= $about_company_description; ?></p>
                            </div>
                            <div class="about_content_box box-left">

                                <div class="about_txt_box">
                                    <p><?= get_field('left_about_text'); ?></p>
                                </div>
                                <div class="about_img_box">
                                    <img src="<?= get_field('left_about_image'); ?>" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content_box box-right">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?= get_field('right_about_image1'); ?>" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?= get_field('right_about_image2'); ?>" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="about_txt_box">
                                    <p><?= get_field('right_about_text'); ?> </p>
                                    <p><?= get_field('right_about_text2'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>