<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_contenido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contenido),array('view','id'=>$data->id_contenido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_contenido')); ?>:</b>
	<?php echo CHtml::encode($data->desc_contenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuen_contenido')); ?>:</b>
	<?php echo CHtml::encode($data->fuen_contenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_leccion); ?>
	<br />


</div>