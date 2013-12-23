<?php
$this->breadcrumbs=array(
	'Ponderaciones'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Ponderaciones','url'=>array('index')),
array('label'=>'Manage Ponderaciones','url'=>array('admin')),
);
?>

<h1>Create Ponderaciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>