<?php

//use Weather;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    require 'C:\Projekty\observer\lib\\'.$fileName;
}
spl_autoload_register('autoload');


$weatherForecase = new \Weather\WeatherForecast(10, 1000);
$radioNews = new \News\RadioNews();
$tvNews = new \News\TvNews();
$internetNews = new \News\InternetNews();

$weatherForecase->registerObserver($radioNews);
$weatherForecase->registerObserver($tvNews);
$weatherForecase->registerObserver($internetNews);
$weatherForecase->notifyObservrs();
$weatherForecase->unregisterObserver($internetNews);
$weatherForecase->change(5, 1100);