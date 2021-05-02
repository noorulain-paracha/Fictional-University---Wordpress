<?php 

//created this university_files() function to get the style sheet 
function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

/* to run this function below action is taken 
// 'first_argument' what type of instructions we are giving it
// 'second argument' name of the function we want to run */
add_action('wp_enqueue_scripts','university_files'); 

/* Adding title of the browser tab*/
function university_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme','university_features');
?>