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
							Orientar os associados e empresários locais, defendendo os interesses coletivos, promovendo e praticando a defesa de princípios éticos, respeito a sociedade e a prevenção de impactos econômicos, sociais e ambientais diversos.
						</span>
					</div>
				</div>

				<div class="col-4">
					<div class="block-item block-item-page-top">
						<span class="titulo center cor1">
							Valores
						</span>

						<span class="subtitulo">
							Respeitar a diversidade e a dignidade do ser humano, preservando a individualidade e privacidade, não admitindo a prática de atos discriminatórios de qualquer natureza, no ambiente de trabalho e em todas as nossas relações, com os públicos interno e externo.
						</span>
					</div>
				</div>

				<div class="col-4">
					<div class="block-item block-item-page-top">
						<span class="titulo center cor1">
							Visão
						</span>

						<span class="subtitulo">
							Transformação da entidade no maior instrumento de eficácia das políticas de desenvolvimento empresarial e sócio-econômico regional.
						</span>
					</div>
				</div>

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

<?php get_template_part( 'associese' ); ?>

<?php endwhile; ?>
<?php get_footer(); ?>

<script type="text/javascript">
	
	banner_full = $('.banner-full-height').height();
	$('.banner-full-50').height(banner_full + 60);
	$('.banner-full-txt').height(banner_full);

</script>