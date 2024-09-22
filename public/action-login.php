<?php
session_start();
$name = $_POST['username'];
$_SESSION['username'] = "";
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
<body dir="rtl">
		<?php
        include("includes/header.php");
        $link = mysqli_connect("localhost","root","","coffee");
        if (!$link)
            echo ("<p class='error'>اتصال به درستی برقرار نشده است</p>");

        $userLogin = $_POST['username'];
        $passLogin = $_POST['pass'];

        $query1 = "SELECT * FROM `user` WHERE `username` = '$userLogin'  AND `userpass` = '$passLogin'";
        $result = mysqli_query($link, $query1);
        $row = mysqli_fetch_array($result);

        if($row){
            echo ("<p class='successful'>سلام {$row['username']} عزیز، ورود شمارا خوش آمد می گوییم.</p>");
        } else {
            echo ("<p class='error'>ورود شما موفقیت آمیز نبود.</p>");
        }
        mysqli_close($link);
		
    ?>
		<a href="index.php" class="back">بازگشت به صفحه اصلی</a>
        <?php
        include "includes/footer.php";
        ?>
</body>
</html>