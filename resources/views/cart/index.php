<main>
    <h3>Panier</h3>
    <?php foreach ($_SESSION['cart'] as $product) :
        $tabProduct = getProduct($bdd, $product['id']);
        $priceWithVat = priceWithVat($tabProduct['price'], $tabProduct['vat']);
        ?>
        <div>
            <img src="...">
            <h4><?= $tabProduct['title'] ?></h4>
            <p><?= formatPrice($priceWithVat); ?></p>
            <p><?= $product['quantity'] ?></p>
            <p><?= formatPrice($priceWithVat*$product['quantity']) ?></p>
        </div>
    <hr>
    <?php endforeach; ?>
</main>