<?php
	require_once("../model/modelo.php");
	$categoria = new categoria();
	$pd = $categoria->lista_categoria();
	require_once("../view/vista.php");
?>