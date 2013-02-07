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
		'searchFields' => 'name,description,images,price,new_price,manual,remote,shipment_type,payment,views,weight,category,location,user,brand,',
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

$tmp_myaudioshop_columns = array(

	'favorite_user' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_user.favorite_user',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'fe_users',
			'MM' => 'tx_myaudioshop_user_user_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'fe_users',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'favorite_ad' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_user.favorite_ad',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_myaudioshop_domain_model_masad',
			'MM' => 'tx_myaudioshop_user_masad_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_myaudioshop_domain_model_masad',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'country' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_user.country',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'static_countries',
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
);

t3lib_extMgm::addTCAcolumns('fe_users',$tmp_myaudioshop_columns);

$TCA['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Myaudioshop_User','Tx_Myaudioshop_User');

$TCA['fe_users']['types']['Tx_Myaudioshop_User']['showitem'] = $TCA['fe_users']['types']['1']['showitem'];
$TCA['fe_users']['types']['Tx_Myaudioshop_User']['showitem'] .= ',--div--;LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_user,';
$TCA['fe_users']['types']['Tx_Myaudioshop_User']['showitem'] .= 'favorite_user, favorite_ad, country';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myaudioshop_domain_model_feedback', 'EXT:myaudioshop/Resources/Private/Language/locallang_csh_tx_myaudioshop_domain_model_feedback.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myaudioshop_domain_model_feedback');
$TCA['tx_myaudioshop_domain_model_feedback'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_feedback',
		'label' => 'type',
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
		'searchFields' => 'type,rating,message,giver,receiver,mas_ad,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Feedback.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myaudioshop_domain_model_feedback.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myaudioshop_domain_model_message', 'EXT:myaudioshop/Resources/Private/Language/locallang_csh_tx_myaudioshop_domain_model_message.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myaudioshop_domain_model_message');
$TCA['tx_myaudioshop_domain_model_message'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_message',
		'label' => 'title',
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
		'searchFields' => 'title,content,sender,receiver,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Message.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myaudioshop_domain_model_message.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myaudioshop_domain_model_brand', 'EXT:myaudioshop/Resources/Private/Language/locallang_csh_tx_myaudioshop_domain_model_brand.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myaudioshop_domain_model_brand');
$TCA['tx_myaudioshop_domain_model_brand'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_brand',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

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
		'searchFields' => 'name,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Brand.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myaudioshop_domain_model_brand.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myaudioshop_domain_model_question', 'EXT:myaudioshop/Resources/Private/Language/locallang_csh_tx_myaudioshop_domain_model_question.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myaudioshop_domain_model_question');
$TCA['tx_myaudioshop_domain_model_question'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_question',
		'label' => 'product',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

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
		'searchFields' => 'product,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Question.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_myaudioshop_domain_model_question.gif'
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
//var_export($TCA['fe_users']['columns']);die();
//\TYPO3\CMS\Core\Utility\DebugUtility::debug($TCA['fe_users']['columns']);die();
/*
t3lib_div::loadTCA('fe_users');
if (is_array($TCA['fe_users']['columns']['tx_extbase_type'])) {
	$TCA['fe_users']['types']['Tx_BlogExample_Domain_Model_Administrator'] = $TCA['fe_users']['types']['0'];
	array_push($TCA['fe_users']['columns']['tx_extbase_type']['config']['items'], array('LLL:EXT:blog_example/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.Tx_BlogExample_Domain_Model_Administrator', 'Tx_BlogExample_Domain_Model_Administrator'));
}

*/
?>