<?php
$this->breadcrumbs=array(
	'Evaluaciones'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Evaluaciones','url'=>array('index')),
array('label'=>'Create Evaluaciones','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('evaluaciones-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Evaluaciones</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'evaluaciones-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_evaluacion',
		'fech_evaluacion',
		'id_leccion',
		'result_evaluacion',
		'id_ponderacion',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
