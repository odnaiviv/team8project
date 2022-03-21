<?php
function board($start, $value) {
	echo "<div class='questions'>";
	for ($i = 0; $i < 3; $i++) {
		echo "<div class='q'><span class='text'><b>Question " . ($start + ($i * 3)) . "<br>" . $value . "</b></span>
		</div>";
	}
	echo "</div>";
}
?>
