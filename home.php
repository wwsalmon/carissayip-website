<?php get_header();
?>
<div class="blog-hero blog-home">
</div>
<div class="container blog-container">
    <?php
    $firstpost = true;
    while (have_posts()){
        the_post();
        if ($firstpost){
            ?>
            <div class="latest-post"><span>Latest Post</span></div>
            <div class="first-post-container">
                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                <div class="post-date"><span><?php the_time("F d, Y"); ?></span></div>
                <div class="post-image"><img src="<?php echo catch_that_image(get_the_ID()); ?>"/></div>
                <div class="post-more"><a href="<?php the_permalink(); ?>">Read More ></a></div>
            </div>
            <?php
            $firstpost = false;
        } else{
            ?>
            <div class="post-top"></div>
            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            <div class="post-date"><span><?php the_time("F d, Y"); ?></span></div>
            <div class="post-image"><img src="<?php echo catch_that_image(get_the_ID()); ?>"/></div>
            <div class="post-more"><a href="<?php the_permalink(); ?>">Read More ></a></div>
            <?php
        }
    } ?>

</div>
<?php
get_footer(); ?>