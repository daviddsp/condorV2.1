<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_pregunta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pregunta),array('view','id'=>$data->id_pregunta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->p_pregunta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evaluacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_evaluacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ponderacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_ponderacion); ?>
	<br />


</div>