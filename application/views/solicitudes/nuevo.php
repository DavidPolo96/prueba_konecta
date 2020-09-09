
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
        <h2><center>Registro de Solicitudes</h2>
    </div>

   <form class="form-group" action="<?php echo base_url();?>solicitud/guardar" method="post">

  <div class="form-group">
    <label for="">ID</label>
    <input type="id" class="form-control" name="id"  value="" placeholder="Ingrese el id de la solicitud" >
  </div>

  <div class="form-group">
    <label for="">Codigo</label>
    <input type="text" class="form-control" name="codigo"  value="" placeholder="Ingrese el codigo" >
  </div>

  <div class="form-group">
    <label for="">Descripción</label>
    <input type="text" class="form-control" name="descripcion"  value="" placeholder="Ingrese la descripcion" >
  </div>
             
   <div class="form-group">
    <label for="">Resumen</label>
    <input type="text" class="form-control"  name ="resumen"  value="" placeholder="Ingrese el resumen">
  </div>

<div class="form-group">
    <label for="">ID de empleado</label>
    <input type="text" id="idempleado" class="form-control"  name ="id_empleado"  value="" placeholder="Ingrese el id del empleado">
    <input type="button" value="Buscar" class="btn btn-info" onclick="buscarEmpleado();">
   <label id="nombreEmpleado"></label>
  </div>

 
 <input type="submit" class="btn btn-info" name="" value="Guardar">
</form>
 <script>
  function buscarEmpleado()
  {
    var id = document.getElementById('idempleado').value;
    fetch('http://localhost/konecta/api/empleado/'+ id)
    .then(function(response) {
      if (response.ok) {
        response.json().then(function(json) {
          document.getElementById('nombreEmpleado').innerHTML = json.nombre;
        });
      }else{
        response.json().then(function(json) {
          console.log(json.message);
        });
      }
    });
  }
</script>