<?php
/**
*
* @package Login with email
* @copyright (c) 2016 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 3.1.4] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_LIWE'				=> 'Login com email',
	'WITH_EMAIL'			=> ' / email',
	'LIWE_ALLOWED'			=> 'Permitir login com email',
	'LIWE_ALLOWED_EXPLAIN'	=> 'Permite o login com seu endereço de e-mail, somente se a reutilização de e-mail estiver desativada. Salve o formulário antes de poder usar o LIWE',
	'ALLOW_EMAIL_LOGIN'		=> '(Reutilização de email permitida!)',
	'DUP_RECORDS'			=> '(Duplicar <a href="%1$s" data-ajax="true" style="color:red;">endereço de e-mail</a> na lista de membros!)',
	'DUP_RECORDS_FOUND'		=> 'Endereços de email duplicados na lista de membros!',
	'LIWE_NOTICE'			=> '<div class="phpinfo"><p class="entry">As configurações desta extensão estão em %1$s » %2$s » %3$s » %4$s.</p></div>',
	'FH_HELPER_NOTICE'		=> 'Aplicação auxiliar Forumhulp não existe!<br />Baixe <a href="https://github.com/ForumHulp/helper">forumhulp/helper</a> e copie a pasta auxiliar para sua pasta de extensão forumhulp.',
));
