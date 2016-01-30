<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'br1rbgv');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qr5%gkZ>,[|vP_]Vxo2%:j?*--G)?@dA**Yu1lYso;/wZj+cTxeqg;#8c.g+wA+:');
define('SECURE_AUTH_KEY',  '#V[j>^|k#zT-X>1:-^Ma@D+aKp-Ee7bAx Afujn:@|C!w0+iMUlA$P|+r/3+eEXb');
define('LOGGED_IN_KEY',    'RX%I6^F?k+pwi&07?L0i;|5A%!vX}oU:1}(dQDGekhS1,<l8tp#h[Q/c4V;ybD`w');
define('NONCE_KEY',        'YV&1V|Rt/0Ja-~SF$)MJj6@|UWy])mRA~ 1I5uLH1pSt;}oK|v#X#-OE{:h,kbN5');
define('AUTH_SALT',        '#h3(^g:V(k>R1 %}E~*+x2OBcYK^J?/0zB#RpW#`]6%3uE|}uHRHMB&Xgx#M|gWX');
define('SECURE_AUTH_SALT', '/-sC@DQ/f8-pN^aEMS3N4@Y.1#M6a6^a`-e<hxR(2Dof4K9e=@=r58wYr?Mu?>CO');
define('LOGGED_IN_SALT',   '4585k~}|pzlot|u. g<aF|.|?~,b/`Ha2LEvlKt<`{#cK59xc*$|6#kkI5YaIzyi');
define('NONCE_SALT',       'a~v&([O}PX0OBgjuH3?{+dvW6jYIiPA.-q}by|2>-98&r3|EekRDtD.#?RF6|-U&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
