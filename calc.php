<?php
    header('Content-type: text/html; charset=utf-8');
    if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['deist'])) {
        $a = $_POST['x'];
        $b = $_POST['y'];
        $d = $_POST['deist'];
        
        if ($d == "+") {
            $e = $a + $b;
        }
        else if ($d == "-") {
            $e = $a - $b;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="123.php" method="get">
        <span class="text">x</span><input name="s" type="text"><br>
        <span class="text">y</span><input name="n" type="text"><br>
        <select name ="deist">
            <option disabled>Выберите действие</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Отправить">
    </form>
    <div id="res">
        <?php 
            if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['deist'])) {
            echo $e;
        }
        ?>
    </div>
</body>
</html>