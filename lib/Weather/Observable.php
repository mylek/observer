<?php
namespace Weather;

interface Observable
{
    public function registerObserver(\News\Observer $observer);
    public function unregisterObserver(\News\Observer $observer);
    public function notifyObservrs();
}