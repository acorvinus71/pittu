<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Дохилшавӣ';
$this->breadcrumbs=array(
	Yii::t('translate','Дохилшавӣ'),
);
?>

<h1><?php echo Yii::t('translate','Дохилшавӣ');?></h1>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo Yii::t('translate','Майдонҳои бо')?> <span class="required">*</span> <?php echo Yii::t('translate','талаб карда мешаванд')?>.</p>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('translate','Логин')." <span style='color:red'>*</span>"); ?>
		<i class="icon-user"></i> <?php echo $form->textField($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('translate','Парол')." <span style='color:red'>*</span>"); ?>
		<i class="icon-lock"></i> <?php echo $form->passwordField($model,'password'); ?>
		<p class="hint">
			<?php echo Yii::t('translate','Эзоҳ')?>: <?php echo Yii::t('translate','Дохилшавӣ танҳо барои администратор')?>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('translate','Дохилшавӣ')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
