<?php
namespace Weather;

class WeatherForecast implements Observable
{
    /**
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @return int
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    private $temperature;
    private $pressure;
    private $registeredObservers;

    public function __construct(int $temperature, int $pressure)
    {
        $this->temperature = $temperature;
        $this->pressure = $pressure;
        $this->registeredObservers = new \SplObjectStorage();
    }

    public function registerObserver(\News\Observer $observer)
    {
        $this->registeredObservers->attach($observer);
    }

    public function unregisterObserver(\News\Observer $observer)
    {
        $this->registeredObservers->detach($observer);
    }

    public function notifyObservrs()
    {
        foreach($this->registeredObservers as $observer)
        {
            $observer->update($this);
        }
    }

    public function change(int $temperature, int $pressure)
    {
        $this->temperature = $temperature;
        $this->pressure = $pressure;
        $this->notifyObservrs();
    }
}