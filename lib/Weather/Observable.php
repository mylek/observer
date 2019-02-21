<?php
namespace Weather;

interface Observable
{
    public function registerObserver(Observer $observer);
    public function unregisterObserver(Observer $observer);
    public function notifyObservrs();
}