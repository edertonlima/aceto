
	<footer class="box-section footer">
		<div class="container">
			
			<div class="row">
				
				<?php if(!is_page('fale-conosco')){ ?>
				<div class="col-12 content-footer info-footer <?php if(is_home()){ echo 'border'; } ?>">

					<div class="col-footer">
						<h3 class="cor1">Associação Comercial e Empresarial de Teófilo Otoni</h3>
					</div>
					<div class="col-footer">
						<div class="box-contato">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato.jpg">
							<div>
								<span>(33) 3522-6677</span>
								<a href="mailto:aceto@aceto.com.br">aceto@aceto.com.br</a>
							</div>
						</div>
					</div>
					<div class="col-footer">
						<div class="box-contato">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-localizacao.jpg">
							<div>
								<span>Rua Epaminondas Otoni, 702,<br>1º andar Centro Teófilo Otoni MG</span>
							</div>
						</div>
					</div>

				</div>
			<?php } ?>

				<div class="col-12 border content-footer">
					<div class="col-6">
						<div class="diretoria">
							<h5>Diretoria</h5>
							<p>
								<span class="titulo">Presidente:</span>
								<span>Ricardo Bastos Peres<br>Emex Explosivos</span>
							</p>
							<p>
								<span class="titulo">1º Vice Presidente:</span>
								<span>Sebastião Ribeiro de Souza - Jhiane</span>
							</p>
							<p>
								<span class="titulo">2º Tesoureiro:</span>
								<span>Romeci Rodrigues dos Santos - R&R Seviços Contábeis</span>
							</p>
							<p>
								<span class="titulo">Gerente:</span>
								<span>Mielly Maia - ACETO</span>
							</p>
						</div>
					</div>
					<div class="col-6 box-vertical img-footer vertical-center">
						<div class="conteúdo-vertical center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-footer.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-footer-2.jpg">
						</div>		
					</div>
				</div>
				<div class="col-12 border copy">
					<p>© 2020 Associação Comercial e Empresarial de Teófilo Otoni.</p>
				</div>
			</div>

		</div>
	</footer>

<?php /*
	<section class="box-section no-padding" id="demonstracao">
		<div class="container">

			<h2 class="titulo-form">Agende uma demonstração</h2>
			<form class="demonstracao">
				
				<div class="row">
					<div class="scrollbar scrollbar-dynamic">
					<div class="col-12">
						<p>Preencha seus contatos no formuláro abaixo e um membro de nossa equipe irá entrar em contato.</p>
					</div>

					<fieldset class="col-7 margin-top clear">
						<input type="text" name="" placeholder="*Seu nome">
					</fieldset>

					<fieldset class="col-7 clear">
						<input type="text" name="" placeholder="*Seu e-mail">
					</fieldset>

					<fieldset class="col-7 clear">
						<input type="text" name="" placeholder="*Empresa">
					</fieldset>

					<fieldset class="col-7 clear">
						<input type="text" name="" placeholder="*Telefone">
					</fieldset>

					<fieldset class="col-7 clear">
						<input type="text" name="" placeholder="*Assunto">
					</fieldset>

					<fieldset class="col-7 clear">
						<textarea name="" placeholder="*Mensagem"></textarea>
					</fieldset>

					<fieldset class="col-12">
						<button class="btn mini transparente">enviar</button>
					</fieldset>
					</div>
				</div>

			</form>

		</div>
	</section>
*/ ?>

	<?php wp_footer(); ?>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			scroll_body = $(window).scrollTop();
			if(scroll_body > 100){
				$('.header').addClass('scroll');
			}else{
				$('.header').removeClass('scroll');
			}


			// MENU MOBILE
			widthWindow = $(window).width();
			if(widthWindow < 900){
				$('.menu-mobile').click(function(){
					//$('.submenu').removeClass('ativo');

					$(this).toggleClass('open');
					$('.nav').toggleClass('open');
					$('body').toggleClass('open');
					$('.btn-topo').toggleClass('open');
					$('.atendimento').toggleClass('open');
					
				});

				/*$('.btn-menu-mobile').click(function(){
					$(this).parent().toggleClass('ativo');
				});*/
			}else{

				$('.menu-mobile').click(function(){
					$(this).toggleClass('open');
					$('.btn-topo').toggleClass('open');
					$('body').toggleClass('open');
				});
			}


			$('.footer .img-footer').height($('.footer .diretoria').height());
		});

		$(window).scroll(function(){
			scroll_body = $(window).scrollTop();
			if(scroll_body > 100){
				$('.header').addClass('scroll');
			}else{
				$('.header').removeClass('scroll');
			}
		});

		$(window).resize(function(){

			// MENU MOBILE
			$('.menu-mobile').removeClass('open');
			$('.nav').removeClass('open');
			$('body').removeClass('open');
			$('.btn-topo').removeClass('open');
			$('.atendimento').removeClass('open');
			//$('.submenu').removeClass('ativo');


			$('.footer .img-footer').height($('.footer .diretoria').height());

		});

	</script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollbar/jquery.scrollbar.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.scrollbar').scrollbar();
		});
	</script>

</body>
</html>