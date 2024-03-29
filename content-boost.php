<?php

$income_feature_image   = get_field('income_feature_image');
$income_section_title   = get_field('income_section_title');
$income_section_desc    = get_field('income_section_description');
$reason_1_t             = get_field('reason_1_title');
$reason_2_t             = get_field('reason_2_title');
$reason_1_d             = get_field('reason_1_description');
$reason_2_d             = get_field('reason_2_description');

?>

<!-- BOOST YOUR INCOME -->
<section id="boost-income">
    <div class="container">
        
        <div class="section-header">

            <!-- If user uploaded an image -->
            <?php
                if( !empty($income_feature_image) ) : ?>
                <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
            <?php endif; ?>

            
            <h2><?php echo $income_section_title; ?></h2>
        </div>
        
        <p class="lead">
            <?php echo $income_section_desc; ?>
        </p>

        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $reason_1_t; ?></h3>
                <p><?php echo $reason_1_d; ?></p>
            </div>
            <div class="col-sm-6">
                <h3><?php echo $reason_2_t; ?></h3>
                <p><?php echo $reason_2_d; ?></p>
            </div>
        </div>

    </div>
</section>