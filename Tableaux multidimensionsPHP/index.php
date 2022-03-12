<?php 

$actorMovies = [
    'Indiana Jones and the Temple of Doom' => ['Kate Capshaw', 'Jonathan Ke Quan', 'Amrish Puri'],
    'Indiana Jones and the Last Crusade' => ['Denholm Elliott', 'Julian Glover', 'Alison Doody'],
    'Indiana Jones and the Kingdom of the Crystal Skull' => ['Cate Blanchett', 'Ray Winston', 'Shia LaBeouf'],
];

var_dump($actorMovies);

foreach ($actorMovies as $movie => $actors) {

echo " Dans le film " . $movie . ", les principaux acteurs sont :". "<br>";

foreach ($actors as $actor) {
    
    echo $actor . " , ";

}
};
