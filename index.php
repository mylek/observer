<?php

use Weather;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

spl_autoload_register(function($className) {
    include_once $_SERVER['DOCUMENT_ROOT'] . 'observer/lib/' . $className . '.php';
});


$weatherForecase = new Weather\WeatherForecast(10, 1000);
$radioNews = new News\RadioNews();
$tvNews = new News\TvNews();
$internetNews = new News\InternetNews();

$weatherForecase->registerObserver($radioNews);
$weatherForecase->registerObserver($tvNews);
$weatherForecase->registerObserver($internetNews);
$weatherForecase->notifyObservrs();