<?php
	if($args['section'] == 'solucao'):
?>
<div class="text-center main-section__cta">
	<?php
	if( get_field('descricao_pre_cta_solucao', 'option') ):
		echo '<div>'.get_field('descricao_pre_cta_solucao', 'option').' </div>';
	endif;
	if(get_field('cta_solucoes', 'option')):
		echo '<div class="main-section__cta--link">';
		echo '<a href="'. get_field('cta_solucoes', 'option') .'" class="main-link main-link__ctas">';
		echo get_field('texto_cta_solucao', 'option');
		echo "<i class='icon icon-arrow-double'></i>";
		echo '</a>';
		echo "</div>";
	endif;
	?>
</div>
<?php
	elseif($args['section'] == 'clientes'): ?>
<div class="text-center main-section__cta mt-5">
	<?php
	if( get_field('descricao_cta_cliente', 'option') ):
		echo '<div>'.get_field('descricao_cta_cliente', 'option').' </div>';
	endif;
	if(get_field('cta_cliente', 'option')):
		echo '<div class="main-section__cta--link">';
		echo '<a href="'. get_field('cta_cliente', 'option') .'" class="main-link main-link__ctas">';
		echo get_field('texto_cta_cliente', 'option');
		echo "<i class='icon icon-arrow-double'></i>";
		echo '</a>';
		echo "</div>";
	endif;
	?>
</div>
<?php elseif($args['section'] == 'blog'): ?>
        <div class="text-center main-section__cta mt-5">
			<?php
			if( get_field('titulo_texto_cta_blog_page', 'option') ):
				echo '<div>'.get_field('titulo_texto_cta_blog_page', 'option').' </div>';
			endif;
			if(get_field('link_cta_blog_page', 'option')):
				echo '<div class="main-section__cta--link">';
				echo '<a href="'. get_field('link_cta_blog_page' , 'option') .'" class="main-link main-link__ctas">';
				echo get_field('texto_cta_blog_page' , 'option');
				echo "<i class='icon icon-arrow-double'></i>";
				echo '</a>';
				echo "</div>";
			endif;
			?>
        </div>
	<?php
    elseif ($args['section'] == 'about'):
        ?>
    <div class="text-center main-section__cta mt-5">
    <?php
	    if ( get_field( 'texto_sobre_cta_sobre', 'option' ) ):
		    echo '<div>' . get_field( 'texto_sobre_cta_sobre', 'option' ) . ' </div>';
	    endif;
	    if ( get_field( 'texto_cta_sobre', 'option' ) ):
		    echo '<div class="main-section__cta--link">';
		    echo '<a href="' . get_field( 'link_cta_sobre', 'option' ) . '" class="main-link main-link__ctas">';
		    echo get_field( 'texto_cta_sobre', 'option' );
		    echo "<i class='icon icon-arrow-double'></i>";
		    echo '</a>';
		    echo "</div>";
	    endif;
	    ?>
    </div>
    <?php
	else:
		?>
		<div class="text-center main-section__cta mt-5">
			<div></div>
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<a href="" class="main-link main-link__ctas">
						<Des></Des>cubra agora
					</a>
				</div>
			</div>
		</div>
<?php
	endif;