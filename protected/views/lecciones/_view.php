<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_leccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_leccion),array('view','id'=>$data->id_leccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->nb_leccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->desc_leccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_capitulo')); ?>:</b>
	<?php echo CHtml::encode($data->id_capitulo); ?>
	<br />


</div>