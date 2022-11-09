<?php

class Car
{
    private FuelGauge $fuelGauge;
    private Odometer $odometer;

    public function __construct(FuelGauge $fuelGauge, Odometer $odometer)
    {
        $this->fuelGauge = $fuelGauge;
        $this->odometer = $odometer;
    }

    public function drive():void
    {
        $this->odometer->increment();

        if($this->odometer->getMileage() % 10 === 0){
            $this->fuelGauge->use();
        }
    }


    /**
     * @return FuelGauge
     */
    public function getFuelGauge(): FuelGauge
    {
        return $this->fuelGauge;
    }

    /**
     * @return Odometer
     */
    public function getOdometer(): Odometer
    {
        return $this->odometer;
    }

}