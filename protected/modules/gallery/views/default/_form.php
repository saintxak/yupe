<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'                     => 'gallery-form',
    'enableAjaxValidation'   => false,
    'enableClientValidation' => true,
    'type'                   => 'vertical',
    'htmlOptions'            => array('class' => 'well form-vertical'),
    'inlineErrors'           => true,
));

Yii::app()->clientScript->registerScript('fieldset', "
    $('document').ready(function () {
        $('.popover-help').popover({ 'trigger' : 'hover', 'delay' : 500 });
    });
");
?>

    <div class="alert alert-info">
        <?php echo Yii::t('gallery', 'Поля, отмеченные'); ?>        <span class="required">*</span>
        <?php echo Yii::t('gallery', 'обязательны.'); ?>
    </div>

    <?php echo $form->errorSummary($model); ?>

    <div class="row-fluid control-group <?php echo $model->hasErrors('name') ? 'error' : ''; ?>">
        <?php echo $form->textFieldRow($model, 'name', array('class' => 'span3 popover-help', 'size' => 60, 'maxlength' => 300, 'data-original-title' => $model->getAttributeLabel('name'))); ?>
    </div>
    <div class="row-fluid control-group <?php echo $model->hasErrors('description') ? 'error' : ''; ?>">
        <?php echo $form->textAreaRow($model, 'description', array('class' => 'span5 popover-help', 'rows' => 6, 'cols' => 50, 'data-original-title' => $model->getAttributeLabel('description'))); ?>
    </div>
    <div class="row-fluid control-group <?php echo $model->hasErrors('status') ? 'error' : ''; ?>">
        <?php echo $form->textFieldRow($model, 'status', array('class' => 'span3 popover-help', 'size' => 60, 'maxlength' => 60, 'data-original-title' => $model->getAttributeLabel('status'))); ?>
    </div>

        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type'       => 'primary',
            'htmlOptions'=> array('name' => 'saveAndClose'),
            'label'      => Yii::t('gallery', $model->isNewRecord ? 'Добавить галерею и закрыть' : 'Сохранить галерею и закрыть')
        )); ?>


       <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type'       => 'primary',
            'label'      => Yii::t('gallery', $model->isNewRecord ? 'Добавить галерею и продолжить' : 'Сохранить галерею и продолжить')
        )); ?>

<?php $this->endWidget(); ?>