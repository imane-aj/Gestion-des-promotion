<?php 
require_once("../businessLayer/promoManagement.php");
  $promoManagement = new promoManagement( $_POST);
  $data = $promoManagement->getAll();

  if(isset($_GET['id'])){
    $id =$_GET['id'];
    $promoManagement->deletePromo($id);

    header('Location: index.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion des promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .hero{
        margin-top: 3em;
        text-align:center;
      }
      .btn{
        margin-bottom: 3em;
        display: flex;
        justify-content: space-between;
      }
      .btn button{
        border: unset;
        border-radius: 7px;
        padding: 11px 36px;
      }
      .btn button:first-child{
        background: #52c5d647;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="hero">
            <div class="btn">
              <button>Ajouter promotion</button> 
              <button>Chercher Promotion</button> 
            </div>
            <div class="show">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Pormotion</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $value){ ?>
    <tr>
      <th scope="row"><?php echo $value->getPromo() ?></th>
      <td><a class="btn btn-success" href="update.php?id=<?php echo $value->getId() ?>">Update</a></td>
      <td><a class="btn btn-danger" href="index.php?id=<?php echo $value->getId() ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>