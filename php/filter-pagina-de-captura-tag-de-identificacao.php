<?php

// Adicionar filtro de tags na tabela de listagem do Custom Post Type
function add_tag_filter_to_admin_list() {
    global $typenow;
    $post_type = 'pagina-de-captura'; // Nome do Custom Post Type
    $taxonomy = 'tag-de-identificacao'; // Nome da taxonomia

    if ($typenow == $post_type) {
        wp_dropdown_categories([
            'show_option_all' => 'Todas as Tags',
            'taxonomy' => $taxonomy,
            'name' => $taxonomy,
            'orderby' => 'name',
            'selected' => isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '',
            'show_count' => true,
            'hide_empty' => true,
            'value_field' => 'slug'
        ]);
    }
}

add_action('restrict_manage_posts', 'add_tag_filter_to_admin_list');
