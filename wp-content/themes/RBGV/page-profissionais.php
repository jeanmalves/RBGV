<?php get_header();?>
 <div class="w-section featured-section">
   <div class="w-container area-pagina">
     <div data-ix="scroll-reveal-part-1" class="titulo">
       <h1 class="titulo-sessao"><?php the_title(); ?></h1>
       <h2 class="subtitulo-sessao">Time dedicado à RBGV Advogados</h2>
     </div>
     <div class="w-clearfix conteudo">
       <?php $prof = new WP_Query(array('post_type'=>'profissional'));?>
       <?php   if( $prof->have_posts() ) : ?>
          <?php   while( $prof->have_posts() ) : $prof->the_post(); ?>
                    <div data-ix="scroll-reveal-part2" class="w-clearfix box-perfil">
                      <div class="box-esquerda">
                       <div class="hexagono um">
                         <div class="imagem1">
                           <div class="imagem2">
                             <?php echo types_render_field( "imagem-do-perfil", array( "alt" => "foto do perfil","size" => "thumbnail") ); ?>
                           </div>
                         </div>
                       </div>
                      </div>
                      <div class="box-direta">
                        <h3 class="nome"><?php the_title(); ?></h3>
                        <div class="cargo">
                          <?php echo types_render_field( "cargo", array( ) ); ?>
                        </div>
                        <div class="w-embed">
                          <hr class: "hr"="">
                        </div>
                        <p class="paragrafo">
                          <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="w-button btn-branco btn-perfil">ver perfil completo</a>
                      </div>
                    </div>
              <?php endwhile; ?>
           <?php endif; ?>
     </div>
   </div>
 </div>
 <?php get_footer();?>
