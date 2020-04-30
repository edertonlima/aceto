<?php get_header(); ?>

<?php  while ( have_posts() ) : the_post(); ?>
	
	<?php 
		$query = array(
				'post_type' => 'beneficios'
			);
		query_posts( $query );
	?>
	
	<?php //$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) ); ?>


	<div class="carousel-banner owl-carousel owl-theme owl-loaded owl-full-height">
		<div class="owl-stage-outer">
			<div class="owl-stage flex">

				<?php if( have_posts() ){
					while ( have_posts() ) : the_post();
						if(get_field('destaque')) { 
							$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'wide' ); ?>

							<div class="owl-item">
				
								<section class="box-section no-padding full-height bg-imagem bg-mascara" style="background-image: url('<?php echo $banner_image[0]; ?>');">

									<div class="mask-banner-home"></div>

									<?php if(get_field('logo_beneficios')){ ?>
										<img src="<?php the_field('logo_beneficios'); ?>" class="img-avatar" />
									<?php } ?>

									<div class="container z-index-10">							
										<div class="box-vertical vertical-center">
											<div class="conteúdo-vertical">
												
												<div class="box-destaque">

													<h4>Benefícios</h4>

													<span class="titulo cor1">
														<?php the_title(); ?>
													</span>

													<span class="subtitulo">
														<?php the_field('subtitulo'); ?>
													</span>

													<a href="<?php echo get_post_type_archive_link('beneficios') . '#' . $post->post_name; ?>" class="btn extra cor1" titile="Saiba mais">Saiba mais</a>
												</div>
											</div>
										</div>
									</div>

								</section>


							</div>

						<?php }
					endwhile;
					wp_reset_query();
				} ?>

			</div>
		</div>
	</div>



	<?php 
		$query = array(
				'post_type' => 'beneficios'
			);
		query_posts( $query );
	?>

	<section class="box-section slide-beneficios overflow-x">
		<div class="container">

			<div class="row">
				<div class="col-12">

					<div class="carousel-beneficios owl-carousel owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage flex">

								<?php if( have_posts() ){
									while ( have_posts() ) : the_post();
										//if(!get_field('destaque')) { ?>
								
									<div class="owl-item">
										<a href="<?php echo get_post_type_archive_link('beneficios') . '#' . $post->post_name; ?>" title="<?php the_title(); ?>" class="block-item hover">
										
											<span class="titulo cor1">
												<?php the_title(); ?>
											</span>

											<?php if(get_field('logo_beneficios')){ ?>
												<img src="<?php the_field('logo_beneficios'); ?>" class="" />
											<?php } ?>

											<span class="subtitulo">
												<?php echo get_the_excerpt(); ?>
											</span>
										
										</a>
									</div>

										<?php //}
									endwhile;
									wp_reset_query();
								} ?>

							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>



	<section class="box-section exponor">
		<div class="container">

			<div class="row">
				<div class="col-6">
					
					<div class="conteudo">
						<h4><?php echo get_the_title(get_page_by_path('exponor')); ?></h4>
						<h2 class="cor1"><?php the_field('titulo', get_page_by_path('exponor')); ?></h2>

						<div>
							<?php
								$my_postid = get_page_by_path('exponor');
								$content_post = get_post($my_postid);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								echo $content;
							?>
						</div>

						<a href="<?php the_field('link-exponor',get_page_by_path('exponor')); ?>" target="_blank" class="btn transparente cor1 margin-top-30 color-cor-txt" title="Conhecer o evento">conhecer o evento</a>
					</div>

				</div>

				<div class="col-6">
					<?php if( have_rows('dados-evento',get_page_by_path('exponor')) ): ?>				
						<div class="dados-info">

							<?php while ( have_rows('dados-evento',get_page_by_path('exponor')) ) : the_row(); ?>
								<div class="info-item">							
									<div class="info-table">
										<span class="info-num"><?php the_sub_field('valor'); ?><span>+</span></span>
										<span class="info-legenda"><?php the_sub_field('legenda'); ?></span>
									</div>
									<span class="info-txt"><?php the_sub_field('descricao'); ?></span>
								</div>
							<?php endwhile; ?>

						</div>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</section>



	<section class="box-section">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h4 class="center">blog</h4>
					<h2 class="center cor1"><?php the_field('titulo',get_page_by_path('blog')) ?></h2>

				</div>
			</div>

			<div class="blog list-blog">

					<div class="carousel-blog owl-carousel owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage">

								<?php 
									$query = array(
											'post_type' => 'post',
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

			<div class="row">
				<div class="row center">
					<a href="<?php echo get_home_url(); ?>/blog" target="" class="btn small transparente cor1 margin-top-60 color-cor-txt" title="ver todos">ver todos</a>
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
	$('.carousel-banner').owlCarousel({
		loop:false,
		margin:0,
		responsiveClass:true,
		nav:false,

		//navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		//rtl:true,
		responsive:{
			0:{
				items:1
			}
		}
	})

	$('.carousel-beneficios').owlCarousel({
		//center: true,
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

			580:{
				items:2
			},

			800:{
				items:3
			},

			1000:{
				items:4
			}
		}
	})

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