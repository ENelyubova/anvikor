<div>
   <div class="slider-product__preview slider-product-preview fl fl-jc-c">
        <picture class="absolute-img-pictur">
            <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'icon'); ?>" type="image/webp">
            <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'icon'); ?>">

            <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(350, 230, true, null,'icon'); ?>" type="image/webp">
            <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(350, 230, true, null,'icon'); ?>">

            <img src="<?= $data->getImageNewUrl(0, 0, true, null,'icon'); ?>" alt="<?= $data->title; ?>">
        </picture>
    </div> 
</div>
