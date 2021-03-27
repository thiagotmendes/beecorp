<section class="main-section main-section__search">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="hidden" name="post_type" value="solucoes" />
					<div class="form-search input-group mb-3">
						<input type="text" name="s" value="<?php echo get_search_query(); ?>" class="form-control" placeholder="Pesquise por palavras chave    " aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn-forn_search" type="submit">
								<i class="icon icon-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>