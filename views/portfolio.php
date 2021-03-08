
<div class="jumbotron">
	<h1>Todos meus trabalhos</h1>
</div>

<?php foreach($portfolio as $item): ?>
	<div class="portfolio_item">
		<img src="assets/images/<?php echo $item['imagem']; ?>" width="200px" height="150px">
	</div>  
	<?php endforeach; ?>
<div style="clear:both"></div>


		


        