<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="get">
        <span class="text">Градусы цельсия</span><input name="s" type="text"><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>

<?php
            $s = $_GET['s'];
            $k = (($s * 9/5) +32);
            echo $k;
?>