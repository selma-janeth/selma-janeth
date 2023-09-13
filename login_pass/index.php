<?php require 'controlador.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilo.css">
<title>HASH</title>
</head>
<body>

    <form action="" method="post" autocomplete="off"> 
        <h1>Registro de Usuarios</h1>

        <label for="">Usuario</label>
        <input type="text" name="usuario_usu" maxlength="10">

        <label for="">Password</label>
        <input type="password" name="password_usu" id="">

        <button type="submit" name="registro">Registrar</button>

        <P class="error"><?php echo @$registro_error ?></P>
        <P class="success"><?php echo @$registro_success ?></P>   
    

</form>

<!--<script src="./mensaje.js"></script>-->
</body>
</html>