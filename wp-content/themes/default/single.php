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


	<section class="box-section blog detalhe-blog">
		<div class="container">

			<div class="row">
				<div class="col-12">
					<div class="conteudo conteudo-post">
						<span class="data">11 de Agosto de 2018</span>
						<p class="center resumo">Em meio à alta volatilidade cambial, às incertezas sobre a retomada do crescimento e aos impactos da paralisação dos caminhoneiros, 7 de cada 10 brasileiros avaliam que a situação econômica do país se deteriorou nos últimos meses.</p>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-single.gif" class="destaque" />
					</div>				
				</div>

				<div class="col-12">
					<div class="conteudo conteudo-post justify">
						<div class="content">
							
							<span class="autor">Ranier Bragon</span>

							<p>Em meio à alta volatilidade cambial, às incertezas sobre a retomada do crescimento e aos impactos da paralisação dos caminhoneiros, 7 de cada 10 brasileiros avaliam que a situação econômica do país se deteriorou nos últimos meses</p>

							<p>Pesquisa do Datafolha concluída na quinta-feira (7) mostra que 72% dos entrevistados enxergam uma piora do cenário, contra apenas 6% que apontam melhora.</p>

							<p>Os números são bem mais negativos do que os da última pesquisa do instituto, feita na primeira quinzena de abril. Na época, 52% dos entrevistados opinaram ter havido deterioração no ambiente econômico —20 pontos percentuais a menos do que agora.</p>

							<p>A expectativa para o futuro também não é boa.</p>

							<p>Diferentemente de abril, quando os que demonstravam otimismo eram numericamente superiores aos que manifestavam pessimismo, agora os que afirmam que a situação vai piorar nos próximos meses somam 32%, contra 26% dos que acreditam em melhora da economia.</p>

							<p>Quando os entrevistadores do Datafolha perguntaram sobre a situação econômica pessoal do brasileiro, as respostas também foram mais negativas em relação ao último levantamento —49% dizem ter passado por retrocesso (esse índice era de 42% há dois meses) contra 10% que declaram avanço.</p>

							<p>Assim como a rejeição recorde ao governo de Michel Temer, o mau humor do brasileiro com a economia também é o mais alto na atual gestão.</p>

							<p>Desde maio de 2016 o índice dos que avaliavam que a situação havia piorado estava na casa dos 60%, tendo caído para 52% no início de abril deste ano.</p>

							<p>A atual percepção popular encontra eco no panorama traçado por especialistas do mercado financeiro.</p>

							<p>O boletim Focus do Banco Central, que compila as previsões de consultorias e instituições financeiras, também mostra o aumento do pessimismo. No início de março, a aposta era a de que o país alcançaria uma taxa de crescimento da economia próxima de 3% até o fim deste ano.</p>

							<p>O último boletim, do início deste mês, mostra cenário mais nublado: alta de 2,18% do PIB em 2018.</p>

							<p>A tendência é de queda nessa projeção, para um cenário próximo à estagnação. No fim da semana passada, após o IBGE (Instituto Brasileiro de Geografia e Estatística) divulgar que a inflação de maio foi de 0,4%, já havia consultorias e bancos revendo suas projeções para a alta do PIB (Produto Interno Bruto) de 2018 para menos de 2%.</p>

							<span class="fonte">Leia mais em: www.uol.com.br <br>Fonte: UOL</span>
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

				<?php //while ( have_posts() ) : the_post(); ?>

					<div class="col-4">
						
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" class="" />
						<span class="data">11 de Agosto de 2018</span>
						<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
						<a href="<?php the_permalink(); ?>" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

					</div>

					<div class="col-4">
						
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" class="" />
						<span class="data">11 de Agosto de 2018</span>
						<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
						<a href="<?php the_permalink(); ?>" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

					</div>

					<div class="col-4">
						
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" class="" />
						<span class="data">11 de Agosto de 2018</span>
						<h3>Situação do país piorou para 72% da população, aponta Datafolha</h3>
						<a href="<?php the_permalink(); ?>" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>

					</div>

				<?php //endwhile; ?>

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


<?php endwhile; ?>
<?php get_footer(); ?>

<script type="text/javascript">
	
	banner_full = $('.banner-full-height').height();
	$('.banner-full-50').height(banner_full + 60);
	$('.banner-full-txt').height(banner_full);

</script>