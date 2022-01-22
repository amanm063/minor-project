<?php
include("config.php");
include("session.php");
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Datasets</title>

<style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    .main p{
        color: white;
        margin:50px 90px;
    }
    .main .content{
        width: 60%;
        margin: 160px auto 0;
        text-align: center;
        color: #fff;
    }
    .main .content h1{
    font-size: 60px;
    }
    .main .content h3{
        width: 80%;
        margin: 20px auto 0;
        font-weight: 100;
        line-height: 25px;
    }

    body {
    
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: black;
    }

    .card-title,
    .card-text{
        color:#fff;
    }

    .page-link{
        background-color:black;
        color:red;
    }

    .page-link:hover{
        background-color:red;
        color:black;
        font-size:33px;
    }
</style>


</head>

<body>

<div class="main">
             <div class="content">
                <h1>DATASETS</h1>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae id cum eveniet sit. Tempora quidem maiores quae unde error ea, explicabo rerum ipsa, earum eaque animi laboriosam dolore consequuntur amet?</p> -->
            </div>
</div>

<div class="container">
    <div class="card mb-5">
      <img src="https://source.unsplash.com/1920x960/?playstation" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title" align="center"><strong>PlayStation 4</strong></h2>
        <p class="card-text" align="center">The PlayStation 4 (PS4) is a home video game console developed by Sony Computer Entertainment. The dataset is scraped from TrueTrophies.com which is a website that maintains players' winnings and achievements of PlayStation games. Let's take a look at the dataset.</p>
      </div>
      <button type="button" class="btn btn-outline-dark mx-auto" onclick="location.href='gist/ps4.php'">VIEW</button>
    </div>

    <div class="card mb-5">
      <img src="https://source.unsplash.com/1920x960/?playstore" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title" align="center"><strong>Google Play Store</strong></h2>
        <p class="card-text" align="center">
From google playstore dataset, I decide to make some simple notebook for Exploratory Data Analysis and do some wrangling data for put it on my prediction model in future.
</p>
      </div>
      <button type="button" class="btn btn-outline-dark mx-auto" onclick="location.href='gist/playstore.php'">VIEW</button>
    </div>

    <div class="card mb-5">
      <img src="https://source.unsplash.com/1920x960/?console" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title" align="center"><strong>Console Wars</strong></h2>
        <p class="card-text" align="center">The epic battles fought ( and still being fought) amongst the biggest and baddest players in the console gaming industry. This notebook will focus on the 7th Generation and the 8th Generation of the Console wars.</p>
      </div>
      <button type="button" class="btn btn-outline-dark mx-auto" onclick="location.href='gist/consolewar.php'">VIEW</button>
    </div>

    <div class="card mb-5">
      <img src="https://source.unsplash.com/1920x960/?spotify" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title" align="center"><strong>Spotify</strong></h2>
        <p class="card-text" align="center">Used plotly express to get insight about songs.</p>
      </div>
      <button type="button" class="btn btn-outline-dark mx-auto" onclick="location.href='gist/spotify.php'">VIEW</button>
    </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="dataset1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="dataset2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="dataset3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="dataset4.php">4</a></li>
  </ul>
</nav>


    <?php include 'footer.php' ?>
</body>

</html>