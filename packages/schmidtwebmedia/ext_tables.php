<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TCA']['pages']['columns']['slug']['config']['generatorOptions']['fields'][0] = 'nav_title, title';
