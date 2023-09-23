<?php
    require get_template_directory() . "/plugins.php";
function my_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function kwh_add_editor_style( $mceInit ) {

    $custom_css = get_theme_mod( 'custom_css' );
    $styles = '.mce-content-body { background:#e6e6e6 !important }';
  
    if ( !isset( $mceInit['content_style'] ) ) {
      $mceInit['content_style'] = $styles . ' ';
    } else {
      $mceInit['content_style'] .= ' ' . $styles . ' ';
    }
    return $mceInit;
}
add_filter( 'tiny_mce_before_init', 'kwh_add_editor_style' );

if( function_exists('acf_add_local_field_group') ) {
        acf_add_local_field_group(array (
        'key' => 'desktop1',
        'title' => 'Desktop - 1 Fields',
        'fields' => [
                            [
                    'key' => "2:6102",
                    'label' => "Products",
                    'name' => "text-2:6102",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Products</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6103",
                    'label' => "Services",
                    'name' => "text-2:6103",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Services</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6104",
                    'label' => "Blog",
                    'name' => "text-2:6104",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Blog</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6101",
                    'label' => "About Us",
                    'name' => "text-2:6101",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>About Us</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6105",
                    'label' => "Contact",
                    'name' => "text-2:6105",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:63px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Contact</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6108",
                    'label' => "Login",
                    'name' => "text-2:6108",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:75px;height:19.714233398438px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Login</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6128",
                    'label' => "Tailoring Travel Adventures Just for You!",
                    'name' => "text-2:6128",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Montserrat;font-weight:800;font-size:48px;text-align:LEFT;line-height:64px;width:643px;height:131px\'><p style=\'margin:0;padding-bottom:0px;\'><span>Tailoring Travel Adventures Just for You!</span> </p>
<p style=\'margin:0;padding-bottom:0px;\'></p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6126",
                    'label' => "Your Ultimate Travel Itinerary Crafting Companion! Build your Next Vacation with AI. Explore More, Plan Less.",
                    'name' => "text-2:6126",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:16px;text-align:LEFT;line-height:30px;width:576px;height:66px\'><p style=\'margin:0;padding-bottom:0px;\'><span>Your Ultimate Travel Itinerary Crafting Companion! Build your Next Vacation with AI. Explore More, Plan Less.</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6124",
                    'label' => "Explore More",
                    'name' => "text-2:6124",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:19px;text-align:CENTER;line-height:28.5px;width:147.8330078125px;height:22.813659667969px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Explore More</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6120",
                    'label' => "Get in Touch",
                    'name' => "text-2:6120",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#ffffffff;font-family:Poppins;font-weight:600;font-size:19px;text-align:CENTER;line-height:28.5px;width:134px;height:23px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Get in Touch</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6182",
                    'label' => "Explore Dream Destinations",
                    'name' => "text-2:6182",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Montserrat;font-weight:800;font-size:16px;text-align:LEFT;line-height:30px;width:244px;height:25px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Explore Dream Destinations</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6181",
                    'label' => "Create a new standard of personalized travel experiences.",
                    'name' => "text-2:6181",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:300;font-size:10px;text-align:LEFT;line-height:23px;width:297px;height:22px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Create a new standard of personalized travel experiences.</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6132",
                    'label' => "Europe",
                    'name' => "text-2:6132",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:600;font-size:16px;text-align:CENTER;line-height:24px;width:63px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Europe</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                            [
                    'key' => "2:6149",
                    'label' => "Delhi",
                    'name' => "text-2:6149",
                    'type' => 'wysiwyg',
                    'prefix' => '',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => "<div style=\'color:#000000ff;font-family:Poppins;font-weight:600;font-size:16px;text-align:CENTER;line-height:24px;width:62px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Delhi</span> </p>
</div>",
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ],
                    ],
        'location' => array (
            array (
                array (
                    'param' => 'post_template',
                    'operator' => '==',
                    'value' => 'index.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));
    }

function acf_text_in_form( $content ) {
    $labels = $content->labels;
    if(count($labels)) {
        $textId = $labels[0];
        return get_field($textId);
    }
  
    return "";
}

add_action('after_switch_theme', 'mytheme_setup_options');

function mytheme_setup_options () {
	FignelThemePlugins::AddPlugins([
		[
		  'name' => 'advanced-custom-fields', 
		  'path' => "https://wordpress.org/plugins/advanced-custom-fields/",
		  'install' => 'advanced-custom-fields/acf.php'
		],
		[
		  'name' => 'duracelltomi-google-tag-manager', 
		  'path' => "https://ru.wordpress.org/plugins/duracelltomi-google-tag-manager/",
		  'install' => 'duracelltomi-google-tag-manager/duracelltomi-google-tag-manager-for-wordpress.php'
		],
		[
		  'name' => 'official-facebook-pixel', 
		  'path' => "https://wordpress.org/plugins/official-facebook-pixel/",
		  'install' => 'official-facebook-pixel/facebook-for-wordpress.php'
		],
		[
		  'name' => 'contact-form-7', 
		  'path' => "https://wordpress.org/plugins/contact-form-7/",
		  'install' => 'contact-form-7/wp-contact-form-7.php'
		],
	]);
    
    require_once WP_CONTENT_DIR . "/plugins/advanced-custom-fields/acf.php";
    require_once WP_CONTENT_DIR . "/plugins/contact-form-7/wp-contact-form-7.php";

            $options = [
            'post_title'     => 'Home',
            'post_name'      => 'Home',
            'post_content'   => '',
            'page_template'  => 'index.php',
        ];

        $params = array_merge([
            'comment_status' => 'close',
            'ping_status'    => 'close',
            'post_author'    => 1,
            'post_status'    => 'publish',
            'post_type'      => 'page',
        ], $options);

        $params["post_title"] = ucwords($params['post_title']);
        $pageId = wp_insert_post($params);

        if($options["page_template"] == "index.php") {
            update_option( "page_on_front", $pageId );
            update_option( "show_on_front", "page" );
        }
    
        foreach(array (
  'text-2:6102' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Products</span> </p>
</div>',
  'text-2:6103' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Services</span> </p>
</div>',
  'text-2:6104' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Blog</span> </p>
</div>',
  'text-2:6101' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:100px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>About Us</span> </p>
</div>',
  'text-2:6105' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:63px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Contact</span> </p>
</div>',
  'text-2:6108' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:14px;text-align:CENTER;line-height:21px;width:75px;height:19.714233398438px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Login</span> </p>
</div>',
  'text-2:6128' => '<div style=\'color:#000000ff;font-family:Montserrat;font-weight:800;font-size:48px;text-align:LEFT;line-height:64px;width:643px;height:131px\'><p style=\'margin:0;padding-bottom:0px;\'><span>Tailoring Travel Adventures Just for You!</span> </p>
<p style=\'margin:0;padding-bottom:0px;\'></p>
</div>',
  'text-2:6126' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:16px;text-align:LEFT;line-height:30px;width:576px;height:66px\'><p style=\'margin:0;padding-bottom:0px;\'><span>Your Ultimate Travel Itinerary Crafting Companion! Build your Next Vacation with AI. Explore More, Plan Less.</span> </p>
</div>',
  'text-2:6124' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:400;font-size:19px;text-align:CENTER;line-height:28.5px;width:147.8330078125px;height:22.813659667969px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Explore More</span> </p>
</div>',
  'text-2:6120' => '<div style=\'color:#ffffffff;font-family:Poppins;font-weight:600;font-size:19px;text-align:CENTER;line-height:28.5px;width:134px;height:23px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Get in Touch</span> </p>
</div>',
  'text-2:6182' => '<div style=\'color:#000000ff;font-family:Montserrat;font-weight:800;font-size:16px;text-align:LEFT;line-height:30px;width:244px;height:25px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Explore Dream Destinations</span> </p>
</div>',
  'text-2:6181' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:300;font-size:10px;text-align:LEFT;line-height:23px;width:297px;height:22px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Create a new standard of personalized travel experiences.</span> </p>
</div>',
  'text-2:6132' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:600;font-size:16px;text-align:CENTER;line-height:24px;width:63px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Europe</span> </p>
</div>',
  'text-2:6149' => '<div style=\'color:#000000ff;font-family:Poppins;font-weight:600;font-size:16px;text-align:CENTER;line-height:24px;width:62px;height:18px\'><p style=\'margin:0;padding-bottom:0px;white-space: nowrap\'><span>Delhi</span> </p>
</div>',
) as $field_key => $value) { 
            update_field( $field_key, $value, $pageId ); 
        }
    
    wpcf7_add_form_tag( 'acf_text', 'acf_text_in_form' );
}
