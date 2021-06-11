<?php
session_start();
include_once('php/conexao.php');
?>
<html>
    <body>
    <script>
						function changeValue(event) {
							event.value = addCommas(event.value.replace(/\D/g, ''));
							calculate();
						}

						function addCommas(value) {
								return value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
						}

	</script>
        <form method="POST">
            <input type="text" name="preço" onkeyup="changeValue(this)"/>
            <input type="submit" value="Enviar">
        </form>
        <?php
        $num = filter_input(INPUT_POST, 'preço', FILTER_SANITIZE_STRING);
        $preço = number_format($num,10, '.', '');
        echo $preço;

        $result_usuario = "INSERT INTO veiculos (preço) VALUES ('$preço')";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        ?> 
    </body>
</html>