<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link  type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now on the user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    
</body>
</html>