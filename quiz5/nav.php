<?php 
$loggedin= false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
   $loggedin = true;
}

echo '<nav>
<div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite " style="font-size: 30px;">Brain Mentors</h1></div>
<div class="menu">
    <a href="index.php" class=button >Home</a>
    <a href="books.php"class=button >Books</a>
    <a href="#about"class=button >About</a>';
    if($loggedin){
        echo '<a href="logout.php" class=button >Logout</a>
        </div>
</nav>';
    }
    if(!$loggedin){
        echo '<a href="login.php" class=button >Login</a>

        </div>
    </nav>';
        }  
        

   
    ?>
             