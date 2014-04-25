<table width="100%">
	<tr>
		<td align="left">
            <p>Символы будут посчитаны в след. фразе</p>
            <p><?php echo $_POST['phrase']?></p>
            <p></p>
            <p></p>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input type='hidden' name='q' value='<?= ++$q?>'>
            <input type='hidden' name='phrase' value='<?= $_POST['phrase']?>'>
            <input type="submit" value="Посчитать">
		</form>
		</td>
	</tr>
</table>

