<?php

defined('TYPO3') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['schmidtwebmedia'] = 'EXT:schmidtwebmedia/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:schmidtwebmedia/Configuration/TsConfig/Page/All.tsconfig">');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['beforeRendering'][1571076908]
    = \MarcoSchmidtWebmedia\Schmidtwebmedia\Hooks\FormElementLinkResolverHook::class;
