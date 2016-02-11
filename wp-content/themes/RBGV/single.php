<?php get_header(); ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <?php the_post(); ?>
      <h1 class="titulo-sessao"><?php the_title(); ?></h1>
      <div class="post-reference">
        <?php
          $category = get_the_category(get_the_ID());
           $linkCategory = get_category_link( $category[0]->cat_ID );

           $archive_year = get_the_time('Y');
           $archive_month = get_the_time('m');
           $archive_day =  get_the_time('d');
         ?>
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
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <div class="publicacao">
        <?php if ( has_post_thumbnail() ) : ?>
                <div class="img-post">
                  <?php the_post_thumbnail( 'large' ); ?>
                </div>
  			<?php	endif; ?>

        <div class="paragrafo">
          <?php the_content(); ?>
          <div class="w-embed">
            <hr class="hr2">
          </div>
          <div class="post-tags">
            <?php
              $postTags = get_the_tags();
              //echo '<pre>';print_r($postTags);die();
            ?>
            <?php  if ($postTags) : ?>
                      <div class="titulo-tags">Tags:</div>
            <?php    foreach($postTags as $tag) { ?>
                      <a href="<?php echo get_tag_link($tag->term_id); ?>" class="w-inline-block tags2">
                        <div><?php echo $tag->name ?></div>
                      </a>
              <?php  } ?>
            <?php endif; ?>
          </div>
        </div><a href="<?php echo PW_URL ?>/postagens-antigas" class="w-button btn-branco">postagens antigas</a>
      </div>
      <?php get_sidebar('blog');?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
