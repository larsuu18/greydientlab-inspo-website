<?php

/*
Template Name: About Page
*/
?>

<?php 
get_header();
$renimg = get_field('ren_img');
$unrenimg = get_field('unren_img');
?>

<section class="about-sec1">
                <div class="ab-title title-card-move">

                        <div class="img-path">
                                <img src="<?php echo $renimg;?>" alt="" class="jott-ren">
                        </div>

                        <div class="img-path img-clip">
                                <img src="<?php echo $unrenimg;?>" alt="" class="jott-unren">
                        </div>
                        <h1 class="title-text">
                        Lars is a digital artist
                        <br>
                        who loves bringing ideas to life.
                        </h1>
                        
                </div>
        </div>        
</section>

<section class="desc-about">

        <div class="desc-text">
                <div class="desc1">
                        <p class="desc-title">About Lars</p>
                                <div class="desc-par">
                                        <p>Lars is a digital designer with<br>
                                        over 4 years of experience. He<br>
                                        has worked with multiple esports <br>
                                        orgs and collaborated with various <br>
                                        different studios.</p>
                                </div>
                </div>
                <div class="desc1">

                        <p class="desc-title">Digital Capabilities</p>
                                <div class="desc-par">
                                        <p>Video Editing</p>
                                        <p>Photo Editing</p>
                                        <p>Motion Design</p>
                                        <p>3D Animation</p>
                                        <p>3D modelling</p>
                                        <p>Web Design</p>
                                </div>
                        <p class="desc-title2">Clients & Collaborators</p>
                                <div class="desc-par2">
                                        <p>NaVi</p>
                                        <p>Yuki Aim</p>
                                        <p>Shizuka Artistry</p>
                                        <p>Ashina Studios</p>
                                </div>
                </div>
        </div>

</section>


<?php get_footer();?>