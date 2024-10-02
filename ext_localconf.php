<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use WEBcoast\ProjectTimeline\Controller\ProjectController;

ExtensionUtility::configurePlugin(
    'ProjectTimeline',
    'Main',
    [
        ProjectController::class => 'list',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class)->registerIcon(
    'ext-project_timeline-wizard-icon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:project_timeline/Resources/Public/Icons/Extension.svg']
);
