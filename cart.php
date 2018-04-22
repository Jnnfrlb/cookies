<?php
require 'inc/head.php';
require 'cookies.php';
if (!isset($_SESSION['loginname']))
{
    header('Location:login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
      <h1>In your cart :</h1><br>
        <?php

        if ($_SESSION['cart'] == NULL) {
          echo "<h2>Your cart is empty</h2>";
        }
        
        foreach ($_SESSION['cart'] as $key => $panier)
        {
            if ($panier == 46) {
                echo '<figure class="thumbnail text-center col-md-3 col-sm-4 col-xs-6">
                        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                            <figcaption class="caption">
                                <h3>Pecan Nuts</h3>
                            </figcaption>
                        </figure>';
            } elseif ($panier == 36) {
                echo '<figure class="thumbnail text-center col-md-3 col-sm-4 col-xs-6">
                        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                            <figcaption class="caption">
                                <h3>Chocolate chips</h3>
                            </figcaption>
                        </figure>';
            } elseif ($panier == 58) {
                echo '<figure class="thumbnail text-center col-md-3 col-sm-4 col-xs-6">
                        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                            <figcaption class="caption">
                                <h3>Chocolate Cookie</h3>
                            </figcaption>
                        </figure>';
            }elseif ($panier == 32) {
                echo '<figure class="thumbnail text-center col-md-3 col-sm-4 col-xs-6">
                        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                            <figcaption class="caption">
                                <h3>M&M\'s&copy; cookies</h3>
                            </figcaption>
                        </figure>';
            }
        }
        ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
