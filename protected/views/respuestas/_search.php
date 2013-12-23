<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id_respuesta',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'resp_respuesta',array('class'=>'span5','maxlength'=>150)); ?>

		<?php echo $form->checkBoxRow($model,'tp_respuesta'); ?>

		<?php echo $form->textFieldRow($model,'id_pregunta',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
