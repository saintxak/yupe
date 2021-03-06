<?php
    $this->breadcrumbs = array(
        Yii::app()->getModule('blog')->getCategory() => array(),
        Yii::t('blog', 'Блоги') => array('/blog/BlogAdmin/index'),
        $model->name => array('/blog/BlogAdmin/view', 'id' => $model->id),
        Yii::t('blog', 'Редактирование'),
    );
    $this->pageTitle = Yii::t('blog', 'Блоги - редактирование');
    $this->menu = array(
        array('icon' => 'list-alt', 'label' => Yii::t('blog', 'Управление блогами'), 'url' => array('/blog/BlogAdmin/index')),
        array('icon' => 'plus-sign', 'label' => Yii::t('blog', 'Добавить блог'), 'url' => array('/blog/BlogAdmin/create')),
        array('label' => Yii::t('blog', 'Блог')),
        array('icon' => 'pencil white', 'encodeLabel' => false, 'label' => Yii::t('blog', 'Редактирование блога'), 'url' => array(
            '/blog/BlogAdmin/update',
            'id' => $model->id
        )),
        array('icon' => 'eye-open', 'encodeLabel' => false, 'label' => Yii::t('blog', 'Просмотреть блог'), 'url' => array(
            '/blog/BlogAdmin/view',
            'id' => $model->id
        )),
        array('icon' => 'trash', 'label' => Yii::t('blog', 'Удалить блог'), 'url' => '#', 'linkOptions' => array(
            'submit' => array('delete', 'id' => $model->id),
            'confirm' => Yii::t('blog', 'Вы уверены, что хотите удалить блог?')
        )),
    );
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('blog', 'Редактирование') . ' ' . Yii::t('blog', 'блога'); ?><br />
        <small>&laquo;<?php echo $model->name; ?>&raquo;</small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>