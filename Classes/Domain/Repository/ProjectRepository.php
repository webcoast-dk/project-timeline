<?php

declare(strict_types=1);


namespace WEBcoast\ProjectTimeline\Domain\Repository;


use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class ProjectRepository extends Repository
{
    protected $defaultOrderings = [
        'startDate' => QueryInterface::ORDER_DESCENDING,
        'endDate' => QueryInterface::ORDER_DESCENDING
    ];
}
