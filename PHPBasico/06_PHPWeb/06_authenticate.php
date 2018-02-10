<?php
$submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
<style>
    body {
        background-color: floralwhite;
        margin-left: 100px;
    }
    p {
        font-size: 18px;
        font-family: Verdana,sans-serif;
        background-color: floralwhite;
    }
</style>
</head>
<body>
    <h2>Olá, a todos vocÊs!</h2>
<p>Form submitted? <?php echo (int) $submitted; ?></p>
<p>Your login info is</p>
<ul>
<li><b>username</b>: <?php echo $_POST['username']; ?></li>
<li><b>password</b>: <?php echo $_POST['password']; ?></li>
</ul>
</body>
</html>