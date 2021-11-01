<?php if ($dataProvider->itemCount): ?>
    <?php
        $this->widget(
        'application.components.FtListView', [
        'id' => 'using-block',
        'itemView' => '_image',
        'dataProvider' => $dataProvider,
        'itemsCssClass' => 'using-block',
        'template' => '{items}',
    ]); ?>
<div class="using__item using-item">1</div>
<div class="using__item using-item">2</div>
<?php endif; ?>