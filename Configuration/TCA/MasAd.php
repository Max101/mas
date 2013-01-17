<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_myaudioshop_domain_model_masad'] = array(
	'ctrl' => $TCA['tx_myaudioshop_domain_model_masad']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, images, price, new_price, manual, remote, shipment_type, payment, views, weight, category, location, user, brand',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, description, images, price, new_price, manual, remote, shipment_type, payment, views, weight, category, location, user, brand,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_myaudioshop_domain_model_masad',
				'foreign_table_where' => 'AND tx_myaudioshop_domain_model_masad.pid=###CURRENT_PID### AND tx_myaudioshop_domain_model_masad.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'images' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.images',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_myaudioshop',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'price' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'new_price' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.new_price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'manual' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.manual',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'remote' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.remote',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'shipment_type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.shipment_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'payment' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.payment',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'views' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.views',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'weight' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.weight',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'category' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.category',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_myaudioshop_domain_model_category',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'location' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.location',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'static_countries',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'user' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.user',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'fe_users',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'brand' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:myaudioshop/Resources/Private/Language/locallang_db.xlf:tx_myaudioshop_domain_model_masad.brand',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_myaudioshop_domain_model_brand',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>