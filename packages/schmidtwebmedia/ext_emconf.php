<?php

/**
 * Extension Manager/Repository config file for ext "schmidtwebmedia".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'SchmidtWebmedia',
    'description' => 'Sitepackage from SchmidtWebmedia',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.99.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SchmidtWebmedia\\Schmidtwebmedia\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marco Schmidt',
    'author_email' => 'kontakt@schmidt-webmedia.de',
    'author_company' => 'Marco Schmidt-Webmedia',
    'version' => '1.0.0',
];
