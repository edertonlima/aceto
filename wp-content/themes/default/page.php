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
						<li><?php the_field('titulo_menu'); ?></li>
					</ul>

				</div>
			</div>

		</div>
	</section>

	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

	<section class="box-section"> 
		<div class="container">

			<div class="row">
				<?php if($imagem){ ?>			

					<div class="col-6">
						<div class="bg-imagem" style="height: 400px; margin-right: 20px; background-image: url('<?php echo $imagem[0]; ?>');"></div>
					</div>

					<div class="col-6">
						<h4 class="" style="margin-top: 20px;"><?php the_field('titulo'); ?></h4>
						<h2 class="cor1"><?php the_field('subtitulo'); ?></h2>

				<?php }else{ ?>

					<div class="col-12">
						<h4 class="center"><?php the_field('titulo'); ?></h4>
						<h2 class="center cor1"><?php the_field('subtitulo'); ?></h2>

				<?php } ?>

						<div class="conteudo justify">
							<?php the_content(); ?>
						</div>

					</div>
			</div>

		</div>
	</section>



	<?php if( have_rows('pessoas-diretoria')): ?>
		<section class="box-section section-mobile-full">
			<div class="container">

				<div class="row">	
					<div class="col-12">
						
						<?php if(get_field('titulo-diretoria')){ ?>
							<h2 class="cor1 center"><?php the_field('titulo-diretoria'); ?></h2>
						<?php } ?>
					
					</div>
				</div>

				<div class="row blog list-blog">
					<?php while ( have_rows('pessoas-diretoria') ) : the_row(); ?>
						<div class="col-4">
							
							<?php 
								$imagem = get_sub_field('imagem');

								if($imagem){ ?>
									<div class="img-post"><img src="<?php echo $imagem['sizes']['wide-medium']; ?>"></div>
									<h3><?php the_sub_field('titulo'); ?></h3>
									<p><?php the_sub_field('texto'); ?></p>
								<?php }
							?>

						</div>
					<?php endwhile; ?>
				</div>

			</div>
		</section>
	<?php endif; ?>


	<?php get_template_part( 'associese' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>

<script type="text/javascript">
	
	banner_full = $('.banner-full-height').height();
	$('.banner-full-50').height(banner_full + 60);
	$('.banner-full-txt').height(banner_full);

</script>