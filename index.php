<?php

/*
Plugin Name: arabic Html Wp Hooks Filter
*/


function content_style($content){
    $section = "<section class='content-site'>
    <h1>-------before content--------</h1>
    $content
    <h1>-------after content--------</h1>
    </section>";
    return $section ;
}

add_filter( 'the_content','content_style' ) ;



function author_profile($profile){
    $profile['google_profile'] = 'Google Profile Url';
    $profile['twitter_profile'] = 'Twitter Profile Url';
    $profile['facebook_profile'] = 'facebook Profile Url';
    return $profile ;
}

add_filter( 'user_contactmethods', 'author_profile' );




// https://www.youtube.com/watch?v=yJ_qLydksTQ




?>