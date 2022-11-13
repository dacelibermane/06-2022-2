<?php

require_once "SavingsAccount.php";

$account = new SavingsAccount
(
    (float)readline("How much money is in the account?: \n") . PHP_EOL,
    (float)readline("Enter the annual interest rate: \n") . PHP_EOL,
    (float)readline("How long has the account been opened?") . PHP_EOL
);

$monthCounter = 1;

while($monthCounter <= $account->getMonth())
{
    $account->amountOfDeposit((float)readline("Enter amount deposited for month {$monthCounter}: "));
    $account->amountOfWithdrawal((float)readline("Enter amount withdrawn for month {$monthCounter}: "));
    $account->addMonthlyInterest();
    $monthCounter++;
}

function formatMoney(int $number):string
{
    return "$" . number_format($number, 2);
}

echo "Total deposited: " . formatMoney($account->getTotalDeposited()) . PHP_EOL;
echo "Total withdrawn: " . formatMoney($account->getTotalWithdrawn()) . PHP_EOL;
echo "Interest earned: " . formatMoney($account->getInterestEarned()) . PHP_EOL;
echo "Ending balance: " . formatMoney($account->getBalance()) . PHP_EOL;

