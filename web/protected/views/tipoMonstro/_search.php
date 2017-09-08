<?php
/* @var $this TipoMonstroController */
/* @var $model TipoMonstro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_monstro'); ?>
		<?php echo $form->textField($model,'id_tipo_monstro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_tipo_monstro'); ?>
		<?php echo $form->textField($model,'nome_tipo_monstro',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->