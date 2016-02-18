<div class="sidebar">
<?php $oab = types_render_field( "registro-oab", array( ) ); ?>
<?php  if ( !empty( $oab ) ) : ?>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-oab.svg" class="icon-area">
    <h5 class="titulo-area">OAB</h5>
    <div class="w-embed">
      <hr class="hr2">
    </div>
    <div class="paragrafo"><?php echo $oab; ?></div>
  </div>
<?php endif; ?>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-coluna.svg" class="icon-area">
    <h5 class="titulo-area">atuação</h5>
    <div class="w-embed hr2">
      <hr class="hr2">
    </div>
    <ul class="padding-left-15 paragrafo">
      <li>
        <?php echo do_shortcode( '[types field="atuacao" separator="</li><li>"][/types]' ); ?>
      </li>
    </ul>
  </div>  
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-chapeu.svg" class="icon-area">
    <h5 class="titulo-area">formação</h5>
    <div class="w-embed">
      <hr class="hr2">
    </div>
    <div class="paragrafo">
      <?php echo do_shortcode( '[types field="formacao" separator="<br>"][/types]' ); ?>
    </div>
  </div>
  <?php $horario = types_render_field( "horario-de-atendimento", array( ) ); ?>
  <?php if ( !empty( $horario ) ) : ?>
    <div class="w-clearfix atributos">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-horario.svg" class="icon-area">
      <h5 class="titulo-area">escritório</h5>
      <div class="w-embed">
        <hr class="hr2">
      </div>
      <div class="paragrafo">
        <?php echo $horario; ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-clips.svg" class="icon-area">
    <h5 class="titulo-area">contato/social</h5>
    <div class="w-embed">
      <hr class="hr2">
    </div>
    <?php $email =  types_render_field("email", array("raw"=>"true","separator"=>";")); ?>
    <?php if ( !empty( $email ) ) : ?>
      <a href="mailto:<?php echo $email; ?>?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
        <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
      </a>
    <?php endif; ?>
    <?php $linkedin =  types_render_field("linkedin", array("raw"=>"true","separator"=>";")); ?>
    <?php if ( !empty( $linkedin ) ) : ?>
      <a href="<?php echo $linkedin; ?>" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
      </a>
    <?php endif; ?>
  </div>
</div>
