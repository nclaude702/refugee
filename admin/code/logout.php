<?php
session_start();
session_destroy();

header("location:../../login_admin.php?msg=You%20have%20been%20logged%20out!");
?>