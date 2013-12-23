<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_respuesta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_respuesta),array('view','id'=>$data->id_respuesta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resp_respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->resp_respuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->tp_respuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->id_pregunta); ?>
	<br />


</div>