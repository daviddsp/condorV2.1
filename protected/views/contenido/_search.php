<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id_contenido',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'desc_contenido',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textAreaRow($model,'fuen_contenido',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'id_leccion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>