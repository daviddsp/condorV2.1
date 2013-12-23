<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	$model->id_leccion=>array('view','id'=>$model->id_leccion),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Lecciones','url'=>array('index')),
	array('label'=>'Create Lecciones','url'=>array('create')),
	array('label'=>'View Lecciones','url'=>array('view','id'=>$model->id_leccion)),
	array('label'=>'Manage Lecciones','url'=>array('admin')),
	);
	?>

	<h1>Update Lecciones <?php echo $model->id_leccion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>