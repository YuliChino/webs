<?php
$con=mysqli_connect('localhost','root','','registrobd')or die
('Error en la conexion con el servidor local');

$sql="INSERT INTO usuario VALUES (null, '".$_POST["nombre"]."','".$_POST["edad"]."','".$_POST["interes"]."')";

$resultado=mysqli_query($con,$sql) or die
("Error en el Database");
mysqli_close($con);

?>

<script>
    location.href='Coantacto4.html';
</script>