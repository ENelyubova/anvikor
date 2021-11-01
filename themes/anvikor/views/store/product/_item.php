<?php if(isset($isBig)) : ?>
    <?php $img = $data->getImageNewUrl(360, 447,false,null,'image'); ?>
    <?php $imgwebp = $data->getImageUrlWebp(360, 447,false,null,'image'); ?>
    <?php $class = 'product-item-big'; ?>
<?php elseif(isset($isSm)) : ?>
    <?php $img = $data->getImageNewUrl(360, 447,false,null,'image'); ?>
    <?php $imgwebp = $data->getImageUrlWebp(360, 447,false,null,'image'); ?>
    <?php $class = 'product-item-md'; ?>
<?php else : ?>
    <?php $img = $data->getImageNewUrl(360, 447,false,null,'image'); ?>
    <?php $imgwebp = $data->getImageUrlWebp(360, 447,false,null,'image'); ?>
    <?php $class = 'product-item-xs'; ?>
<?php endif; ?>

<?php $images = $data->getImages(); ?>

<div class="product__item product-item js-product-item <?= $class; ?>">
    <a data-toggle="modal" data-target="#product-box-modal<?=  $data->id; ?>" href="#">
        <div class="product-item__image product-item-image">
            <div>
                <picture class="fl fl-ai-c fl-jc-c js-product-image">
                    <source srcset="<?= $imgwebp; ?>" type="image/webp">
                    <img src="<?= $img; ?>" alt="<?= CHtml::encode($data->getImageAlt()); ?>" title="<?= CHtml::encode($data->getImageTitle()); ?>">
                </picture>
            </div>
            <?php if($images) : ?>
                <div class="imagesPr-list js-imagesPr-list fl">
                    <div 
                        class="imagesPr-list__item js-images-list" 
                        data-key="0"
                        data-src="<?= $img; ?>"
                        data-srcset="<?= $imgwebp; ?>">
                    </div>
                    <?php foreach ($images as $key => $image) : ?>
                        <?php if(isset($isBig)) : ?>
                            <?php $img = $image->getImageNewUrl(360, 447,false,null,'name'); ?>
                            <?php $imgwebp = $image->getImageUrlWebp(360, 447,false,null,'name'); ?>
                        <?php elseif(isset($isSm)) : ?>
                            <?php $img = $image->getImageNewUrl(360, 447,false,null,'name'); ?>
                            <?php $imgwebp = $image->getImageUrlWebp(360, 447,false,null,'name'); ?>
                        <?php else : ?>
                            <?php $img = $image->getImageNewUrl(360, 447,false,null,'name'); ?>
                            <?php $imgwebp = $image->getImageUrlWebp(360, 447,false,null,'name'); ?>
                        <?php endif; ?>
                        <div 
                            class="imagesPr-list__item js-images-list" 
                            data-key="<?= ($key + 1); ?>"
                            data-src="<?= $img; ?>"
                            data-srcset="<?= $imgwebp; ?>">
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif; ?>
        </div>
    </a>
    
    <div class="product-item__info fl fl-d-c fl-jc-sb">
        <div>
            <?php if($images) : ?>
                <div class="imagesDots-list fl fl-jc-c">
                    <div 
                        class="imagesDots-list__item js-dots-list" 
                        data-key="0">
                    </div>
                    <?php foreach ($images as $key => $image) : ?>
                        <div 
                            class="imagesDots-list__item js-dots-list" 
                            data-key="<?= ($key + 1); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="product-item__price product-price">
                <div class="product-price__actual"><?= (float)$data->getBasePrice() ?><i class="fa fa-rub" aria-hidden="true"></i></div>
            </div>
            <a data-jsmodal="#product-box-modal" data-content=".js-product-box<?=  $data->id; ?>" href="#">
                <div class="product-item__name product-name"><?= $data->name; ?></div>
            </a>
        </div>
        <a class="product-item__btn btn btn-green" data-toggle="modal" data-target="#product-box-modal<?=  $data->id; ?>" href="#">Заказать сейчас</a>
    </div>
</div>


<?php Yii::app()->getClientScript()->registerScript("filter-content-{$data->id}", "
    $('#product-box-modal{$data->id}').on('shown.bs.modal', function() {
        $(this).find('.image-preview').slick('refresh');
        $(this).find('.slick-initialized').slick('refresh');
    });
"); ?>