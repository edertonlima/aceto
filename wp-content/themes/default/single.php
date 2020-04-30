<?php get_header(); ?>

<?php  while ( have_posts() ) : the_post(); ?>
	

	<section class="box-section breadcrumbs">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h1 class="cor1"><?php the_title(); ?></h1>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="home">Home</a></li>
						<li><i class="fas fa-circle"></i></li>
						<li><a href="<?php echo get_home_url(); ?>/blog" title="blog">Blog</a></li>
					</ul>

				</div>
			</div>

		</div>
	</section>	


	<section class="box-section blog detalhe-blog no-padding margin-top-20	">
		<div class="container">

			<div class="row">
				<div class="col-12">
					<div class="conteudo conteudo-post">
						<span class="data"><?php echo get_the_date(); ?></span>
						<p class="center resumo"><?php echo get_the_excerpt(); ?></p>
						<?php 
							$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); 
							if($imagem[0]){ ?>
								<img src="<?php echo $imagem[0]; ?>" title="<?php the_title(); ?>" class="destaque">
							<?php }
						?>
					</div>				
				</div>

				<div class="col-12">
					<div class="conteudo conteudo-post justify">
						<div class="content">
							
							<?php if(get_field('autor')){ ?>
								<span class="autor"><?php the_field('autor'); ?></span>
							<?php } ?>

							<?php the_content(); ?>

							<?php if(get_field('fonte')){ ?>
								<span class="fonte">Fonte: <?php the_field('fonte'); ?></span>
							<?php } ?>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>



	<section class="box-section section-mobile-full">
		<div class="container">
			
			<div class="row">
				<div class="col-12">
					
					<h2 class="center cor1">Veja outras de nossas publicações</h2>

				</div>
			</div>

			<div class="row blog list-blog">

					<div class="carousel-blog owl-carousel owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage flex">

								<?php 
									$query = array(
											'post_type' => 'post',
											'post__not_in' => array($post->ID),
											'posts_per_page' => 3
										);
									query_posts( $query );

									if( have_posts() ){
										while ( have_posts() ) : the_post(); ?>
									
				<div class="owl-item">
					
					<?php get_template_part( 'content', 'list-post' ); ?>

				</div>

											<?php
										endwhile;
										wp_reset_query();
									} ?>

							</div>
						</div>
					</div>

			</div>

		</div>
	</section>


<?php get_template_part( 'associese' ); ?>


<?php endwhile; ?>
<?php get_footer(); ?>

<script type="text/javascript">
	
	banner_full = $('.banner-full-height').height();
	$('.banner-full-50').height(banner_full + 60);
	$('.banner-full-txt').height(banner_full);

</script>


		<!-- CAROUSEL -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

	<script type="text/javascript">
		$('.carousel-blog').owlCarousel({
			loop:false,
			margin:35,
			responsiveClass:true,
			nav:false,

			//navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
			//rtl:true,
			responsive:{
				0:{
					items:1
				},

				480:{
					items:2
				},

				900:{
					items:3
				}
			}
		})
	</script>