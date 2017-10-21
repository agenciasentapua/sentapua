<?php

define( "ASSETS", get_template_directory_uri() . '/assets/');
define( "THEME" , 'inc/theme/');

$f = new functions();$f->call('features','core');