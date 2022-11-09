<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;


    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }

    public function getRating(): string
    {
        return $this->rating;
    }


    public function getMovies(): string
    {
        return "Title: " . $this->title . "\nStudio: " . $this->studio . "\nRating: " . $this->rating . "\n";
    }


    public function getPG($movies):array
    {
        $moviesPG = [];
        foreach ($movies as $movie) {
            if ($this->rating = "PG") {
                $moviesPG [] = $movie;
            }
        }
        return $moviesPG;
    }


}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia pictures", "PG"),
];

foreach ($movies as $movie){
    $moviesPG = $movie->getPG($movie);
}






