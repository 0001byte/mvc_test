<style>
	.posts {
	    width: 20%;
	    float: left;
	    margin-right: 20px;
	    margin-bottom: 20px;
	    padding: 10px;
	    box-sizing: border-box;
	    border: 1px solid #f1f1f1;
	}
</style>

<? foreach ($newsList as $newsItem): ?>
<div class="posts">
	<h2><?= $newsItem['title']; ?></h2>
	<i><?= $newsItem['short_content']; ?>... </i>
	<a href="<?= $newsItem['id']; ?>">see more</a>
</div>
<?php endforeach; ?>