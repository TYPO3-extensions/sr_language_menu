<?php
/*
 * Extension Manager configuration file for ext "sr_language_menu".
 */

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Language Selection',
	'description' => 'A plugin to display a list of languages to select from. Clicking on a language links to the corresponding version of the page.',
	'category' => 'plugin',
	'version' => '6.3.2',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.6.99',
			'static_info_tables' => '6.3.9-6.3.99'
		),
		'conflicts' => array(),
		'suggests' => array()
	)
);