<?php

declare(strict_types=1);


namespace WEBcoast\ProjectTimeline\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Customer extends AbstractEntity
{
    protected string $name = '';

    protected string $publicName = '';

    protected string $city = '';

    protected string $region = '';

    protected string $country = '';

    protected string $contact = '';

    protected string $email = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Customer
    {
        $this->name = $name;
        return $this;
    }

    public function getPublicName(): string
    {
        return $this->publicName;
    }

    public function setPublicName(string $publicName): Customer
    {
        $this->publicName = $publicName;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): Customer
    {
        $this->city = $city;
        return $this;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): Customer
    {
        $this->region = $region;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): Customer
    {
        $this->country = $country;
        return $this;
    }

    public function getLocation(): array
    {
        return array_filter([
            $this->city,
            $this->region,
            $this->country
        ]);
    }

    public function getContact(): string
    {
        return $this->contact;
    }

    public function setContact(string $contact): Customer
    {
        $this->contact = $contact;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): Customer
    {
        $this->email = $email;
        return $this;
    }
}
