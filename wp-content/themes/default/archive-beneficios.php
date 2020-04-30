<?php get_header(); ?>

	<section class="box-section breadcrumbs">
		<div class="container">

			<div class="row">
				<div class="col-12">
					
					<h1 class="cor1">Nossos Benefícios</h1>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="home">Home</a></li>
						<li><i class="fas fa-circle"></i></li>
						<li>Benefícios</li>
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

	<?php if( have_posts() ){ ?>				

	<section class="box-section">
		<div class="container">

			<div class="beneficios">
				
				<ul class="beneficios-links">

					<?php
					$item = 0;
					while ( have_posts() ) : the_post();
						$item++ ?>
						<li class="<?php if($item == 1){ echo 'on'; } ?>" var-cont="<?php echo $post->ID; ?>">
							<div class="link-content">
								<span style="/*width: 150px;*/"><?php the_title(); ?></span>		
							</div>
						</li>
					<?php endwhile; ?>
<?php /*
					<li class="" var-cont="2">
						<div class="link-content">
							<span>Auditório</span>		
						</div>
					</li>
					<li class="" var-cont="3" id="certificado-digital">
						<div class="link-content">
							<span>Certificado Digital</span>		
						</div>
					</li>
					<li class="" var-cont="4">
						<div class="link-content">
							<span>Consultas SCPC</span>		
						</div>
					</li>
					<li class="" var-cont="5">
						<div class="link-content">
							<span>Consultoria Jurídica</span>		
						</div>
					</li>
					<li class="" var-cont="6">
						<div class="link-content">
							<span>PACE</span>		
						</div>
					</li>
					<li class="" var-cont="7">
						<div class="link-content">
							<span>ACE Odonto</span>		
						</div>
					</li>
					<li class="" var-cont="8">
						<div class="link-content">
							<span>Painel de LED</span>		
						</div>
					</li>
					*/ ?>
				</ul>

				<div class="beneficios-conteudo">
					
					<?php  
					$item = 0;
					while ( have_posts() ) : the_post();
						$item++; ?>
						<div class="beneficios-item <?php if($item == 1){ echo 'on'; } ?>" id="<?php echo $post->ID; ?>">								
							<div class="row">			
								<div class="col-6">
									<?php $banner_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'wide' ); ?>
									<div class="bg-imagem" style="height: 720px; margin-right: 20px; background-image: url('<?php echo $banner_image[0]; ?>');">

										<?php if(get_field('logo_beneficios')){ ?>
											<img src="<?php the_field('logo_beneficios'); ?>" class="" />
										<?php } ?>
									</div>
								</div>

								<div class="col-6">
									<h4 class="" style="margin-top: 20px;"><?php the_title(); ?></h4>
									<h2 class="cor1"><?php the_field('titulo'); ?></h2>
									<div class="conteudo">
										<?php the_content(); ?>

										<h3 class="cor1">Entre em contato com agente<br>e saiba mais</h3>
										<a href="<?php echo get_home_url(); ?>/fale-conosco" target="" class="btn small transparente cor1 margin-top-30 color-cor-txt" title="ver todos">Enviar mensagem</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>

					<div class="beneficios-item" id="2">								
						<div class="row">			
							<div class="col-6">
								<div class="bg-imagem" style="height: 720px; margin-right: 20px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-sobre.jpg');">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unimed.png" class="" />
								</div>
							</div>

							<div class="col-6">
								<h4 class="" style="margin-top: 20px;">Auditório</h4>
								<h2 class="cor1">A Associação comercial e Empresarial de Teofilo Otoni</h2>
								<div class="conteudo">
									<p>Através de um arrojado convênio firmado com a Unimed Três Vales, a ACETO oferece um plano de saúde corporativo aos seus associados (extensivo à familiares e colaboradores).</p>

									<p>Com este convênio a UNIMED disponibiliza assistência médico-hospitalar para os nossos associados, através de sua rede de atendimento que conta, só na região com 324 médicos cooperados nas mais diversas especialidades, além de uma completa rede de hospitais, clínicas e serviços credenciados, tudo isso é claro com descontos significativos nas mensalidades conveniadas.</p>

									<h3 class="cor1">Entre em contato com agente<br>e saiba mais</h3>
									<a href="<?php echo get_home_url(); ?>/fale-conosco" target="" class="btn small transparente cor1 margin-top-30 color-cor-txt" title="Enviar mensagem">Enviar mensagem</a>
								</div>
							</div>
						</div>
					</div>

					<div class="beneficios-item" id="03">		
						<div class="row">			
							<div class="col-6">
								<div class="bg-imagem" style="height: 720px; margin-right: 20px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-sobre.jpg');">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unimed.png" class="" />
								</div>
							</div>

							<div class="col-6">
								<h4 class="" style="margin-top: 20px;">Certificado Digital</h4>
								<h2 class="cor1">A Associação comercial e Empresarial de Teofilo Otoni</h2>
								<div class="conteudo">
									<p>Através de um arrojado convênio firmado com a Unimed Três Vales, a ACETO oferece um plano de saúde corporativo aos seus associados (extensivo à familiares e colaboradores).</p>

									<p>Com este convênio a UNIMED disponibiliza assistência médico-hospitalar para os nossos associados, através de sua rede de atendimento que conta, só na região com 324 médicos cooperados nas mais diversas especialidades, além de uma completa rede de hospitais, clínicas e serviços credenciados, tudo isso é claro com descontos significativos nas mensalidades conveniadas.</p>

									<h3 class="cor1">Entre em contato com agente<br>e saiba mais</h3>
									<a href="<?php echo get_home_url(); ?>/fale-conosco" target="" class="btn small transparente cor1 margin-top-30 color-cor-txt" title="Enviar mensagem">Enviar mensagem</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	
	<?php } ?>

<?php get_footer(); ?>

<script type="text/javascript">

	$('.beneficios-links li').click(function(){

		$('.beneficios-links li').removeClass('on');
		$(this).addClass('on');
		//$('span',this).width(150);

		id = $(this).attr('var-cont');
		$('.beneficios-item').removeClass('on');
		$('.beneficios-item#'+id).addClass('on');

	});

</script>