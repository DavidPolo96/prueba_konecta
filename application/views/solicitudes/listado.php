<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	
    <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.css">
</head>
<body>
	<div class="container">
			<div class="jumbotron">
				<h2><center>Listado de solicitudes</h2>
			</div>
				<div class="">

					 <h2>
                   <a href="<?php echo base_url();?>/empleados/nuevo" class="btn btn-primary">Nuevo Empleado</a>
                    <a href="<?php echo base_url();?>solicitud/nuevo" class="btn btn-primary">Nueva solicitud</a>
                  	<a href="<?php echo base_url();?>empleados" class="btn btn-primary">Listado Empleado</a>
                     </h2>
				 <div class="panel panel-info">	
    			    <div class="panel-heading">
                      <div class="well well-sm">
					<table class="table table-bordered">

						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Descripción</th>
							<th>Resumen</th>
							<th>Nombre Empleado</th>
							
						</tr>
							
						<?php if (isset($solicitud)): ?>

							<?php foreach ($solicitud as $e): ?>
						  	<tr>
								<td><?php echo $e->ID;?></td>
								<td><?php echo $e->CODIGO;?></td>
								<td><?php echo $e->DESCRIPCION;?></td>
								<td><?php echo $e->RESUMEN;?></td>
								<td><?php echo $e->NOMBRE;?></td>


							</tr>
							<?php endforeach;?>

						<?php endif ?>
						
				</table>
            </div>
		</div>
</body>
</html>