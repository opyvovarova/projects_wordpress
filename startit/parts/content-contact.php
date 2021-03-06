<section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                    <?php if( get_field('information') ):?> 

                   
                        <div class="col-md-4 col-lg-4">
                            <div class="contact-info">
                            <?php
                            while( has_sub_field('information') ): ?>
                                <div class="contact-info-details">
                                    <h4><?= the_sub_field('title_information'); ?></h4>
                                    <p><?= the_sub_field('information_description'); ?></p>
                                </div>
                            <?php endwhile;?>
    
                                
                            </div>
                        </div>
                        <?php endif;?>
                        <div class="col-md-7 col-lg-7 offset-lg-1">
                            <div class="contact-form-two">
                                <div class="contact-title">
                                    <h3>Drop Us a line</h3>
                                    <form class="appoint-form-two" action="http://wpthemebooster.com/demo/themeforest/html/carrby/register.php" method="post">
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="submit-btn">
                                                        <input type="submit" name="submit" class="btn" value="send mail">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                <?php if( get_field('social_icons') ):?>
                                                    <ul class="top-social list-inline">
                                                <?php while( has_sub_field('social_icons') ): ?>
                                                <li><?= the_sub_field('icons'); ?></li>
                                                        
                                            <?php endwhile;  ?>  
                                                    </ul>
                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>