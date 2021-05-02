<?php 

//created this university_files() function to get the style sheet 
function university_files() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

/* to run this function below action is taken 
// 'first_argument' what type of instructions we are giving it
// 'second argument' name of the function we want to run */
add_action('wp_enqueue_scripts','university_files'); 
 
?>