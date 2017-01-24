<?php
/*
 * Extension Manager configuration file for ext "sr_language_menu".
 */

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Language Selection',
	'description' => 'A plugin to display a list of languages to select from. Clicking on a language links to the corresponding version of the page.',
	'category' => 'plugin',
	'version' => '6.4.1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-8.99.99',
			'static_info_tables' => '6.4.2-6.4.99'
		),
		'conflicts' => array(),
		'suggests' => array()
	)
);