<?php $home_id = get_option('page_on_front'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time()?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>