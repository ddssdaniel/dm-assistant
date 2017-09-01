<?php
/* @var $this ClasseController */
/* @var $data Classe */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_classe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_classe), array('view', 'id'=>$data->id_classe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_classe')); ?>:</b>
	<?php echo CHtml::encode($data->nome_classe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />


</div>