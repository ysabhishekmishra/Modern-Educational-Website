
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    //include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"]; 
$phone = $_POST["phone"];
        // $exists = false; 
        $sql = "INSERT INTO `contact` (`name`,`email`,`phone`,`feedback`) VALUES ('$name', '$email','$phone', '$feedback');";
        $res = mysqli_query($connection, $sql);
            if ($res){
                $showAlert = true;
            }
        
        else{
            $showError = "Feedback not Submitted";
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
    <title>Feedback</title>
  </head>
  <body style="background-color: aqua;">
  <nav style="background-color: black;">
            <div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite " style="font-size: 30px;">Brain Mentors</h1></div>
            <div class="menu">
                <a href="index.php" class=buttonc>Home</a>
                <a href="books.php"class=buttonc>Books</a>
                <a href="video.html"class=buttonc>Lectures</a>
                <a href="login.php"class=buttonc>Login</a>
             

            </div>
        </nav>

        <?php 
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Feedback is successfully submitted
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
<div class="container">
<div class="container my-4 text-white p-4 col-md-7" style="background-color: black;">
     <h1 class="text-center">Contact Us</h1>
     <form action="contactus.php" method="post">
        <div class="form-group ">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
        </div>

        <div class="form-group ">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group ">
            <label for="email">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Your Feedback or Suggestion</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="feedback" rows="3"></textarea>
</div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>

</div>