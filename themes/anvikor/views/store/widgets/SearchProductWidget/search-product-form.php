<section class="catalog-filter">
    <?php $form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm',
        [
            'action' => ['/store/product/index'],
            'method' => 'GET',
        ]
    ) ?>
    <div class="search-group">
        <button type="submit" class="btn btn-search fl fl-ai-c fl-jc-c">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M17.8901 16.8296L12.6613 11.6007C13.653 10.3764 14.25 8.81977 14.25 7.12503C14.25 3.19631 11.0537 0 7.12499 0C3.19627 0 0 3.19631 0 7.12503C0 11.0537 3.19631 14.2501 7.12503 14.2501C8.81977 14.2501 10.3764 13.653 11.6007 12.6613L16.8296 17.8902C16.9761 18.0366 17.2135 18.0366 17.36 17.8902L17.8902 17.3599C18.0366 17.2135 18.0366 16.976 17.8901 16.8296ZM7.12503 12.75C4.02322 12.75 1.50001 10.2268 1.50001 7.12503C1.50001 4.02322 4.02322 1.50001 7.12503 1.50001C10.2268 1.50001 12.75 4.02322 12.75 7.12503C12.75 10.2268 10.2268 12.75 7.12503 12.75Z" fill="#333333"/>
            </svg>
        </button>
        <?= CHtml::textField(
            AttributeFilter::MAIN_SEARCH_QUERY_NAME,
            CHtml::encode(Yii::app()->getRequest()->getQuery(AttributeFilter::MAIN_SEARCH_QUERY_NAME)),
            ['class' => 'form-control', 'placeholder'=>'Я хочу купить...']
        ); ?>
    </div>
    <?php $this->endWidget(); ?>
</section>
