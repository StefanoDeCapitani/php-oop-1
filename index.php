<?php
class Movie{
    public $title;
    public $director;
    public $release_year;
    public $ratings;
    public $production_companies = [];

    public function __construct($_title, $_director, $_release_year, $_ratings,  $_production_companies){
        $this->set_title($_title);
        $this->set_director($_director);
        $this->set_release_year($_release_year);
        $this->set_ratings($_ratings);
        $this->set_production_companies($_production_companies);
    }

    /* GETTERS AND SETTERS */

    public function set_title($newValue){
        if(!is_null($newValue)){
            $this->title = $newValue;
        }
    }

    public function get_title(){
        return $this->title;
    }

    public function set_director($newValue){
        if(!is_null($newValue)){
            $this->director = $newValue;
        }
    }

    public function get_director(){
        return $this->director;

    }

    public function set_release_year($newValue){
        if(!is_null($newValue)){
            $this->release_year = $newValue;
        }
    }

    public function get_release_year(){
        return $this->release_year;
    }

    public function set_ratings($newValue){
        if(!is_null($newValue)){
            $this->ratings = $newValue;
        }
    }

    public function get_ratings(){
        return $this->ratings;

    }

    public function set_production_companies($newValue){
        if(!is_null($newValue)){
            $this->production_companies = $newValue;
        }
    }

    public function get_production_companies(){
        return $this->production_companies;

    }


    /* METHODS */

    public function get_HTML_formatted_infos(){
        $HTML = "<h1>" . $this->title . " (" . $this->release_year . ")</h1>";
        $HTML .= "<p>Director: " . $this->director;
        $HTML .= "<p>Ratings: " . $this->ratings;
        $HTML .= "<p>Production companies: "; 
        foreach($this->production_companies as $i => $company){
            $HTML .= $company;
            if(!count($this->production_companies) === $i){
                $HTML .= ", ";
            }
            
        }
        return $HTML;
    }
} 

include "./data/data.php";

$movies;

foreach($movies_array as $movie){
    $movies[] = new Movie($movie[0], $movie[1], $movie[2], $movie[3], $movie[4]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies OOP</title>
</head>
<body>
    <?php foreach($movies as $movie){
        echo $movie->get_HTML_formatted_infos();
    }  ?>
</body>
</html>