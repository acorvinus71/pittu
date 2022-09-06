<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . ' - Саҳифаи аввал';
$this->breadcrumbs=array(
	Yii::t('translate','Алоқа бо мо'),
);
?>
<h1><?php echo Yii::t('translate','Алоқа бо мо')?></h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
<?php echo Yii::t('translate','Барои беҳтаршавии сомона саҳми худро гузоред. Раҳмат')?>.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo Yii::t('translate','Майдонҳои бо')?> <span class="required">*</span> <?php echo Yii::t('translate','талаб карда мешаванд')?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('translate','Ном')." <span style='color:red'>*</span>"); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,Yii::t('translate','Ном')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('translate','E-mail')." <span style='color:red'>*</span>"); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,Yii::t('translate','E-mail')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('translate','Мавзӯъ')." <span style='color:red'>*</span>"); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,Yii::t('translate','Мавзӯъ')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('translate','Матн')." <span style='color:red'>*</span>"); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,Yii::t('translate','Матн')); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?><br />
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint"><?php echo Yii::t('translate','Лутфан ҳарфҳои дар тасвир нишон дода шударо ворид кунед')."."?>
		</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('translate','Фиристодан')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>