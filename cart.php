<?php require 'inc/head.php'; 
if (isset($_SESSION['cart'])){
    $panier = $_SESSION['cart'];
} else {
    $panier = null;
}
?>

<section class="cookies container-fluid">
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
            <?php if (isset($_SESSION['cart'])){ ?>
                <tr>
                    <th scope="row">#</th>
                    <td><?php echo $panier['article'] ?></td>
                    <td><?php echo $panier['description'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
