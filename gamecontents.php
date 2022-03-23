<?php
function questions() {
	$contents = array(
		//first column questions
		array(100, 'Which special character is used to separate multiple characters in multiple programming languages?', 'A) Period', 'B) Colon', 'C) Semicolon', 'D) Comma', 'C', 0), 
		array(200, 'How do you write comments in HTML?', 'A) // {text}', 'B) \\<!-- {text} \\-->', 'C) /* {text} */', 'D) *** {text} ***', 'B', 0), 
		array(400, 'What is the additional information passed to a function when it is called?', 'A) Arguments', 'B) Variables', 'C) Selections', 'D) Choices', 'A', 0), 

		//second column questions
		array(100, 'What singer used to always write about their break ups?', 'A) Justin Beiber', 'B) Selena Gomez', 'C) Taylor Swift', 'D) Dua Lipa', 'C', 0), 
		array(200, 'Which 2022 movie features stars a young girl from Toronto coming of age?', 'A) Coming of Age', 'B) Luca', 'C) Encanto', 'D) Turning Red', 'D', 0), 
		array(400, 'How many Avenegers are there?', 'A) 5', 'B) 12', 'C) 15','D) Too many', 'D', 0), 

		//third column questions
		array(100, 'What is the minimum credits required to be considered a full time student?', 'A) 8', 'B) 12', 'C) 10','D) 16', 'B', 0), 
		array(200, 'Which subject is not a core subject?', 'A) Spanish', 'B) Literature', 'C) Math','D) History', 'A', 0), 
		array(400, 'What bus route takes students to the Rialto?', 'A) Green', 'B) Blue', 'C) Purple','D) Orange', 'C', 0)
	);
	return $contents;
}

/* array structure
	[0] = # of points
	[1] = question
	[2] = choice A
	[3] = choice B
	[4] = choice C
	[5] = choice D
	[6] = correct choice
	[7] = boolean for already answered question
 */

?>
