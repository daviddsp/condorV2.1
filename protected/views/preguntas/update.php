<?php
$this->breadcrumbs=array(
	'Preguntases'=>array('index'),
	$model->id_pregunta=>array('view','id'=>$model->id_pregunta),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Preguntas','url'=>array('index')),
	array('label'=>'Create Preguntas','url'=>array('create')),
	array('label'=>'View Preguntas','url'=>array('view','id'=>$model->id_pregunta)),
	array('label'=>'Manage Preguntas','url'=>array('admin')),
	);
	?>

	<h1>Update Preguntas <?php echo $model->id_pregunta; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>