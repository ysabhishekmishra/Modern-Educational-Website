<?php  include 'db.php';
if(isset($_POST['submit'])){
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];
	// Choice Array
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];

 // First Query for Questions Table

	$query = "INSERT INTO phyquestions (";
	$query .= "question_number, question_text )";
	$query .= "VALUES (";
	$query .= " '{$question_number}','{$question_text}' ";
	$query .= ")";

	$result = mysqli_query($connection,$query);
	
	//Validate First Query
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
			
				//Second Query for Choices Table
				$query = "INSERT INTO phyoptions (";
				$query .= "question_number,is_correct,coption)";
				$query .= " VALUES (";
				$query .=  "'{$question_number}','{$is_correct}','{$value}' ";
				$query .= ")";

				$insert_row = mysqli_query($connection,$query);
				// Validate Insertion of Choices

				if($insert_row){
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $query);
					
				}

			}
		}
		$message = "Question has been added successfully";
	}
}

		$query = "SELECT * FROM phyquestions";
		$questions = mysqli_query($connection,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;
		

?>
<html>
<head>
	<title>Test</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body style="background-color: aqua;">
	<main>
	<nav>
            <div class="logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite " style="font-size: 30px;">Brain Mentors</h1></div>
            <div class="menu">
                <a href="index.html" class=button>Home</a>
                <a href="books.php"class=button>Books</a>
                <a href="bb.php"class=button>Other</a>
                <a href="logout.php"class=button>Logout</a>

            </div>
        </nav>

			<div class="container my-4 text-white p-4 col-md-6" style="background-color: black;">
				<h2>Add Physics Questions</h2>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>
								
				<form method="POST" action="phy_add.php">
				<div class="form-group ">
							<label>Question Number:</label>
							<input class="form-control" type="number" name="question_number" value="<?php echo $next;  ?>">
							</div>
        <div class="form-group ">
							<label>Question Text:</label>
							<input class="form-control" type="text" name="question_text">
							</div>
        <div class="form-group ">
							<label>Choice 1:</label>
							<input class="form-control" type="text" name="choice1">
						</div>
        <div class="form-group ">
							<label>Choice 2:</label>
							<input class="form-control" type="text" name="choice2">
							</div>
        <div class="form-group ">
							<label>Choice 3:</label>
							<input class="form-control" type="text" name="choice3">
							</div>
        <div class="form-group ">
							<label>Choice 4:</label>
							<input class="form-control" type="text" name="choice4">
							</div>
        <div class="form-group ">
							<label>Correct Option Number</label>
							<input class="form-control" type="number" name="correct_choice">
			</div>
			<br>
			<input type="submit" name="submit" value ="submit" class="btn btn-primary mb-3">
				</form>
			</div>
	</main>
</body>
</html>