<style>
	.content {
	    background-color: #fbfbfb;
	}

	.post {
	    width: 50%;
	    background-color: #fff;
	    margin: auto;
	    min-height: 400px;
	    padding: 10px;
	    box-sizing: border-box;
	    border: 1px solid #f1f1f1;
	}

	.post b {
		display: block;
		margin-top: 10px;
	} 
</style>

<div class="content">
	<div class="post">
		<h2><?= $newsItem['title']; ?></h2>
		<i><?= $newsItem['short_content']; ?>... </i>
		<b><?= $newsItem['content']; ?>... </b>
		<br>
		<a href="<?= '/news/' ?>">go back</a>
	</div>
</div>
