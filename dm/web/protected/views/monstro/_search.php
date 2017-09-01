<?php
/* @var $this MonstroController */
/* @var $model Monstro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_monstro'); ?>
		<?php echo $form->textField($model,'id_monstro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_monstro'); ?>
		<?php echo $form->textField($model,'nome_monstro',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_monstro'); ?>
		<?php echo $form->textField($model,'id_tipo_monstro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customizado'); ?>
		<?php echo $form->textArea($model,'customizado',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dificuldade'); ?>
		<?php echo $form->textField($model,'dificuldade',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->