<?php
$this->breadcrumbs=array(
	'Ponderaciones',
);

$this->menu=array(
array('label'=>'Create Ponderaciones','url'=>array('create')),
array('label'=>'Manage Ponderaciones','url'=>array('admin')),
);
?>

<h1>Ponderaciones</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
