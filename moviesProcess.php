<?php

$name = $_POST["movieName"];
$genre = $_POST["movieGenre"];
$rating = $_POST["movieRating"];
$image = $_POST["movieImage"];
$link = $_POST["movieLink"];
$code = $_POST["movieCode"];

require 'connect.php';

$sql = "insert into movies(name,genre,rating,image,link,code) 
values('$name','$genre','$rating','$image','$link','$code')";
// die($sql);

mysqli_query($connect, $sql);

