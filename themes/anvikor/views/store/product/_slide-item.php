<?php $images = $data->getImages(); ?>

<div>
    <div class="slider-product__info">
        <div class="slider-product__name"><?= $data->name; ?></div>
        <div class="slider-product__small">
            <picture class="absolute-img-pictur">
                <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'icon2'); ?>" type="image/webp">
                <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'icon2'); ?>">

                <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(100, 156, true, null,'icon2'); ?>" type="image/webp">
                <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(100, 156, true, null,'icon2'); ?>">

                <img src="<?= $data->getImageNewUrl(100, 156, true, null,'icon2'); ?>" alt="<?= $data->title; ?>">
            </picture>
        </div>
        <?php if ($data->short_description): ?>
            <div class="slider-product__params">
                <?= $data->short_description; ?>
            </div>
        <?php endif; ?>
        <div><a class="slider-product__btn btn" data-toggle="modal" data-target="#product-box-modal<?=  $data->id; ?>" href="#">Все параметры</a></div>
    </div>
</div>
