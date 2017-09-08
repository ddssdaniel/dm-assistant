<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_item'); ?>
		<?php echo $form->textField($model,'nome_item',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nome_item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_item'); ?>
		<?php echo $form->textField($model,'id_tipo_item'); ?>
		<?php echo $form->error($model,'id_tipo_item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raridade'); ?>
		<?php echo $form->textField($model,'raridade',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'raridade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->