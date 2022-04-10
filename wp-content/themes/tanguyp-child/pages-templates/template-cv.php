<?php /* Template Name: CV_TMPL */
get_header();
?>

<span id="cv">
    <div id="left">
        <div id="presentation">
            <h1>
                <?php the_field('nom_prenom'); ?>
            </h1>
            <h3>
                <?php the_field('metier'); ?>
            </h3>
            <div id="tiny_rec_blue"></div>
            <p>
                <?php the_field('presentation'); ?>
            </p>
        </div>
        <div id="exp_pro">
            <h2>Experiences pro.</h2>
            <?php
            $exp_pro = get_field('exp_pro');
            if ($exp_pro) : ?>
                <h5>
                    <?php echo $exp_pro['exp-pro-1']; ?>
                </h5>
                <div>
                    <p><?php echo $exp_pro['lieu_exp_pro_1']; ?></p>
                    <p><?php echo $exp_pro['annee_exp_pro_1']; ?></p>
                </div>
                <div>
                    <?php echo $exp_pro['desc_pro_1']; ?>
                </div>
            <?php endif ?>
        </div>
    </div>
    <div id="right">
        <div id="pp">
            <div class="tiny_cir_yel">
                <ul class="left_cir">
                    <?php echo str_repeat("<li></li>", 8); ?>
                </ul>
                <ul class="right_cir">
                    <?php echo str_repeat("<li></li>", 8); ?>
                </ul>
            </div>
        </div>
    </div>
</span>