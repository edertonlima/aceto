<?php get_header(); ?>

<?php  while ( have_posts() ) : the_post(); ?>
	
	<?php if(!get_field('video-slide')){
		$banner_image = get_field('imagem-slide');
	} ?>


	<div class="carousel-banner owl-carousel owl-theme owl-loaded owl-full-height">
		<div class="owl-stage-outer">
			<div class="owl-stage flex"> 
<?php for ($i=0; $i < 3; $i++) { ?>
				<div class="owl-item">
	
	<section class="box-section <?php if(get_field('video-slide')){ echo 'video-slide '; } ?>no-padding full-height bg-imagem bg-mascara" <?php if(!get_field('video-slide')){ ?> style="background-image: url('<?php echo $banner_image['sizes']['wide']; ?>');" <?php } ?>>
		
		<?php if(get_field('video-slide')){ ?>
			<video autoplay="true" loop="true" muted="true">
				<source src="<?php the_field('video-slide'); ?>" type="video/mp4">
			</video>
		<?php } ?>

		<div class="mask-banner-home"></div>

		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ar-mineira.png" class="img-avatar" />

		<div class="container z-index-10">


			
			<div class="box-vertical vertical-center">
				<div class="conteúdo-vertical">
					
					<div class="box-destaque">

						<h4>Benefícios</h4>

						<span class="titulo cor1">
							Certificado Digital
							<?php /* <span class="super">+</span>150 Produtos */ ?>
							<?php //the_field('titulo-slide'); ?>
						</span>

						<span class="subtitulo">
							Seja um parceiro na emissão do certificado digital, cadastre e tenha acesso exclusivo.
							<?php //the_field('subtitulo-slide'); ?>
						</span>

						<a href="<?php the_field('link-slide'); ?>" class="btn extra cor1"><?php //the_field('titulo-link-slide'); ?>Saiba mais</a>
					</div>
				</div>
			</div>
		


		</div>
	</section>


				</div>
<?php } ?>
			</div>
		</div>
	</div>



	<section class="box-section slide-beneficios overflow-x">
		<div class="container">

			<div class="row">
				<div class="col-12">

					<div class="carousel-beneficios owl-carousel owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage flex">

								<?php for ($i=0; $i < 8; $i++) { ?>
								
									<div class="owl-item">
										<div class="block-item">
										
											<span class="titulo cor1">
												Certificado Digital
											</span>

											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ar-mineira.png" class="" />

											<span class="subtitulo">
												Seja um parceiro na emissão do certificado digital, cadastre e tenha acesso exclusivo.
											</span>
										
										</div>
									</div>

								<?php } ?>

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
						<h4>Exponor</h4>
						<h2 class="cor1">Onde as oportunidades e experiências se encontram</h2>

						<p>A maior Mostra empresarial do nordeste mineiro tem a missão de reunir em um único espaço representante da indústria e comércio de bens e serviços, varejistas e atacadistas, além de representantes de grandes marcas e fornecedores dos mais diversos segmentos.  O evento será realizado no centro de convenções Expominas, uma obra com mais de 10.000 m² onde serão instalados mais de 176 stands, com uma capacidade para 8.000 visitantes por dia, estacionamento para 1200 automóveis e tecnologia de ponta para o expositor divulgar a sua marca com êxito.</p>

						<p>A Exponor é uma oportunidade de destacar sua empresa, fazendo a ampliação da sua rede de contatos e, consequentemente a captação de novos clientes. Além de criar a chance do empresário fazer sua autoavaliação e análise da concorrência, e claro,  a realização de bons negócios, resultando no fortalecimento da marca.</p>

						<a href="http://www.exponormg.com.br/" target="_blank" class="btn transparente cor1 margin-top-30 color-cor-txt" title="Conhecer o evento">conhecer o evento</a>
					</div>

				</div>

				<div class="col-6">
					<div class="dados-info">
						<div class="info-item">							
							<div class="info-table">
								<span class="info-num">05<span>+</span></span>
								<span class="info-legenda">milhões movimentados</span>
							</div>
							<span class="info-txt">Fechamentos reais, em todas as edições.<br>Os melhores negócios!</span>
						</div>

						<div class="info-item">							
							<div class="info-table">
								<span class="info-num">175<span>+</span></span>
								<span class="info-legenda">expositores presentes</span>
							</div>
							<span class="info-txt">Fechamentos reais, em todas as edições.<br>Os melhores negócios!</span>
						</div>

						<div class="info-item">							
							<div class="info-table">
								<span class="info-num">05<span>+</span></span>
								<span class="info-legenda">milhões movimentados</span>
							</div>
							<span class="info-txt">Fechamentos reais, em todas as edições.<br>Os melhores negócios!</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>



	<section class="box-section">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h4 class="center">blog</h4>
					<h2 class="center cor1">Nossas últimas publicações</h2>

				</div>
			</div>

			<div class="blog list-blog">

					<div class="carousel-blog owl-carousel owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage flex">

				<div class="owl-item">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" class="" />
					<span class="data">11 de Agosto de 2018</span>
					<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
					<a href="" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

				</div>

				<div class="owl-item">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.jpg" class="" />
					<span class="data">11 de Agosto de 2018</span>
					<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
					<a href="" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

				</div>

				<div class="owl-item">
					
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.jpg" class="" />
					<span class="data">11 de Agosto de 2018</span>
					<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
					<a href="" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

				</div>

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


	<?php /*
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

<?php */endwhile; ?>
<?php get_footer(); ?>

<script type="text/javascript">
	
	banner_full = $('.banner-full-height').height();
	$('.banner-full-50').height(banner_full + 60);
	$('.banner-full-txt').height(banner_full);


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




	proj_height = $('.projetos .col-4:first-child').width();
	$('.projetos .article').height(proj_height);

	$(window).resize(function(){
		proj_height = $('.projetos .col-4:first-child').width();
		$('.projetos .article').height(proj_height);
	});

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

		/*
		var qtddot = $('.owl-dots').children().length;
		qtddot = (((qtddot*22)/2)+10)+'px';
		$('.owl-prev').css('margin-right',qtddot);
		$('.owl-next').css('margin-left',qtddot);
		*/
	</script>