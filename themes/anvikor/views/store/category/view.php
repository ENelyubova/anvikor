<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
// Yii::app()->getClientScript()->registerCssFile( $mainAssets . '/css/store-frontend.css' );
// Yii::app()->getClientScript()->registerScriptFile( $mainAssets . '/js/store.js' );
Yii::app()->getClientScript()->registerScriptFile( $mainAssets . '/js/index.js', CClientScript::POS_END);
/* @var $category StoreCategory */

$this->title = $category->getMetaTitle();
$this->description = $category->getMetaDescription();
$this->keywords = $category->getMetaKeywords();
$this->canonical = $category->getMetaCanonical();

$this->breadcrumbs = [ Yii::t( "StoreModule.store", "Catalog" ) => [ '/store/product/index' ] ];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs( false )
);

?>
<!-- Конкретная категория -->
<div class="store-container store-container-category">
    <div class="content-site">
        <div class="breadcrumbs">
            <div class="row">
                <div class="col-xs-12">
                    <?php $this->widget(
                        'bootstrap.widgets.TbBreadcrumbs',
                        [
                          'links' => $this->breadcrumbs,
                        ]
                    );?>
                </div>
            </div>
        </div>
        <h1 class="heading heading-catalog heding-mobile-visible"><?= $category->getTitle(); ?></h1>


        <div class="catalog-wrapper fl fl-w fl-jc-sb">
            <div class="catalog-wrapper__sidebar">
                <div class="category-sidebar-mobile-hidden">
                    <?php $this->widget('application.modules.store.widgets.CategoryWidget', [
                        'depth' => 1,
                        'view' => 'category-sidebar-widget'
                    ]); ?>
                </div>
                <div class="category-sidebar-mobile-visible">
                    <?php $this->widget('application.modules.store.widgets.CatalogWidget', [
                        'category_id' => $category->id,
                        'view' => 'child-category-page'
                    ]); ?>
                </div>
            </div><!-- catalog-wrapper__sidebar -->

            <div class="catalog-wrapper__content">
                <h1 class="heading heading-catalog heding-mobile-hidden"><?= $category->getTitle(); ?></h1>
                <?php if ($dataProvider->itemCount): ?>
                    <div class="filter-wrapper">
                        <!-- <div class="filter-wrapper__close"><div></div></div> -->
                        <form id="store-filter" name="store-filter" method="get">
                            <div class="filter-attributes fl fl-w fl-al-it-c">
                                <div class="sort-box-wrapper filter-inline box-wrapper fl">
                                    <div class="sort-box-wrapper__header box-wrapper__header fl fl-ai-c">
                                        <p>Сортировать:</p>
                                        <span class="res-link"> по возрастанию цены</span>
                                    </div>

                                    <div class="sort-box-wrapper__body box-wrapper__body">
                                        <div class="sort-box-wrapper__link box-wrapper__link" data-href="price_result.desc">
                                            <span>по убыванию цены</span>
                                        </div> 
                                        <div class="sort-box-wrapper__link box-wrapper__link" data-href="price_result">
                                            <span>по возрастанию цены</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sort-box-wrapper filter-inline box-wrapper fl">
                                    <div class="sort-box-wrapper__header box-wrapper__header fl fl-ai-c">
                                        <p>Группировать:</p>
                                        <span class="res-link"> по наличию</span>
                                    </div>

                                    <div class="sort-box-wrapper__body box-wrapper__body">
                                        <div class="sort-box-wrapper__link box-wrapper__link" data-href="is_stock.desc">
                                            <span>по наличию</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>

                <div id="product-scroll">
                    <?php $this->widget(
                        'bootstrap.widgets.TbListView',
                        [
                            'dataProvider' => $dataProvider,
                            'id' => 'product-box',
                            'itemView' => '//store/product/_item',
                            'summaryText' => '',
                            'enableHistory' => true,
                            'cssFile' => false,
                            'itemsCssClass' => 'product-box product-list fl fl-w',
                            'summaryText'=>"Товаров на странице: <span>{start} - {end} из {count}</span>",
                            'htmlOptions' => [
                              'class' => 'product-box-listView'
                            ],
                            'viewData' => [
                                'isButton' => true
                            ],
                            'emptyText'=>'В данной категории нет товаров.',
                            'summaryText'=>"Товары <span>{start} - {end} из {count}</span>",
                            'template'=>'
                                {items}
                                {pager}
                            ',
                            'ajaxUpdate'=>true,
                            'enableHistory' => false,
                            /*
                            'sortableAttributes' => [
                                'name',
                                'price',
                            ],*/
                        ]
                    ); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="writetous pt80 pb80">
      <div class="content-site">
          <div class="writetous-block fl fl-w">
              <div class="writetous-text">
                  <div class="writetous__title">Есть вопросы <br>или нужна консультация?</div>
                  <div class="writetous__body">Напишите нам или свяжитесь любым удобным <br>для вас способом</div>
                  <a href="#writeUsModal" data-toggle="modal" class="btn btn-orange">Написать нам</a>
              </div>
              <div class="writetous-btn">
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
              </div>
          </div>
      </div>
    </div>
</div>


