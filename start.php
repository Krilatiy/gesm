<?php
$phrases = array('Ab ovo usque ad mala.','Amor non est medicabilis herbis.','Asinus Buridani inter duo prata.');
$randPhrases = $phrases[rand(0, count($phrases)-1)];
?>
<table width="100%">
    <tr>
        <td align="left">
            <form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
                <input type='hidden' name='q' value='<?= ++$q?>'>
                <p>Выберите одну фразу (транслитом)</p>
                <input type='radio' name='phrase' value='Ab ovo usque ad mala.'>Ab ovo usque ad mala<br>
                <input type='radio' name='phrase' value='Amor non est medicabilis herbis.'>Amor non est medicabilis herbis<br>
                <input type='radio' name='phrase' value='Asinus Buridani inter duo prata.'>Asinus Buridani inter duo prata<br>
                <input type='submit' value='Начать тест'>
            </form>
            <form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
                <input type='hidden' name='q' value='<?= $q?>'>
                <input type='hidden' name='phrase' value='<?= $randPhrases ?>'>
            <input type='submit' value='Random'>
            </form>
            <form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
                <input type='hidden' name='q' value='<?= $q?>'>
                <p>Введите свою фразу:</p>
                <input type="text" name="phrase">
                <input type='submit' value='Отправить'>
            </form>
        </td>
    </tr>
</table>

