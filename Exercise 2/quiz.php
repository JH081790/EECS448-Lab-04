<?php
	$question1 = "Question 1: What team is Naruto put on to begin his ninja career?";
	$answer1 = "7";
	$answer2 = "Kakashi";
	$answer3 = "Orochimaru";
	$answer4 = "Kurama";
	$answer5 = "Sasuke";
    $question2 = "Question 2: Who is Naruto's squad leader?";
    $question3 = "Question 3: Who attacks the Leaf Village during the Chunin Exams?";
    $question4 = "Question 4: What is the name of the Nine-tailed fox?";
    $question5 = "Question 5: Who is Naruto's rival?";
    $count = 0;

	if (isset($_POST["submit"])) {
		echo "<span>" . $question1 . "</span><br>";
		echo "<span>You answered: " . $_POST["team"] . " </span><br>";
		echo "<span>Correct Answer: " . $answer1 . " </span><br><br>";
		echo "<span>" . $question2 . "</span><br>";
		echo "<span>You answered: " . $_POST["leader"] . " </span><br>";
		echo "<span>Correct Answer: " . $answer2 . " </span><br><br>";
		echo "<span>" . $question3 . "</span><br>";
		echo "<span>You answered: " . $_POST["attacker"] . " </span><br>";
		echo "<span>Correct Answer: " . $answer3 . " </span><br><br>";
		echo "<span>" . $question4 . "</span><br>";
		echo "<span>You answered: " . $_POST["name"] . " </span><br>";
		echo "<span>Correct Answer: " . $answer4 . " </span><br><br>";
		echo "<span>" . $question5 . "</span><br>";
		echo "<span>You answered: " . $_POST["rival"] . " </span><br>";
        echo "<span>Correct Answer: " . $answer5 . " </span><br><br>";
        if($answer1 == $_POST["team"]){
            $count++;
        }
        if($answer2 == $_POST["leader"]){
            $count++;
        }
        if($answer3 == $_POST["attacker"]){
            $count++;
        }
        if($answer4 == $_POST["name"]){
            $count++;
        }
        if($answer5 == $_POST["rival"]){
            $count++;
        }
        echo "<span>You got " .$count. "out of 5 Correct</span><br><br>";
        echo "<span>You got a  " .$count/5. "%</span><br><br>";
    }
	
?>