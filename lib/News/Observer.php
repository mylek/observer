<?php
namespace News

interface Observer
{
    public function update(Weather\WeatherForecast $weather);
}