<?php
/* @var $this PersonagemController */
/* @var $model Personagem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personagem-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_personagem'); ?>
		<?php echo $form->textField($model,'nome_personagem',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nome_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hp_total'); ?>
		<?php echo $form->textField($model,'hp_total'); ?>
		<?php echo $form->error($model,'hp_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hp_atual'); ?>
		<?php echo $form->textField($model,'hp_atual'); ?>
		<?php echo $form->error($model,'hp_atual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel'); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_aventura'); ?>
		<?php echo $form->textField($model,'id_aventura'); ?>
		<?php echo $form->error($model,'id_aventura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'npc'); ?>
		<?php echo $form->textField($model,'npc',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'npc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_raca'); ?>
		<?php echo $form->textField($model,'id_raca'); ?>
		<?php echo $form->error($model,'id_raca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_classe'); ?>
		<?php echo $form->textField($model,'id_classe'); ?>
		<?php echo $form->error($model,'id_classe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->