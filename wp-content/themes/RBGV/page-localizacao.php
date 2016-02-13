<?php get_header(); ?>
<?php the_post(); ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <h1 class="titulo-sessao"><?php the_title(); ?></h1>
      <h2 class="subtitulo-sessao">Endereço da RBGV Advogados no mapa</h2>
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <div class="publicacao right">
        <div class="mapa-wrapper">
          <div id="mapa" class="w-widget w-widget-map map"></div>
        </div>
      </div>
      <?php get_sidebar('contato'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
