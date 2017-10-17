<?php
require 'inc/head.php';
if(empty($_SESSION['loginname'])) {
    header('Location: login.php');
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 cart_box">
            <div class="row">
                <h1>Your cart</h1>
            </div>
            <div class="row">
                <?php if(!empty($_COOKIE['cookie1'])) {
                echo $_COOKIE['cookie1'] . " cookie(s): Pecan nuts";
                }
                ?>
            </div>
            <div class="row">
                <?php if(!empty($_COOKIE['cookie2'])) {
                    echo $_COOKIE['cookie2'] . " cookie(s): Chocolate chips";
                }
                ?>
            </div>
            <div class="row">
                <?php if(!empty($_COOKIE['cookie3'])) {
                    echo $_COOKIE['cookie3'] . " cookie(s): Chocolate cookie";
                }
                ?>
            </div>
            <div class="row">
                <?php if(!empty($_COOKIE['cookie4'])) {
                    echo $_COOKIE['cookie4'] . " cookie(s): M&M's&copy; cookies";
                }
                ?>
            </div>
            <div class="row">
                <h3>Total: <?= $total ?? 0 ?></h3>
            </div>
        </div>
    </div>

</section>

<?php require 'inc/foot.php'; ?>
