<?php
	
	$conexao = mysql_connect("localhost","root","usbw") or exit('N�o foi possivel conectar: '.mysql_error());
	
	if($conexao == TRUE)
	{
		mysql_select_db('loja');
	}

?>