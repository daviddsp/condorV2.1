<?php
$this->breadcrumbs=array(
	'Capituloses'=>array('index'),
	$model->id_capitulo,
);

$this->menu=array(
array('label'=>'List Capitulos','url'=>array('index')),
array('label'=>'Create Capitulos','url'=>array('create')),
array('label'=>'Update Capitulos','url'=>array('update','id'=>$model->id_capitulo)),
array('label'=>'Delete Capitulos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_capitulo),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Capitulos','url'=>array('admin')),
);
?>

<h1>View Capitulos #<?php echo $model->id_capitulo; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_capitulo',
		'nb_capitulo',
		'desc_capitulo',
),
)); ?>
