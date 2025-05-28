<?php

$con = mysqli_connect('localhost','root','','registrobd') or die

('Error con la conexión con el servidor local');



$sql = "INSERT INTO usuario

VALUES (null,'".$_POST["nombre"]."','".$_POST["edad"]."',

'".$_POST["interes"]."')";



$resultado = mysqli_query($con,$sql) or die

('Error en el query database');



mysqli_close($con);

?>

<script>

    location.href='Contacto3.html';

</script>