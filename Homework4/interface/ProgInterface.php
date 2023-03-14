<?php
    class BaseInterface
{
    protected $pricePerKm;
    protected $pricePerMin;
    protected $distance;
    protected $min;
        protected $services = [];

    public function __construct(int $distance,int $min)
    {
        $this->distance = $distance;
        $this->min = $min;
    }
        public function getTime(): int
        {
            return $this->min;
        }
        public function getDistance(): int
        {
            return $this->distance;
        }
        public function addService($service)
        {
            array_push($this->services, $service);
            return $this;
        }
        public function calcPrice()
        {
            $price = $this->distance * $this->pricePerKm+ $this->min * $this->pricePerMin;

            if ($this->services) {
                foreach ($this->services as $service) {
                    $service->apply($this, $price);
                }
            }
            return $price;
        }

}
