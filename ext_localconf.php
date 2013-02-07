<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'MORLIC.' . $_EXTKEY,
	'Audioshop',
	array(
		'MasAd' => 'list, show, new, create, edit, update, delete',
		'Category' => 'list, show, new, create, edit, update',
		
	),
	// non-cacheable actions
	array(
		'MasAd' => 'create, update, delete',
		'Category' => 'create, update',
		
	)
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>