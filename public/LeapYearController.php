<?php

namespace App;
use Symfony\Component\HttpFoundation\Response;

class LeapYearController
{
    public function index($year)
    {
        if (is_leap_year($year)) {
            return new Response('Да, год високосный!');
        }

        return new Response('Нет, год не високосный.');
    }
}