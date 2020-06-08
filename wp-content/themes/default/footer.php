
	<footer class="box-section footer">
		<div class="container">
			
			<div class="row">
				
				<?php if(!is_page('fale-conosco')){ ?>
					<div class="col-12 content-footer info-footer <?php if(is_home()){ echo 'border'; } ?>">

						<div class="col-footer">
							<h3 class="cor1"><?php echo get_bloginfo( 'name' ); ?></h3>
						</div>
						<div class="col-footer">
							<div class="box-contato">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato.jpg">
								<div>
									<span><?php the_field( 'telefone' , 'option' ); ?></span>
									<a href="mailto:<?php the_field( 'email' , 'option' ); ?>"><?php the_field( 'email' , 'option' ); ?></a>
								</div>
							</div>
						</div>
						<div class="col-footer">
							<div class="box-contato">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-localizacao.jpg">
								<div>
									<span><?php the_field( 'endereco' , 'option' ); ?></span>
								</div>
							</div>
						</div>

					</div>
				<?php } ?>
			
			
				<div class="col-12 border content-footer">

					<?php if( have_rows('diretoria','option') ): ?>
						<div class="col-6">
							<div class="diretoria">
								<h5>Diretoria</h5>
								
								<?php while ( have_rows('diretoria','option') ) : the_row(); ?>

									<p>
										<span class="titulo"><?php the_sub_field('titulo'); ?></span>
										<span><?php the_sub_field('texto'); ?></span>
									</p>

								<?php endwhile; ?>

							</div>
						</div>
					<?php endif; ?>
					
					<div class="col-6 box-vertical img-footer vertical-center">
						<div class="conteúdo-vertical center">

							<?php if(get_field( 'parceiro-1' , 'option' )){ ?>
								<img src="<?php the_field( 'parceiro-1' , 'option' ); ?>" alt="<?php the_field( 'parceiro-1-legenda' , 'option' ); ?>">
							<?php } ?>

							<?php if(get_field( 'parceiro-2' , 'option' )){ ?>
								<img src="<?php the_field( 'parceiro-2' , 'option' ); ?>" alt="<?php the_field( 'parceiro-2-legenda' , 'option' ); ?>">
							<?php } ?>
						</div>		
					</div>
				</div>
				<div class="col-6 border copy">
					<p>© <?php echo date('Y') . ' ' . get_bloginfo( 'name' ); ?>.</p>				
				</div>
				<div class="col-6 border copy">
					<nav class="nav nav-footer">
						<ul>
							
							<li class="nav-social">
								<?php 
									if(get_field( 'url_facebook' , 'option' )){ ?>
										<a href="<?php the_field( 'url_facebook' , 'option' ); ?>" title="<?php the_field( 'tit_facebook' , 'option' ); ?>"><i class="fab fa-facebook-square"></i></a>
									<?php } 
								?>

								<?php 
									if(get_field( 'url_instagram' , 'option' )){ ?>
										<a href="<?php the_field( 'url_instagram' , 'option' ); ?>" title="<?php the_field( 'tit_instagram' , 'option' ); ?>"><i class="fab fa-instagram"></i></a>
									<?php } 
								?>

								<?php 
									if(get_field( 'url_twitter' , 'option' )){ ?>
										<a href="<?php the_field( 'url_twitter' , 'option' ); ?>" title="<?php the_field( 'tit_twitter' , 'option' ); ?>">
											<i class="fab fa-twitter"></i>
										</a>
									<?php } 
								?>

								<?php 
									if(get_field( 'url_youtube' , 'option' )){ ?>
										<a href="<?php the_field( 'url_youtube' , 'option' ); ?>" title="<?php the_field( 'tit_youtube' , 'option' ); ?>">
											<i class="fab fa-youtube"></i>
										</a>
									<?php } 
								?>
							</li>

						</ul>
					</nav>
				</div>
			</div>

		</div>
	</footer>

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