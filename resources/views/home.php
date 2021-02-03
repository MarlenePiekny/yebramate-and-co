
<section class="row">
    <?php foreach ($products as $product): ?>
        <aside class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $product->title ?></h5>
                    <a href="/index.php?action=product&id=<?= $product->id?>" class="btn btn-primary">Voir le produit</a>
                </div>
            </div>
        </aside>
    <?php endforeach; ?>
</section>
