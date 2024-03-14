<?php

/*
Template Name: Contact Page
*/
?>

<?php get_header();?>



<?php 

$args = array(
        'role' => 'author',
        'fields' => 'ID',
    );

    $user_ids = get_users($args);
    
$homepageEvents = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'my-custom-post-type',
        'author__in' => $user_ids
));

while($homepageEvents -> have_posts()){
        $homepageEvents -> the_post(); ?>
        <li class="posttype"><?php the_title();?></li>
        <?php }
        ?>



<?php get_footer();?>