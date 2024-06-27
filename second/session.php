<?php

session_start();

$_SESSION['user'] = 'admin';

$_SESSION['roles'] = ['administrator', 'approver', 'editor'];
var_dump($_SESSION);

?>

<html>
<head>
    <title>PHP Session Demo</title>
</head>
<body>
    <a href="session_profile.php">Go to profile page</a>
</body>
</html>