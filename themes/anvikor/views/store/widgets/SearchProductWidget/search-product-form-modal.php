<div id="search-form-Modal" class="search-form-Modal modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <?php $form = $this->beginWidget(
                    'bootstrap.widgets.TbActiveForm',
                    [
                        'action' => ['/store/product/index'],
                        'method' => 'GET',
                    ]
                ) ?>
                    <div class="input-group">
                        <?= CHtml::textField(
                            AttributeFilter::MAIN_SEARCH_QUERY_NAME,
                            CHtml::encode(Yii::app()->getRequest()->getQuery(AttributeFilter::MAIN_SEARCH_QUERY_NAME)),
                            ['class' => 'form-control', 'placeholder' => 'Поиск', 'autocomplete' =>'off']
                        ); ?>

                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                        <div class="search-form-Modal__close" data-dismiss="modal">
                            <svg class="filter-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="132.284 123.337 330.712 330.699" enable-background="new 132.284 123.337 330.712 330.699" xml:space="preserve">
                            <path fill="none" d="M326.888,288.689l130.049-130.048c8.079-8.073,8.079-21.172,0-29.245c-8.082-8.08-21.165-8.08-29.245,0
                                L297.644,259.445L167.588,129.397c-8.079-8.08-21.164-8.08-29.244,0c-8.079,8.073-8.079,21.171,0,29.245L268.4,288.689
                                L138.344,418.738c-8.079,8.072-8.079,21.172,0,29.244c4.04,4.033,9.335,6.055,14.622,6.055c5.288,0,10.583-2.021,14.622-6.063
                                l130.056-130.047l130.048,130.047c4.038,4.041,9.333,6.063,14.621,6.063s10.583-2.021,14.624-6.063
                                c8.079-8.072,8.079-21.17,0-29.244L326.888,288.689z"></path>
                            </svg>
                        </div>
                    </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>