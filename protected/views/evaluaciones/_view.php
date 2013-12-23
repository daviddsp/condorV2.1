<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_evaluacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evaluacion),array('view','id'=>$data->id_evaluacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fech_evaluacion')); ?>:</b>
	<?php echo CHtml::encode($data->fech_evaluacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_leccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_leccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result_evaluacion')); ?>:</b>
	<?php echo CHtml::encode($data->result_evaluacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ponderacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_ponderacion); ?>
	<br />


</div>