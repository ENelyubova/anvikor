<div class="sertificate-block">
    <?php $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider'  => $dataProvider,
            'itemView'      => '_slick-sert',
            'template'      => "{items}",
               'itemsCssClass' => $this->slickClass,
            'itemsTagName'  => 'div'
        ]
    ); ?>
    <div class="slider-arrows">
        <div class="content-site">
            <div class="arrows"></div>
        </div>
    </div>
</div>


