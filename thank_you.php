<?php
session_start();
if(isset($_POST) && count($_POST) > 0){
    $response = 1;
    if(empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha']) != 0)
    {
        $response = 0;
    }
    echo $response; exit;
}
?>
<html>
<head>
    <title>Contact us</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="sub-container">
        <H1>Thank you for contact us.</H1>
        <a href='index.php'>Back To Home.</a>
    </div>
</div>
</body>
</html>