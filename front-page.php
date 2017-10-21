<?php

get_header();

$site = new mytheme();
$site->make_content('hero');
$site->make_content('navbar');
$site->make_content('services');

get_footer();

?>