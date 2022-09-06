<?php
/* @var $this StrukturaController */
/* @var $data Struktura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_struktura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_struktura), array('view', 'id'=>$data->id_struktura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->tj_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->ru_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->en_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />


</div>