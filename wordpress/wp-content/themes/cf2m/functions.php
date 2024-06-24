<?php

// Activation de la fonctionnalité "Image mise en avant"
function cf2m_init_theme(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','cf2m_init_theme');

// creation de l url de l'image mise en avant 
function cf2m_URL_image_en_avant($data){
    $image_id = $data->data['featured_media'];
    $image_url = wp_get_attachment_image_src($image_id,'medium large');
    if ($image_url){
        $data->data['image_en_avant'] = $image_url[0];
    }

    return $data;
}
add_filter('rest_prepare_temoignage','cf2m_URL_image_en_avant',10,1);

// Ajouter un nouveau type de données : Projet
function ajouterType_Temoignage() {
	$labels = array(
		'name' => 'Temoignage',
		'singular_name' => 'Temoignage',
		'add_new' => 'Ajouter un Temoignage',
		'add_new_item' => 'Ajouter un Temoignage',
		'not_found' => 'Aucun Temoignage trouvé',
		'all_items' => 'Tous les Temoignage',
		'menu_name' => 'Temoignage'
	);
	$arguments = array(
		'label' => 'Temoignage',
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'show_in_admin_bar' => true,
		'has_archive' => true,
		'supports' => array('title','editor','thumbnail','custom-fields'),
		'menu_position' => 40,
		'menu_icon' => 'dashicons-testimonial'
        
	);
	register_post_type('Temoignage', $arguments);
}
add_action('init','ajouterType_Temoignage');