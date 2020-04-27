<?php get_header(); ?>

<?php /* while ( have_posts() ) : the_post(); ?>
	
	<?php if(!get_field('video-slide')){
		$banner_image = get_field('imagem-slide');
	} ?>
	
	<section class="box-section <?php if(get_field('video-slide')){ echo 'video-slide '; } ?>no-padding full-height bg-imagem bg-mascara" <?php if(!get_field('video-slide')){ ?> style="background-image: url('<?php echo $banner_image['sizes']['wide']; ?>');" <?php } ?>>
		
		<?php if(get_field('video-slide')){ ?>
			<video autoplay="true" loop="true" muted="true">
				<source src="<?php the_field('video-slide'); ?>" type="video/mp4">
			</video>
		<?php } ?>

		<div class="container">
			
			<div class="box-vertical vertical-center">
				<div class="conteúdo-vertical">
					
					<div class="box-destaque">
						<span class="titulo">
							<?php /* <span class="super">+</span>150 Produtos * ?>
							<?php the_field('titulo-slide'); ?>
						</span>

						<span class="subtitulo">
							<?php the_field('subtitulo-slide'); ?>
						</span>

						<a href="<?php the_field('link-slide'); ?>" class="btn extra transparente"><?php the_field('titulo-link-slide'); ?></a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="box-section">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<div class="conteudo">
						<?php the_content(); ?>
					</div>

				</div>
			</div>

		</div>
	</section>



	<?php
	$query = array(
			'post_type' => 'servicos'
		);
	query_posts( $query );

	if( have_posts() ){ ?>

		<section class="box-section section-mobile-full">
			<div class="container">

				<h1>Serviços</h1>
				<div class="row list-post">

					<?php while ( have_posts() ) : the_post();

						get_template_part( 'content', 'list-servico' );

					endwhile;
					wp_reset_query(); ?>

				</div>

			</div>
		</section>

	<?php } ?>

	<?php
	$query = array(
			'posts_per_page' => 9,
			'post_type' 	 => 'projetos',
			//'category_name'  => 'prensa'
		);
	query_posts( $query );

	if( have_posts() ){ ?>

		<section class="box-section section-mobile-full">
			<div class="container">
						
				<h1 class="margin-top">Projetos</h1>
				<div class="row no-padding list-post projetos">

					<?php while ( have_posts() ) : the_post();

						$row = 1;
						get_template_part( 'content', 'list-projeto' );

					endwhile;
					wp_reset_query(); ?>

					<div class="col-12 center">
						<a href="https://ederton.com.br/preview/2pra1/projetos" class="btn btn-mais extra transparente cinza-claro">ver todos</a>
					</div>

				</div>

			</div>
		</section>

	<?php } ?>


	<?php $banner_image = get_field('imagem-banner-inferior'); ?>
	<section class="box-section no-padding margin-top full-max-height bg-imagem bg-mascara" style="background-image: url('<?php echo $banner_image['sizes']['wide']; ?>');">
		<div class="container">
			
			<div class="box-vertical vertical-center">
				<div class="conteúdo-vertical">
					
					<div class="box-destaque">
						<span class="subtitulo">
							<?php the_field('titulo-banner-inferior'); ?>
						</span>

						<a href="<?php the_field('link-banner-inferior'); ?>" class="btn extra transparente" title="<?php the_field('titulo-link-banner-inferior'); ?>"><?php the_field('titulo-link-banner-inferior'); ?></a>
					</div>
				</div>
			</div>

		</div>
	</section>

<?php endwhile; */?>
<?php get_footer(); ?>

<script type="text/javascript">
	<?php /*if(get_field('video-slide')){ ?>

		//$(document).ready(function(){
			video_width = ($('.video-slide').width())/2.333333;
			$('.video-slide .container').height(video_width);
			$('.video-slide video').height(video_width);
		//});

		$(window).resize(function(){
			video_width = ($('.video-slide').width())/2.333333;
			$('.video-slide .container').height(video_width);
			$('.video-slide video').height(video_width);
		});

	<?php }*/ ?>



/*
	proj_height = $('.projetos .col-4:first-child').width();
	$('.projetos .article').height(proj_height);

	$(window).resize(function(){
		proj_height = $('.projetos .col-4:first-child').width();
		$('.projetos .article').height(proj_height);
	});
	*/
</script>