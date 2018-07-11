<?php
session_start();

if(isset($_SESSION['user']))
{
echo "Welcome ". $_SESSION['user']."<br />";
}
else{
header("location: index.php");
}

?>
<html>
<head></head>
<body>
<a href="out.php">logout</a>
</body>
</html>
