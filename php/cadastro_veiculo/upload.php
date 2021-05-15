<head>
	<script type="text/javascript" src="js/validform.js"></script>
</head>
<body>
	<center>
		<h1>Fazer Upload da Imagem do Veículo</h1>
		<form method="POST" name="dados"action="processa_img.php" enctype="multipart/form-data">
			<label>Nome: </label>
			<input type="text" name="nome"><br><br>
			<label>Imagem: </label>
			<input type="file" multiple="multiple" name="arquivo"/><br><br>
			<input type="submit" value="Upload" onclick="return cad_img()">
		</form>
	</center>
</body>