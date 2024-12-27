<?php
session_start();
session_unset();
session_destroy();

header('location: https://localhost/Gym%20Managament%20System/index.php');
exit();
