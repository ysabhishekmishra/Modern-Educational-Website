
<?php
include 'db.php';
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
    <title>Cources</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
            <div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite " style="font-size: 30px;">Brain Mentors</h1></div>
            <div class="menu">
                <a href="index.php" class=button >Home</a>
                <a href="books.php"class=button >Books</a>
                <a href="main.php"class=button >Quiz</a>
                <a href="logout.php"class=button >Logout</a>

            </div>
        </nav>
        
      <div class="abhishek">
          
        <main class="grid">
              
          <article>
                    
            <div class="text">
              <embed src="img\Blue Yellow Triangle Shapes Tutor Flyer.mp4" Hidden="true"
               autostart="true" height="400px" width="300px"
               style="border-radius: 30px;padding-top: 20px;" >
               <a href="https://rzp.io/l/iOjBHg4nQt"><button>Register</button>
            </div>
          </article>
          <article>
            <div class="text">
                <embed src="img\Green Pencils and Notebook Icons Tutor Flyer.mp4" Hidden="true"
               autostart="true" height="400px" width="300px"
               style="border-radius: 30px;padding-top: 20px;" >
               <a href="https://rzp.io/l/iOjBHg4nQt"><button>Register</button>
            </div>
                    
           
          </article>
          <article>
            <div class="text">
                <embed src="img\Regal Blue Shapes Tutor Flyer.mp4" Hidden="true"
               autostart="true" height="400px" width="300px"
               style="border-radius: 30px;padding-top: 20px;" >
               <a href="https://rzp.io/l/iOjBHg4nQt"><button>Register</button>
            </div>
                    
           
          </article>
                
    
    
    
        </main>
        
      
      </div>


    </section>


    </header>
    
</body>
</html>