<?php get_header(); ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <h1 class="titulo-sessao">
        <?php printf( __( 'Resultados da Busca por: %s', 'Busca' ), get_search_query() ); ?>
      </h1>
      <h2 class="subtitulo-sessao">Informações publicadas no Blog da RBGV Advogados</h2>
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <div class="publicacao">
        <?php
         if( have_posts() ) :
           while( have_posts() ) : the_post();
             $category = get_the_category( get_the_ID() );
             $linkCategory = get_category_link( $category[0]->cat_ID );

             $archive_year = get_the_time('Y');
             $archive_month = get_the_time('m');
             $archive_day =  get_the_time('d');
        ?>
            <div class="post-min">
              <div>
                <h3 class="nome-post"><?php the_title(); ?></h3>
                <a href="<?php echo esc_url( $linkCategory ); ?>" class="w-clearfix w-inline-block link link-info-blog">
                  <img src="<?php echo PW_THEME_URL ?>assets/images/icon-folder-verde.svg" class="icon-info-blog">
                  <div class="legenda"><?php echo $category[0]->cat_name; ?></div>
                </a>
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="w-clearfix w-inline-block link link-info-blog">
                  <img src="<?php echo PW_THEME_URL ?>assets/images/icon-autor-verde.svg" class="icon-info-blog">
                  <div class="legenda"><?php the_author() ?></div>

                </a>
                <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>" class="w-clearfix w-inline-block link">
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
          <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
          ?>
        <?php else: ?>
                <div class="artigo">
                    <h2 class="subtitulo-sessao">Lamentamos mas não foram encontrados artigos.</h2>
                </div>
        <?php endif; ?>
        <a href="<?php echo PW_URL ?>/postagens-antigas" class="w-button btn-branco">postagens antigas</a>
      </div>
      <?php get_sidebar('blog');?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
