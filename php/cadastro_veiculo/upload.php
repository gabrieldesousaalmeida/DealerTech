<head>
	<script type="text/javascript" src="js/validform.js"></script>
</head>
<body>
	<center>
		<h1>Fazer Upload da Imagem do Veículo</h1>
		<form method="POST" name="dados"action="processa_img.php" enctype="multipart/form-data">
			<label>Imagem: </label>
			<input type="file" multiple="multiple" name="arquivo1"/><br><br>
			<input type="file" multiple="multiple" name="arquivo2"/><br><br>
			<input type="file" multiple="multiple" name="arquivo3"/><br><br>
			<input type="file" multiple="multiple" name="arquivo4"/><br><br>
			<input type="file" multiple="multiple" name="arquivo5"/><br><br>
			<input type="file" multiple="multiple" name="arquivo6"/><br><br>
			<input type="file" multiple="multiple" name="arquivo7"/><br><br>
			<input type="file" multiple="multiple" name="arquivo8"/><br><br>

			<input type="submit" value="Upload" onclick="return cad_img()">
		</form>
	</center>
</body>