 <?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->meta_description) ? $page->meta_description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->meta_keywords) ? $page->meta_keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>

<div class="slider">
    <div class="content-site">
        <div class="slider-block fl fl-ai-c fl-jc-sb">
            <div class="slider__info">
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id'=> 1,
                    'view' => 'slider'
                ]); ?>
            </div>
            <div class="slider-carousel">
                <div class="slider__product slider-product slick-slider">
                    <?php $this->widget('application.modules.store.widgets.ProductWidget', [
                        'view' => 'slider-product',
                        'conditionSlide' => true
                    ]); ?>
                </div>
                <div class="arrows fl fl-ai-c"></div>
            </div>
        </div>
    </div>
</div>

<div class="product pb" id="products">
    <div class="content-site">
        <div class="fl fl-ai-c fl-jc-sb">
            <h2 class="title" data-aos="fade-right">Выберите <br>подходящую модель</h2>
            <!-- <div class="layout-buttons fl fl-ai-c">
                <div class="layout-buttons__item layout-icon list">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <rect y="18.689" width="25.3632" height="6.76364" rx="2" fill="#D9DDE8"/>
                        <rect width="25.3632" height="6.76364" rx="2" fill="#D9DDE8"/>
                        <rect y="9.34448" width="25.3632" height="6.76364" rx="2" fill="#D9DDE8"/>
                    </svg>
                </div>
                <div class="layout-buttons__item layout-icon grid active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <rect y="14.0908" width="11.2727" height="11.2727" rx="2" fill="#D9DDE8"/>
                        <rect width="11.2727" height="11.2727" rx="2" fill="#D9DDE8"/>
                        <rect x="14.0909" y="14.0908" width="11.2727" height="11.2727" rx="2" fill="#D9DDE8"/>
                        <rect x="14.0909" width="11.2727" height="11.2727" rx="2" fill="#D9DDE8"/>
                    </svg>  
                </div>
            </div> -->
        </div>
        <div class="product-block grid-view fl fl-w">
            <?php $this->widget('application.modules.store.widgets.ProductWidget', [
                'view' => 'product'
            ]); ?>
        </div>
    </div>
</div>
 
<div class="select">
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 1,
            'view' => 'select'
        ]); ?>
    </div>
</div>

<div class="about">
    <div class="about-wrapper">
        <div class="about-block fl fl-w">
            <div class="about-block__text">
                <div class="content-site">
                    <div class="about-text-abs">
                        <h2 class="sertificate__title title" data-aos="fade-right">Что вы получаете приобретая рециркулятор</h2>
                        <div class="subtitle" data-aos="fade-up">Эффективная защита и очистка воздуха от вирусов и бактерий на <strong>99,9%</strong></div>
                        <a href="" class="btn btn-green" data-toggle="modal" data-target="#writeUsModal" data-aos="fade-up">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="about-block__item hidden-mobile"></div>
            <div class="about-block__item">
                <img src="/uploads/image/gallery/1.jpg" alt="" class="absolute-img">
            </div>
            <div class="about-block__item">
                <img src="/uploads/image/gallery/2.jpg" alt="" class="absolute-img">
            </div>
            <div class="about-block__item about-item-img">
                <img src="/uploads/image/gallery/3.jpg" alt="" class="absolute-img">
                <div class="about-img__text">
                    <div class="about-img__title">Прибор безопасен для человека и животных</div>
                    <div class="about-img__prg">Работает в присутствии людей, животных, растений 24 часа</div>
                    <div class="about-img__title">Гарантия 12 месяцев</div>
                    <div class="about-img__prg">На все рециркуляторы гарантия 12 месяцев</div>
                    <div class="about-img__title">Доставка по всей России</div>
                    <div class="about-img__prg">Осуществляем доставку по всей стране</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gallery" id="gallery">
    <?php $this->widget("application.modules.gallery.widgets.SlickMyWidget", ['galleryId' => 2,
        'slickClass' => 'gallery-carousel slick-slider',
        'view' => 'gallery',
    ]); ?>
</div>

<div class="sertificate pt pb" id="sertificate">
    <div class="content-site">
        <div class="sertificate-title fl fl-ai-fe">
            <h2 class="sertificate__title title" data-aos="fade-right">Вся продукция сертифицирована</h2>
            <div class="subtitle" data-aos="fade-left">Соответсвует требованиям нормативных документов ГОСТ 31829-2012, ГОСТ Р 8.760-2011 ГОСТ Р 51321.1-2007, ГОСТ 30372-95</div>
        </div>
        <?php $this->widget("application.modules.gallery.widgets.SlickMyWidget", ['galleryId' => 1,
            'slickClass' => 'sertificate-carousel slick-slider',
            'view' => 'sertificate',
        ]); ?>
    </div>
</div>

<div class="using pt pb">
    <div class="content-site">
        <h2 class="title" data-aos="fade-right">Где используется <br>рециркулятор Anvikor</h2>
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 1,
            'view' => 'using'
        ]); ?>
    </div>
</div>

<div class="presents pt" id="presents">
    <div class="content-site"> 
        <div class="presents-block fl fl-jc-sb">
            <div class="presents__text fl fl-d-c">
                <div>
                    <h2 class="title">Узнайте больше <br>о продукции Anvikor</h2>
                    <div class="subtitle">Скачайте презентацию 
                    о бактерицидных рециркуляторах Anvikor 
                    и условиях сотрудничества с нами</div> 
                    <!-- <div class="presents__btn presents-download">
                        <a href="#" class="btn btn-green">Скачать презентацию</a>
                    </div> -->
                </div>
                <div>
                    <p>Лампы установлены в рециркуляторах 
                        от марки Philips изготовлены согласно техническому условию TP TC 004/2011 
                        “О безопасности низковольтного оборудования” и имеют сертификат соответствия RU.RU.10HX37</p>
                </div>
            </div>
            <div class="presents__img presents-img">
                <div class="presents-img__main">
                    <img src="<?= $this->mainAssets . '/images/presents/image.png' ?>" alt="">
                    <div class="presents-img__one presents-one">
                        <div class="presents-one__svg presents-svg active">
                            <img src="<?= $this->mainAssets . '/images/presents/1-1.svg' ?>" alt="" class='svg-1'>
                            <img src="<?= $this->mainAssets . '/images/presents/1-2.svg' ?>" alt="" class='svg-2'>
                            <img src="<?= $this->mainAssets . '/images/presents/1-2.svg' ?>" alt="" class='svg-3'>
                        </div>
                        <div class="presents-one__btn presents-btn active"></div>
                        <div class="presents-one__tooltip presents-tooltip active">
                            Воздух попадает в устройство через входные отверстия в корпусе, имеющие светозащитные решетки, которые исключают выход УФ излучения наружу
                        </div>
                    </div><!-- one -->
                    <div class="presents-img__two presents-two">
                        <div class="presents-two__svg presents-svg">
                            <img src="<?= $this->mainAssets . '/images/presents/2-1.svg' ?>" alt="" class='svg-1'>
                        </div>
                        <div class="presents-two__btn presents-btn "></div>
                        <div class="presents-two__tooltip presents-tooltip">
                            Ультрафиолет губителен для бактерий и вирусов: свет или уничтожает их напрямую, или разрушает ДНК и лишает способности 
                            к размножению.
                        </div>
                    </div><!-- two -->
                    <div class="presents-img__three presents-three">
                        <div class="presents-three__svg presents-svg">
                            <img src="<?= $this->mainAssets . '/images/presents/3-1.svg' ?>" alt="" class='svg-1'>
                            <img src="<?= $this->mainAssets . '/images/presents/3-2.svg' ?>" alt="" class='svg-2'>
                        </div>
                        <div class="presents-three__btn presents-btn "></div>
                        <div class="presents-three__tooltip presents-tooltip">
                            Очищенный воздух выходит через отверстия в устройстве, дополнительное описание работы устройства
                        </div>
                    </div><!-- three -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="qustions pt pb" id="qustions">  
    <div class="content-site">
        <h2 class="title" data-aos="fade-right">Часто задаваемые <br>вопросы (FAQ)</h2>
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 2,
            'view' => 'questions'
        ]); ?>
    </div>
</div>

<div class="writetous" id="writetous">
    <div class="content-site">
        <div class="writetous-block fl fl-ai-c fl-jc-sb">
            <div class="writetous__title writetous-item">
                <h2 class="title">Есть вопросы или вам нужна консультация?</h2>
                <div class="subtitle">Оставьте заявку и наши специалисты перезвонят вам в ближайшее время</div>
            </div>
            <div class="writetous__img writetous-item fl fl-jc-c">
                <img src="<?= $this->mainAssets . '/images/anvikor-footer.png' ?>" alt="">
            </div>
            <div class="writetous__contacts writetous-item">
                <div class="writetous__mode">
                    <?php if (Yii::app()->hasModule('contentblock')) : ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
                    <?php endif; ?>
                </div>
                <div class="writetous__phone">
                    <?php if (Yii::app()->hasModule('contentblock')) : ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                    <?php endif; ?>
                </div>
                <div class="writetous__email">
                    <?php if (Yii::app()->hasModule('contentblock')) : ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                    <?php endif; ?>
                </div>
                <a href="#" class="writetous__btn btn btn-green" data-toggle="modal" data-target="#writeUsModal">Написать нам</a>
            </div>
        </div>
    </div>
</div>