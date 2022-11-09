<?php

class Product
{
    private string $name;
    private float $startPrice;
    private int $amount;


    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStartPrice(): float
    {
        return $this->startPrice;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }


    public function setAmount(int $newAmount): void
    {
        $this->amount = $newAmount;
    }


    public function setPrice(float $newPrice): void
    {
        $this->startPrice = $newPrice;
    }


    public function printProduct(): string
    {
        return $this->getName() . ", " . $this->getStartPrice(). " EUR, " . $this->getAmount() . " units.";
    }
}



$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5s", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1)
];

foreach ($products as $key => $product){
    $key += 1;
    echo  "{$key}. {$product->printProduct()}" . PHP_EOL;
}

$userSelection = (int)readline("\nEnter number, which product you would like to change \n");
$userSelection -= 1;
$selectedProduct =  $products[$userSelection];

echo  $selectedProduct->printProduct();
echo PHP_EOL;
$changeSelection = (int)readline("Enter 1 to change price or 2 to change amount\n");

if($changeSelection == 1){
    $userPrice =  (int)readline("Enter new price: ");
    $selectedProduct->setPrice($userPrice);
    echo $selectedProduct->printProduct();
}

if($changeSelection == 2){
    $userAmount =  (int)readline("Enter new amount: ");
    $selectedProduct->setAmount($userAmount);
    echo $selectedProduct->printProduct();
}
