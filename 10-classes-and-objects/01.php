<?php

class Product
{
    private string $name;
    private float $startPrice;
    private int $amount;

    public function __construct($name, $startPrice, $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;

    }

    function main()
    {
        $this->printProduct($this->name, $this->startPrice, $this->amount);
    }

    function printProduct($name, $startPrice, $amount)
    {
        echo "$name, price $startPrice, amount $amount.";
    }
}

$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5s", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1)
];

foreach ($products as $product){
    echo $product->main() . PHP_EOL;
}

