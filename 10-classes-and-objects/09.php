<?php
class BankAccount
{

    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        if ($this->balance < 0) {
            return "Name: ". $this->name ."\n" . "Balance: -$" . number_format(abs($this->balance),2) .PHP_EOL;
        }
        return "Name: ". $this->name ."\n" .  "Balance: $" . number_format($this->balance, 2). PHP_EOL;
    }
}

$account1 = new BankAccount("Dave", -19.25);
$account2 = new BankAccount("Linda", 119.25);

echo $account1->showUserNameAndBalance();
echo $account2->showUserNameAndBalance();