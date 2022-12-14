<?php

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x,int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function swapPoints(object $point1, object $point2)
    {
        $swapX = $point1->x;
        $swapY = $point1->y;
        $point1->x = $point2->x;
        $point1->y = $point2->y;
        $point2->x = $swapX;
        $point2->y = $swapY;

    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1,$p2);
echo "(" . $p1->getX() . ", " . $p1->getY() . ")" . PHP_EOL;
echo "(" . $p2->getX() . ", " . $p2->getY() . ")" . PHP_EOL;

