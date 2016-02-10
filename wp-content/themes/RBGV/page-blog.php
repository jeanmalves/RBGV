<?php get_header(); ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <?php the_post(); ?>
      <h1 class="titulo-sessao"><?php the_title(); ?></h1>
      <h2 class="subtitulo-sessao">Informações publicadas no Blog da RBGV Advogados</h2>
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <div class="publicacao">
        <?php
          wp_reset_query();
          // showposts é o número de posts recentes que se deseja mostrar
          $aRecentPosts = new WP_Query("showposts=4");
         if( $aRecentPosts->have_posts() ) :
           while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
             $category = get_the_category($aRecentPosts->ID);
        ?>
            <div class="post-min">
              <div>
                <h3 class="nome-post"><?php the_title(); ?></h3>
                <a href="#" class="w-clearfix w-inline-block link link-info-blog">
                  <img src="<?php echo PW_THEME_URL ?>assets/images/icon-folder-verde.svg" class="icon-info-blog">
                  <div class="legenda"><?php echo $category[0]->cat_name; ?></div>
                </a>
                <a href="#" class="w-clearfix w-inline-block link link-info-blog">
                  <img src="<?php echo PW_THEME_URL ?>assets/images/icon-autor-verde.svg" class="icon-info-blog">
                  <div class="legenda"><?php the_author() ?></div>
                </a>
                <a href="#" class="w-clearfix w-inline-block link">
                  <img src="<?php echo PW_THEME_URL ?>assets/images/icon-data-verde.svg" class="icon-info-blog">
                  <div class="legenda"><?php the_time('d/m/Y'); ?></div>
                </a>
              </div>
              <div class="w-clearfix post-content">
                <div class="thumb-post dessaturar">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php  the_post_thumbnail('medium'); ?>
                  <?php endif; ?>
                </div>
                <div class="resumo-wrapper paragrafo">
                  <?php the_excerpt_max_charlength(290); ?>
                  <?php echo new_excerpt_more( "Leia mais" ) ?>
                </div>
              </div>
              <div class="w-embed">
                <hr>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <a href="#" class="w-button btn-branco">postagens antigas</a>
      </div>
      <?php get_sidebar('blog');?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
