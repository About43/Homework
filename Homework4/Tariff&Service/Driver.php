<?php
class Driver
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function apply($tariff, &$price)
    {
        $price += $this->price;
    }
}