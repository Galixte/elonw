<?php
/**
*
* External Links Open in New Window extension for the phpBB Forum Software package.
* French translation by Galixte (https://www.galixte.com)
*
* @copyright (c) 2015 Rich McGirr
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	'ELONW'	=> 'S’ouvre dans une nouvelle fenêtre/onglet',
	'EXTENSION_REQUIREMENTS'	=> 'Cette extension nécessite l’utilisation de la version %1$s de phpBB.<br>Merci de vérifier quelle version de phpBB est utilisée sur le forum et si nécessaire de le mettre à jour.',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Faire un don via PayPal',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Offrir une bière à l’auteur de cette extension',
	'BUY_ME_A_BEER_SHORT'		=> 'Faire une donation pour cette extension',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'Cette extension est entièrement libre. Ce projet a nécessité du temps afin de le partager à la communauté phpBB. Si cette extension est utile, ou si elle apporte une bénéfice au forum, merci de considérer <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">l’idée d’offrir une bière au développeur de cette extension</a>. Ce geste sera grandement apprécié. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);
