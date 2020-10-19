<?php
/*
 * Extension Manager configuration file for ext "sr_language_menu".
 */

$EM_CONF[$_EXTKEY] = [
	'title' => 'Language Selection',
	'description' => 'A TYPO3 plugin to display a list of languages to select from. Clicking on a language links to the corresponding version of the page.',
	'category' => 'plugin',
	'version' => '7.0.0',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.0-10.4.99',
			'static_info_tables' => '6.9.0-6.9.99'
		],
		'conflicts' => [],
		'suggests' => []
	]
];