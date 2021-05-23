<?php get_header();?>

<?php pageBanner();?>





<div class="container">

    <div class="row">

        <div class="col-lg-3">
        
            <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url('post_image');?>" alt="feature-image" class="img-fluid mb-5">

            <?php endif;?>
        
        </div>

       

        <div class="col-lg-9">

        


            <div class="title">
                <h2><?php the_title(); ?></h2>
                
            </div>
        
    

            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

            <?php endwhile; else: endif;?>

            <?php the_tags();?>

        </div>

    </div>

   
        

    


    </div>

    



    

<?php get_footer();?>