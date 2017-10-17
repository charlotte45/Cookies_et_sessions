<?php require 'inc/head.php';
if(empty($_SESSION['loginname'])) {
    header('Location: login.php');
}
?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <form method="post" action="cookie_functions.php">
                <input type="hidden" name="id" value="1">
                <button type="submit" class="btn btn-warning">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
            <button type="button" class="btn btn-warning"><?= $_COOKIE['cookie1'] ?? 0 ?></button>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <form method="post" action="cookie_functions.php">
                <input type="hidden" name="id" value="2">
                <button type="submit" class="btn btn-warning">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
            <button type="button" class="btn btn-warning"><?= $_COOKIE['cookie2'] ?? 0 ?></button>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <form method="post" action="cookie_functions.php">
                <input type="hidden" name="id" value="3">
                <button type="submit" class="btn btn-warning">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
            <button type="button" class="btn btn-warning"><?= $_COOKIE['cookie3'] ?? 0 ?></button>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <form method="post" action="cookie_functions.php">
                <input type="hidden" name="id" value="4">
                <button type="submit" class="btn btn-warning">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
            <button type="button" class="btn btn-warning"><?= $_COOKIE['cookie4'] ?? 0 ?></button>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
