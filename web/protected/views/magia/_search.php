<?php
/* @var $this MagiaController */
/* @var $model Magia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_magia'); ?>
		<?php echo $form->textField($model,'id_magia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_magia'); ?>
		<?php echo $form->textField($model,'nome_magia',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciclo'); ?>
		<?php echo $form->textField($model,'ciclo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_escola'); ?>
		<?php echo $form->textField($model,'id_escola'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->