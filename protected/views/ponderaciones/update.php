<?php
$this->breadcrumbs=array(
	'Ponderaciones'=>array('index'),
	$model->id_ponderacion=>array('view','id'=>$model->id_ponderacion),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Ponderaciones','url'=>array('index')),
	array('label'=>'Create Ponderaciones','url'=>array('create')),
	array('label'=>'View Ponderaciones','url'=>array('view','id'=>$model->id_ponderacion)),
	array('label'=>'Manage Ponderaciones','url'=>array('admin')),
	);
	?>

	<h1>Update Ponderaciones <?php echo $model->id_ponderacion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>