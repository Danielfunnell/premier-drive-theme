<?php get_header();?>


<?php pageBanner(array(
    'subtitle' => 'Our Customer Testimonials'
));?>




    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sticky-top" style="top:50px">
                        <?php dynamic_sidebar('page-sidebar'); ?>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container">
                    <div class="row">
                    <?php 
                    while(have_posts()) {
                      the_post(); ?>
                    <div class="container">
                        <div class="testomonials-box mx-auto">
                       
                    <img src="<?php the_post_thumbnail_url('testimonial-slider');?>" class="testomonials-box__picture"/>
            
                        
                                <blockquote class="testomonials-box__blockquote">&ldquo;<?php echo wp_trim_words(get_the_content(), 80);?>	&rdquo;
                                <a href= "<?php the_permalink(); ?>">Read more</a>
                                </blockquote>
                                
                                <a href= "<?php the_permalink(); ?>"><h5 class="testomonials-box__name"><?php the_title();?></h5></a>
                        </div>
                    </div>

                <?php } ?>

                <?php
                global $wp_query;
                
                $big = 999999999; // need an unlikely integer
                
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages
                ) );?>

             
                            
                        
                    
                    </div>
                
                </div>
               
            </div>
        
        
         </div>
    </div>
       
   
   



    
    

<?php get_footer();?>
