<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
?>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  $msg = "You need to login first";
  echo '<script language="javascript">';
  echo 'alert("'.$msg.'");';
  echo 'window.location="http://localhost/quiz5/login.php";';
  echo '</script>';
  //  header("location: login.php");
    exit;
}

?>
<html>
<head>
	<title>Test</title>
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

</head>
<body style="background-color: black;">
<main>
<nav >
            <div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite " style="font-size: 30px; ">Brain Mentors</h1></div>
            <div class="menu">
                <a href="index.php" class="buttonc" >Home</a>
                <a href="books.php"  class="buttonc" >Books</a>
                <a href="cources.php"  class="buttonc" >Courses</a>
                <a href="logout.php" class="buttonc" >Logout</a>

            </div>
        </nav>
    
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['email']?></h4>
      <p>Hey how are you doing? Welcome to Brain Mentors. You are logged in as <?php echo $_SESSION['email']?>.You can start attempting the quiz</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to <a style="color:blue"  href="logout.php"> logout.</a></p>
    </div>
  </div>


          
  <div class="container">
      <div class="row">

        <div class="col-sm-4" >
  <div class="card" >
  <img src="https://cdn01.alison-static.net/courses/1816/alison_courseware_intro_1816.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Maths Test</h5>
    <p class="card-text">This is maths test with jee level questions.</p>
    <a href="question.php?n=1" class="btn btn-primary">Attempt this test</a>
  </div>
</div>
        </div>

<div class="col-sm-4" >
<div class="card" >
  <img src="https://jobs.newscientist.com/getasset/c40a5488-11be-43b0-843f-a2e6ef9f0612/" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chemistry</h5>
    <p class="card-text">This is chemistry test with jee level questions.</p>
    <a href="chem_question.php?n=1" class="btn btn-primary">Attempt this test</a>
  </div>
</div>
</div>

<div class="col-sm-4" >
<div class="card" >
  <img src="https://www.physicstutoronline.co.uk/wp-content/uploads/2019/05/physics1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Physics</h5>
    <p class="card-text">This is physics test with jee level questions.</p>
    <a href="phy_question.php?n=1" class="btn btn-primary">Attempt this test</a>
  </div>
</div>
</div>
</div>
      </div>
  </div>
	</main>

</body>
</html>

