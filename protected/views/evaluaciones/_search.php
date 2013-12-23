<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id_evaluacion',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'fech_evaluacion',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_leccion',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'result_evaluacion',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_ponderacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
