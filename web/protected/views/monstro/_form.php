<?php
/* @var $this MonstroController */
/* @var $model Monstro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'monstro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_monstro'); ?>
		<?php echo $form->textField($model,'nome_monstro',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nome_monstro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_monstro'); ?>
		<?php echo $form->textField($model,'id_tipo_monstro'); ?>
		<?php echo $form->error($model,'id_tipo_monstro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customizado'); ?>
		<?php echo $form->textArea($model,'customizado',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'customizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dificuldade'); ?>
		<?php echo $form->textField($model,'dificuldade',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dificuldade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->