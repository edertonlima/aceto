					<?php 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb' ); 
						if($imagem[0]){ ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="img-post"><img src="<?php echo $imagem[0]; ?>" title="<?php the_title(); ?>"></a>
						<?php }
					?>
					<span class="data"><?php echo get_the_date(); ?></span>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
					<a href="<?php the_permalink(); ?>" class="btn inline cor1 margin-top-30" title="leia mais">leia mais</a>