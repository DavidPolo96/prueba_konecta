
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.css">
</head>
<body>

    <div class="container">
       <div class="jumbotron">
        <h2><center>Registro de Empleados</h2>
    </div>

   <form class="form-group" action="<?php echo base_url();?>empleados/guardar" method="post">

  <div class="form-group">
    <label for="">ID</label>
    <input type="id" class="form-control" name="id"  value="" placeholder="Ingrese su cedula" >
  </div>

  <div class="form-group">
    <label for="">Fecha de ingreso</label>
    <input type="date" class="form-control" name="fecha_ingreso"  value="" placeholder="Ingrese la fecha de ingreso" >
  </div>

  <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" class="form-control" name="nombre"  value="" placeholder="Ingrese su nombre" >
  </div>
             
  


   <div class="form-group">
    <label for="">Salario</label>
    <input type="number" class="form-control"  name ="salario"  value="" placeholder="Ingrese su salario">
  </div>

 
 <input type="submit" class="btn btn-info" name="" value="Guardar">
</form>
 