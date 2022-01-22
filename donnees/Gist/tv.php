<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Television</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <style>
            body {
            background-image: url("tv.jpg");
            background-repeat: repeat;
            background-size: 1920px 1080px;
            }

            .content a:hover{
                color:red;
            }

            .gist-meta{
                display: none;
            }

        </style>
</head>

<body>
    <?php include "nav.php" ?>

    <div class="container mt-5 pt-5">
        <div class="content mt-3">
        <script src="https://gist.github.com/amanm063/8cd1ca1525e11e1637ee5e504418eb07.js"></script>

            <a href="https://colab.research.google.com/gist/amanm063/8cd1ca1525e11e1637ee5e504418eb07/tv.ipynb" Download="TV.ipynb" style="float:right" target="_blank">Download Notebook</a>

            <a href="https://docs.google.com/spreadsheets/d/1DAuMZHhuBnRnksWJaOYudmuRsvK9NBuYeR0Zc61jQzQ/" Download="TV.xlsx" style="float:left" target="_blank">Download CSV</a>

            <iframe
            src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ4e3GOM97rCLfyu3IlSVUn0_oIpccAxrMef3ZYfCqOx77LHqtbkb526mTYtFcxM9rpXya-WCTawxFf/pubhtml?widget=true&amp;headers=false"
                width="100%" height="235vh"></iframe>
        </div>
    </div>

    <?php include "footer.php" ?>
</body>

</html>