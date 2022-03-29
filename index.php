<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyenflix</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        header {
            display: flex;
            align-items: center;
        }
        .search {
            width: 100%;
            position: relative;
            display: flex;
        }

        #searchTerm {
            width: 100%;
            border: 3px solid #db202c;
            border-right: none;
            padding: 5px;
            height: 20px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9dbfaf;
        }
        #searchTerm:focus {
            color: #db202c;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #db202c;
            background: #db202c;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }

        /*Resize the wrap to see the search bar change!*/
        .wrap {
            width: 30%;
            /*position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);*/
        }
        body{
            background-image: url("https://assets.nflxext.com/ffe/siteui/vlv3/d0982892-13ac-4702-b9fa-87a410c1f2da/82a4f5e1-6175-4d4f-afad-0e555eb62e53/VN-vi-20220321-popsignuptwoweeks-perspective_alpha_website_large.jpg");
        }
        header, main{
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            margin: 5px;
        }
        #categories{
            display: flex;
            flex-direction: column;
        }
        #categories a{
            margin: 5px;
        }
        main{
            display: flex;
        }
        #moviesContainer{
            padding: 1vh;
            display: flex;
        }
        a{
            text-decoration: none;
            color: #edf2f4 !important;
        }
    </style>
</head>
<body>
    

    <?php
    require 'connect.php';
    $search = '';
    if(isset($_GET['searchTerm'])){
        $search = $_GET['searchTerm'];
    }
    $category = '';
    if(isset($_GET['genre'])){
        $category = $_GET['genre'];
    }
    $sql = "select * from movies where name like '%$search%' and genre like '%$category%'";
    $movies = mysqli_query($connect,$sql);

    $sql_genres = "select distinct genre from movies";
    $genres = mysqli_query($connect,$sql_genres);
    ?>

    <header>
        <a href="https://fontmeme.com/fonts/bebas-neue-font/" id="logo"><img
                src="https://fontmeme.com/permalink/210821/f986b6d61e5a23604010bb1dfdbbaaea.png" alt="bebas-neue-font"
                border="0"></a>

        <div class="wrap">
            <form class="search">
                <input type="text" id="searchTerm" name="searchTerm" placeholder="Full HD, vietsub, free, no ads" value="<?php echo $search ?>">
                <button type="submit" class="searchButton">
                    <span class="material-icons">
                        search
                    </span>
                </button>
            </form>
        </div>
    </header>

    <main>
        <div id="categories">
            <a href="index.php">
                    All
            </a>
            <?php foreach($genres as $genre){ ?>
                <a href="?genre=<?php echo $genre['genre'] ?>">
                    <?php echo $genre['genre'] ?>
                </a>
            <?php } ?>
        </div>
        <div id="moviesContainer">
            <?php foreach($movies as $movie){ ?>
                <a href="movieDetail.php?id=<?php echo $movie['id'] ?>">
                    <div class="movieContainer">
                        <img src="<?php echo $movie['image'] ?>" alt="<?php echo $movie['name'] ?> image" height="210">
                        <div class="movieContent">
                            <div>
                                <?php echo $movie['name'] ?>
                            </div>
                            <div>
                                <?php echo $movie['genre'] ?>
                            </div>
                            <div>
                                <?php echo $movie['rating'] ?>/10
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </main>
</body>
</html>