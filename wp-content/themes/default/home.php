<?php get_header(); ?>

	<?php
		$args = array(
		    'taxonomy'      	=> 'category',
		    'parent'        	=> 0, // get top level categories
		    'orderby'       	=> 'count',
		    'order'         	=> 'DESC',
		    'hide_empty'      	=> false
		);
		$categories = get_categories( $args );
	?>


	<section class="box-section breadcrumbs">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h1 class="cor1"><?php echo get_the_title(64); ?></h1>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="home">Home</a></li>
						<li><i class="fas fa-circle"></i></li>
						<li>Blog</li>
					</ul>

				</div>
			</div>

		</div>
	</section>


	<section class="box-section section-mobile-full">
		<div class="container">

			<div class="row blog list-blog">
				<div class="col-4">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" class="" />
					<span>11 de Agosto de 2018</span>
					<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
					<a href="" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

				</div>

				<div class="col-4">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.jpg" class="" />
					<span>11 de Agosto de 2018</span>
					<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
					<a href="" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

				</div>

				<div class="col-4">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.jpg" class="" />
					<span>11 de Agosto de 2018</span>
					<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
					<a href="" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

				</div>
			</div>


			<?php if($wp_query->max_num_pages > 1){ ?>
				<div class="row no-padding list-post blog row-load-more">

				</div>

				<div class="row no-padding list-post projetos">

					<div class="col-12 center">
						<button class="load-more btn small transparente cor1 margin-top-30 color-cor-txt" var-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" var-taxonomy="category" var-category="" var-post-type="post" var-paged="2" var-max-paged="<?php echo $wp_query->max_num_pages; ?>" var-not-category="6,7" id="load-more">
							mais
						</button>
						<?php //<a href="" class="btn btn-mais extra transparente cinza-claro">mais</a> ?>
					</div>

				</div>
			<?php } ?>

		</div>
	</section>

<?php /*		
			<?php 
				$query = array(
						'posts_per_page'	=> 9,
						//'post_type' 	 	=> 'post',
						'category__not_in' => array(6,7),
						//'category_name'  => 'na-midia'
					);
				query_posts( $query );
			?>
		
			<div class="row no-padding list-post blog">
				<?php while ( have_posts() ) : the_post();

					get_template_part( 'content', '' );

				endwhile; ?>
			</div>
			
			<?php if($wp_query->max_num_pages > 1){ ?>
				<div class="row no-padding list-post blog row-load-more">

				</div>

				<div class="row no-padding list-post projetos">

					<div class="col-12 center">
						<button class="load-more btn btn-mais extra transparente cinza-claro" var-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" var-taxonomy="category" var-category="" var-post-type="post" var-paged="2" var-max-paged="<?php echo $wp_query->max_num_pages; ?>" var-not-category="6,7" id="load-more">
							mais
						</button>
						<?php //<a href="" class="btn btn-mais extra transparente cinza-claro">mais</a> ?>
					</div>

				</div>
			<?php } ?>
		</div>
	</section>



	<?php
		$query = array(
				//'posts_per_page'	=> 9,
				'post_type' 	 	=> 'post',
				'category_name'  => 'na-midia'
			);
		query_posts( $query );
	?>


	<section class="box-section section-mobile-full">
		<div class="container">

			<h1><?php echo get_cat_name(6); ?></h1>

			<div class="row no-padding list-post blog cat-especifica">
				<?php while ( have_posts() ) : the_post();

					get_template_part( 'content', '' );

				endwhile; ?>
			</div>

			<?php /* if($wp_query->max_num_pages > 1){ ?>
				<div class="row no-padding list-post projetos row-load-more">

				</div>

				<div class="row no-padding list-post projetos">

					<div class="col-12 center">
						<button class="load-more btn btn-mais extra transparente cinza-claro" var-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" var-taxonomy="category" var-category="6" var-post-type="post" var-paged="2" var-max-paged="<?php echo $wp_query->max_num_pages; ?>" var-not-category="" id="load-more">
							mais
						</button>
						<?php //<a href="" class="btn btn-mais extra transparente cinza-claro">mais</a> ?>
					</div>

				</div>
			<?php } /?>

		</div>
	</section>
*/ ?>
<?php get_footer(); ?>

<script type="text/javascript">
	/*proj_height = $('.blog .col-4:first-child').width();
	$('.blog .article').height(proj_height);

	$(window).resize(function(){
		proj_height = $('.blog .col-4:first-child').width();
		$('.blog .article').height(proj_height);
	});*/
</script>