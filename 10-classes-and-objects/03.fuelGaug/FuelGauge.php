<?php

class FuelGauge
{
    private int $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function fill(int $fillAmount = 1)
    {
        $maxAmount = 70;
        $newAmount = $this->amount + $fillAmount;

        if($newAmount > $maxAmount){
            $newAmount = $maxAmount;
        }

        $this->amount = $newAmount;
    }

    public function use(int $useAmount = 1)
    {
        $minAmount = 0;
        $newAmount = $this->amount - $useAmount;

        if($newAmount <= $minAmount){
            $newAmount = $minAmount;
        }

        $this->amount = $newAmount;
    }
}