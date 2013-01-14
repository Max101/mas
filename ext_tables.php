<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Audioshop',
	'Audio Shop'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'MyAudioShop');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myaudioshop_domain_model_masad', 'EXT:myaudioshop/Resources/Private/Language/locallang_csh_tx_myaudioshop_domain_model_masad.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myaudioshop_domain_model_masad');
$TCA['tx_myaudioshop_domain_model_masad'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,description,images,price,new_price,manual,remote,shipment_type,payment,has_category,has_country,user_created,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/MasAd.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myaudioshop_domain_model_masad.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myaudioshop_domain_model_category', 'EXT:myaudioshop/Resources/Private/Language/locallang_csh_tx_myaudioshop_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myaudioshop_domain_model_category');
$TCA['tx_myaudioshop_domain_model_category'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_category',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,parent_category,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myaudioshop_domain_model_category.gif'
	),
);

$tmp_myaudioshop_columns = array(

);

t3lib_extMgm::addTCAcolumns('static_countries',$tmp_myaudioshop_columns);

$TCA['static_countries']['columns'][$TCA['static_countries']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:static_countries.tx_extbase_type.Tx_Myaudioshop_Country','Tx_Myaudioshop_Country');

$TCA['static_countries']['types']['Tx_Myaudioshop_Country']['showitem'] = $TCA['static_countries']['types']['1']['showitem'];
$TCA['static_countries']['types']['Tx_Myaudioshop_Country']['showitem'] .= ',--div--;LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_country,';
$TCA['static_countries']['types']['Tx_Myaudioshop_Country']['showitem'] .= '';

?>