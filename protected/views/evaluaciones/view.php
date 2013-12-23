<?php
$this->breadcrumbs=array(
	'Evaluaciones'=>array('index'),
	$model->id_evaluacion,
);

$this->menu=array(
array('label'=>'List Evaluaciones','url'=>array('index')),
array('label'=>'Create Evaluaciones','url'=>array('create')),
array('label'=>'Update Evaluaciones','url'=>array('update','id'=>$model->id_evaluacion)),
array('label'=>'Delete Evaluaciones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_evaluacion),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Evaluaciones','url'=>array('admin')),
);
?>

<h1>View Evaluaciones #<?php echo $model->id_evaluacion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_evaluacion',
		'fech_evaluacion',
		'id_leccion',
		'result_evaluacion',
		'id_ponderacion',
),
)); ?>
