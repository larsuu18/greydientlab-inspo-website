<?php
get_header();
$ablars = get_field('about_lars');
$profpic = get_field('profile_pic');
$pic = $profpic['sizes']['thumbnail'];
$svg1 = get_field('navi_logo');
$svg2 = get_field('ashina_logo');
$svg3 = get_field('yuki_logo');
$cpar = get_field('client_par');
$fblink = get_field('fb_svg');
$iglink = get_field('ig_svg');
$linked = get_field('linkedn_svg');
$ytlink = get_field('yt_svg');
$desi1 = get_field('des_1');
$desi2 = get_field('des_2');
$wpvid1 = get_field('wp_video1');
$wpvid2 = get_field('wp_video2');
$wpvid3 = get_field('wp_video3');
$wpvid4 = get_field('wp_video4');
$btntext = get_field('button_text');
$shizlog = get_field('shiz_logo');
$yuklog = get_field('yuklog');
$navilog = get_field('navi_log');
$ashlog = get_field('ashina_log');
?>

<div class="nav-container">
        <div class="nav-button">
                <div class="nav-icon">
                        <span class="nav-element">
                                <a href="#intro-page">
                                <button class="button">    
                                        <svg class="svgIcon" viewBox="0 0 384 512">
                                                <path
                                                d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
                                                </path>
                                        </svg>                              
                                </button>
                                </a>  
                        </span>
                </div>
        </div>
</div>

<section class="page-wrap" id="intro-page">
        <div class="container">
                <div class="hero-wrapper">
                        <div class="intro-col-1">
                                <h1 class="ablars">
                                        <strong>
                                        Hi, I'm <span class="ablars-name">Lars</span><br>
                                        an aspiring web developer<br>
                                        and multi media artist.<br>
                                        </strong>
                                </h1>

                                <p class="parlars">
                                        I'm a digital artist who enjoys making art.<br>I was able to work with 
                                        big esports orgs like <a href="https://navi.gg/en" target = "_blank">NaVi</a> .
                                </p>

                                <?php if( have_rows('social_links') ): ?>
                                        <ul class="soc-link">
                                <?php while( have_rows('social_links') ): the_row(); 
                                        $slimage = get_sub_field('sl_image');
                                        $sllink = get_sub_field('sl_link');
                                        ?>
                                        <li class="social-img">
                                                <a href="<?php echo $sllink;?>" target = "_blank"><img src="<?php echo $slimage;?>" alt=""></a>
                                        </li>
                                <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>

                        </div>

                        <div class="intro-col-2">
                                <div class="pic">
                                        <img src="<?php echo $pic;?>" class="prof-pic">
                                </div>
                        </div> 
                </div>     
        </div>
</section>

<section class="client container" id="client-page">
        <div class="client-cont">
                <div class="des1">
                <img src="<?php echo $desi1;?>" alt="">
                </div>
                <div class="par-client">
                        <p class="worked-with">
                                <?php echo $cpar;?>
                        </p>
                </div>        
                <div class="pic-client">

                        <?php if( have_rows('client_link') ): ?>
                                <ul class="client-list">
                        <?php while( have_rows('client_link') ): the_row(); 
                                        $clipic = get_sub_field('cli_pic');
                                        $clilink = get_sub_field('cli_link');
                                ?>
                                <li class="client-img">
                                        <a href="<?php echo $clilink;?>" target = "_blank"><img src="<?php echo $clipic;?>" alt=""></a>
                                </li>
                        <?php endwhile; ?>
                                </ul>
                        <?php endif; ?>

                </div>
                <div class="des1">
                        <img src="<?php echo $desi2;?>" alt="">
                </div>        
        </div>
</section>

<section class="work-section container" id="work-page">

        <div class="work-cytus1 wrapper">

                        <div class="wp-text-block">

                                <img src="<?php echo $shizlog;?>" alt="" class="wp-logo">

                                <h1 class="wp-title">
                                        Cytus 1<br>Valorant Montage
                                </h1>

                                <p class="wp-desc">
                                        A video showcasing the growth of Lars' skill<br>in editing and 3D animation in a span of one and a half years.
                                </p>

                                <button class="view_button">
                                <a href="https://youtu.be/5rOKeYDer-w?si=kakQWBF49BSUK8ct" target="_blank" class="button-link"><span><?php echo $btntext;?></span></a>
                                </button>

                        </div>

                <div class="wp_vid">

                        <video loop muted plays-inline class="wp1_vid">

                                <source src="<?php echo $wpvid1;?>" type="video/mp4">

                        </video>

                </div>

        </div>

        <div class="work-yukiaim wrapper">

                        <div class="wp-text-block">

                                <img src="<?php echo $yuklog;?>" alt="" class="wp-logo">

                                <h1 class="wp-title">
                                        Yuki Aim SYM<br>Announcement Video
                                </h1>

                                <p class="wp-desc">
                                        A video announcing SYM joining<br>Yuki Aim's group of exceptional fraggers.
                                </p>

                                <button class="view_button">
                                        <a href="https://youtu.be/jkEJWWWZtM4?si=SMPlZUbWo35yf9O3" target="_blank" class="button-link"><span><?php echo $btntext;?></span></a>
                                </button>

                        </div>

                <div class="wp_vid">

                        <video loop muted plays-inline class="wp1_vid">

                                <source src="<?php echo $wpvid2;?>" type="video/mp4">

                        </video>

                </div>

        </div>

        <div class="work-navi wrapper">

                        <div class="wp-text-block">

                                <img src="<?php echo $navilog;?>" alt="" class="wp-logo">

                                <h1 class="wp-title">
                                        Navi VCT<br>Announcement
                                </h1>

                                <p class="wp-desc">
                                        A video announcing the participation of NaVi's<br>Valorant roster in VCT Sao Paolo.
                                </p>

                                <button class="view_button">
                                <a href="https://youtu.be/xsGedz8DHKQ?si=m2BypwX11NJ9dJsS" target="_blank" class="button-link"><span><?php echo $btntext;?></span></a>
                                </button>

                        </div>

                <div class="wp_vid">

                        <video loop muted plays-inline class="wp1_vid">

                                <source src="<?php echo $wpvid3;?>" type="video/mp4">

                        </video>

                </div>

        </div>

        <div class="work-ashina wrapper">

                        <div class="wp-text-block">

                                <img src="<?php echo $ashlog;?>" alt="" class="wp-logo">

                                <h1 class="wp-title">
                                        Ashina Studios<br>3D Animation Showcase
                                </h1>

                                <p class="wp-desc">
                                        A video showcasing Ashina Studio's skills in 3D animation<br>and the variety on what they can offer.
                                </p>

                                <button class="view_button">
                                <a href="https://youtu.be/-pV2xTU_J8Y" target="_blank" class="button-link"><span><?php echo $btntext;?></span></a>
                                </button>

                        </div>

                <div class="wp_vid">

                        <video loop muted plays-inline class="wp1_vid">

                                <source src="<?php echo $wpvid4;?>" type="video/mp4">

                        </video>
                
                </div>

        </div>


</section>


<?php get_footer();?>