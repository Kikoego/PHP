<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="3.php" method="get">
        <span class="text">Введите число</span><input name="s" type="text"><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<?php
    $s = $_GET['s'];
    for ($i = $s; $i >= 1; $i--) {
        if ($_GET['s'] % $i == 0) {
            echo $i.' ';
        }
    }

?>