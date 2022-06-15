<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<script src="<?php echo base_url("assets/jquery/jquery-3.3.1.min.js")?>"></script>
</head>

<body>

	<div id="container">
			<label for="partida">Partida</label>
			<input type="text" name="partida" id="partida">
			<label for="cantidad">Cantidad</label>
			<input type="number" name="cantidad" id="cantidad">
			<label for="unidad">Unidad</label>
			<input type="text" name="unidad" id="unidad">
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion" id="descripcion">
			<label for="precioUnitario">Precio Unitario</label>
			<input type="text" name="pUnitario" id="pUnitario">
			<label for="rFederal">R. Federal</label>
			<input type="text" name="rFederal" id="rFederal">
			<label for="rEstatal">R. Estatal</label>
			<input type="text" name="rEstatal" id="rEstatal">
			<label for="rFiscal">R. Fiscal</label>
			<input type="text" name="rFiscal" id="rFiscal">
			<label for="importe">Importe</label>
			<input type="number" name="importe" id="importe">
			<label for="iva">IVA</label>
			<input type="number" name="iva" id="iva">
			<button id="guardarProducto">Guardar</button>
	</div>

</body>
<script src="<?= base_url("assets/scripts/productos.js")?>"></script>

</html>