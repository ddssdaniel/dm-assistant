<?php
/* @var $this EscolaController */
/* @var $model Escola */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_escola'); ?>
		<?php echo $form->textField($model,'id_escola'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_escola'); ?>
		<?php echo $form->textField($model,'nome_escola',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->