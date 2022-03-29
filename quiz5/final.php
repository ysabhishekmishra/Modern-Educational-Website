<?php //maths quiz
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
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
<link rel="stylesheet" href="style2.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <title>Login</title>
  </head>


  <body style="background-color:black">
  <nav>
            <div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite " style="font-size: 30px;">Brain Mentors</h1></div>
            <div class="menu" >
                <a href="index.php" class="buttonc" >Home</a>
                <a href="books.php" class="buttonc" >Books</a>
                <a href="main.php" class="buttonc" >Quiz</a>
                <a href="logout.php" class="buttonc" >Logout</a>

            </div>
        </nav>

	<main>
	<div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Thankyou - <?php echo $_SESSION['email']?></h4>
      <p> Welcome to Brain Mentors. You are logged in as <?php echo $_SESSION['email']?>.</p>
      <hr>
    </div>
	</div>

			<div class="container p-4 my-3" style="background-color: aqua;">
				<h2>Your Result</h2>
				<p>Congratulations <?php echo $_SESSION['email']?> You have completed Maths test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php //unset($_SESSION['score']); ?>
				<p class="mb-0">Whenever you need to, be sure to <a href="logout.php" style="color:blue">Logout</a></p>
			</div>
			<?php 	 
			include 'db.php';
	  $email = $_SESSION['email'];
	  $mathsmarks = $_SESSION['score'];
	  $sql = "INSERT INTO `marks` (`email`,`maths`) values ('$email','$mathsmarks')"; 
	  $res = mysqli_query($connection, $sql);
        ?>
	</main>



</body>
</html>