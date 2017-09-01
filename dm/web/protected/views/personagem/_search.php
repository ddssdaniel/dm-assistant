<?php
/* @var $this PersonagemController */
/* @var $model Personagem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_personagem'); ?>
		<?php echo $form->textField($model,'id_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_personagem'); ?>
		<?php echo $form->textField($model,'nome_personagem',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hp_total'); ?>
		<?php echo $form->textField($model,'hp_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hp_atual'); ?>
		<?php echo $form->textField($model,'hp_atual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_aventura'); ?>
		<?php echo $form->textField($model,'id_aventura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'npc'); ?>
		<?php echo $form->textField($model,'npc',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_raca'); ?>
		<?php echo $form->textField($model,'id_raca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_classe'); ?>
		<?php echo $form->textField($model,'id_classe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->