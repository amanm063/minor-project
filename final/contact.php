<?php

if(isset($_POST['email']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Message`) VALUES ('$name',  '$email', '$phone', '$message');";

if($conn->query($sql)== true){
  //echo "Query successfully inserted";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}
?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contact Form </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      background: rgb(17, 17, 17);

    }

    .header {

      display: flex;

      z-index: 1;
      overflow: hidden;
      width: 100%;
      height: 50px;
      background-color: rgb(29, 29, 29);
    }

    a {

      text-decoration: none;
      color: white;
      font-size: 20px;
      line-height: 50px;
    }

    .header .a1 {
      text-decoration: none;
      color: white;
      font-size: 20px;
      line-height: 50px;
      padding: 10px 20px;
    }

    .header .logo h2 {
      color: #fff;
      margin-top: 5px;
      margin-left: 95px;
      font-size: 25px;
    }

    .a1:hover {
      background-color: red;
    }

    .div1 {
      width: 5%;
      margin-left: 10%;
    }





    ::selection {
      color: #fff;
      background: black;
    }

    .wrapper {
      width: 80%;
      background: #fff;
      border-radius: 5px;
      margin-top: 2%;
      margin-left: 10%;
    }

    .wrapper h1 {
      font-size: 26px;

      padding: 2% 42%;
      text-decoration: underline;

    }

    .wrapper h4 {
      padding: 0 41%;
    }

    .wrapper form {
      margin: 35px 30px;
    }

    .wrapper form.disabled {
      pointer-events: none;
      opacity: 0.7;
    }

    form .dbl-field {
      display: flex;
      margin-bottom: 25px;
      justify-content: space-between;
    }

    .dbl-field .field {
      height: 50px;
      display: flex;
      position: relative;
      width: calc(100% / 2 - 13px);
    }

    .wrapper form i {
      position: absolute;
      top: 50%;
      left: 18px;
      color: #ccc;
      font-size: 17px;
      pointer-events: none;
      transform: translateY(-50%);
    }

    form .field input,
    form .message textarea {
      width: 100%;
      height: 100%;
      outline: none;
      padding: 0 18px 0 48px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .field input::placeholder,
    .message textarea::placeholder {
      color: rgb(255, 0, 0);
    }

    .field input:focus,
    .message textarea:focus {
      padding-left: 47px;
      border: 2px solid;
    }

    .field input:focus~i,
    .message textarea:focus~i {
      color: black;
    }

    form .message {
      position: relative;
    }

    form .message i {
      top: 30px;
      font-size: 10px;
    }

    form .message textarea {
      min-height: 130px;
      max-height: 130px;
      max-width: 100%;
      min-width: 100%;
      padding: 15px 20px 0 48px;
    }

    form .message textarea::-webkit-scrollbar {
      width: 0px;
    }

    .message textarea:focus {
      padding-top: 14px;
    }

    form .button-area {
      margin: 25px 0;
      display: flex;
      align-items: center;
    }

    .button-area button {
      color: #fff;
      border: none;
      outline: none;
      font-size: 18px;
      cursor: pointer;
      border-radius: 5px;
      padding: 13px 25px;
      background: black;
      transition: background 0.3s ease;
    }

    .button-area button:hover {
      background: red;
    }

    .button-area span {
      font-size: 17px;
      margin-left: 30px;
      display: none;
    }

    @media (max-width: 600px) {
      .wrapper header {
        text-align: center;
      }

      .wrapper form {
        margin: 35px 20px;
      }

      form .dbl-field {
        flex-direction: column;
        margin-bottom: 0px;
      }

      form .dbl-field .field {
        width: 100%;
        height: 45px;
        margin-bottom: 20px;
      }

      form .message textarea {
        resize: none;
      }

      form .button-area {
        margin-top: 20px;
        flex-direction: column;
      }

      .button-area button {
        width: 100%;
        padding: 11px 0;
        font-size: 16px;
      }

      .button-area span {
        margin: 20px 0 0;
        text-align: center;
      }
    }



    .copyright {
      margin-top: 15px;
      text-align: center;
      font-size: 20px;
      color: black;
    }
  </style>
</head>

<body>


  <body>
    <div class="header">
      <div class="logo">
        <h2>Données</h2>
      </div>
      <div class="div1">
        <a class="a1" href="donnees.html"> HOME</a>
      </div>
      <div class="div1">
        <a class="a1" href="about.html"> ABOUT</a>
      </div>
      <div class="div1">
        <a class="a1" href="datasets.html"> DATASETS </a>
      </div>
      <div class="div1">
        <a class="a1" href="contact.html"> CONTACT </a>
      </div>

    </div>







    <div class="wrapper">
      <h1><b>GET IN TOUCH</b></h1>
      <h4>LET'S TALK ABOUT YOUR VIEWS</h4>
      <form method="post">

        <div class="dbl-field">

          <div class="field">
            <input type="text" name="name" placeholder="Enter your name" required>
            <i class='fas fa-user'></i>
          </div>

          <div class="field">
            <input type="text" name="email" placeholder="Enter your email" required>
            <i class='fas fa-envelope'></i>
          </div>


          <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone" required>
            <i class='fas fa-phone-alt'></i>
          </div>

        </div>

        <div class="message">
          <textarea placeholder="Write your message" name="message" required></textarea>

        </div>
        <div class="button-area">
          <button type="submit">Send Message</button>
          <span></span>
        </div>



        <p class="copyright">
          COPYRIGHTS BY DONNEES@2021
        </p>




      </form>
    </div>







  </body>

</html>