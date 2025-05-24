<?php
session_start();
session_destroy();

header("location:../../login_leader_of_refugee.php?msg=You%20have%20been%20logged%20out!");
?>