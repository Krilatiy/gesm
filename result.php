<?php
$str = $_POST['phrase'];
foreach(count_chars($str, 1) as $i => $val) {


?>
<p>Количество символов в строке: " <?php echo " ", chr($i) ," \" = $val. <br>";} ?></p>
<table width="100%">
    <tr>
        <td align="left">
            <form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
                <input type='submit' value='Начать сначала'>
            </form>
        </td>
    </tr>
</table>