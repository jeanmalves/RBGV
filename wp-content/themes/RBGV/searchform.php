<div class="w-form">
  <form id="searchform" action="<?php echo PW_URL ?>" method="get" role="search" name="wf-form-Search-Form" data-name="Search Form" class="search-form">
    <div class="w-embed w-hidden-small w-hidden-tiny">
      <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Busca" onkeyup="showUser()" class="busca">
      <input type="image" id="searchsubmit" name="button" value="" onclick="showUser()" class="btn-search">
    </div>
  </form>
  <div class="w-form-done">
    <p></p>
  </div>
  <div class="w-form-fail msg-erro">
    <p>Ocorreu um erro.</p>
  </div>
</div>
