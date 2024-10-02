<?php

declare(strict_types=1);


namespace WEBcoast\ProjectTimeline\Domain\Model;


use DateTime;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Project extends AbstractEntity
{
    protected string $title = '';

    protected string $publicTitle = '';

    protected string $description = '';

    protected DateTime $startDate;

    protected ?DateTime $endDate = null;

    protected Customer $customer;

    /** @var ObjectStorage<Tag> */
    protected ObjectStorage $tags;

    public function initializeObject(): void
    {
        $this->tags = new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Project
    {
        $this->title = $title;

        return $this;
    }

    public function getPublicTitle(): string
    {
        return $this->publicTitle;
    }

    public function setPublicTitle(string $publicTitle): Project
    {
        $this->publicTitle = $publicTitle;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Project
    {
        $this->description = $description;

        return $this;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate): Project
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?DateTime $endDate): Project
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): Project
    {
        $this->customer = $customer;

        return $this;
    }

    public function getTags(): ObjectStorage
    {
        return $this->tags;
    }

    public function setTags(ObjectStorage $tags): Project
    {
        $this->tags = $tags;

        return $this;
    }
}
