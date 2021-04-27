<?php
	if($args['section'] == 'solucao'):
?>
<div class="text-center main-section__cta">
	<?php
	if( get_field('descricao_pre_cta_solucao', 'option') ):
		echo '<div>'.get_field('descricao_pre_cta_solucao', 'option').' </div>';
	endif;
	if(get_field('cta_solucoes', 'option')):
		echo '<div class="row">';
		echo '<div class="col-md-4 offset-md-4">';
		echo '<a href="'. get_field('cta_solucoes', 'option') .'" class="main-link main-link__ctas">';
		echo get_field('texto_cta_solucao', 'option');
		echo "<i class='icon icon-arrow-double'></i>";
		echo '</a>';
		echo "</div>";
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
		echo '<div class="row">';
		echo '<div class="col-md-4 offset-md-4">';
		echo '<a href="'. get_field('cta_cliente', 'option') .'" class="main-link main-link__ctas">';
		echo get_field('texto_cta_cliente', 'option');
		echo "<i class='icon icon-arrow-double'></i>";
		echo '</a>';
		echo "</div>";
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