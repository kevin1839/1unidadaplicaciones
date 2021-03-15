
<?php
include("db.php");

if(isset($_POST['guardar']))

	$nombre=$_POST['nombre'];
	$domicilio=$_POST['domicilio'];
	$dni=$_POST['DNI'];
	$numR=$_POST['numregis'];
	$telefono=$_POST['tel'];
	$apoderado=$_POST['padres'];
	$identificacion=$_POST['bien'];
	$descripcion=$_POST['descripcion'];
	$reclamacion=$_POST['detalleR'];
	$detalle=$_POST['det_reclamacion'];
	$proveedor=$_POST['det_acciones'];
	$consulta="INSERT INTO consumidor(nombre,domicilio,dni,apoderado,telefono) VALUES('$nombre','$domicilio','$dni','$apoderado','$telefono')";
	$consulta1="INSERT INTO reclamo(NRegistro) VALUES('$numR')";
	$consulta2="INSERT INTO detallesr(tipo_identificacion,descripcion,tipo_reclamacion,detalleR,DetallePro) VALUES('$identificacion','$descripcion','$reclamacion','$detalle','$proveedor')";
	$resultado=mysqli_query($conn,$consulta);
	$resultado1=mysqli_query($conn,$consulta1);
	$resultado2=mysqli_query($conn,$consulta2);
	if(!$resultado)
	{
		die("Consulta fallada");
	}
	
	header("Location:index.php");
?>
