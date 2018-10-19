<?php
/*
 * Extension Manager configuration file for ext "sr_language_menu".
 */

$EM_CONF[$_EXTKEY] = [
	'title' => 'Language Selection',
	'description' => 'A TYPO3 plugin to display a list of languages to select from. Clicking on a language links to the corresponding version of the page.',
	'category' => 'plugin',
	'version' => '6.5.1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'constraints' => [
		'depends' => [
			'typo3' => '9.5.0-9.5.99',
			'static_info_tables' => '6.7.0-6.7.99'
		],
		'conflicts' => [],
		'suggests' => []
	]
];