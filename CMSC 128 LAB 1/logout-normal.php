<?php
session_start();
session_unset();
session_destroy(); // this will overall destroy the session, and direct to the logout-redirect.php
header("Location: logout-redirect.php");
exit();