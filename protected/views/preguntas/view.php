<?php
$this->breadcrumbs=array(
	'Preguntases'=>array('index'),
	$model->id_pregunta,
);

$this->menu=array(
array('label'=>'List Preguntas','url'=>array('index')),
array('label'=>'Create Preguntas','url'=>array('create')),
array('label'=>'Update Preguntas','url'=>array('update','id'=>$model->id_pregunta)),
array('label'=>'Delete Preguntas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pregunta),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Preguntas','url'=>array('admin')),
);
?>

<h1>View Preguntas #<?php echo $model->id_pregunta; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_pregunta',
		'p_pregunta',
		'id_evaluacion',
		'id_ponderacion',
),
)); ?>
