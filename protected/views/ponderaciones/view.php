<?php
$this->breadcrumbs=array(
	'Ponderaciones'=>array('index'),
	$model->id_ponderacion,
);

$this->menu=array(
array('label'=>'List Ponderaciones','url'=>array('index')),
array('label'=>'Create Ponderaciones','url'=>array('create')),
array('label'=>'Update Ponderaciones','url'=>array('update','id'=>$model->id_ponderacion)),
array('label'=>'Delete Ponderaciones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ponderacion),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Ponderaciones','url'=>array('admin')),
);
?>

<h1>View Ponderaciones #<?php echo $model->id_ponderacion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_ponderacion',
		'punt_ponderacion',
),
)); ?>
