<?php
        $movieId = $_GET['id'];
        require 'connect.php';

        $sql = "select * from movies where id = $movieId";
        $movies = mysqli_query($connect,$sql);
        $movie = mysqli_fetch_array($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $movie['name'] ?></title>
    <style>
        body{
            background: black;
        }
    </style>
</head>
<body>
    <video id="video" width="640" height="480" controls preload="metadata">
    <source src="<?php echo $movie['link'] ?>" type="video/mp4">
    <track label="Vietnamese" kind="subtitles" srclang="vi"
        src="subtitles/<?php echo $movie['code'] ?>.vtt" default>
    </video>
</body>
</html>