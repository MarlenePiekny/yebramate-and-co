<main>
    <h3>Panier</h3>
    <form action="/index.php?action=cart" method="post">
        <?php foreach ($_SESSION['cart'] as $id => $quantity) :
            $tabProduct = getProduct($bdd, $id);
            $priceWithVat = priceWithVat($tabProduct['price'], $tabProduct['vat']);
            ?>
            <div>
                <img src="...">
                <h4><?= $tabProduct['title'] ?></h4>
                <p><?= formatPrice($priceWithVat); ?></p>
                <p><input type="number" name="qte_<?= $id ?>" value="<?= $quantity ?>"</p>
                <p><?= formatPrice($priceWithVat * $quantity) ?></p>
                <a class="btn btn-primary" href="/index.php?action=cart&delete=<?= $id ?>">Supprimer</a>
            </div>
            <hr>
        <?php endforeach; ?>
        <button type="submit" name="updateCart">Modifier le panier</button>
    </form>
</main>