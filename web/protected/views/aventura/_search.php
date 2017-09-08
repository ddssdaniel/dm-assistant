<?php
/* @var $this AventuraController */
/* @var $model Aventura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_aventura'); ?>
		<?php echo $form->textField($model,'id_aventura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_aventura'); ?>
		<?php echo $form->textField($model,'nome_aventura',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fim'); ?>
		<?php echo $form->textField($model,'fim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ativa'); ?>
		<?php echo $form->textField($model,'ativa',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->