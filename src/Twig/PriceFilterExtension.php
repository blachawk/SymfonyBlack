<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class PriceFilterExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('price', [$this, 'priceFilter']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('function_price', [$this, 'priceFilter']),
        ];
    }

    public function priceFilter($value)
    {
        // ...
        return '$'.number_format($value, 2, '.', ',');
    }
}
