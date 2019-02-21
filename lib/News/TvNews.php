<?php

namespace News;

class TvNews implements Observer
{
    public function update(Weather\WeatherForecast $weather)
    {
        echo "Telewizja - nowa prognoza pogody: temperatura: ".$weather->getTemperature()." stopni, ciśnienie: ". $weather->getPressure() ."hPa\r\n";
    }
}