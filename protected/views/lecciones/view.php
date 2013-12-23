<?php
$this->breadcrumbs=array(
	'Lecciones'=>array('index'),
	$model->id_leccion,
);

$this->menu=array(
array('label'=>'List Lecciones','url'=>array('index')),
array('label'=>'Create Lecciones','url'=>array('create')),
array('label'=>'Update Lecciones','url'=>array('update','id'=>$model->id_leccion)),
array('label'=>'Delete Lecciones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_leccion),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Lecciones','url'=>array('admin')),
);
?>

<h1>View Lecciones #<?php echo $model->id_leccion; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_leccion',
		'nb_leccion',
		'desc_leccion',
		'id_capitulo',
),
)); ?>
