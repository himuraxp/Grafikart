<ul>
	<?php foreach ($db->query('SELECT * FROM articles') as $post): ?>
		<li>
			<a href="index.php?p=post&id=<?= $post->id; ?>"><?= $post->title; ?></a> 
		</li>
	<?php endforeach; ?>
</ul>
