
<main>
    <div>
        <h1><?= $product['title'] ?></h1>
    </div>
    <article>
        <div>
            <img src="storage/app/product/mate.jpg">
        </div>
        <p><?= $product['description'] ?></p>
        <p><?= priceWithVat($product['price'], $product['vat']) ?></p>
        <form action="/index.php?action=cart" method="post">
            <div class="mb-3">
                <label for="number" class="form-label">quantité</label>
                <input type="number" name="number">
            </div>
            <input type="hidden" name="id" value="<?= $product['id'] ?> ">
            <button type="submit" class="btn btn-primary" name="idProduct" >Ajouter au panier</button>
        </form>
    </article>
</main>