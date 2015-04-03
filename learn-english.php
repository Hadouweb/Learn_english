<?php
/**
 * Plugin Name: Learn English
 * Plugin URI: Undefined
 * Description: Un plugin pour apprendre une langue
 * Version: 0.1
 * Author: Nicolas Le Breton
 * License: GPL2
 */

class Learn_English
{
    public function __construct()
    {
        add_filter('wp_title', array($this, 'modify_page_title'), 20) ;
        add_action('init',  array($this, 'register_learn_english'), 0 );
    }

    public function modify_page_title($title)
    {
        return $title . ' | Avec le plugin des zéros !' ;
    }

    function register_learn_english()
    {

        $labels = array(
            'name'                => _x( 'Mots', 'Post Type General Name', 'learn-english' ),
            'singular_name'       => _x( 'Mot', 'Post Type Singular Name', 'learn-english' ),
            'menu_name'           => __( 'Mot', 'learn-english' ),
            'name_admin_bar'      => __( 'Post Type', 'learn-english' ),
            'parent_item_colon'   => __( 'Parent Item:', 'learn-english' ),
            'all_items'           => __( 'Tous les mots', 'learn-english' ),
            'add_new_item'        => __( 'Ajouter un mot', 'learn-english' ),
            'add_new'             => __( 'Ajouter', 'learn-english' ),
            'new_item'            => __( 'Nouveau mot', 'learn-english' ),
            'edit_item'           => __( 'Editer un mot', 'learn-english' ),
            'update_item'         => __( 'Mis à jour', 'learn-english' ),
            'view_item'           => __( 'Voir le mot', 'learn-english' ),
            'search_items'        => __( 'Search Item', 'learn-english' ),
            'not_found'           => __( 'Not found', 'learn-english' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learn-english' ),
        );
        $args = array(
            'label'               => __( 'learn_english', 'learn-english' ),
            'description'         => __( 'Post Type Description', 'learn-english' ),
            'labels'              => $labels,
            'supports'            => array( ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'learn_english', $args );

    }

}

new Learn_English();
