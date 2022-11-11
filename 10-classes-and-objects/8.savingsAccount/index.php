<?php

require_once "SavingsAccount.php";

$startingBalance = (float)readline("How much money is in the account?: \n") . PHP_EOL;

$annualRate = (float)readline("Enter the annual interest rate: \n") . PHP_EOL;

$depositMonth = (float)readline("How long has the account been opened?") . PHP_EOL;

$account = new SavingsAccount($startingBalance, $annualRate, $depositMonth);