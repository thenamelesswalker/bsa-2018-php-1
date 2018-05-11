<?php
declare(strict_types = 1);
namespace Cryptocurrency\Task1;

class Dogecoin extends AbstractCurrency
{

    protected $name = "Dogecoin";

    protected $logoUrl = "https://s2.coinmarketcap.com/static/img/coins/32x32/74.png";

    public function __construct(float $price)
    {
        parent::__construct($price);
    }
}

