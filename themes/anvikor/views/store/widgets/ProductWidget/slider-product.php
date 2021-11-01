<?php if($products): ?>
	<?php foreach($products as $data): ?>
		<?php $this->render('../../product/_slide-item', ['data'=>$data, 'button'=>true]); ?>
	<?php endforeach; ?>
<?php endif; ?>