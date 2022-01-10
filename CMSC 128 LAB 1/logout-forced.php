<?php
session_start(); // since we've logged in using session variable
session_unset();
session_destroy(); // this will overall destroy the session, and direct to the logout-redirect-session.php
header("Location: logout-redirect-timeout.php");
exit();