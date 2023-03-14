<?php
include "../interface/ProgInterface.php";
include "../Tariff&Service/GPS.php";
include "../Tariff&Service/Driver.php";
include "../Tariff&Service/PerHourTariff.php";
include "../Tariff&Service/BaseTariff.php";
include "../Tariff&Service/StudTariff.php";

$tariff = new StudTariff(7,90);
$tariff->addService(new Driver(100));

echo $tariff->calcPrice();