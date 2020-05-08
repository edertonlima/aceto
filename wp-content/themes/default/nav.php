<nav class="nav">
	<ul>

		<?php 
			$array_menu = wp_get_nav_menu_items('menu');
			$menu = array();
			foreach ($array_menu as $item) {
				if (empty($m->menu_item_parent)) { ?>

					<li>
						<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
					</li>

				<?php }
			}
		?>
		
		<li>
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


		<!--<li class="search"></li>-->
	</ul>
</nav>

	<div class="atendimento">
		<i class="far fa-comment fa-flip-horizontal cor1"></i>
		<div>
			<span>Atendimento</span>
			<?php the_field( 'telefone' , 'option' ); ?>
		</div>
	</div>

	<?php if( have_rows('botoes','option') ): ?>
		<div class="btn-topo">
				
			<?php while ( have_rows('botoes','option') ) : the_row(); ?>

				<a href="<?php the_sub_field('link'); ?>" target="_blank" title="<?php the_sub_field('titulo'); ?>" class="btn transparente cor1"><?php the_sub_field('titulo'); ?></a>

			<?php endwhile; ?>

		</div>
	<?php endif; ?>

	<div class="menu-mobile" id="nav-icon2">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>