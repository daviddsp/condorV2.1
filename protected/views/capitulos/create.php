<?php
$this->breadcrumbs=array(
	'Capituloses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Capitulos','url'=>array('index')),
array('label'=>'Manage Capitulos','url'=>array('admin')),
);
?>

<h1>Create Capitulos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>