<?php get_header(); ?>

<?php  while ( have_posts() ) : the_post(); ?>
	

	<section class="box-section breadcrumbs breadcrumbs-content">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h1 class="cor1"><?php the_title(); ?></h1>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="home">Home</a></li>
						<li><i class="fas fa-circle"></i></li>
						<li><?php the_field('titulo_menu'); ?></li>
					</ul>

				</div>
			</div>

		</div>
	</section>

	
	<section class="box-section no-padding-top missao-vissao-valores">
		<div class="container">

			<div class="row flex">

				<div class="col-4">
					<div class="block-item block-item-page-top">
						<span class="titulo center cor1">
							Missão
						</span>

						<span class="subtitulo">
							<?php the_field('missao'); ?>
						</span>
					</div>
				</div>

				<div class="col-4">
					<div class="block-item block-item-page-top">
						<span class="titulo center cor1">
							Valores
						</span>

						<span class="subtitulo">
							<?php the_field('valores'); ?>
						</span>
					</div>
				</div>

				<div class="col-4">
					<div class="block-item block-item-page-top">
						<span class="titulo center cor1">
							Visão
						</span>

						<span class="subtitulo">
							<?php the_field('visao'); ?>
						</span>
					</div>
				</div>

			</div>

		</div>
	</section>


	<?php if( have_rows('mais-valores')): ?>
		<section class="box-section">
			<div class="container">

				<div class="row">			
					<div class="col-6">
				
						<?php 
							$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); 
						?>

						<div class="bg-imagem" style="height: 720px; margin-right: 20px; background-image: url('<?php echo $imagem[0]; ?>');"></div>
					</div>

					<div class="col-6">

						<h4 class="" style="margin-top: 20px;">MAIS DOS NOSSOS VALORES</h4>
						<h2 class="cor1"><?php the_field('titulo-mais-valores'); ?></h2>

						<div class="conteudo">
							<ul class="cont-list">

								<?php while ( have_rows('mais-valores') ) : the_row(); ?>
									<li>
										<i class="far fa-check-circle"></i>
										<span><?php the_sub_field('titulo'); ?></span>
										<p><?php the_sub_field('texto'); ?></p>
									</li>
								<?php endwhile; ?>

							</ul>
						</div>

					</div>
				</div>

			</div>
		</section>
	<?php endif; ?>



	<section class="box-section">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h4 class="center"><?php the_field('titulo'); ?></h4>
					<h2 class="center cor1"><?php the_field('subtitulo'); ?></h2>

				</div>
				
				<div class="col-12">
					<div class="conteudo justify">
						<?php the_content(); ?>
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