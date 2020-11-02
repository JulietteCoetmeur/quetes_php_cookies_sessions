<?php 
require 'inc/data/products.php';
require 'inc/head.php'; 
if (empty($_SESSION['loginname'])) {
    header('Location:login.php');
}

$panier = null;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!empty($_GET['article']) && !empty($_GET['description'])) {
        $panier = [
            'article' => $_GET['article'],
            'description' => $_GET['description']
        ];
        if ($panier) {
            $_SESSION['cart'] = $panier;
        }
    }
} 
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <form method="GET">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <input type="text" class="d-none" name="article" value="<?= $cookie['name']; ?>">
                            <p><?= $cookie['description']; ?></p>
                            <input type="text" class="d-none" name="description" value="<?= $cookie['description']; ?>">
                            <button type="submit" class="btn btn-primary">Add</a>
                        </figcaption>
                    </figure>
                </form>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
