<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
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

?>