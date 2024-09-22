<?php
session_start();
$name = $_POST['username'];
if(isset($name) && !empty($name))
    $_SESSION['username'] = $name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style-register.css">
</head>
<body>

        <?php
        include "includes/header.php";
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false)
            exit("<p class='error'>ایمیل به درستی وارد نشده است.</p>");

        $link = mysqli_connect("localhost","root","","coffee");
        if (!$link)
            echo ("<p>اتصال به درستی برقرار نشده است</p>");

        $query = "INSERT INTO `user` (`username`, `email`, `userpass`) VALUES('$name','$email','$pass')";
        if (mysqli_query($link,$query))
            echo ("<p class='successful'> .گرامی عضویت شما در سایت ثبت گردید  $name </p>");
        else
            echo ("<p class='error'>عضویت شما ثبت نشد.</p>");

        mysqli_close($link);
        ?>
        <a href="index.php" class="back">بازگشت به صفحه اصلی</a>
        <?php
        include "includes/footer.php";
        ?>
</body>
</html>