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
						<li>Nossos Benefícios</li>
					</ul>

				</div>
			</div>

		</div>
	</section>


	<section class="box-section">
		<div class="container">

			<div class="row">

				<h4 class="center">JÁ CONHECE OS NOSSOS BENEFÍCIOS?</h4>
				<h2 class="center cor1">Seja um sócio e desfrutas de todos esses benefícios</h2>

			</div>

		</div>
	</section>



		<section class="box-section">
			<div class="container">

				<div class="row">			
					<div class="col-6">
						<div class="bg-imagem" style="height: 720px; margin-right: 20px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-sobre.jpg');"></div>
					</div>

					<div class="col-6">

						<h4 class="" style="margin-top: 20px;">MAIS DOS NOSSOS VALORES</h4>
						<h2 class="cor1">Buscando sempre o melhor para todos!</h2>

						<div class="conteudo">
							<ul class="cont-list">
								<li>
									<i class="far fa-check-circle"></i>
									<span>Gestão e estruturas</span>
									<p>Melhorar, continuamente, os processos do seu sistema integrado de gestão e estruturais; <br>Promover as boas práticas de governança corporativa;</p>
								</li>

								<li>
									<i class="far fa-check-circle"></i>
									<span>Metas e objetivos</span>
									<p>Estabelecer objetivos e metas compatíveis com a política, analisando criticamente os resultados apurados;</p>
								</li>

								<li>
									<i class="far fa-check-circle"></i>
									<span>Colaboradores</span>
									<p>Promover o desenvolvimento profissional e a valorização dos seus colaboradores;</p>
								</li>

								<li>
									<i class="far fa-check-circle"></i>
									<span>Compromisso público e meio ambiente</span>
									<p>Assumir o compromisso público, dentro de sua área de atuação, de conservação do meio ambiente;<br>Desenvolver ações sociais de interesse público;</p>
								</li>

								<li>
									<i class="far fa-check-circle"></i>
									<span>Compromisso direitos humanos</span>
									<p>Defender e proteger os direitos humanos, da criança e do adolescente e do trabalhador;<br>Atender as legislações aplicáveis;</p>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</section>



		<section class="box-section">
			<div class="container">

				<div class="row">
					<div class="col-12">
						
						<h4 class="center">NOSSA HISTÓRIA</h4>
						<h2 class="center cor1">A Associação comercial e Empresarial de Teofilo Otoni</h2>

					</div>
					
					<div class="col-6">
						<div class="conteudo justify">
							<p>A Associação comercial e Empresarial de Teofilo Otoni, foi fundada em 27/02/1941, com o objetivo de promover o desenvolvimento de forma decisiva, as empresas, os mais diversos empreendedores e contribuir , assim, para o crescimento regional.</p>

							<p>Nossa entidade coloca a disposição de seus associados uma série de produtos e serviços que possibilitam e agregam valores às suas empresas, nas mais diversas necessidades, nos setores comerciais, industriais e da prestação de serviços.</p>
						</div>
					</div>

					<div class="col-6">
						<div class="conteudo justify">
							<p>É um exemplo de entidade de sucesso, que surgiu com o propósito de trazer benefícios e tranqüilidade aos seus associados, contribuindo ainda para o progresso da cidade. Alcançou esses objetivos através da atuação dos seus presidentes, membros das diretorias e conselheiros, que sempre lutaram pelos objetivos criados há tantos anos, somados a outras melhorias que foram incorporadas nessas sete décadas</p>

							<p>Graças à experiência e constante evolução da ACE-TO, hoje ela representa tradição e modernidade na prestação de serviço e apoio ao empreendedorismo.</p>
						</div>
					</div>
				</div>

			</div>
		</section>


		<section class="box-section">
			<div class="container">

				<div class="row">				
					<div class="col-6">

						<h4 class="" style="margin-top: 30px;">CONTATO</h4>
						<h2 class="cor1">Associação comercial e Empresarial de Teofilo Otoni</h2>

						<div class="info-contato">
							<span>Telefone:</span>
							(33) 3522-6677
						</div>

						<div class="info-contato">
							<span>E-mail:</span>
							<a href="mailto:aceto@aceto.com.br">aceto@aceto.com.br</a>
						</div>

						<div class="info-contato">
							<span>Endereço:</span>
							Rua Epaminondas Otoni, 702,<br>1º andar Centro Teófilo Otoni MG
						</div>

					</div>

					<div class="col-6">
						<form action="" class="contato">

							<fieldset class="col-12">
								<h2 class="cor1">Fale Conosco</h2>
								<p class="margin-top-30">Preencha abaixo com seus dados que entraremos em contato com você o mais rápido possível.</p>
							</fieldset>
							<fieldset class="col-6">
								<input type="text" placeholder="Seu Nome">
							</fieldset>

							<fieldset class="col-6">
								<input type="text" placeholder="E-mail">
							</fieldset>

							<fieldset class="col-6">
								<input type="text" placeholder="Telefone">
							</fieldset>

							<fieldset class="col-6">
								<input type="text" placeholder="Nome da Empresa">
							</fieldset>

							<fieldset class="col-12">
								<button type="submit" class="btn small cor1 margin-top-20">enviar</button>
							</fieldset>
						</form>
					</div>
				</div>

			</div>
		</section>


	<section class="box-section margin-top-30">

		<div class="banner-full-50" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-associase.jpg')">

		</div>

		<div class="container">

			<div class="row">
				<div class="col-6 banner-full-txt">
			
			<div class="box-vertical vertical-center">
				<div class="conteúdo-vertical">
					
					<div class="box-destaque">

						<span class="titulo">
							Já conhece todos os benefícios?
						</span>

						<a href="" class="btn extra cor1">conhecer</a>
					</div>
				</div>
			</div>

				</div>

				<div class="col-6 banner-full-height">
					
					<div class="conteudo">
						<h4>Associe-se</h4>
						<h2 class="cor1">Associe-se e venha fazer parte desse grupo repleto de benefícios!</h2>

						<div class="dados-info list-dados-info">
							<div class="info-item">							
								<div class="info-table">
									<span class="info-num">1200<span>+</span></span>
									<span class="info-legenda">associados</span>
								</div>
							</div>

							<div class="info-item">							
								<div class="info-table">
									<span class="info-num">12<span>+</span></span>
									<span class="info-legenda">convênios</span>
								</div>
							</div>

							<div class="info-item">							
								<div class="info-table">
									<span class="info-num">60<span>+</span></span>
									<span class="info-legenda">cursos e palestras</span>
								</div>
							</div>
						</div>

						<p class="margin-top-30">Preencha abaixo com seus dados que entraremos em contato com você o mais rápido possível.</p>
					</div>

					<form action="" class="associe-se">
						<fieldset class="col-6">
							<input type="text" placeholder="Seu Nome">
						</fieldset>

						<fieldset class="col-6">
							<input type="text" placeholder="E-mail">
						</fieldset>

						<fieldset class="col-6">
							<input type="text" placeholder="Telefone">
						</fieldset>

						<fieldset class="col-6">
							<input type="text" placeholder="Nome da Empresa">
						</fieldset>

						<fieldset class="col-12">
							<button type="submit" class="btn transparente small cor1 margin-top-20 color-cor-txt">enviar</button>
						</fieldset>
					</form>

				</div>
			</div>

		</div>
	</section>


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

				480:{
					items:4
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