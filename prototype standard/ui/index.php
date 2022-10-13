<?php 
require("../businessLayer/promotionBLL.php");

  $promoBLL = new promotionBLL( $_POST);
  $data = $promoBLL->getAll();

  if(isset($_GET['id'])){
    $id =$_GET['id'];
    $promoBLL->deletePromo($id);

    header('Location: index.php');
  }
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion des promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <style>
      .hero{
        margin-top: 3em;
        text-align: center;
        border: 1px solid #e5e5e5;
        padding: 3px 33px;
      }
      .btn{
        margin-bottom: 2em;
        display: flex;
        justify-content: space-between;
      }
      /* .btn button{
        border: unset;
        border-radius: 7px;
        padding: 11px 36px;
      } */
      .btn button:first-child{
        background: #52c5d647;
      }
      table {
          border-collapse: unset;
      }
      .fa-trash-can{
        color:red;
      }
      .fa-pen-to-square{
        color: green;
        margin-right: 2em;
      }
      form input{
        position: relative;
      }
      form button{
        position: absolute;
        margin-left: 10em;
        border: unset;
        background:unset;
      }
      form button i{
        color: #008000;
      }
      .btn a {
        color: #6a6a6a;
        text-decoration:none;
      }
      .btn a i{
        border-radius: 50%;
        border: 1px solid;
        padding: 4px;
        color: blue;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="hero">
            <div class="btn">
              <a href="ajout.php"><i class="fa-regular fa-plus"></i> Promotion</a>
              <form class="d-flex" role="search">
                <input type="search" placeholder="Search" name="input" aria-label="Search" id="search">
                <button type="submit"><i class="fa-brands fa-searchengin"></i></button>
              </form> 
            </div>
            <div class="show">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Pormotion</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody id="result">
                  <?php foreach($data as $value){ ?>
                  <tr>
                    <td><?php echo $value->getPromo() ?></td>
                    <td>
                      <a href="update.php?id=<?php echo $value->getId() ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href="index.php?id=<?php echo $value->getId() ?>" onclick="return confirm('Are you sure?')"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
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