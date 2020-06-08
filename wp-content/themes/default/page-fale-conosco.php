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

	<?php if(get_the_content()){ ?>
		<section class="box-section">
			<div class="container">

				<div class="row">
					<div class="col-12">
						
					<div class="col-12">
						<div class="conteudo justify">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

			</div>
		</section>
	<?php } ?>


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


<?php endwhile; ?>
<?php get_footer(); ?>