<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "smithmutis@gmail.com";

mail($recipient, $number, $message, $mailheader) or die("Error!");

echo '
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
    <link rel="stylesheet" href="assets/css/styler.css">
</head>

<body>
    <div class="thanks">
        <h1>Gracias, me comunicaré tan pronto como sea posible.</h1>
        <a href="index.html" class="buttont">Volver</a>
    </div>
</body>

</html>
';


?>