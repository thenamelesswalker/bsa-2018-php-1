<?php
declare(strict_types = 1);
namespace Cryptocurrency\Task1;

abstract class AbstractCurrency implements Currency
{

    protected $name;

    protected $logoUrl;

    protected $dailyPrice;

    public function __construct(float $price)
    {
        $this->dailyPrice = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }
}

