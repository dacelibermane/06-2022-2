<?php

require_once "SavingsAccount.php";

$account = new SavingsAccount
(
    (float)readline("How much money is in the account?: \n") . PHP_EOL,
    (float)readline("Enter the annual interest rate: \n") . PHP_EOL,
    (float)readline("How long has the account been opened?") . PHP_EOL
);

