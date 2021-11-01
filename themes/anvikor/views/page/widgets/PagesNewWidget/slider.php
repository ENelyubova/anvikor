<?php if($pages) : ?>
    <div>
        <div class="slider__title"><?= $pages->title; ?></div>
        <div class="fl">
            <div class="slider-left fl fl-d-c fl-jc-sb">
                <div>
                    <div class="subtitle"><?= $pages->body_short; ?></div>
                    <div class="slider__btn fl fl-w fl-ai-c">
                        <a href="#" class="btn btn-green" data-toggle="modal" data-target="#callbackModal">Заказать сейчас</a>
                        <a href="#" class="btn btn-white" data-toggle="modal" data-target="#writeUsModal">Консультация</a>
                    </div>
                </div>
                <div class="subtitle">Эффективная защита <br>и очистка воздуха от вирусов <br>и бактерий на <strong>99,9%</strong></div>
            </div>
            <div class="slider-preview slick-slider">
                <?php $this->widget('application.modules.store.widgets.ProductWidget', [
                    'view' => 'slider-preview',
                    'conditionSlide' => true
                ]); ?>
            </div>
        </div>
    </div>
<?php endif; ?>



