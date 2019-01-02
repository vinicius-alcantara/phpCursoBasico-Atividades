
<?php
	$base = isset($_POST['Nbase'])? $_POST['Nbase'] : 0;
	$exp = isset($_POST['Nexp']) ? $_POST['Nexp'] : 0;

	$result = pow($base,$exp);

	echo "$base <sup>$exp</sup> é: $result";

	echo "<br/>";
		
		echo "<a href='index.html'><input type='button' value='Voltar'/></a>";
?>
