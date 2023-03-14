<?php
class PerHourTariff extends BaseInterface
{
    protected $pricePerKm = 0;
    protected $pricePerMin = 200 / 60;
    public function __construct(int $distance, int $min)
    {
        parent::__construct($distance,$min);
        $this->min = $this->min - $this->min % 60 + 60;
    }
}