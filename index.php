<?php
include("db.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hoja de reclamaciones</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="icon" href="img/logo.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de reclamaciones</title>
    <link rel="stylesheet" href="css/estilo1.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
        <?php
    function registro($length =6)
    {
        $charset ="1234567890";
        $numero = "";
        for($i=0;$i<$length;$i++)
        {
            $rand = rand() % strlen($charset);
            $numero .= substr($charset, $rand,1);
        }
        return $numero;
    }
$sql = "Select * from reclamo order by nroHoja desc limit 0,1";
$result = mysqli_fetch_array($rs = mysqli_query($conn,$sql));
$ultimo = $result["nroHoja"]+1;
?>
        <form action="guardar.php"  method="POST">
        <div class="contenido">
        <div class="arriba">
        <p>
        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Universidad_Nacional_del_Santa_Logo.png/320px-Universidad_Nacional_del_Santa_Logo.png" width="150px" title="Universidad Nacional Del Santa"> <br><strong>
        FORMATO </strong></p>
        <p>
        <strong> HOJA DE RECLAMACIONES </br>
        LIBRO DE RECLAMACIONES<br>
        (Ley 29571 Codigo de proteccion y defensa del consumidor y <br>decreto supremo N° 042-2011 - Obligacion de las entidades del<br>sector publico de contar con el Libro de reclamaciones.)</strong>
</p>
<p>
        <b class="numero">N° DE REGISTRO</b>
            <input type="text" class="numregis" name="numregis" value="<?php echo registro(8)?>" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]{8}" placeholder="12345678" style="text-align:center" required>  
</p>
        </div>
        <div class="contact-wrapper animated bounceInUp">
            <div class="formulario">
            <h3 class="titulo"> LIBRO DE RECLAMACIONES</h3>
            <p class="centrar">
                <label> FECHA: </label>
				<input type="text"class="fecha"name="fecha" step="1" min="2013-01-01T00:00Z" max="2013-12-31T12:00Z" value="<?php echo date("Y-m-d");?>" disabled>
            </p>
            <p class="centrar">
            <label>N° DE HOJA</label>
				<input type="number" class="fecha" name="numero" disabled value="<?php echo $ultimo?>">
					
            <h3 class="block"> CENTRO PREUNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DEL SANTA<br>
				Pool de aulas 3er piso<br>
				Av. universitaria s/n Urb. Bellamar - Nuevo Chimbote- Santa - Ancash.</h3>
                    <h3 class="bloque"> 1.  IDENTIFICACION DEL CONSUMIDOR </h3>
                    <p>
                        <label>Nombre:</label>
                        <input type="text" class="input" name="nombre" required="">
                    </p>
                    <p>
                        <label>Domicilio: </label>
                        <input type="text" class="input" name="domicilio" required="">
                    </p>
                    <p>
                        <label>DNI: </label>
                        <input type="text" class="input" name="DNI" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]{8}" placeholder="12345678" required>   

                    </p>
                    <p>
                        <label>Telefono:</label>
                        <input type="text" class="input" name="tel"  maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]{9}" placeholder="123456789"required> 
                    </p>
                    <p class="block">
                       <label>PADRE O MADRE (Para el caso de menores de edad):</label> 
                       <input type="text" class="input" name="padres">
                    </p>
                    <h3 class="bloque"> 2.  IDENTIFICACION DEL BIEN CONTRATADO </h3>
                    <div class="radio1">
                    <span>PRODUCTO</span>
                    <input type="radio" class="radio" value="Producto" name="bien" required="">
					<span>SERVICIO</span>
                    <input type="radio" class="radio" value="Servicio" name="bien" required="">
                    </div>
                    <p class="block">
                    <textarea name="descripcion"  rows="8" class="area" required=""> </textarea>
                    </p>
                    <h3 class="bloque"> 3.  DETALLE DE LA RECLAMACION </h3>
                    <div class="radio1">
                    <span>RECLAMO</span>
                    <input type="radio" class="radio" value="Reclamo" name="detalleR" required="">
					<span>QUEJA</span>
                    <input type="radio"class="radio" value="Queja" name="detalleR" required="">
                    </div>
                    <p class="block">
                    <textarea name="det_reclamacion" rows="8" class="area" required=""> </textarea>
                    </p>
                    <h3 class="bloque"> 4.  ACCIONES ADOPTADAS POR EL PROVEEDOR </h3>
                    <p class="block">
                    <textarea name="det_acciones" class="area" rows="8"> </textarea>
                    </p>
                    <p><strong>RECLAMO: </strong>Disconformidad relacionada
                       a los productos o servicios</p>
                       <p><strong>QUEJA: </strong>Disconformidad no relacionada a los productos o servicios, o
                    malestar o descontento respecto a la atencion al publico</p>
                    <div class="block">
                    <p>
                        <input class="boton" type="submit" name="guardar" value="GUARDAR">
                    </p>
            </div>
        </form>
        </div>
    </div>
</body>
</html>