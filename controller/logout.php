<?php
session_start();
session_unset();
session_destroy();
header("Location: /CareerSphere/views/user_authentication/login.php");
exit;
