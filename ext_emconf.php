<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Project Timeline',
    'description' => 'Show your project history/timeline',
    'category' => 'plugin',
    'author' => 'Thorben Nissen',
    'author_email' => 'thorben@webcoast.dk',
    'author_company' => 'WEBcoast',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WEBcoast\\ProjectTimeline\\' => 'Classes'
        ]
    ]
];
