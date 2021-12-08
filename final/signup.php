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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];

$sql = "INSERT INTO `login_info`.`users` (`First Name`, `Last Name`, `Username`, `Email`, `Date of Birth`, `Password`) VALUES ('$first_name', '$last_name', '$username', '$email', '$dob', '$password');";

if($conn->query($sql)== true){
  //  echo "<script>alert('Record Inserted Successfully.')</script>";
  
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="signup.css">

</head>

<body>
    <!-- particles.js container -->
    <div id="particles-js"></div> 
    <!-- stats - count particles -->
    <div class="count-particles"> <span class="js-count-particles">--</span> particles </div>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <form method="post">
        <div class="random">
            <div class="signup">
                <form method="post">
                    <h1>Sign Up</h1>
                    <input type="text" placeholder="First Name" name="first_name" required>
                    <input type="text" placeholder="Last Name" name="last_name" required>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="date" placeholder="Date Of Birth" name="dob" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger">Submit</button><br>
                    </div>
                    <p align="center" >Already have an account?</p>
                    <div align="center">
                    <a href="login.php"> Login Here</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="signup.js"></script>
</body>

</html>
