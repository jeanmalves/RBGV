<div class="sidebar left">
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-phone.svg" class="icon-area">
    <h5 class="titulo-area">Contato Telefônico</h5>
    <div class="w-embed">
      <hr class="hr2">
    </div>
    <div class="paragrafo"><?php echo get_option('fone_site'); ?></div>
  </div>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-horario.svg" class="icon-area">
    <h5 class="titulo-area">atendimento</h5>
    <div class="w-embed hr2">
      <hr class="hr2">
    </div>
    <div class="paragrafo">Segunda à Sexta-feira
      <br>8h00 - 17h30</div>
  </div>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-coluna.svg" class="icon-area">
    <h5 class="titulo-area">Nosso Escritório</h5>
    <div class="w-embed">
      <hr class="hr2">
    </div>
    <div class="paragrafo">
      <?php
          printf(
          '%1$s <br>
          CEP %2$s <br>
          %3$s',
          get_option('endereco_site'),
          get_option('cep_site'),
          get_option('cidade_site')
        );
       ?>
    </div>
  </div>
  <div class="w-clearfix atributos">
    <img src="<?php echo PW_THEME_URL ?>assets/images/icon-clips.svg" class="icon-area">
    <h5 class="titulo-area">Nossa Presença Digital</h5>
    <div class="w-embed">
      <hr class="hr2">
    </div>
    <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-fb"%5Bemail%5D%5Bexists%5D%3Dyes">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-fb.svg" class="icon-mail">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-fb-over.svg" data-ix="hover-invisivel" class="overlay">
    </a>
    <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-linkedin"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin.svg" class="icon-mail">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-linkedin-hover.svg" data-ix="hover-invisivel" class="overlay">
    </a>
    <a href="http://www.linkedin.com" target="_blank" data-ix="btn-redes" class="w-inline-block link link-gplus"%5Blinked-in-link%5D%5Bexists%5D%3Dyes">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-gplus.svg" class="icon-mail">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-gplus-over.svg" data-ix="hover-invisivel" class="overlay">
    </a>
    <a href="mailto:nahima@rbgv.com.br?subject=Contato%20pelo%20Web%20Site%20da%20RBGV" target="_blank" data-ix="btn-redes" class="w-inline-block link link-mail"%5Bemail%5D%5Bexists%5D%3Dyes">
      <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mail.svg" class="icon-mail">
      <img src="<?php echo PW_THEME_URL ?>assets/images/bg-icon-hover.svg" data-ix="hover-invisivel" class="overlay">
    </a>
  </div>
</div>
