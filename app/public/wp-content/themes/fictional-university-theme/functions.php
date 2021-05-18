<?php 

//created this university_files() function to get the style sheet 
function university_files() {
   
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  
    if(strstr($_SERVER['SERVER_NAME'], 'localhost:10004')) {

        wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js',NULL,'1.0',true);

    } else {
        
    wp_enqueue_script('over-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'),NULL,'1.0',true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'),NULL,'1.0',true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'));
    }
}

/* to run this function below action is taken 
// 'first_argument' what type of instructions we are giving it
// 'second argument' name of the function we want to run */
add_action('wp_enqueue_scripts','university_files'); 

/* Adding title of the browser tab*/
function university_features() {
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','university_features');

function university_adjust_queries ($query) {

    
if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1); 
  }

    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
        $today = date('Ymd');     
        $query->set('meta_key','event_date');
        $query->set('orderby','meta_valeu_num');
        $query->set('order','ASC');
        $query->set('meta_query',  array( 
            array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
            
          ));
    }
   
}

add_action('pre_get_posts','university_adjust_queries')

?>