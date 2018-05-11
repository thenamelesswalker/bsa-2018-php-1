<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $html = '<div>';
        foreach ($market->getCurrencies() as $currency) {
            $nameWithPrice = '<span>' . $currency->getName() . ': '. $currency->getDailyPrice() . '</span>';
            $price = '<span>' . $currency->getDailyPrice() . '</span>';
            $logo = '<img src="' . $currency->getLogoUrl() . '">';
            $html .= '<div>' . $logo . $nameWithPrice . '</div>';
        }
        $html .= '</div>';
        return $html;
    }
}