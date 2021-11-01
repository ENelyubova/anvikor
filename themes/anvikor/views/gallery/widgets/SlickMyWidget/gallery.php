<div class="gallery-block">
    <?php $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider'  => $dataProvider,
            'itemView'      => '_slick-gallery',
            'template'      => "{items}",
               'itemsCssClass' => $this->slickClass,
            'itemsTagName'  => 'div'
        ]
    ); ?>
    <div class="gallery-arrows">
        <div class="content-site">
            <div class="arrows"></div>
        </div>
    </div>
</div>


