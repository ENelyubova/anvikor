<div class="footer">
    <div class="content-site">
        <div class="footer-panel fl fl-jc-sb">
            <div class="footer-logo footer-item">
                <div class="logo">
                    <a href="/">
                        <?php if (Yii::app()->hasModule('contentblock')) : ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo']); ?>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="footer-info"> 
                    © <?= date('Y'); ?> ООО “Анвикор” <br>
                    Все права защищены, любое копирование с сайта возможно только с разрешения владельца сайта
                </div>
                <div class="dc56">
                    <p>Разработно</p>
                    <a href="https://dcmedia.ru/"></a>
                </div>
            </div>
            <div class="footer-menu footer-item">
                <div class="footer-heading">Покупателям</div>
                <?php if (Yii::app()->hasModule('menu')) : ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                <?php endif; ?>
            </div>
            <div class="footer-menu footer-item">
                <div class="footer-heading footer-heading-hide">Контакты</div>
                <ul>
                    <li><a class="listItemLink" href="#writetous">Контакты</a></li>
                    <li><a href="/uploads/politikaconf.rtf" target="_blank">Правила оплаты, безопасность платежей и конфиденциальность информации</a></li>
                </ul>
            </div>
            
            <div class="footer-contacts footer-item">
                <div class="footer-heading">Мы на связи</div>
                <div class="footer-contacts-item">
                    <span class="delivery-text">Бесплатная доставка по Челябинску</span>
                </div>
                <div class="footer-contacts-item footer-contacts-phone">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
                    <?php endif; ?>
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                        <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                    <?php endif; ?>
                </div>

                <div class="footer-contacts-item">
                    <button class="btn btn-green" data-toggle="modal" data-target="#callbackModal" tabindex="0">Заказать звонок</button>
                </div>

                <div class="footer-contacts-item">
                    <a href="#" class="header-quest__link fl fl-ai-c" data-toggle="modal" data-target="#writeUsModal">
                        <img src="<?= $this->mainAssets . '/images/icon/mail.svg' ?>" alt="">                      
                        <span>Задать вопрос</span>
                    </a>
                </div>

            </div>
        </div>
        
        <div class="footer-bottom fl fl-ai-c fl-jc-sb">
            <div class="footer-info footer-info-bottom"> 
                © <?= date('Y'); ?> <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'legal-info']); ?>
                <?php endif; ?>
            </div>
            <div class="footer-payment fl fl-ai-c">
                <img src="<?= $this->mainAssets . '/images/icon/master.svg' ?>" alt="">  
                <img src="<?= $this->mainAssets . '/images/icon/visa.svg' ?>" alt="">  
                <img src="<?= $this->mainAssets . '/images/icon/mir.svg' ?>" alt="">  
            </div>
        </div>
    </div>
</div>
