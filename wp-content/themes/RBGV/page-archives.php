<?php
/* Template Name: Postagens Antigas */
?>

<?php get_header(); ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <h1 class="titulo-sessao"><?php the_title(); ?></h1>
      <h2 class="subtitulo-sessao">Informações publicadas no Blog da RBGV Advogados</h2>
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <div class="publicacao">
        <?php $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
          $args = array(
          'posts_per_page' => 4,
          'post_type'=>'post',
          'paged' => $paged,
          'order'=>'ASC',
          );
          wp_reset_query();

          // showposts é o número de posts recentes que se deseja mostrar
          $objPost = new WP_Query( $args );
         if( $objPost->have_posts() ) :
           while($objPost->have_posts()) : $objPost->the_post();
             $category = get_the_category($objPost->ID);
             $linkCategory = get_category_link( $category[0]->cat_ID );

             $archive_year = get_the_time('Y');
             $archive_month = get_the_time('m');
             $archive_day =  get_the_time('d');
        ?>
              <div class="post-min">
                <div>
                  <a href="<?php the_permalink() ?>" class="link">
                    <h3 class="nome-post"><?php the_title(); ?></h3>
                  </a>
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
                <nav id="pagination" class="container">
                  <?php /*
                  <a href="" >1</a>
                  <span></span>
                  */

                  $page_cur = (int) $objPost->get( 'paged' );
                  if( !$page_cur )  $page_cur = 1;
                  $page_total = (int) $objPost->max_num_pages;

                  echo paginate_links(
                    array(
                      'current'=>$page_cur,
                      'total'=>$page_total,
                      'base'=> str_replace( $page_total+1, '%#%', get_pagenum_link( $page_total+1 ) ),
                      'prev_next'=>false
                    )
                  );
                  ?>
                </nav>
        <?php endif; ?>
      </div>
      <?php get_sidebar('blog');?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
