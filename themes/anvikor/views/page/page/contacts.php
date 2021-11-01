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
<div class="page-txt page-contacts pb50">
    <div class="content-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
        <h2 class="heading title"><?= $model->title; ?></h2>
        <div class="page-contacts-body">
            <?= $model->body; ?>
            <div class="page-map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A615bb97912dd9fb56452886001799a6b5328d3531ce6c0463b263580ea04c078&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
