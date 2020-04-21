<?php get_header();

while (have_posts()){
    the_post();
    ?>
    <div class="blog-hero <?php if (catch_that_image(get_the_ID())){ echo "imagefirst"; } ?>">
        <div class="blog-hero-inner container">
            <div class="post-back"><a href="<?php echo get_home_url() . "/blog" ?>">< Back To All Posts</a></div>
            <h1><?php the_title(); ?></h1>
            <div class="post-date"><span><?php the_date("F d, Y")?></span></div>
        </div>
    </div>

    <div class="single-container container <?php if (catch_that_image(get_the_ID())){ echo "imagefirst"; } ?>">
        <?php the_content(); ?>
    </div>


    <?php
}
get_footer(); ?>