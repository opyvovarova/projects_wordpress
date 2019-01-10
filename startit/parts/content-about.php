

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
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem corpo commosequatur? Quis autem vel eum iure veniam, quis nostru sequatur? Quis autem vel eum Quis autem vel eum iure veniam lorem quis nostru iure...</p>
                                </div>
                                <div class="about_img_box">
                                    <img src="<?php bloginfo('template_directory')?>/inc/images/about/img1.jpg)" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content_box box-right">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?php bloginfo('template_directory')?>/inc/images/about/img2.jpg)" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <img src="<?php bloginfo('template_directory')?>/inc/images/about/img3.jpg)" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="about_txt_box">
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem corporate loorem commosequatur? Quis autem vel eum iure veniam, quis nostruction doloru sequatur? Quis autem vel eum Quis autem vel eum iure veniam lorem ipsui lorem quis nostru iure.Ut enim ad minima veniam, quis nostrum exercitatio commosequatur? </p>
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem corporate loorem commosequatur? Quis autem vel eum iure veniam, quis nostruction dolor sequatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>