<?php
$this->breadcrumbs=array(
	'Respuestases'=>array('index'),
	$model->id_respuesta,
);

$this->menu=array(
array('label'=>'List Respuestas','url'=>array('index')),
array('label'=>'Create Respuestas','url'=>array('create')),
array('label'=>'Update Respuestas','url'=>array('update','id'=>$model->id_respuesta)),
array('label'=>'Delete Respuestas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_respuesta),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Respuestas','url'=>array('admin')),
);
?>

<h1>View Respuestas #<?php echo $model->id_respuesta; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_respuesta',
		'resp_respuesta',
		'tp_respuesta',
		'id_pregunta',
),
)); ?>
