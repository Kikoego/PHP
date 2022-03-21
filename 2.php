<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="get">
        <span class="text">Введите факториал</span><input name="s" type="text"><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>

<?php
    $s = $_GET['s'];
    $factorial = 1;
 
    for ($i = 1; $i <= $s; $i++) {
        $factorial *= $i;
}
    echo $factorial;
?>