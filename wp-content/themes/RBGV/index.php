<?php get_header(); ?>
<div class="w-section featured-section">
  <div class="w-container area-atuacao">
    <div class="titulo">
      <h1 class="titulo-sessao">Área de atuação</h1>
      <h2 class="subtitulo-sessao">Prestação de serviços acerca do Direito nas seguintes áreas</h2>
    </div>
    <div class="w-clearfix destaques">
      <?php
       /**
        * Objeto query do wordpress que realiza uma consulta
        * da página pelo slug.
        * @param slug da página
        * @return WP_Query Object
        */
      ?>
      <?php $objPage = new WP_Query( 'pagename=direito-administrativo' ); ?>
      <?php if( $objPage->have_posts() ) : $objPage->the_post(); endif; ?>
      <?php
        // O ID da imagem destacada
        $thumb_id = get_post_thumbnail_id();

        // A URL da imagem
        if ( $thumb_id ){
          $thumb_url = wp_get_attachment_image_src( $thumb_id, 'medium' );
        }
      ?>
      <div data-ix="hover-destaque" class="destaque faixa-cinza">
        <img src="<?php echo  $thumb_url[0]; ?>" class="thumb-destaque">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-adm.svg" class="icon-destaque">
        <div class="text-block">
          <h3 class="titulo-destaque">
            <?php
              $titulo = substr(get_the_title(),8);
              echo $titulo;
            ?>
          </h3>
          <p class="paragrafo resumo-detalhe">
            <?php the_excerpt_max_charlength(240); ?>
            <?php echo new_excerpt_more( "Leia mais" ) ?>
          </p>
        </div>
      </div>

      <?php $objPage = new WP_Query( 'pagename=direito-ambiental' ); ?>
      <?php if( $objPage->have_posts() ) : $objPage->the_post(); endif; ?>
      <?php
        // O ID da imagem destacada
        $thumb_id = get_post_thumbnail_id();

        // A URL da imagem
        if ( $thumb_id ){
          $thumb_url = wp_get_attachment_image_src( $thumb_id, 'medium' );
        }
      ?>
      <div data-ix="hover-destaque" class="destaque faixa-cinza">
        <img src="<?php echo  $thumb_url[0]; ?>" class="thumb-destaque">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-amb.svg" class="icon-destaque">
        <div class="text-block">
          <h3 class="titulo-destaque">
            <?php
              $titulo = substr(get_the_title(),8);
              echo $titulo;
            ?>
          </h3>
          <p class="paragrafo resumo-detalhe">
            <?php the_excerpt_max_charlength(240); ?>
            <?php echo new_excerpt_more( "Leia mais" ) ?>
          </p>
        </div>
      </div>

      <?php $objPage = new WP_Query( 'pagename=direito-constitucional' ); ?>
      <?php if( $objPage->have_posts() ) : $objPage->the_post(); endif; ?>
      <?php
        // O ID da imagem destacada
        $thumb_id = get_post_thumbnail_id();

        // A URL da imagem
        if ( $thumb_id ){
          $thumb_url = wp_get_attachment_image_src( $thumb_id, 'medium' );
        }
      ?>
      <div data-ix="hover-destaque" class="destaque faixa-cinza">
        <img src="<?php echo  $thumb_url[0]; ?>" class="thumb-destaque">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-const.svg" class="icon-destaque">
        <div class="text-block">
          <h3 class="titulo-destaque">
            <?php
              $titulo = substr(get_the_title(),8);
              echo $titulo;
            ?>
          </h3>
          <p class="paragrafo resumo-detalhe">
            <?php the_excerpt_max_charlength(240); ?>
            <?php echo new_excerpt_more( "Leia mais" ) ?>
          </p>
        </div>
      </div>

      <?php $objPage = new WP_Query( 'pagename=direito-de-infraestrutura' ); ?>
      <?php if( $objPage->have_posts() ) : $objPage->the_post(); endif; ?>
      <?php
        // O ID da imagem destacada
        $thumb_id = get_post_thumbnail_id();

        // A URL da imagem
        if ( $thumb_id ){
          $thumb_url = wp_get_attachment_image_src( $thumb_id, 'medium' );
        }
      ?>
      <div data-ix="hover-destaque" class="destaque faixa-cinza">
        <img src="<?php echo  $thumb_url[0]; ?>" class="thumb-destaque">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-infra.svg" class="icon-destaque">
        <div class="text-block">
          <h3 class="titulo-destaque">
            <?php
              $titulo = substr(get_the_title(),11);
              echo $titulo;
            ?>
          </h3>
          <p class="paragrafo resumo-detalhe">
            <?php the_excerpt_max_charlength(240); ?>
            <?php echo new_excerpt_more( "Leia mais" ) ?>
          </p>
        </div>
      </div>

      <?php $objPage = new WP_Query( 'pagename=direito-urbanistico' ); ?>
      <?php if( $objPage->have_posts() ) : $objPage->the_post(); endif; ?>
      <?php
        // O ID da imagem destacada
        $thumb_id = get_post_thumbnail_id();

        // A URL da imagem
        if ( $thumb_id ){
          $thumb_url = wp_get_attachment_image_src( $thumb_id, 'medium' );
        }
      ?>
      <div data-ix="hover-destaque" class="destaque faixa-cinza">
        <img src="<?php echo  $thumb_url[0]; ?>" class="thumb-destaque">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-urb.svg" class="icon-destaque">
        <div class="text-block">
          <h3 class="titulo-destaque">
            <?php
              $titulo = substr(get_the_title(),8);
              echo $titulo;
            ?>
          </h3>
          <p class="paragrafo resumo-detalhe">
            <?php the_excerpt_max_charlength(240); ?>
            <?php echo new_excerpt_more( "Leia mais" ) ?>
          </p>
        </div>
      </div>

      <?php $objPage = new WP_Query( 'pagename=direito-tributario' ); ?>
      <?php if( $objPage->have_posts() ) : $objPage->the_post(); endif; ?>
      <?php
        // O ID da imagem destacada
        $thumb_id = get_post_thumbnail_id();

        // A URL da imagem
        if ( $thumb_id ){
          $thumb_url = wp_get_attachment_image_src( $thumb_id, 'medium' );
        }
      ?>
      <div data-ix="hover-destaque" class="destaque faixa-cinza">
        <img src="<?php echo  $thumb_url[0]; ?>" class="thumb-destaque">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-trib.svg" class="icon-destaque">
        <div class="text-block">
          <h3 class="titulo-destaque">
            <?php
              $titulo = substr(get_the_title(),8);
              echo $titulo;
            ?>
          </h3>
          <p class="paragrafo resumo-detalhe">
            <?php the_excerpt_max_charlength(240); ?>
            <?php echo new_excerpt_more( "Leia mais" ) ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="w-section content-section">
  <div class="w-container quem-somos">
    <?php
     /**
      * Objeto query do wordpress que realiza uma consulta
      * da página pelo slug.
      * @param slug da página
      * @return WP_Query Object
      */
    ?>
    <?php $objPage = new WP_Query( 'pagename=quem-somos' ); ?>
    <?php if( $objPage->have_posts() ) : $objPage->the_post(); endif; ?>
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <h1 class="titulo-sessao"><?php the_title(); ?></h1>
      <h2 class="subtitulo-sessao">
        <?php echo get_post_meta($post->ID, 'subtitulo', true); ?>
      </h2>
    </div>
    <img src="<?php echo PW_THEME_URL ?>assets/images/img-quemsomos.png" data-ix="scroll-reveal-part2" class="montagem-rbgv">
    <div data-ix="scroll-reveal-part-3" class="w-clearfix paragrafo resumo-empresa">
      <p><?php the_excerpt_max_charlength(865); ?></p>
        <a href="<?php echo get_permalink(); ?>" class="w-button btn-branco">Saiba mais</a>
      </div>
    </div>
  </div>
  <div class="paralax-equipe">
    <div class="w-container profissionais">
      <div class="titulo">
        <h1 class="titulo-sessao texto-centro">Profissionais</h1>
      </div>
      <div data-animation="slide" data-duration="1000" data-delay="3000" data-autoplay="1" class="w-slider carrossel">
        <div class="w-slider-mask">
          <div class="w-slide slide">
            <a data-ix="hover-perfil-home" class="w-inline-block link link-perfil">
              <div class="hexagono um">
                <div class="imagem1">
                  <div class="imagem2">
                    <div data-ix="hover-invisivel" class="overlay-foto">
                      <div data-ix="hover-perfil-home" class="ver-perfil">ver perfil</div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="nome">Nahima Peron Razuk Coelho</h3>
              <div class="cargo">Advogada</div>
            </a>
            <div class="redes-perfil">
              <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
              <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
            </div>
          </div>
          <div class="w-slide slide">
            <a data-ix="hover-perfil-home" class="w-inline-block link link-perfil">
              <div class="hexagono um">
                <div class="imagem1">
                  <div class="imagem2">
                    <div data-ix="hover-invisivel" class="overlay-foto">
                      <div data-ix="hover-perfil-home" class="ver-perfil">ver perfil</div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="nome">Nathalia Lima Barreto</h2>
              <div class="cargo">Advogada</div>
            </a>
            <div class="redes-perfil">
              <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
              <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
            </div>
          </div>
          <div class="w-slide slide">
            <a href="perfil-profissional.html" data-ix="hover-perfil-home" class="w-inline-block link link-perfil">
              <div class="hexagono um">
                <div class="imagem1">
                  <div class="imagem2">
                    <div data-ix="hover-invisivel" class="overlay-foto">
                      <div data-ix="hover-perfil-home" class="ver-perfil">ver perfil</div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="nome">Paula Bernardelli</h2>
              <div class="cargo">Advogada</div>
            </a>
            <div class="redes-perfil">
              <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
              <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
            </div>
          </div>
          <div class="w-slide slide">
            <a data-ix="hover-perfil-home" class="w-inline-block link link-perfil">
              <div class="hexagono um">
                <div class="imagem1">
                  <div class="imagem2">
                    <div data-ix="hover-invisivel" class="overlay-foto">
                      <div data-ix="hover-perfil-home" class="ver-perfil">ver perfil</div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="nome">Thanyelle Galmacci</h2>
              <div class="cargo">Advogada</div>
            </a>
            <div class="redes-perfil">
              <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
              <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
            </div>
          </div>
          <div class="w-slide slide">
            <a data-ix="hover-perfil-home" class="w-inline-block link link-perfil">
              <div class="hexagono um">
                <div class="imagem1">
                  <div class="imagem2">
                    <div data-ix="hover-invisivel" class="overlay-foto">
                      <div data-ix="hover-perfil-home" class="ver-perfil">ver perfil</div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="nome">Thiago Priess Valiati</h2>
              <div class="cargo">Advogado</div>
            </a>
            <div class="redes-perfil">
              <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
              <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
            </div>
          </div>
          <div class="w-slide slide">
            <a data-ix="hover-perfil-home" class="w-inline-block link link-perfil">
              <div class="hexagono um">
                <div class="imagem1">
                  <div class="imagem2">
                    <div data-ix="hover-invisivel" class="overlay-foto">
                      <div data-ix="hover-perfil-home" class="ver-perfil">ver perfil</div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="nome slider">Alicia Florick</h2>
              <div class="cargo">Estagiária de Direito</div>
            </a>
            <div class="redes-perfil">
              <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
              <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
            </div>
          </div>
          <div class="w-slide slide">
            <a data-ix="hover-perfil-home" class="w-inline-block link link-perfil">
              <div class="hexagono um">
                <div class="imagem1">
                  <div class="imagem2">
                    <div data-ix="hover-invisivel" class="overlay-foto">
                      <div data-ix="hover-perfil-home" class="ver-perfil">ver perfil</div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="nome">Annalise Keating</h2>
              <div class="cargo">Advogada</div>
            </a>
            <div class="redes-perfil">
              <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
              <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
                <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
              </a>
            </div>
          </div>
        </div>
        <div class="w-slider-arrow-left seta-esq">
          <div class="w-icon-slider-left setas"></div>
        </div>
        <div class="w-slider-arrow-right seta-dir">
          <div class="w-icon-slider-right setas"></div>
        </div>
        <div class="w-slider-nav w-slider-nav-invert w-round"></div>
      </div>
    </div>
  </div>
  <div class="w-section content-section">
    <div class="w-container posts-em-destaque">
      <div data-ix="scroll-reveal-part-1" class="float-left">
        <div class="titulo">
          <h1 class="titulo-sessao texto-centro">Em Destaque</h1>
        </div>
      </div><a href="<?php echo PW_URL ?>/noticias" class="w-button btn-branco float-right">acesse</a>
      <div class="w-clearfix posts-home">
        <?php
          wp_reset_query();
          // showposts é o número de posts recentes que se deseja mostrar
          $aRecentPosts = new WP_Query("showposts=2");
        //  echo "<pre>"; print_r($aRecentPosts); die();
           if( $aRecentPosts->have_posts() ) :
             $data_ix = 2;
             $cor = "verde";
             while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();

             $category = get_the_category($aRecentPosts->ID);
             $linkCategory = get_category_link( $category[0]->cat_ID );

             $archive_year = get_the_time('Y');
             $archive_month = get_the_time('m');
             $archive_day =  get_the_time('d');
        ?>
        <div data-ix="scroll-reveal-part<?php echo $data_ix; ?>" class="post-home faixa-<?php echo $cor; ?>">
          <a href="<?php echo get_permalink(); ?>" class="w-inline-block link">
            <h3 class="nome-post"><?php the_title(); ?></h3>
          </a>
          <div>
            <div>
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
          <div class="w-embed">
            <hr class="hr2">
          </div>
          <p class="paragrafo">
            <?php the_excerpt_max_charlength(319); ?>
            <?php echo new_excerpt_more( "Leia mais" ) ?>
          </p>
        </div>
        <?php
          $data_ix++;
          $cor = "clara";
        ?>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
   <?php get_footer(); ?>
