<?php

/***********************************************************************
 * Extension Manager/Repository config file for ext "translation_api".
 ***********************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Translation API',
    'description' => 'API to fetch translation units.',
    'category' => 'service',
    'shy' => 0,
    'version' => '2.0.1',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Xavier Perseguers',
    'author_email' => 'xavier@causal.ch',
    'author_company' => 'Swisscom (Schweiz) AG',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.7.99',
            'php' => '7.0.0-7.1.99',
            'routing' => '0.4.0-',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    '_md5_values_when_last_written' => '',
    'suggests' => array(
    ),
);
