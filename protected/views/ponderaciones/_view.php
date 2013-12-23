<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_ponderacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ponderacion),array('view','id'=>$data->id_ponderacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('punt_ponderacion')); ?>:</b>
	<?php echo CHtml::encode($data->punt_ponderacion); ?>
	<br />


</div>