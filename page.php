<?php get_header();?>

<?php pageBanner($args);?>

<div class="content">

<div class="container">


  

        <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url('post_image');?>" alt="feature-image" class="img-fluid mb-5">

        <?php endif;?>

           

            <div class="title">
                <h2 class="u-center-text display-4 mt-4"><?php the_title(); ?></h2>
                <div class="welcome__para u-center-text">
                        <p class="lead p-3 "><?php the_field('title_paragraph')?>
                        </p>
                        
                    </div>
            </div>
            
        
 
            <div class="container mt-5 mb-5">
                <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

            <?php endwhile; else: endif;?>

            </div>

            
            

    </div>

   
        

    


    </div>

    


</div>
    
    

<?php get_footer();?>