<?php

namespace News;

class InternetNews implements Observer
{
    public function update(Weather\WeatherForecast $weather)
    {
        echo "Internet - nowa prognoza pogody: temperatura: ".$weather->getTemperature()." stopni, ciśnienie: ". $weather->getPressure() ."hPa\r\n";
    }
}