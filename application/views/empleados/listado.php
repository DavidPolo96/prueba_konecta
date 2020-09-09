<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	
    <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.css">
</head>
<body>
	<div class="container">
			<div class="jumbotron">
				<h2><center>Listado de empleados</h2>
			</div>
				<div class="">

					 <h2>
                   <a href="<?php echo base_url();?>/empleados/nuevo" class="btn btn-primary">Nuevo Empleado</a>
                    <a href="<?php echo base_url();?>solicitud/nuevo" class="btn btn-primary">Nueva solicitud</a>
                   <a href="<?php echo base_url();?>solicitud" class="btn btn-primary">listado solicitud</a>
                  
                     </h2>
				 <div class="panel panel-info">	
    			    <div class="panel-heading">
                      <div class="well well-sm">
					<table class="table table-bordered">

						<tr>
							<th>ID</th>
							<th>Fecha de ingreso</th>
							<th>Nombre</th>
							<th>Salario</th>
							
						</tr>
						
						<?php if (isset($empleado)): ?>

							<?php foreach ($empleado as $e): ?>
						  	<tr>
								<td><?php echo $e->ID;?></td>
								<td><?php echo $e->FECHA_INGRESO;?></td>
								<td><?php echo $e->NOMBRE;?></td>
								<td><?php echo $e->SALARIO;?></td>

							</tr>
							<?php endforeach;?>

						<?php endif ?>
						
				</table>
            </div>
		</div>
</body>
</html>