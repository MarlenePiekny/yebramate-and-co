<main>
    <h3>Panier</h3>
    <?php foreach ($_SESSION['cart'] as $id => $quantity) :
        $tabProduct = getProduct($bdd,$id);
        $priceWithVat = priceWithVat($tabProduct['price'], $tabProduct['vat']);
        ?>
        <div>
            <img src="...">
            <h4><?= $tabProduct['title'] ?></h4>
            <p><?= formatPrice($priceWithVat); ?></p>
            <p><?= $quantity ?></p>
            <p><?= formatPrice($priceWithVat*$quantity) ?></p>
        </div>
    <hr>
    <?php endforeach; ?>
</main>