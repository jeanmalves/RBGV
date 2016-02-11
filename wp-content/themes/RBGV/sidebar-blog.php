<div class="sidebar">
  <?php get_search_form(); ?>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-paper.svg" class="icon-area">
    <h4 class="titulo-area">Recentes</h4>
    <div class="w-embed hr2">
      <hr>
    </div>
    <?php
      wp_reset_query();
      // 3 é o número de posts recentes que se deseja mostrar
      $aRecentPosts = new WP_Query("showposts=3");
       if( $aRecentPosts->have_posts() ) :
         while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
    ?>
      <div class="paragrafo">
        •  Título da último post:
        <a href="<?php the_permalink() ?>" title="Link para <?php the_title(); ?> " rel=""><?php the_title(); ?>.</a>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-cloud.svg" class="icon-area">
    <h5 class="titulo-area">Tags</h5>
    <div class="w-embed hr2">
      <hr>
    </div>
    <?php
      $terms = get_tags();
      foreach ($terms as $term) {
          printf( '<div class="tag">
                      <div>
                        <a href="'. get_tag_link($term->term_id) .'">%1$s</a>
                      </div>
                   </div>',
                  $term->name
          );
      }
    ?>
  </div>
  <div class="atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-catogoria.svg" class="icon-area">
    <h5 class="titulo-area">Categorias</h5>
    <div class="w-embed hr2">
      <hr>
    </div>
    <?php
        $categories = get_categories( array(
          'orderby' => 'name',
          'hide_empty'   => 0,
          'parent'  => 0
        ) );
    ?>
      <div class="paragrafo">
      <?php
          foreach ( $categories as $category ) {
            printf( '<a class="link link-categoria" href="%1$s">%2$s</a><br xmlns="http://www.w3.org/1999/xhtml">',
                esc_url( get_category_link( $category->term_id ) ),
                esc_html( $category->name )
            );
          }
      ?>
    </div>
  </div>
</div>
