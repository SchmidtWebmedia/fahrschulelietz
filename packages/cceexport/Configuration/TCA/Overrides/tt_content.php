<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_city_sign'] = 'tx_cceexport_city_sign';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_driving_license_class'] = 'tx_cceexport_driving_license_class';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_dsgvo'] = 'tx_cceexport_dsgvo';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_font_awesome'] = 'tx_cceexport_font_awesome';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_gallery'] = 'tx_cceexport_gallery';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_header_image'] = 'tx_cceexport_header_image';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_map'] = 'tx_cceexport_map';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_teaser'] = 'tx_cceexport_teaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['cceexport_usp'] = 'tx_cceexport_usp';
$tempColumns = [
    'tx_cceexport_age' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_age',
    ],
    'tx_cceexport_comment' => [
        'config' => [
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'enableRichtext' => '1',
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_comment',
    ],
    'tx_cceexport_fa_icon' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'eval' => 'trim,lower',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_fa_icon',
    ],
    'tx_cceexport_large_image' => [
        'config' => [
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'check',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_large_image',
    ],
    'tx_cceexport_lat' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'eval' => 'double2',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_lat',
    ],
    'tx_cceexport_lng' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'eval' => 'double2',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_lng',
    ],
    'tx_cceexport_previous_ownership' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_previous_ownership',
    ],
    'tx_cceexport_url_title' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_url_title',
    ],
    'tx_cceexport_usplist' => [
        'config' => [
            'appearance' => [
                'collapseAll' => '0',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'expandSingle' => '0',
                'levelLinksPosition' => 'top',
                'showAllLocalizationLink' => '1',
                'showPossibleLocalizationRecords' => '1',
                'showSynchronizationLink' => '0',
                'useSortable' => '0',
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_cceexport_usplist',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cceexport_usplist',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._cceexport_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_city_sign',
    'cceexport_city_sign',
    'tx_cceexport_city_sign',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_driving_license_class',
    'cceexport_driving_license_class',
    'tx_cceexport_driving_license_class',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_dsgvo',
    'cceexport_dsgvo',
    'tx_cceexport_dsgvo',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_font_awesome',
    'cceexport_font_awesome',
    'tx_cceexport_font_awesome',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_gallery',
    'cceexport_gallery',
    'tx_cceexport_gallery',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_header_image',
    'cceexport_header_image',
    'tx_cceexport_header_image',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_map',
    'cceexport_map',
    'tx_cceexport_map',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_teaser',
    'cceexport_teaser',
    'tx_cceexport_teaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:cceexport/Resources/Private/Language/locallang_db.xlf:tt_content.CType.cceexport_usp',
    'cceexport_usp',
    'tx_cceexport_usp',
];
$tempTypes = [
    'cceexport_city_sign' => [
        'columnsOverrides' => [
            'header' => [
                'label' => 'Text',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_driving_license_class' => [
        'columnsOverrides' => [
            'bodytext' => [
                'label' => 'Fahrzeug',
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
            'tx_cceexport_age' => [
                'label' => 'Alter',
            ],
            'tx_cceexport_previous_ownership' => [
                'label' => 'Vorbesitz',
            ],
            'tx_cceexport_comment' => [
                'label' => 'Bemerkung',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,bodytext,tx_cceexport_age,tx_cceexport_previous_ownership,tx_cceexport_comment,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_dsgvo' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_font_awesome' => [
        'columnsOverrides' => [
            'tx_cceexport_fa_icon' => [
                'label' => 'Icon Klasse',
                'description' => 'Entweder ein Bilder oder ein Icon',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_cceexport_fa_icon,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_gallery' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,imagecols,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_header_image' => [
        'columnsOverrides' => [
            'image' => [
                'label' => 'Bild',
            ],
            'tx_cceexport_large_image' => [
                'label' => 'Großes Bild',
                'description' => 'Zeige das Bild über die gesamte Bildschirmgröße an',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,image,tx_cceexport_large_image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_map' => [
        'columnsOverrides' => [
            'tx_cceexport_lat' => [
                'label' => 'Lat',
            ],
            'tx_cceexport_lng' => [
                'label' => 'Lng',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_cceexport_lat,tx_cceexport_lng,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_teaser' => [
        'columnsOverrides' => [
            'tx_cceexport_fa_icon' => [
                'label' => 'FontAwesome Icon Klasse',
                'description' => 'Entweder ein Bilder oder ein Icon',
            ],
            'tx_cceexport_url_title' => [
                'label' => 'URL Titel',
                'description' => 'Titel für den Link',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,image,tx_cceexport_fa_icon,bodytext,header_link,tx_cceexport_url_title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'cceexport_usp' => [
        'columnsOverrides' => [
            'tx_cceexport_usplist' => [
                'label' => 'USPs',
                'description' => 'Auflistung aller USPs',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_cceexport_usplist,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'cceexport',
    'Configuration/TypoScript/',
    'cceexport'
);

});

