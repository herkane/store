<div class="container">
    <div class="hero">
        <img src="./host.png" class="img" alt="Offer image">
        <div class="details">
            <h1><?php echo $offerTitle ?></h1>
            <ul>
                <li>Descirption included 1 Descirption included 1</li>
                <li>Descirption included 1 Descirption included 1</li>
                <li>Descirption included 1 Descirption included 1</li>
                <li>Descirption included 1 Descirption included 1</li>
                <li>Descirption included 1 Descirption included 1</li>
            </ul>
            <div class="price">
                <h1><?php echo $price ?> MAD</h1>
                <div class="buttons">
                    <button class="demo">Demo</button>
                    <button id=<?php echo $id ?> onclick=addToCart(this.id)>Add to cart</button>
                </div>
            </div>
        </div>
    </div>
</div>

