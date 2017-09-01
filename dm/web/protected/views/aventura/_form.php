<?php
/* @var $this AventuraController */
/* @var $model Aventura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aventura-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_aventura'); ?>
		<?php echo $form->textField($model,'nome_aventura',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nome_aventura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fim'); ?>
		<?php echo $form->textField($model,'fim'); ?>
		<?php echo $form->error($model,'fim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ativa'); ?>
		<?php echo $form->textField($model,'ativa',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ativa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->