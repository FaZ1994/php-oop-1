<?php
require_once __DIR__ . '/movie.php';


$movies = [
    [
        'title' => 'Jurassic Park',
        'releaseDate' => '17/09/1993',
        'country' => 'US',
        'poster' => './img/JP.jpg'
    ],
    [
        'title' => 'Alien',
        'releaseDate' => '25/10/1979',
        'country' => 'US',
        'poster' => './img/alien.jpg'
    ],
    [
        'title' => 'The Lords of the Rings',
        'releaseDate' => '19/12/2001',
        'country' => 'NZ',
        'poster' => './img/LOTR.jpg'
    ],
    [
        'title' => 'The Blues Brothers',
        'releaseDate' => '13/11/1980 ',
        'country' => 'US',
        'poster' => './img/bluesBrothers.jpg'
    ],
    [
        'title' => 'Pulp Fiction',
        'releaseDate' => '28/10/1994',
        'country' => 'US',
        'poster' => './img/pulp.jpg'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My Movie List - TOP 5</h1>

    <?php

    foreach ($movies as $key => $value) {
        $movie = new Movie($value['title'], $value['releaseDate'], $value['country'], $value['poster']);
    ?>

        <h2> Title : <?php echo $movie->getTitle(); ?> </h2>
        <p> Release date : <?php echo $movie->getDate(); ?> </p>
        <p> Country : <?php echo $movie->getContry(); ?> </p>
        <img src=" <?php echo $movie->getPoster(); ?>" alt="poster">

    <?php } ?>
</body>

</html>