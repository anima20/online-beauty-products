<?php
session_start();
session_unset();
session_destroy();
session_start();
$_SESSION['user']="";
header('Location: home.php');