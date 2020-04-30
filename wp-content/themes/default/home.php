<?php get_header(); ?>

	<section class="box-section breadcrumbs">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h1 class="cor1"><?php echo get_the_title(get_page_by_path('blog')); ?></h1>
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

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="col-4">
						
						<?php get_template_part( 'content', 'list-post' ); ?>

					</div>

				<?php endwhile; ?>

			</div>


			<?php if($wp_query->max_num_pages > 1){ ?>
				<div class="row no-padding list-post blog row-load-more">

				</div>

				<div class="row no-padding list-post projetos">

					<div class="col-12 center">
						<button class="load-more btn small transparente cor1 margin-top-30 color-cor-txt" var-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" var-taxonomy="category" var-category="" var-post-type="post" var-paged="2" var-max-paged="<?php echo $wp_query->max_num_pages; ?>" var-not-category="6,7" id="load-more">
							mais
						</button>
					</div>

				</div>
			<?php } ?>

		</div>
	</section>

<?php get_footer(); ?>