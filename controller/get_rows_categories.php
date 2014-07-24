<?php
/*******************************************
 *
 * 2014 - Programación Web
 * Grado en Ingeniería Informática
 *
 * Ernesto Serrano <erseco@correo.ugr.es>
 * 
 *
 *******************************************
 *
 * 	Obtiene las filas de la tabla, para cargarlas mediante ajax
 *
 ******************************************************************************/
?>
<?php

// Incluimos el fichero de configuracíon (por el __autoload)
include "../config.php";

// Instanciamos un nuevo objeto
$entity = new Categories();
$rows = $entity->getAll();

// Recorremos todas las filas
foreach ($rows as $row): ?>

	<tr id="tr_<?php echo $row["id"]; ?>">
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td class="td-action">
			<button class="btn btn-primary btn-xs" data-toggle="modal" href="controller/modal_categories.php?id=<?php echo $row["id"]; ?>" data-target="#update" data-placement="top" rel="tooltip" data-title="Edit" ><i class="glyphicon glyphicon-pencil"></i></button>
		</td>
		<td class="td-action">
			<button onclick="delete_row('Categories', <?php echo $row["id"]; ?>);" class="btn btn-danger btn-xs" rel="tooltip" data-title="Delete"><i class="glyphicon glyphicon-trash" ></i></button>
		</td>
	</tr>
					
<?php endforeach; ?>