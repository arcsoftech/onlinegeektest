<html>

<head>

	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="mystyle1.css" />
</head>

<body>

	

		<img src="geek1.png" alt="geek" style="width:400px;height:300px" ">
		
        <?php
			
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
			if ($answer5 == "A") { $totalCorrect++; }
			if ($answer6 == "D") { $totalCorrect++; }
			if ($answer7 == "B") { $totalCorrect++; }
			if ($answer8 == "C") { $totalCorrect++; }
			if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10== "B") { $totalCorrect++; }
			
			
			
            
            echo "<h1 id='results'>$totalCorrect / 10 correct</h1>";
            
        ?>
	
	</div>

</body>

</html>