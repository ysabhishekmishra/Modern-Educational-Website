<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    //include 'partials/_dbconnect.php';
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this email exists
    $existSql = "SELECT * FROM `users1` WHERE `email` = '$email'";
    $res = mysqli_query($connection, $existSql);
    $numExistRows = mysqli_num_rows($res);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "email Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users1` (`email`, `password`) VALUES ('$email', '$hash')";
            $res = mysqli_query($connection, $sql);
            if ($res){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">

    <title>SignUp</title>
  </head>

  <body style="background-color: aqua;">




  <nav style="background-color:black;">
            <div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite infinite " style="font-size: 30px;">Brain Mentors</h1></div>
            <div class="menu" style="" >
                <a href="index.php" class="buttonc"  >Home</a>
                <a href="video.html" class="buttonc" >Lectures</a>
                <a href="contactus.php" class="buttonc" >Contact</a>
                <a href="login.php" class="buttonc" >Login</a>

            </div>
        </nav>

        <?php 
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4 text-white p-4 col-md-6"  style="background-color: black;">
     <h1 class="text-center">Signup to our website</h1>
     <form action="signup.php" method="post">
    <!-- <div class="form-group ">
            <label for="email">Email</label>
            <input type="email" maxlength="50" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>  -->
     <div class="form-group ">
            <label for="email">Username</label>
            <input type="text" maxlength="50" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group ">
            <label for="password">Password</label>
            <input type="password" maxlength="60" class="form-control" id="password" name="password">
        </div>
        <div class="form-group ">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Make sure to type the same password">
            
        </div>
         <p>Already Registered <a style="color:blue" href="login.php"> login </a> here</p>
         <p>Admin? <a style="color:blue" href="admin.php"> login </a> here</p> 
        <button type="submit" class="btnc btn-primary">Sign Up</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>