<?php get_header(); ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <?php the_post(); ?>
      <h1 class="titulo-sessao">
        <?php the_title();?>
      </h1>
      <h2 class="subtitulo-sessao">
        <?php echo types_render_field( "cargo", array( ) ); ?>
      </h2>
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <?php if ( has_post_thumbnail() ) : ?>
              <div class="img-wrapper">
                <?php the_post_thumbnail( 'large' ); ?>
              </div>
  		<?php	endif; ?>
      <?php get_sidebar('profissional');?>
      <div class="publicacao">
        <div class="paragrafo">
          <p>
            <?php the_content(); ?>
          </p>
            <a href="<?php echo PW_URL ?>/profissionais" class="w-button btn-branco">mais perfis</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
