<?php
require_once __DIR__ . '/functions/security.php';
get_header();
the_post();
$post_response = apply_filters( 'send_contact_form', false );
?>
<?php if( $post_response ) : ?>
    <div class="alert alert-<?php echo $post_response->status ?>">
        <?php echo $post_response->message ?>
    </div>
<?php endif ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <h1 class="titulo-sessao"><?php the_title(); ?></h1>
      <h2 class="subtitulo-sessao">Fale com a RBGV Advogados através do formulário</h2>
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <div class="publicacao right">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" action="<?php echo get_permalink() ?>">
            <input id="Nome" type="text" placeholder="*Nome Completo" name="field_name" data-name="Nome" required="required" class="w-input form">
            <input id="E-mail-2" type="email" placeholder="*E-mail" name="field_email" data-name="E Mail 2" class="w-input form">
            <input id="Telefone" type="text" placeholder="*Telefone" name="field_fone" data-name="Telefone" required="required" class="w-input form">
            <input id="Assunto-2" type="text" placeholder="*Assunto" name="field_subject" data-name="Assunto" required="required" class="w-input form">
            <textarea id="Mensagem" placeholder="*Mensagem" name="field_message" data-name="Mensagem" required="required" class="w-input text-area"></textarea>
            <input type="email" name="field_mail" id="field-mail" class="w-input form" placeholder="NÃO preencha esse campo, ou seu e-mail não será enviado" />
            <input type="submit" value="Enviar" data-wait="Aguarde..." wait="Aguarde..." class="w-button btn-branco">
          </form>
          <div class="w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form</p>
          </div>
        </div>
      </div>
      <?php get_sidebar('contato'); ?>
    </div>
  </div>
</div>
<?php get_footer() ?>
