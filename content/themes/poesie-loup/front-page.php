<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
<?php get_template_part('template-parts/banner'); ?>
<?php endwhile; endif; ?>


<?php

$args= [
    'post-type'=> 'post',
    'post_per_page'=> 4,
    'orderby'=> 'rand'
];
$wpqueryArticles = new WP_Query($args);?>
 <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
 <?php get_template_part('template-parts/posts'); ?>
 <?php endwhile; endif; ?>



<?php get_footer(); ?>