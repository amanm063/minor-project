<?php
include("config.php");
include("session.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Données</title>
  <link rel="stylesheet" href="home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

</head>


<body>

<?php include "nav.php"; ?>


  <div class="banner">

  <div id="slideImg">
            <img src="https://source.unsplash.com/1920x1080/?data">
        </div>

    <div class="overlay">

      <div class="content">
        <h1>Données</h1>
        <h3>It's not magic, It's Data.</h3>

        <div>
          <button class="btn1" style="text-transform: Capitalize; cursor: default;"><?php echo 'Bonjour ' . $_SESSION["username"]; ?></a></button>
          <button class="btn1" onclick="location.href='logout.php'">LOGOUT</button>
        </div>

      </div>
    </div>  
  </div>



  <div class="main">

    <div class="card">

      <div class="image">
        <img style="border-radius: 10px;" src="1.jpeg">
      </div>

      <div class="des">
        <div>
          <h1><b>WHAT DO WE DO ?</b> </h1><br>
          <p>Data analysis is a process of inspecting, cleansing, transforming, and modelling data with the goal of
            discovering useful information, informing conclusions, and supporting decision-making.</p>

        </div>
      </div>

    </div>

    <div class="card">

      <div class="des1">
        <div>
          <h1><b>WHY PYTHON ?</b> </h1><br>
          <p>Python is a popular multi-purpose programming language widely used for its flexibility, as well as its
            extensive collection of libraries, which are valuable for analytics and complex calculations.

            Python’s extensibility means that it has thousands of libraries dedicated to analytics, including the widely
            used Python Data Analysis Library (also known as Pandas).

          </p>
        </div>
      </div>

      <div class="image1">
        <img style="border-radius: 10px;" src="2.jpeg">
      </div>


    </div>


    <div class="card">

      <div class="image">
        <img style="border-radius: 10px;" src="3.jpeg">
      </div>

      <div class="des">
        <div>
          <h1><b>WHY IS DATA ANALYSIS IMPORTANT ?</b> </h1><br>
          <p>Data analysis is important in business to understand problems facing an organisation, and to explore data
            in meaningful ways. Data in itself is merely facts and figures. Data analysis organises, interprets,
            structures and presents the data into useful information that provides context for the data.
          </p>
        </div>
      </div>
    </div>


    <div class="card">

      <div class="des1">
        <div>
          <h1><b>IS THERE ANY FUTURE ?</b> </h1><br>
          <p>Data analytics is expected to radically change the way we live and do business in the future. Already today
            we use the analytics in our technology devices, for many decisions in our lives. ... Expectations are that
            data analytics will make the impossible possible, but we are still in the early stages of the data era.</p>
        </div>
      </div>

      <div class="image1">
        <img style="border-radius: 10px;" src="4.jpeg">
      </div>

    </div>








  </div>


  <div class="faq">

    <h1 class="head">FAQs</h1>

    <button class="accordion">What is DataSet ?</button>
    <div class="panel">
      <p style="margin-left: 8rem;">A data set is a collection of data. In the case of tabular data, a data set corresponds to one or more database tables, where every column of a table represents a particular variable, and each row corresponds to a given record of the data set in question.</p>
    </div>

    <button class="accordion">Which language you used for Web Development ?</button>
    <div class="panel">
      <p style="margin-left: 8rem;">For the creation of this website we used HyperText Markup Language(HTML), Cascading Style Sheet (CSS), JavaScript(JS) and Bootstrap for the Front-End designing. For Back-End we used PHP and MySQL.</p>
    </div>

    <button class="accordion">What is the advantage of this website ?</button>
    <div class="panel">
      <p style="margin-left: 8rem;">In our website the user can have a good look at the provided datasets and if the user wishes to download them he or she can also download them. The users can also manipulate the provided dataset online without establishing the environment.</p>
    </div>

    <button class="accordion">Which libraries did we used in our datasets ?</button>
    <div class="panel">
      <p style="margin-left: 8rem;">We used some common  Python libraries like pandas, numpy, tensorflow, matplotlib, seaborn, plotly etc.</p>
    </div>
    
    <button class="accordion">How to download the datasets ?</button>
    <div class="panel">
      <p style="margin-left: 8rem;">To download the CSV file just click on the "<strong><em>Download CSV</em></strong>" button, it will take you to the next page where you can download the CSV file.<br>
      To download the IPYNB file just click on the "<strong><em>Download Notebook</em></strong>" button, it will take you to the next page where you can download the IPYNB file.
    </p>
    </div>

  </div>

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  </script>



<?php include "footer.php"; ?>


</body>

</html>