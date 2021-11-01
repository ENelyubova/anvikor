<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START);?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?= $this->title;?></title>
    <meta name="description" content="<?= $this->description;?>" />
    <meta name="keywords" content="<?= $this->keywords;?>" />

    <link rel="apple-touch-icon" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $this->mainAssets; ?>/images/favicon/apple-touch-icon-180x180.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

    <?php if ($this->canonical) : ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>

    <?php
        Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
        Yii::app()->getClientScript()->registerCssFile('https://unpkg.com/aos@2.3.1/dist/aos.css');
        Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/main.min.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/modernizr.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile('https://unpkg.com/aos@2.3.1/dist/aos.js', CClientScript::POS_END);

    ?>

    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>

    <?php Yii::app()->getClientScript()->registerScript("js-aos-init","AOS.init();"); ?>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        setTimeout( function() {
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(72166894, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });}, 5000 );
    </script>

    <noscript><div><img src="https://mc.yandex.ru/watch/72166894" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


    <script>
        setTimeout( function() {
            window.replainSettings = { id: '823613ed-6186-4311-b9f3-1f1a11775c3e' };
            (function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
            var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
            })('https://widget.replain.cc/dist/client.js');
        }, 5000 );
    </script>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END);?>
</head>

<body class="page_fix">

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_START);?>

<div class="container-site">
    <div class="wrapper">
        <div class="wrap1">
            <?php $this->renderPartial('//layouts/_header'); ?>
            <?= $this->decodeWidgets($content); ?>
        </div>
        
        <div class="wrap2">
            <?php $this->renderPartial('//layouts/_footer'); ?>
        </div>
    </div>
</div>

<!-- Перезвонить -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
    'id' => 'callbackModal',
    'formClassName' => 'StandartForm',
    'buttonModal' => false,
    'titleModal' => 'Оставьте заявку',
    'subTitleModal' => 'и мы Вам перезвоним!',
    'showCloseButton' => false,
    'isRefresh' => true,
    'showAttributeEmail' => false,
    'showAttributeBody' => false,
    'eventCode' => 'ostavit-zayavku',
    'successKey' => 'ostavit-zayavku',
    'modalHtmlOptions' => [
        'class' => 'modal-my modal-my-xs',
    ],
    'formOptions' => [
        'htmlOptions' => [
            'class' => 'form-my',
        ]
    ],
    'modelAttributes' => [
        'theme' => 'Обратная связь',
    ],
]) ?>
<!-- Написать -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
    'id' => 'writeUsModal',
    'formClassName' => 'StandartForm',
    'buttonModal' => false,
    'titleModal' => 'Напишите нам',
    'subTitleModal' => 'и мы Вам перезвоним!',
    'showCloseButton' => false,
    'isRefresh' => true,
    'showAttributeEmail' => false,
    'showAttributeBody' => true,
    'eventCode' => 'napisat-nam',
    'successKey' => 'napisat-nam',
    'modalHtmlOptions' => [
        'class' => 'modal-my modal-my-xs',
    ],
    'formOptions' => [
        'htmlOptions' => [
            'class' => 'form-my',
        ]
    ],
    'modelAttributes' => [
        'theme' => 'Обратная связь',
    ],
]) ?>
<!-- Заказать -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
   'id' => 'hightOrder',
   'formClassName' => 'LightForm',
   'buttonModal' => false,
   'titleModal' => 'Заказать <span>товар</span>',
   'subTitleModal' => 'Оставьте заявку, и мы Вам перезвоним!',
   'showCloseButton' => false,
   'isRefresh' => true,
   'showAttributeBody' => true,
   'eventCode' => 'bystryy-zakaz',
   'successKey' => 'bystryy-zakaz',
   'modalHtmlOptions' => [
       'class' => 'modal-my modal-my-xs',
   ],
   'formOptions' => [
       'htmlOptions' => [
           'class' => 'form-my',
       ]
   ],
   'modelAttributes' => [
       'theme' => '',
   ],
   'view' => 'light-feedback-widget'
]) ?>

<div id="messageModal" class="modal modal-my modal-my-xs fade" role="dialog">
    <div class="modal-dialog modal-dialog-msg" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal-header">
                        <!-- <div data-dismiss="modal" class="modal-close"><i class="fa fa-times" aria-hidden="true"></i><div></div></div> -->
                        <div class="modal-my-heading">
                            <h3>Уведомление</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        Ваша заявка успешно отправлена.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $fancybox = $this->widget(
    'gallery.extensions.fancybox3.AlFancybox', [
        'target' => '[data-fancybox]',
        'lang'   => 'ru',
        'config' => [
            'animationEffect' => "fade",
            'buttons' => [
                "zoom",
                "close",
            ]
        ],
    ]
); ?>

<div class="ajax-loading"></div>
<!-- container end -->

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>
</body>
</html>