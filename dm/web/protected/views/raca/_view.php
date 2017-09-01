<?php
/* @var $this RacaController */
/* @var $data Raca */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_raca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_raca), array('view', 'id'=>$data->id_raca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_raca')); ?>:</b>
	<?php echo CHtml::encode($data->nome_raca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />


</div>