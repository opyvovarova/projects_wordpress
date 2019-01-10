
<div class="main-wrapper">
<?php 
$our_services_title = get_field('our_services_title');
$our_services_description = get_field('our_services_description');
$our_services_content = get_field('our_services_content');
?>
<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <h2><?= $our_services_title; ?></h2>
            <p><?= $our_services_description; ?></p>
        </div>
         <?php if( get_field('our_services_content') ):?> 
        <div class="row">
       
        <?php
        while( has_sub_field('our_services_content') ): ?>
            <div class="col-lg-4 col-md-6">
            
                <div class="servicebox">
                    <div class="srv_desc">

                        <h5 class="count"><?= the_sub_field('number'); ?></h5>
                        <h4><a href="#"><?= the_sub_field('title'); ?> </a></h4> 
                        <p><?= the_sub_field('text'); ?></p>
                    </div>
                </div>
            </div>
<?php endwhile;?>

<?php endif;?>
    </div>
</section>