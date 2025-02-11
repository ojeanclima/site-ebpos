## Filtro dropdown de tags na página de administração do Custom Post Type "pagina-de-captura":

```php
// Adicionar filtro de tags na tabela de listagem do Custom Post Type
function add_tag_filter_to_admin_list() {
    global $typenow;
    $post_type = 'pagina-de-captura'; // Nome do Custom Post Type
    $taxonomy = 'tag-de-identificacao'; // Nome da taxonomia

    if ($typenow == $post_type) {
        wp_dropdown_categories(array(
            'show_option_all' => 'Todas as Tags',
            'taxonomy' => $taxonomy,
            'name' => $taxonomy,
            'orderby' => 'name',
            'selected' => isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '',
            'show_count' => true,
            'hide_empty' => true,
            'value_field' => 'slug'
        ));
    }
}

add_action('restrict_manage_posts', 'add_tag_filter_to_admin_list');
```

### Explicação do Código:
- **global $typenow**: Obtém o tipo de post atual na página de administração.
- **if ($typenow == $post_type)**: Verifica se estamos na página de administração do Custom Post Type "pagina-de-captura".
- **wp_dropdown_categories(array(...))**: Cria o dropdown de categorias para a taxonomia "tag-de-identificacao".

### Como usar:
1. Adicione este código ao arquivo `functions.php` do seu tema ativo.
2. Acesse a página de administração dos posts "pagina-de-captura".
3. Você verá um dropdown de tags acima da tabela de listagem. Selecione uma tag para filtrar os posts.