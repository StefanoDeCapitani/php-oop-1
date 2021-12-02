<?php 

include "./data/data.php";
include "./Movie.php";

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
    <?php 
        foreach($movies as $movie){
            echo $movie->get_HTML_formatted_infos();
        }
    ?>
</body>
</html>