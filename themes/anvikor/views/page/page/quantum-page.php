<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->meta_title ?: $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->meta_description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->meta_keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>

<div class="page-txt pb">
	<div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
    
        <div class="quantum-content page-wrapper">
            <h1 class="heading"><?= $model->title; ?></h1>
            <?php if($model->body) : ?>
                <div class="quantum-content-info fl fl-w fl-jc-sb">
                    <div class="quantum-content-text">
                        <?= $model->body; ?>
                    </div>
                    <?php if($model->getImageUrl()) : ?>
                        <div class="quantum-content-img fl fl-ai-fs fl-jc-e">
                            <?= CHtml::image($model->getImageUrl(), $model->title, ['class' => '']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($model->getAttributeValue('box1')['value']) : ?>
                <div class="quantum-content-box1">
                    <?= $model->getAttributeValue('box1')['value']; ?>
                </div>
            <?php endif; ?><!-- box1 -->

            <?php if($model->getAttributeValue('box2')['name']) : ?>
                <div class="quantum-content-box2 quantum-content-box">
                    <h2 class="heading"><?= $model->getAttributeValue('box2')['name']; ?></h2> 
                <?php endif; ?>

                <?php if($model->getAttributeValue('box2')['value']) : ?>
                    <?= $model->getAttributeValue('box2')['value']; ?>
                </div>
                <!-- <hr> -->
            <?php endif; ?><!-- box2 -->
            
            <?php if($model->getAttributeValue('box3')['value']) : ?>
                <div class="quantum-content-box3 quantum-content-box">
                    <?php if($model->getAttributeValue('box3')['name']) : ?>
                        <h2 class="heading"><?= $model->getAttributeValue('box3')['name']; ?></h2>
                    <?php endif; ?>

                    <?php if($model->getAttributeValue('box3')['value']) : ?>
                        <?= $model->getAttributeValue('box3')['value']; ?> 
                    <?php endif; ?>

                    <?php /*$this->widget('application.modules.video.widgets.VideoWidget', [
                        'category_id' => $model->id,
                        'view' => 'quantum-video',
                    ]);*/ ?>
                </div>
            <?php endif; ?><!-- box3 -->

            <?php if($model->getAttributeValue('box4')['value']) : ?>
                <div class="quantum-content-box4 quantum-content-box">
                    <?php if($model->getAttributeValue('box4')['name']) : ?>
                        <h2 class="heading"><?= $model->getAttributeValue('box4')['name']; ?></h2>
                    <?php endif; ?>

                    <?php if($model->getAttributeValue('box4')['value']) : ?>
                        <?= $model->getAttributeValue('box4')['value']; ?> 
                    <?php endif; ?>
                </div>
            <?php endif; ?><!-- box4 -->
            
            <?php if($model->body || $model->getAttributeValue('box1')['value']) : ?>
                <div class="quantum-content-btn">
                    <a href="#callbackModal" data-toggle="modal" class="btn btn-gradient">Записаться на обучение</a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php $this->widget("application.modules.gallery.widgets.GalleryWidget", ['galleryId' => 1,
     'view' => 'gallery',
]); ?>
<!-- 
<div class="record pt pb">
    <div class="content-site">
        <h2 class="heading">Хотите заниматься у нас?</h2>
        <div class="record-btn">
            <a href="#callbackModal" class="btn-record" data-toggle="modal">Записывайтесь!</a>
        </div>
    </div>
</div> -->
