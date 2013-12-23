<?php
$this->breadcrumbs=array(
	'Capituloses',
);

$this->menu=array(
array('label'=>'Create Capitulos','url'=>array('create')),
array('label'=>'Manage Capitulos','url'=>array('admin')),
);
?>

<h1>Capituloses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
