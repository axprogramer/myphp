<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="./assets/style.css">
<title>My First PHP</title>
</head>
	<h1 id="title">My First PHP</h1>
	<!--Lesson 1.4-5-->

	<?php
		echo "<h1 id='title1'>Hello, all my friends. Now I start learning PHP Online Couse from Master IT Cambodia.</h1>";
		echo "<br>";
		echo "<h2 class='title2'>I hope I can achieve my goal of being develop my Sttudent's Management Website.</h2>";
	
	?>
	<!--Lesson 1.6-->
	<div class="exercise1">
	<?php
		$arr = array("សុខ សុជាតា","យ៉ាង ចាន់រតនា","រ៉ន រ៉ានី","គី លីហ្សា","កៅ រតនាទេពី","យឺន វត្តី",);
		echo "<br>"."<p id='ex1'>1.6-PHP Data Types</p>";
		echo "<h3 id='ex1'>Exercise I</h3>";
		echo "<br>
		<ol>
		<li>$arr[0]</li>
		<li>$arr[1]</li>
		<li>$arr[2]</li>
		<li>$arr[3]</li>
		<li>$arr[4]</li>
		<li>$arr[5]</li>
		<ol>";
	?>

	</div>
	<br>
	<!--Lesson 1.8-->
	<div class="ex2">
		<?php
			$text = "I try my best to learn PHP at Master IT School.";
			echo "String Functions"."<br>";
			echo "<br>".strlen($text)." Charaters";
			echo "<br>".str_word_count($text)." words";
			echo "<br>Reverse: ".strrev($text);

		?>


	</div>
	<br>
		<!--Lesson 1.9-->
		<div class="ex3">
		<?php
			echo "Date and Time"."<br>"."<br>";
			
			echo "Date:";

			echo "<br>Today is: ".date("d-m-Y");
			echo "<br>Today is: ".date("D, d-m-Y");
			echo "<br>Today is: ".date("l, d-M-Y")."<br>"."<br>";

			echo "Time";
			echo "<br>(24h) The Time is: ".date("H:i:s");
			echo "<br>(12h) The Time is: ".date("h:i:s a");

		?>


	</div>
	<br>
		<!--Lesson 1.10-->
		<div class="ex3">
		<?php
			echo "If Statment"."<br>"."<br>";
			
			echo "Time";
			echo "<br>(24h) The Time is: ".date("H:i:s");
			echo "<br>(12h) The Time is: ".date("h:i:s a")."<br>";
			$time = date("H");
			echo "Time: ".$time."<br>";
			if($time <5){
				echo "Good Morning my Love ❤️";
			}else if($time <20){
				echo "Good Night 😘";
			}else{
				echo "Good Evening";
			}

		?>


	</div>
	<br>
		<!--Lesson 1.12-->
		<div class="ex3">
		<?php
			echo "Exercise If Statment"."<br>"."<br>";
			
			echo "Student's Score<br>";
			$score = 83;
			if($score <=49){
				echo " Your score is $score"."<br>"."Result: Fail.<br>".
				"Grade: F";
			}elseif($score <60){
				echo " Your score is $score"."<br>"."Result: Pass.<br>".
				"Grade: E";
			}elseif($score <71){
				echo " Your score is $score"."<br>"."Result: Pass.<br>".
				"Grade: D";
			}elseif($score <81){
				echo " Your score is $score"."<br>"."Result: Pass.<br>".
				"Grade: C";
			}elseif($score <91){
				echo " Your score is $score"."<br>"."Result: Pass.<br>".
				"Grade: B";
			}elseif($score <96){
				echo " Your score is $score"."<br>"."Result: Pass.<br>".
				"Grade: A";
			}elseif($score <=100){
				echo " Your score is $score"."<br>"."Result: Pass.<br>".
				"Grade: A+";
			};
		?>
		<br>
		<?php
			echo "Exercise Switch Condition"."<br>"."<br>";
			
			echo "Student's Score<br>";
			$score = 75;
			switch($score){
				case($score<=40):
					echo " Your score is $score"."<br>".
					"Result: Fail.<br>".
					"Grade: F";
				break;
				case($score<60):
					echo " Your score is $score"."<br>"."Result: Pass.<br>".
					"Grade: E";
				break;
				case($score<71):
					echo " Your score is $score"."<br>"."Result: Pass.<br>".
					"Grade: D";
				break;
				case($score<81):
					echo " Your score is $score"."<br>"."Result: Pass.<br>".
					"Grade: C";
				break;
				case($score<91):
					echo " Your score is $score"."<br>"."Result: Pass.<br>".
					"Grade: B";
				break;
				case($score<96):
					echo " Your score is $score"."<br>"."Result: Pass.<br>".
					"Grade: A";
				break;
				case($score<=100):
					echo " Your score is $score"."<br>"."Result: Pass.<br>".
					"Grade: A+";
				break;
				};
		?>
		<br>
		<?php
			echo "Answer Key - Exercise"."<br>"."<br>";
			
			echo "Student's Score<br>";
			$score = 75;
			if($score>49){
				$result = "Pass";
			}else{
				$result = "Fail";
			}

			if($score<=49){
				$grade = "F";
			}elseif($score<=60){
				$grade = "E";
			}elseif($score<=70){
				$grade = "D";
			}elseif($score<=80){
				$grade = "C";
			}elseif($score<=90){
				$grade = "B";
			}elseif($score<=95){
				$grade = "A";
			}else{
				$grade = "A+";
			}
			echo "Your score is $score"."<br>".
			"Result: $result"."<br>".
			"Grade: $grade";

		?>
		<br>
		<?php
			echo "Student's Rank"."<br>"."<br>";
			
			echo "Class A<br>";
			$score = array(
				"SsA"=>"97",
				"SsB"=>"95",
				"SsC"=>"95",
				"SsD"=>"95",
				"SsE"=>"93",
				"SsF"=>"99",
			);
			arsort($score);
			$prev_arr = null;
			$rank = 0;
			$prev_rank = $rank;
			foreach($score as $key => $value){
				if($value!=$prev_arr){
					$rank++;
					$prev_rank = $rank;
					echo $key ."==> Rank ".($rank);
				}
				else{
					$rank++;
					echo $key."==> Rank".($prev_rank);
				}
				$prev_arr = $score[$key];
				echo "<br>";

			}
/* 			echo "SsA is ".$score["SsA"]." score. Rank is: Number $rank<br>";
			echo "SsA is ".$score["SsB"]." score. Rank is: Number $rank<br>";
			echo "SsA is ".$score["SsC"]." score. Rank is: Number $rank<br>";
			echo "SsA is ".$score["SsD"]." score. Rank is: Number $rank<br>";
 */
/* 			if($score>49){
				$result = "Pass";
			}else{
				$result = "Fail";
			}

			if($score<=49){
				$grade = "F";
			}elseif($score<=60){
				$grade = "E";
			}elseif($score<=70){
				$grade = "D";
			}elseif($score<=80){
				$grade = "C";
			}elseif($score<=90){
				$grade = "B";
			}elseif($score<=95){
				$grade = "A";
			}else{
				$grade = "A+";
			}
			echo "Your score is $score"."<br>".
			"Result: $result"."<br>".
			"Grade: $grade";
 */
		?>

		<!--Lesson 1.16-->

	</div>
	<br>
	<div class="ex3">
		<?php
			echo "While loop"."<br>"."<br>";
			$x = 1;
			$y = 8;
			$result = 1;
			while($x <= $y){
				$result*= $x;
				echo $x." = ".$result."<br>";
				$x++;
			};
			
		?>
	<br>
	<?php
			echo "Do While loop"."<br>"."<br>";
			$x = 12;
			
			do{
				echo "The number is $x<br>";
				$x++;
			}while($x<=18);
			
		?>
	<br>
	<?php
			echo "For loop"."<br>"."<br>";
			for($x=5;$x <=100;$x+=22){
				echo "The number is: $x <br>";
			};
			
		?>


	</div>


<body>
</body>
</html>