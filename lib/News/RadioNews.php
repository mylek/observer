<?php

namespace News;

class RadioNews implements Observer
{
    public function update(Weather\WeatherForecast $weather)
    {
        echo "Radio - nowa prognoza pogody: temperatura: ".$weather->getTemperature()." stopni, ciśnienie: ". $weather->getPressure() ."hPa\r\n";
    }
}