<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Appstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <style>
            body {
            background-image: url("apple.jpg");
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
        <!-- <h1 style="color:white" align="center">HEADING</h1>
        <p style="color:white" align="center">DESCRIPTION</p> -->
        <div class="content mt-3">
            <script src="https://gist.github.com/amanm063/319541210c131b3eb856341473e64058.js"></script>

            <a href="https://colab.research.google.com/gist/amanm063/319541210c131b3eb856341473e64058/appstore.ipynb" Download="AppleStore.ipynb" style="float:right" target="_blank">Download Notebook</a>

            <a href="https://docs.google.com/spreadsheets/d/14snilvaBnhJomrVDY3XWYhtam5LpdJAt8cI17FZD7b4/" Download="AppleStore.xlsx" style="float:left" target="_blank">Download CSV</a>

            <iframe
                src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRUkbjHq2JYf55-42XhiRmpgW85lPE1rN8JK3PfjKZi8fv3hsWdmDT9Myl8C-OHqbK8H1LsSjKaNLHT/pubhtml?widget=true&amp;headers=false"
                width="100%" height="235vh"></iframe>
        </div>
    </div>

    <?php include "footer.php" ?>
</body>

</html>