<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'preguntas-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'p_pregunta',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'id_evaluacion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_ponderacion',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
