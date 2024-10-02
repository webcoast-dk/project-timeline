<?php

declare(strict_types=1);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ProjectTimeline',
    'Main',
    'LLL:EXT:project_timeline/Resources/Private/Language/locallang_backend.xlf:plugin.main.title',
    'EXT:project_timeline/Resources/Public/Icons/Extension.svg'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'pages, recursive',
    'projecttimeline_main',
    'after:header'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['projecttimeline_main'] = 'ext-project_timeline-wizard-icon';
