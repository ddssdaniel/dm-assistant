<?php
/* @var $this MagiaController */
/* @var $model Magia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'magia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_magia'); ?>
		<?php echo $form->textField($model,'nome_magia',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nome_magia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciclo'); ?>
		<?php echo $form->textField($model,'ciclo'); ?>
		<?php echo $form->error($model,'ciclo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_escola'); ?>
		<?php echo $form->textField($model,'id_escola'); ?>
		<?php echo $form->error($model,'id_escola'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->