

    <div class="home_sobre">
        <img src="" width="150" height="150"/>
        <h4>Sobre</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>

    <div class="home_portfolio">
        <div class="jumbotron">
            <h4>Portfolio</h4>
        </div>

        <?php foreach($portfolio as $item): ?>
            <div class="portfolio_item">
                <img src="assets/images/<?php echo $item['imagem']; ?>" width="200px" height="150px">
            </div>  
        <?php endforeach; ?>
        <div style="clear:both"></div>

    </div>