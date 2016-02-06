<?php get_header(); ?>
	<div class="w-section featured-section">
    <div class="w-container area-pagina">
      <div data-ix="scroll-reveal-part-1" class="titulo">
      	<?php the_post(); ?>
        <h1 class="titulo-sessao texto-centro"><?php the_title(); ?></h1>
      </div>
      <div id="simple-page" data-ix="scroll-reveal-part2" class="conteudo paragrafo">
	    <?php
	      	if ( has_post_thumbnail() ) {
					    the_post_thumbnail( 'large' );
					}
      	?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
