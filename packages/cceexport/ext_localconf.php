<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_cceexport_city_sign',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'map-signs',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_driving_license_class',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'th-list',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_dsgvo',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'eye-slash',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_font_awesome',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'font-awesome',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_gallery',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'th',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_header_image',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'image',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_map',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'map',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_teaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'link',
    ]
);
$iconRegistry->registerIcon(
    'tx_cceexport_usp',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'list-ul',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:cceexport/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:cceexport/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['cceexport'] = 
    schmidtwebmedia\Cceexport\Hooks\PageLayoutViewDrawItem::class;

});

