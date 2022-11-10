<?php

require_once 'Account.php';
require_once 'Bank.php';

$bartosAccount = new Account("Barto's account", 100.00);
$bartosSwissAccount = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state\n";
echo $bartosAccount->getBalance() . PHP_EOL;
echo $bartosSwissAccount->getBalance() . PHP_EOL;
$bartosAccount->setWithdrawal(20);
echo $bartosAccount->getName() . " balance is now: " . $bartosAccount->getBalance() . PHP_EOL;
$bartosSwissAccount->setDeposit(200);
echo $bartosSwissAccount->getName() . " balance is now: ". $bartosSwissAccount->getBalance() . PHP_EOL;
echo "Final state" . PHP_EOL;
echo $bartosAccount->getBalance() . PHP_EOL;
echo $bartosSwissAccount->getBalance() . PHP_EOL;

$mattAccount = new Account("Matt's account", 1000);
$myAccount = new Account("My account", 0);

$bank = new Bank($bartosAccount,$bartosSwissAccount);
$bank1 = new Bank($mattAccount, $myAccount);

$bank1->transfer(100);

echo "Name: " . $myAccount->getName() . PHP_EOL;
echo "Balance: " . $myAccount->getBalance() . PHP_EOL;
echo "Name: " . $mattAccount->getName() . PHP_EOL;
echo "Balance: " . $mattAccount->getBalance() . PHP_EOL;

$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);

$bank3 = new Bank($a, $b);
$bank3->transfer(50);
echo "Account " .$a->getName() . " balance: " . $a->getBalance(). PHP_EOL;
echo "Account " .$b->getName() . " balance: " . $b->getBalance() . PHP_EOL;

$bank4 = new Bank($b, $c);
$bank4->transfer(25);
echo "Account " .$b->getName() . " balance: " . $b->getBalance(). PHP_EOL;
echo "Account " .$c->getName() . " balance: " . $c->getBalance() . PHP_EOL;


