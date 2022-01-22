<?php
include("config.php");
include("session.php");
include("nav.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>About Us</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        html {
            font-size: 10px;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: black;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        section {
            padding: 10rem 0;
            background-color: #fff;
        }

        .headin {
            text-transform: uppercase;
            font-size: 3.5rem;
            letter-spacing: 3px;
            margin-right: -3px;
            margin-bottom: 5rem;
            text-align: center;
            color: #fff;
            position: relative;
        }


        .crd_wrapper {
            display: flex;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }

        .crd {
            width: 32rem;
            background-color: #ebeef8;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 2rem 0;
            box-shadow: .5rem .5rem 3rem rgba(255, 0, 0, 0.5);
        }

        .crd .crd-img {
            width: 100%;
            height: 26rem;
            object-fit: cover;
            clip-path: polygon(0 0, 100% 0, 100% 78%, 0% 100%);
        }

        .prfl-img {
            width: 15 rem;
            height: 15rem;
            object-fit: cover;
            border-radius: 50%;
            margin-top: -10rem;
            z-index: 999;
            border: 1rem solid #ebeef8;
        }

        .crd h1 {
            font-size: 2.5rem;
            color: #333;
            margin: 1.5rem 0;
        }

        .job_title {
            color: red;
            font-size: 1.5rem;
            font-weight: 300;
        }

        .abt {
            font-size: 2rem;
            margin: 1.5rem 0;
            font-style: italic;
            text-align: center;
            color: #333;
        }


        .social_media {
            width: 100%;
            list-style: none;
            display: flex;
            justify-content: space-evenly;
            padding: 2rem 0;
            margin-top: 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }

        .social_media li {
            width: 100%;
            list-style: none;
            display: flex;
            justify-content: space-evenly;
        }


        .social_media i {
            font-size: 3rem;
            transition: color .5s;
        }

        .fa-linkedin-in,
        .fa-facebook-square {
            color: #3b5999;
        }

        .fa-instagram {
            color: #e6683c;
        }

        .fa-twitter-square {
            color: #55acee;
        }

        .fa-linkedin-in:hover,
        .fa-instagram:hover,
        .fa-twitter-square:hover,
        .fa-facebook-square:hover {
            color: #45e19f;
        }

        @media screen and (min-width:700px) {
            .crd_wrapper {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            .crd {
                margin: 2rem;
            }
        }

        .header .a1 {
            text-decoration: none;
            color: white;
            font-size: 20px;
            line-height: 50px;
            padding: 12px 3px; 
            }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="headin">
            Our Team
        </h1>
        <div class="crd_wrapper">
            <div class="crd">
                <img src="full.jpg" alt="Image Unavailable" class="crd-img">
                <img src="beard.jpg" alt="Image Unavailable" class="prfl-img">
                <h1>Ritik Malik</h1>
                <p class="job_title">Full Stack Developer</p>
                <p class="abt">
                    Worked on HTML, CSS, Bootstrap, PHP, MySQL and Photoshop.
                </p>
                <ul class="social_media">
                    <li>
                        <a href="https://www.linkedin.com/in/ritikmalik007/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/ritikmalik_" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/ritikmalik_" target="_blank"><i
                                class="fab fa-twitter-square"></i></a>
                    </li>
                </ul>
            </div>


            <div class="crd">
                <img src="python.png" alt="Image Unavailable" class="crd-img">
                <img src="saitama.png" alt="Image Unavailable" class="prfl-img">
                <h1>Aman Malik</h1>
                <p class="job_title">Data Scientist</p>
                <p class="abt">
                    Worked on Python, Machine Learning, EDA and Photoshop
                </p>
                <ul class="social_media">
                    <li>
                        <a href="https://www.linkedin.com/in/amanmalik063/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/amanm063" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/AmanMalik7774" target="_blank"><i
                                class="fab fa-twitter-square"></i></a>
                    </li>
                </ul>
            </div>


            <div class="crd">
                <img src="frontend.jpg" alt="Image Unavailable" class="crd-img">
                <img src="dude.jpg" alt="Image Unavailable" class="prfl-img">
                <h1>Gaurav Nailwal</h1>
                <p class="job_title">Front-End Developer</p>
                <p class="abt">
                    Worked on HTML, CSS and JavaScript.
                </p>
                <ul class="social_media">
                    <li>
                        <a href="https://www.linkedin.com/in/gaurav-nailwal-29459421a" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/gaurav_nailwal" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/gaurav.nailwal.144" target="_blank"><i
                                class="fab fa-facebook-square"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>