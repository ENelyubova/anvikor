<div class="header">
  <div class="content-site">
    <div class="header-main fl fl-ai-c">
      <div class="header__logo">
        <a href="/">
          <?php if (Yii::app()->hasModule('contentblock')) : ?>
            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo']); ?>
          <?php endif; ?>
        </a>
      </div><!-- logo -->
      <div class="header-menu fl fl-ai-c">
        <?php if (Yii::app()->hasModule('menu')) : ?>
            <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
        <?php endif; ?>
      </div><!-- menu -->
      <div class="header__quest header-quest fl fl-ai-c fl-jc-c">
        <a href="#" class="header-quest__link fl fl-ai-c fl-jc-c" data-toggle="modal" data-target="#writeUsModal">
          <img src="<?= $this->mainAssets . '/images/icon/mail.svg' ?>" alt="">                      
          <span>Задать вопрос</span>
        </a>
      </div><!-- btn -->
      <div class="mobile-panel">
        <div class="m-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <div class="mobile-menu">
            <div class="m-menu-buttons">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="mobile-content">
              <?php if (Yii::app()->hasModule('menu')) : ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
              <?php endif; ?>
              <div class="mobile-content__email mobile-content-item">
                <?php if (Yii::app()->hasModule('contentblock')) : ?>
                  <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                <?php endif; ?>
              </div>
              <div class="mobile-content__mode mobile-content-item">
                <?php if (Yii::app()->hasModule('contentblock')) : ?>
                  <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
                <?php endif; ?>
              </div>
              <div class="mobile-content__phone mobile-content-item">
                <?php if (Yii::app()->hasModule('contentblock')) : ?>
                  <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                <?php endif; ?>
              </div>
              <a href="#" class="mobile-content__btn btn btn-green" data-toggle="modal" data-target="#callbackModal">Заказать звонок</a>
            </div>
        </div>
    </div><!-- mobile-panel -->
      <div class="header__phone header-phone">
        <span class="delivery-text">Бесплатная доставка по Челябинску</span>
        <div class="header-phone__mode">
          <?php if (Yii::app()->hasModule('contentblock')) : ?>
            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'mode']); ?>
          <?php endif; ?>
        </div>
        <?php if (Yii::app()->hasModule('contentblock')) : ?>
          <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>