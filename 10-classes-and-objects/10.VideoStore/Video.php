<?php
class Video{

    private string $title;
    private bool $available;
    private int $averageRating;


    public function construct(string $title,bool $available, int $averageRating){
        $this->title = $title;
        $this->available = $available;
        $this->averageRating = $averageRating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }



}

