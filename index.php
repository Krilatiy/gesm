<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
if(!isset($_SESSION['lab']) and !isset($_POST['q'])) {
    $q = 0;
}else{
    $q = $_POST['q'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title>Тест</title>
</head>
<body>

<table width="50%" border="1" align='center'>

    <tr>
        <td align="center">
            <!-- Верхняя часть страницы -->
            <table width="100%">
                <tr>
                    <td align="center">
                        <h1>...</h1>
                        <p>Количество разных символов в фразе</p>
                    </td>
                </tr>
            </table>
            <!-- Верхняя часть страницы -->
        </td>
    </tr>

    <tr>
        <td>
            <?php
            switch($q){
                case 0: include 'start.php'; break;
                case 1: include 'page_1.php'; break;
                case 2: include 'result.php';
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>
