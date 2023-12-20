<style>
    body {
        background-color: #f4f4f4;
    }

    section {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 4em;
    }

        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 1em;
            overflow: hidden;
            width: 300px;
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 1em;
        }

        .product-title {
            font-size: 1.2em;
            margin-bottom: 0.5em;
        }

        .product-price {
            color: #333;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
</style>


<section>
    <?php foreach ($products as $product) { ?>
        <div class="product">
        <a href="<?= $product['url_audi'] ?>" target="_blank" >
            <img src="<?= $product['url_img'] ?>" alt="Product Image"></a>
            <div class="product-info">
                <div class="product-title"><?= $product['product_name'] ?></div>
                <div class="product-price">$<?= $product['price'] ?></div>
            </div>
        </div>
    <?php } ?>
</section>

    

<footer>
    <p>&copy; 2023 Audi</p>
</footer>


