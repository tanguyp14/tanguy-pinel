<?php /* Template Name: CV_TMPL */
get_header();
?>

<span id="cv">
    <div id="tiny_line_up"></div>
    <div id="left">
        <div id="presentation">
            <h1>
                <?php the_field('nom_prenom'); ?>
            </h1>
            <h3>
                <?php the_field('metier'); ?>
            </h3>
            <div id="tiny_rec_blue"></div>
            <p><?php the_field('presentation'); ?></p>
        </div>
        <div id="exp_pro">
            <h2>Experiences pro.</h2>
            <div class="tiny_cir_yel">
                <ul class="left_cir">
                    <?php echo str_repeat("<li></li>", 8); ?>
                </ul>
                <ul class="right_cir">
                    <?php echo str_repeat("<li></li>", 8); ?>
                </ul>
            </div>
            <?php
            $exp_pro = get_field('exp_pro');
            if ($exp_pro) : ?>
                <h5>
                    <?php echo $exp_pro['exp_pro_1']; ?>
                </h5>
                <div class="lieu_exp">
                    <p><?php echo $exp_pro['lieu_exp_pro_1']; ?></p>
                    <p><?php echo $exp_pro['annee_exp_pro_1']; ?></p>
                </div>
                <div class="text_exp">
                    <p><?php echo $exp_pro['desc_pro_1']; ?></p>
                </div>
                <h5>
                    <?php echo $exp_pro['exp_pro_2']; ?>
                </h5>
                <div class="lieu_exp">
                    <p><?php echo $exp_pro['lieu_exp_pro_2']; ?></p>
                    <p><?php echo $exp_pro['annee_exp_pro_2']; ?></p>
                </div>
                <div class="text_exp">
                    <p><?php echo $exp_pro['desc_pro_2']; ?></p>
                </div>
            <?php endif ?>
        </div>
        <div id="comp">
            <h2>Compétences liées au web</h2>
            <p><?php the_field('comp'); ?></p>
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
        <div id="contact">
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li id="adress"><?php the_field('adresse') ?></li>
                        <li id="phone"><?php the_field('telephone') ?></li>
                        <li id="mail">
                            <a href="mailto:<?php the_field('mail') ?>">
                            <?php the_field('mail') ?></a>
                        </li>
                    </ul>
            </div>
            <div>
                <h4>Diplômes & Études</h4>
                <p><?php the_field('etudes') ?></p>
            </div>
            <div>
            <h4>Plus !</h4>
                <ul>
                    <li id="ang"><?php the_field('anglais') ?></li>
                    <li id="jap"><?php the_field('japonais') ?></li>
                    <li id="car"><?php the_field('voiture') ?></li>
                </ul>
            </div>
            <div>
                <h4>Hobbies</h4>
                <p><?php the_field('hobbies') ?></p>
            </div>
        </div>
        <div id="big_rec_blue"></div>
    </div>
</span>