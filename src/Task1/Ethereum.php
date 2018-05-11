<?php
declare(strict_types = 1);
namespace Cryptocurrency\Task1;

class Ethereum extends AbstractCurrency
{

    protected $name = "Ethereum";

    protected $logoUrl = "https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png";

    public function __construct(float $price)
    {
        parent::__construct($price);
    }
}

