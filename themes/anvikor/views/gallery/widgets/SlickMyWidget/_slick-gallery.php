<div>
	<div class="gallery__item fl fl-ai-c fl-jc-c">
		<a data-fancybox="gallery" href="<?= $data->image->getImageUrl(); ?>">
			<picture class="absolute-img-picture">
	            <source media="(min-width: 401px)" srcset="<?= $data->image->getImageUrlWebp(0, 0, true, null,'file'); ?>" type="image/webp">
	            <source media="(min-width: 401px)" srcset="<?= $data->image->getImageNewUrl(0, 0, true, null,'file'); ?>">

	            <source media="(min-width: 1px)" srcset="<?= $data->image->getImageUrlWebp(400, 250, true, null,'file'); ?>" type="image/webp">
	            <source media="(min-width: 1px)" srcset="<?= $data->image->getImageNewUrl(400, 250, true, null,'file'); ?>">

	            <img src="<?= $data->image->getImageNewUrl(0, 0, false, null,'file'); ?>" alt="<?= $data->image->alt; ?>">
	        </picture>
		</div>
	</a>
</div>