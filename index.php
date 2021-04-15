<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="0;url=dist/index.php">
    <script language="javascript">
        window.location.href = "dist/index.php"
    </script>
</head>

<body>
    Go to <a href="dist/index.php">/dist/index.php</a>
</body>

</html>


<?php
include "footer.php";
?>
