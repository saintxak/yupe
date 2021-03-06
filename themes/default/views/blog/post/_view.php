<div class="post">
    <div class="title">
        <?php echo CHtml::link(CHtml::encode($data->title), array('/blog/post/show/', 'slug' => $data->slug)); ?>
    </div>
    <div class="author">
        Опубликовал <b><?php echo CHtml::link($data->createUser->nick_name,array('/user/people/userInfo', 'username' => $data->createUser->nick_name)); ?></b>
        в блоге "<?php echo CHtml::link($data->blog->name, array('/blog/blog/show/', 'slug' => $data->blog->slug)); ?>"
        дата: <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->publish_date, "short", null); ?>
    </div>
    <div class="content">
        <p><?php echo $data->quote; ?></p>
    </div>
    <div class="nav">
        <?php foreach($data->getTags() as $tag): ?>
            <?php echo CHtml::link(CHtml::encode($tag), array('/posts/', 'tag' => CHtml::encode($tag))); ?>
        <?php endforeach;?>
    </div>
</div>
