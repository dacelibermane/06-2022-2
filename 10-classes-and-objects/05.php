<?php

class Date
{
    private string $month;
    private int $day;
    private int $year;

    public function __construct($day, $month, $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): string
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    public function setMonth(string $month): void
    {
        $this->month = $month;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function displayDate(): string
    {
        return $this->getDay() . "/" . $this->getMonth() . "/" . $this->getYear();
    }


}

$date = new Date("08", "11", "2022");

echo "Today is: " . $date->displayDate();
echo PHP_EOL;
$userDay = readline("Enter day: ");
$userMonth = readline("Enter month: ");
$userYear = readline("Enter year: ");
$date->setDay($userDay);
$date->setMonth($userMonth);
$date->setYear($userYear);
echo "The date you entered - " . $date->displayDate();
