<?php


/**
 * Class Movie
 */
class Movie
{
    public static string $nationality = "USA";

    public function Nationality()
    {
        return self::$nationality;
    }

    public static function StaticNationality()
    {
        return "USA";
    }

    public function __construct(public string $title, public int $year, public string $age, public array $genres)
    {
        $this->title = $title;
        $this->year = $year;
        $this->age = $age;
        $this->genres = $genres;
    }
    public function IsModern($year)
    {
        if ($this->year > 1982) {
            return $this->age = "Modern";
        } else {
            return $this->age = "Classic";
        };
    }
}
