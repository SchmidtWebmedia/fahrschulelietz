<?php
defined('TYPO3') || die();

/**
 * Temporary variables
 */
$extensionKey = 'schmidtwebmedia';

/**
 * Default PageTS for Schmidtwebmedia
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/All.tsconfig',
    'SchmidtWebmedia'
);
// Configure new fields:
$fields = array(
    'tx_schmidtwebmedia_is_highlighted' => array(
        'exclude' => 1,
        'label' => 'Seite highlighten',
        'config' => array(
            'type' => 'check',
            'default' => 0,
            'renderType' => 'checkboxToggle'
        )
    )
);

// Add new fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $fields);

// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'tx_schmidtwebmedia_is_highlighted',
    1,
    'after:nav_hide'
);

