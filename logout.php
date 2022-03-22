<?php

session_start();

unset($_SESSION['score']);
unset($_SESSION['abool']);
unset($_SESSION['qbool']);
unset($_SESSION['wrongInput']);
unset($_SESSION['questionblock']);
header("location:login.php");
?>