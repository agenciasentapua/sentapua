<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>

	<?php wp_head(); ?>
</head>

<?php
    if(is_front_page() && !is_home()):
        $asdc_classes = array('asdc-class');
    else:
        $asdc_classes = array('not-asdc-class');
    endif;
?>

<body <?php body_class( $asdc_classes ); ?>>
    <h1>Hello World!</h1>


    <?php wp_footer(); ?>
</body>
</html>