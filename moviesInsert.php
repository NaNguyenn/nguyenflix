<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="moviesProcess.php">
        <div>
        <label for="movieName">Insert movie name</label>
        <input type="text" name="movieName" id="movieName">
        </div>
        <div>
        <label for="movieGenre">Insert movie genre</label>
        <input type="text" name="movieGenre" id="movieGenre">
        </div>
        <div>
        <label for="movieRating">Insert movie rating</label>
        <input type="number" name="movieRating" id="movieRating" step="0.1">/10
        </div>
        <div>
        <label for="movieImage">Insert movie image link</label>
        <input type="text" name="movieImage" id="movieImage">
        </div>
        <div>
        <label for="movieLink">Insert movie link</label>
        <input type="text" name="movieLink" id="movieLink">
        </div>
        <div>
        <label for="movieCode">Insert movie code</label>
        <input type="text" name="movieCode" id="movieCode">
        </div>
        <button>Insert</button>
    </form>
</body>
</html>