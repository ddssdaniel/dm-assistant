<?php
/* @var $this TipoMonstroController */
/* @var $data TipoMonstro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_monstro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_monstro), array('view', 'id'=>$data->id_tipo_monstro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_tipo_monstro')); ?>:</b>
	<?php echo CHtml::encode($data->nome_tipo_monstro); ?>
	<br />


</div>