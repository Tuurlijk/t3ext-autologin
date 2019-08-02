<?php

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Auto login',
    'description'      => 'Only for development, unsafe for live environments! Logs in oldest admin account.',
    'category'         => 'services',
    'author'           => 'Michiel Roos',
    'author_email'     => 'michiel@michielroos.com',
    'state'            => 'stable',
    'internal'         => '',
    'uploadfolder'     => '',
    'createDirs'       => '',
    'clearCacheOnLoad' => 0,
    'version'          => '1.0.2',
    'constraints'      => [
        'depends'   => [
            'typo3' => '7.0.0-10.5.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
