<?php if(have_rows('adicionar_menu_especial', 'option')): ?>
<section class="main-control">
	<div class="container">
		<div class="main-control__menu">
            <?php while(have_rows('adicionar_menu_especial', 'option')): the_row() ?>
			<a href="" class="main-control__menu--link">
				<div class="main-control__menu--link--icon">
                    <img src="<?= get_sub_field('icone_menu_especial') ?>" alt="" width="25">
				</div>
				<div class="main-control__menu__description">
					<span> <?= get_sub_field('titulo_menu_especial') ?> <i class="icon icon-arrow-double"></i></span>
					<?= get_sub_field('sub_titulo_menu_especial') ?>
				</div>
			</a>
            <?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>