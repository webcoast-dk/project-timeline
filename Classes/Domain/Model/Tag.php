<?php

declare(strict_types=1);


namespace WEBcoast\ProjectTimeline\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Tag extends AbstractEntity
{
    protected string $name = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Tag
    {
        $this->name = $name;
        return $this;
    }
}
