<?php if($products): ?>
	<?php foreach($products as $data): ?>
		<?php $this->render('../../product/_item', ['data'=>$data, 'button'=>true]); ?>
	<?php endforeach; ?>

	<?php foreach($products as $data): ?>
		<?php $images = $data->getImages(); ?>
		<div id="product-box-modal<?= $data->id; ?>" class="modal modal-product fade" role="dialog">
		    <div class="modal-dialog" role="document">
		        <div class="modal-wrapper modal-content">
		            <div class="card-content">
				        <div data-dismiss="modal" class="modal-close"></div>
				        <div class="card-product">
				            <div class="card-product-top fl fl-w fl-jc-sb">
				                <div class="card-product__img card-item">
				                    <?php if (count($images) > 0) : ?>
				                        <div class="image-thumbnail image-thumbnail<?= $data->id ?> slick-slider">
				                            <div>
				                                <div class="image-thumbnail__item">
				                                    <div class="fl fl-ai-c fl-jc-c image-thumbnail__img">
				                                        <picture class="absolute-img-pictur">
						                                    <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
						                                    <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

						                                    <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(60, 75, true, null,'image'); ?>" type="image/webp">
						                                    <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(60, 75, true, null,'image'); ?>">

						                                    <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="<?= $data->title; ?>">
						                                </picture>
				                                    </div>
				                                </div>
				                            </div>
				                            <?php foreach ($images as $key => $image) : ?>
				                                <div>
				                                    <div class="image-thumbnail__item">
				                                        <div class="fl fl-ai-c fl-jc-c image-thumbnail__img">
				                                            
				                                        	<picture class="absolute-img-pictur">
							                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'name'); ?>" type="image/webp">
							                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'name'); ?>">

							                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(60, 75, true, null,'name'); ?>" type="image/webp">
							                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(60, 75, true, null,'name'); ?>">

							                                    <img src="<?= $image->getImageNewUrl(0, 0, true, null,'name'); ?>">
							                                </picture>
				                                        </div>
				                                    </div>
				                                </div>
				                            <?php endforeach ?>
				                        </div>
				                    <?php endif; ?>
				                    <div class="image-preview image-preview<?= $data->id ?> slick-slider">
				                        <div>
				                            <div class="image-preview__img">
				                                <picture class="absolute-img-pictur">
				                                    <source media="(min-width: 401px)" srcset="<?= $data->getImageUrlWebp(0, 0, true, null,'image'); ?>" type="image/webp">
				                                    <source media="(min-width: 401px)" srcset="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>">

				                                    <source media="(min-width: 1px)" srcset="<?= $data->getImageUrlWebp(310, 385, true, null,'image'); ?>" type="image/webp">
				                                    <source media="(min-width: 1px)" srcset="<?= $data->getImageNewUrl(310, 385, true, null,'image'); ?>">

				                                    <img src="<?= $data->getImageNewUrl(0, 0, true, null,'image'); ?>" alt="<?= $data->title; ?>">
				                                </picture>
				                            </div>
				                        </div>
				                        <?php foreach ($images as $key => $image) : ?>
				                            <div>
				                                <div class="image-preview__img">
				                                   
				                                    <picture class="absolute-img-pictur">
					                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageUrlWebp(0, 0, true, null,'name'); ?>" type="image/webp">
					                                    <source media="(min-width: 401px)" srcset="<?= $image->getImageNewUrl(0, 0, true, null,'name'); ?>">

					                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageUrlWebp(310, 385, true, null,'name'); ?>" type="image/webp">
					                                    <source media="(min-width: 1px)" srcset="<?= $image->getImageNewUrl(310, 385, true, null,'name'); ?>">

					                                    <img src="<?= $image->getImageNewUrl(0, 0, true, null,'name'); ?>">
					                                </picture>
				                                </div>
				                            </div>
				                        <?php endforeach ?>
				                    </div>
				                </div>
				                <div class="card-product__info card-info card-item">
				                    <div class="card-info__name"><?= $data->name; ?></div>
				                    <?php if ($data->is_special): ?>
				                        <div class="card-info__reserve">В наличии</div>
				                    <?php endif; ?>
				                    <div class="card-info__price fl fl-ai-bl">от <span><?= (float)$data->getBasePrice() ?></span><i class="fa fa-rub" aria-hidden="true"></i></div>
				                    <?php if($data->document) : ?>
				                        <div class="card-info__document">
				                            <a target="_blank" href="<?= $data->getDocumentUrl(); ?>"><span>Запросить КП <br>и оптовый прайс</span></a>
				                        </div>
				                    <?php endif; ?>
				                    <div class="card-info__info">
				                        <div class="card-title">Описание <?= $data->name; ?></div>
				                        <?= $data->description; ?>
				                    </div>
				                </div>
				            </div>
				            <?php if($data->data) : ?>
				                <div class="card-info-bottom">
				                    <div class="card-info__desc">
				                        <div class="card-title">Технические характеристики</div>
				                        <div class="card-table fl fl-w"><?= $data->data; ?></div>
				                    </div>
				                </div>
				            <?php endif; ?>
				        </div>
					</div>
		        </div>
		    </div>
		</div>

		<?php Yii::app()->getClientScript()->registerScript("modal-carousel-{$data->id}", "
		    $('.image-preview{$data->id}').slick({
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        fade: true,
		        infinite: false,
		        dots: false,
		        arrows: true,
		        asNavFor: '.image-thumbnail{$data->id}',
		        responsive: [
		            /*{
		                breakpoint: 640,
		                settings: {
		                    adaptiveHeight: true,
		                    arrows: false,
		                }
		            }*/
		        ]
		    });
		    $('.image-thumbnail{$data->id}').slick({
		    	infinite: false,
		        slidesToShow: 5,
		        slidesToScroll: 1,
		        vertical: true,
		        asNavFor: '.image-preview{$data->id}',
		        dots: false,
		        arrows: false,
		        focusOnSelect: true,
		        responsive: [
		            {
		                breakpoint: 1241,
		                settings: {
		                    slidesToShow: 4,
		                    slidesToScroll: 1,
		                }
		            },
		            {
		                breakpoint: 530,
		                settings: {
		                    slidesToShow: 5,
		                    slidesToScroll: 1,
		                }
		            }
		        ]
		    });
		"); ?>
	<?php endforeach; ?>
<?php endif; ?>