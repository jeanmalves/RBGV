<div class="w-section footer">
  <div class="social-footer">
    <div class="w-container">
      <div class="nossas-redes">
        <div class="w-hidden-tiny display-block">nossas redes</div>
        <a href="#" data-ix="hover-icon-mini" class="w-inline-block link icone-rodape">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-fb.svg" class="icon-footer">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-fb-over.svg" data-ix="display-none" class="icon-overlay">
        </a>
        <a href="#" data-ix="hover-icon-mini" class="w-inline-block link icone-rodape">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-linkedin.svg" class="icon-footer"><img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-linkedin-over.svg" data-ix="display-none" class="icon-overlay">
        </a>
        <a href="#" data-ix="hover-icon-mini" class="w-inline-block link icone-rodape">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-gplus.svg" class="icon-footer">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-gplus-over.svg" data-ix="display-none" class="icon-overlay">
        </a>
      </div>
      <a href="#" data-ix="subscribe-interaction" class="w-inline-block btn-newsletter">
        <div class="w-hidden-tiny receba-info">Receba as informações no seu e-mail</div>
        <div class="icone-rodape">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-info-over.svg" data-ix="display-none" class="icon-overlay">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mini-info.svg" class="icon-footer">
        </div>
      </a>
    </div>
  </div>
  <div class="content-footer">
    <div class="w-container">
      <div class="coluna-footer">
        <img src="<?php echo PW_THEME_URL ?>assets/images/logo_aramada.svg" class="logo-rbgv-branca">
        <div class="txt-footer">&copy; <?php echo date("Y"); ?> - Todos os direitos reservados.
          <br> Desenvolvido por <a class="drnaweb" target="_blank" href="http://www.drnaweb.com">Doutor na Web</a>
        </div>
        <a href="#" class="w-clearfix w-inline-block btn-transparente btn-footer">
          <img src="<?php echo PW_THEME_URL ?>assets/images/icon-mapa.svg" class="icon-local">
          <div class="legenda-local">Localização no mapa</div>
        </a>
      </div>
      <div class="coluna-footer direitas">
        <h4 class="titulo-footer">Área de Atuação</h4>
        <div class="w-embed hr">
          <hr class="hr">
        </div>
        <?php my_nav_menu_items('menu-footer-left', array('type'=>'area-atuacao')); ?>
      </div>
      <div class="coluna-footer direitas">
        <h4 class="titulo-footer">Fale conosco</h4>
        <div class="w-embed hr">
          <hr class="hr">
        </div>
        <?php my_nav_menu_items('menu-footer-right'); ?>
        <div class="w-clearfix box-horario">
        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-hora.svg" class="icon-hora">
        <div class="legenda-hora">
          segunda à sexta-feira
          <br>8h00 - 17h30</div>
        </div>
        </div>
      </div>
    </div>
    <div class="final-footer">
      <div class="txt-footer endereco">
        <?php
          printf(
            '%1$s &nbsp; &nbsp; | &nbsp; &nbsp; 
            CEP %2$s &nbsp; &nbsp; | &nbsp; &nbsp;
            %3$s &nbsp; &nbsp; | &nbsp; &nbsp; 
            %4$s &nbsp; &nbsp; | &nbsp; &nbsp;
            <a class="link branco" href="mailto:%5$s"> %5$s</a>',
            get_option('endereco_site'),
            get_option('cep_site'),
            get_option('cidade_site'),
            get_option('fone_site'),
            get_option('email_site')

          );

        ?>
      </div>
    </div>
  </div>
 <?php wp_footer(); ?>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>