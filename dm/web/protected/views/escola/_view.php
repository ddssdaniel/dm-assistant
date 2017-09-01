<?php
/* @var $this EscolaController */
/* @var $data Escola */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_escola')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_escola), array('view', 'id'=>$data->id_escola)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_escola')); ?>:</b>
	<?php echo CHtml::encode($data->nome_escola); ?>
	<br />


</div>