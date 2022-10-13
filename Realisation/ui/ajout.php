<?php 
    require_once("../businessLayer/promotionBLL.php");
    if(!empty($_POST)){
      $validation = new promotionBLL($_POST);
      $validation->insert();
    }
    include('layouts/head.html');
?>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="hero">
            <h4>Ajouter promotion</h4>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="input-group">
                      <label for="promo">Nom de la promotion</label>
                      <input type="text" name="promo" id="promo">
                      <button type="submit">Envoyer</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  <?php include('layouts/footer.html'); ?>