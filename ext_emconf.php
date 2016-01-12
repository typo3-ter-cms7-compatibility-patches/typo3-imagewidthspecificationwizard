<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "imagewidthspecificationwizard".
 *
 * Auto generated 13-06-2014 15:17
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Wizard for imagewidth field',
	'description' => 'This backendextension attaches a selectfield to contentelements like textpic or images to provide a set of default values for the width of an image (eg.: fullsize, half of the content, small teaser etc.).',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.3.1',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Dan Untenzu',
	'author_email' => 'untenzu@webit.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
	'suggests' => array(
	),
	'autoload' =>
			array(
					'classmap' => array(
							'class.tx_imagewidthspecificationwizard_wizard.php',
					)
			),

);

?>