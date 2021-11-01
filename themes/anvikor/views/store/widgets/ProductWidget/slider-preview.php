<?php if($products): ?>
	<?php foreach($products as $data): ?>
		<?php $this->render('../../product/_slide-preview', ['data'=>$data, 'button'=>true]); ?>
	<?php endforeach; ?>
<?php endif; ?>