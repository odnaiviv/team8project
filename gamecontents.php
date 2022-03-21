<?php
function questions() {
	$contents = array(
		//first column questions
		array(100, 'Which special character is used to separate multiple characters in multiple programming languages?', 'A) Period', 'B) Colon', 'C) Semicolon','D) Comma', 'C', 0), 
		array(200, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0), 
		array(300, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0), 

		//second column questions
		array(100, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0), 
		array(200, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0), 
		array(300, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0), 

		//third column questions
		array(100, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0), 
		array(200, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0), 
		array(300, 'question2', 'A) choice a', 'B) choice b', 'C) choice c','D) choice d', '(letter of correct answer choice)', 0)
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
