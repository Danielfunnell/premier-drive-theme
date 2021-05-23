<?php get_header();?>

<?php pageBanner(array(
    'subtitle' => get_the_title()
));?>

<div class="content">

<div class="container">

    <div class="row">

        <div class="col-lg-3">  

            <div class="sticky-top" style="top:50px">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
            </div>

        </div>

        <div class="col-lg-9">

        <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url('post_image');?>" alt="feature-image" class="img-fluid mb-5">

        <?php endif;?>


            <div class="title">
                <h1><?php the_title(); ?></h1>
            </div>
        
    

            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

            <?php endwhile; else: endif;?>

            <?php the_tags();?>

        </div>

    </div>

   
        

    


    </div>

    


</div>
    
    

<?php get_footer();?>