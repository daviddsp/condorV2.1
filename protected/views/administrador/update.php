<?php
$this->breadcrumbs=array(
	'Capituloses'=>array('index'),
	$model->id_capitulo=>array('view','id'=>$model->id_capitulo),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Capitulos','url'=>array('index')),
	array('label'=>'Create Capitulos','url'=>array('create')),
	array('label'=>'View Capitulos','url'=>array('view','id'=>$model->id_capitulo)),
	array('label'=>'Manage Capitulos','url'=>array('admin')),
	);
	?>

	<h1>Update Capitulos <?php echo $model->id_capitulo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>