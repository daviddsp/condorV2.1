<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_capitulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_capitulo),array('view','id'=>$data->id_capitulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_capitulo')); ?>:</b>
	<?php echo CHtml::encode($data->nb_capitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_capitulo')); ?>:</b>
	<?php echo CHtml::encode($data->desc_capitulo); ?>
	<br />


</div>