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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <style></style>
    
</head>
<body>
    <header>
    <nav>
        <div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite " style="font-size: 30px;">Brain Mentors</h1></div>
            <div class="menu">
                <a href="index.php" class=button>Home</a>
                <a href="main.php"class=button>Quiz</a>
                <a href="cources.php"  class="button" >Courses</a>
                <a href="logout.php"class=button>Logout</a>

            </div>
    </nav>
    <section>
        <marquee><h5>Books Department Of BrainMentors</h5></marquee>
        <section>
            <div class=abhi>
              
              <article>
                <div class="cata">
                  <a href="img\01-area-under-the-curve.pdf"><img src="img\rdbaba-removebg-preview.png" height="300px" width="300px"></a>
      
      
                </div>
      
              </article>
              <article><div class="cata">
                <a href="img/pdfcoffee.com_h-c-v-pdf-free.pdf">
                  <img src="img\hc verma.png" height="300px" width="300px"></a>
                </div></article>
              
              <article><div class="cata">
               <a href="img\basic-maths2.pdf"><img src="img\calculus.png" height="300px" width="300px"></a>
                </div></article>
            </div>
                              
      
      
      
            
          </section>
          <div class=abhi>
              
            <article>
              <div class="cata">
                <a href="img\01-area-under-the-curve.pdf"><img src="img\fit jee module.png" height="300px" width="300px"></a>
    
    
              </div>
    
            </article>
            <article><div class="cata">
              <a href="img/pdfcoffee.com_h-c-v-pdf-free.pdf">
                <img src="img\books-removebg-preview.png" height="300px" width="300px"></a>
              </div></article>
            
            <article><div class="cata">
             <a href="img\01-area-under-the-curve.pdf"><img src="img\allen module.png" height="300px" width="300px"></a>
              </div></article>
          </div>
                            
    
    
    
          
        </section>
      
            
        
      
    
</body>
</html>