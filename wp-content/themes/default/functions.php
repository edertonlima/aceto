<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */


// REMOVE PARENT PAGE
function remove_post_custom_fields() {
	remove_meta_box( 'pageparentdiv' , 'page' , 'side' ); 
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

// REMOVE ADMIN BAR
add_filter('show_admin_bar', '__return_false');


// add thumbnail
add_theme_support( 'post-thumbnails' );



// CUSTOM POST
// BENEFÍCIOS
add_action( 'init', 'post_type_beneficios' );
function post_type_beneficios() {

	$labels = array(
	    'name' => _x('Beneficios', 'post type general name'),
	    'singular_name' => _x('Beneficios', 'post type singular name'),
	    'add_new' => _x('Adicionar novo', 'Post'),
	    'add_new_item' => __('Addicionar novo Post'),
	    'edit_item' => __('Editar Post'),
	    'new_item' => __('Novo Post'),
	    'all_items' => __('Todos as Posts'),
	    'view_item' => __('Visualizar Post'),
	    'search_items' => __('Procurar Post'),
	    'not_found' =>  __('Nenhum post encontrado.'),
	    'not_found_in_trash' => __('Nenhum post encontrado na lixeira.'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Beneficios'
	);
	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => null,
	    'menu_icon' => 'dashicons-businessperson',
	    'supports' => array('title','thumbnail','excerpt')
	  );

    register_post_type( 'beneficios', $args );
}

/*
// PROJETOS
add_action( 'init', 'create_post_type_projetos' );
function create_post_type_projetos() {

	$labels = array(
	    'name' => _x('Projetos', 'post type general name'),
	    'singular_name' => _x('Projeto', 'post type singular name'),
	    'add_new' => _x('Adicionar novo', 'projeto'),
	    'add_new_item' => __('Adicionar novo'),
	    'edit_item' => __('Editar'),
	    'new_item' => __('Novo post'),
	    'all_items' => __('Todos as post'),
	    'view_item' => __('Visualizar post'),
	    'search_items' => __('Procurar Proyecto'),
	    'not_found' =>  __('Nenhum post encontrado.'),
	    'not_found_in_trash' => __('Nenhum post encontrado na lixeira.'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Projetos'
	);
	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,

		'rewrite'=> [
			'slug' => 'projetos',
			"with_front" => true,
		],

		"cptp_permalink_structure" => "/%categoria_projetos%/%postname%/",

	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => true,
	    'menu_position' => null,
	    'menu_icon' => 'dashicons-tag',
	    'supports' => array('title','excerpt','thumbnail')
	  );

    register_post_type( 'projetos', $args );
}

add_action( 'init', 'create_taxonomy_categoria_projetos' );
function create_taxonomy_categoria_projetos() {

	$labels = array(
	    'name' => _x( 'Categoria', 'taxonomy general name' ),
	    'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Procurar categoria' ),
	    'all_items' => __( 'Todas as categorias' ),
	    'parent_item' => __( 'Categoria pai' ),
	    'parent_item_colon' => __( 'Categoria pai:' ),
	    'edit_item' => __( 'Editar categoria' ),
	    'update_item' => __( 'Atualizar categoria' ),
	    'add_new_item' => __( 'Adicionar nova categoria' ),
	    'new_item_name' => __( 'Nova categoria' ),
	    'menu_name' => __( 'Categoria' ),
	);

    register_taxonomy( 'categoria_projetos', array( 'projetos' ), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
		'rewrite' => array(
		    'slug' => 'projetos',
		    'with_front' => true,
			)
        )
    );
}
*/

// muda nome post
function change_post_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Blog';
	$submenu['edit.php'][5][0] = 'Todos os posts';
	$submenu['edit.php'][10][0] = 'Adicionar post';
	echo '';
}
function change_post_object() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Blog';
	$labels->singular_name = 'Blog';
	$labels->add_new = 'Adicionar post';
	$labels->add_new_item = 'Adicionar post';
	$labels->edit_item = 'Editar post';
	$labels->new_item = 'Post';
	$labels->view_item = 'Ver post';
	$labels->search_items = 'Buscar post';
	$labels->not_found = 'Nenhum post encontrado';
	$labels->not_found_in_trash = 'Nenhum post encontrado na lixeira';
	$labels->all_items = 'Todos os posts';
	$labels->menu_name = 'Blog';
	$labels->name_admin_bar = 'Blog';
}
 
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );


// PAGINA DE OPÇÕES
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	  'page_title'  => 'Configurações Gerais',
	  'menu_title'  => 'Configurações Gerais',
	  'menu_slug'   => 'configuracoes-gerais',
	  'capability'  => 'edit_posts',
	  'redirect'    => true
	));

	acf_add_options_sub_page(array(
	  'page_title'  => 'Geral',
	  'menu_title'  => 'Geral',
	  'parent_slug' => 'configuracoes-gerais',
	));

	acf_add_options_sub_page(array(
	  'page_title'  => 'Redes Sociais',
	  'menu_title'  => 'Redes Sociais',
	  'parent_slug' => 'configuracoes-gerais',
	));
}



// SIZE IMAGES MIDIA
function trickspanda_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
    unset( $sizes['large']);

	unset( $sizes['1536x1536']);
	unset( $sizes['2048x2048']);

    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'trickspanda_remove_default_image_sizes');

// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size( 'thumb', 380, 380, true );
	add_image_size( 'thumb-medium', 600, 600, true );
	
	add_image_size( 'wide-medium', 1100, 0, array( 'center', 'center' ) );
	add_image_size( 'wide', 1600, 0, array( 'center', 'center' ) );
}








add_action( 'wp_enqueue_scripts', 'meus_scripts', 100 );

function meus_scripts() {
	wp_enqueue_script(
	    'load-more',
	    get_template_directory_uri() . '/assets/js/load-more.js?ver=1.0', //esse é o arquivo .js do seu tema que vai conter todos os scripts (pode ser diferente no seu tema)
	    array( 'jquery' ),
	    null,
	    false
	);
	wp_localize_script(
	    'meus_scripts',
	    'WPaAjax',
	    array(
	        'ajaxurl' => admin_url( 'admin-ajax.php' )
	    )
	);
}

function load_more() {

	$paged = $_POST['paged']-1;
	$offset = $paged*9;

	//echo $_POST['post-type'];
	//echo $_POST['category'];
	//echo $_POST['taxonomy'];

	if(($_POST['post-type'] == 'projetos') AND ($_POST['taxonomy'] == 'categoria_projetos')){
		
		$tax_query = array(
				array(
					'taxonomy' 	=> $_POST['taxonomy'],
					'terms' 	=> $_POST['category'],
					'include_children' => false,
					'operator' => 'IN'
				)
		    );

	}

		$query = array(
			'post_type' 		=> $_POST['post-type'],
			//'cat' 				=> $_POST['category'],
			'post_status' 		=> 'any',
			's'					=> '',
			'category__not_in' 	=> array($_POST['not_category']),
			'posts_per_page' 	=> 9,
			'offset' 			=> $offset,
			'paged' 			=> $_POST['paged'],
			'tax_query' => $tax_query
		);

	//var_dump($query);

	//echo '<br>taxonomy = '.$_POST['taxonomy'];
	//echo '<br>category = '.$_POST['category'];

	$loop = new WP_Query( $query );

	if ( $loop->have_posts() ): 
		while ( $loop->have_posts() ): 

			$loop->the_post();
			get_template_part( 'content', 'list-projeto' );
		
		endwhile;

		echo 'max_paged' . $loop->max_num_pages;
	
	else: ?>    
		<div class="col-12 center margin-top-2x"><p>Desculpa, não conseguimos trazer mais conteúdo.</p></div>
	<?php endif;

	wp_reset_postdata(); 

	die();
}
add_action( 'wp_ajax_nopriv_load_more', 'load_more' );
add_action( 'wp_ajax_load_more', 'load_more' );

?>