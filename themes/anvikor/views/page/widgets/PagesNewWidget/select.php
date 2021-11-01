<?php if($pages) : ?>
    <div class="select-block fl fl-w fl-ai-c fl-jc-sb">
        <div class="select-block__text">
        	<div class="select-block__title title color-white" data-aos="fade-right"><?= $pages->getAttributeValue('box1')['name']; ?></div>
        	<div class="subtitle color-white" data-aos="fade-up"><?= $pages->getAttributeValue('box1')['value']; ?></div>
            <div class="select-block__btn" data-aos="fade-up">
                <a href="#" class="btn btn-white" data-toggle="modal" data-target="#callbackModal">Перезвоните мне</a>
            </div>
        </div>
        <div class="select-block__img">
        	<img src="/uploads/image/select/select-image.png" alt="">  
        </div>
    </div>
<?php endif; ?>


