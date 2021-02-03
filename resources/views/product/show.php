//page produit avec formulaire
<main>
    <div>
        <h1><?= $product['title'] ?></h1>
    </div>
    <article>
        <div>
            <img src="storage/app/product/mate.jpg">
        </div>
        <p><?= $product['description'] ?></p>
        <p><?= $product['price'] * $product['vat'] ?></p>
        <form action="/index.php?action=cart" method="post">
            <div class="mb-3">
                <label for="number" class="form-label">quantité</label>
                <input type="number" class="form-control" name="number">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter au panier</button>
        </form>
    </article>
</main>