<?php
$this->breadcrumbs=array(
	'Evaluaciones',
);

$this->menu=array(
array('label'=>'Create Evaluaciones','url'=>array('create')),
array('label'=>'Manage Evaluaciones','url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
