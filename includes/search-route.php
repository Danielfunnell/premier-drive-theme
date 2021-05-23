<?php 

function premierSearch() {
    register_rest_route('premier/v1','search',array(
        'methods' => WP_REST_SERVER::READABLE, //equates to GET
        'callback' => 'premierDriveSearchResults'
    ));
}

add_action('rest_api_init', 'premierSearch');

function premierDriveSearchResults($data) {
   $mainQuery = new WP_Query(array(
       'post_type' => array('post', 'page', 'testimonials'),
       's' => sanitize_text_field( $data['term'] )  // s = search
   ));
    
   $results = array(
       'generalInfo' => array(),
       'testimonials' => array()
   );

   while($mainQuery->have_posts()) {
        $mainQuery->the_post();

        if(get_post_type() == 'post' OR get_post_type() == 'page'){
            array_push($results['generalInfo'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ));
        }

        if(get_post_type() == 'testimonials'){
            array_push($results['testimonials'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ));
        }

        

        
   }

   return $results;

}


?>