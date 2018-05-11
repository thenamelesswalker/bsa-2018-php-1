<?php
declare(strict_types = 1);
namespace Cryptocurrency\Task1;

class Bitcoin extends AbstractCurrency
{

    protected $name = "Bitcoin";

    protected $logoUrl = "https://s2.coinmarketcap.com/static/img/coins/32x32/1.png";

    public function __construct(float $price)
    {
        parent::__construct($price);
    }
}

