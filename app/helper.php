<?php

const PAGINATION_COUNT = 25;

if (!function_exists('currency')) {
    function currency($number)
    {
        $formatter = new NumberFormatter('en-US', NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($number, 'USD');
    }

}

