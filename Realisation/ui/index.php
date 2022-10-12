<?php 
require("../businessLayer/promoManagement.php");
  $promoManagement = new promoManagement( $_POST);
  $data = $promoManagement->getAll();
  if(isset($_GET['id'])){
    $id =$_GET['id'];
    $promoManagement->deletePromo($id);
    header('Location: index.php');
  }
  include('layouts/head.html');
?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="hero">
            <div class="btn">
              <a href="ajout.php"><i class="fa-regular fa-plus"></i> Promotion</a>
              <form class="d-flex" role="search">
                <input type="search" placeholder="Search" name="input" aria-label="Search" id="search">
                <button type="submit" class='btnAbsolu'><i class="fa-brands fa-searchengin"></i></button>
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
    <script>
      $(document).ready(function(){
          $("#search").keyup(function(){
              var input = $(this).val();
              if(input != " "){
                $.ajax({
                  url: "../businessLayer/ajax.php",
                  method:"POST",
                  data:{object:input},

                  success:function(data){
                    $("#result").html(data);
                  }})
                }else{
                    $("#result").css("display", "none");
                  }
          })
      }) 
    </script>
      
<?php include('layouts/footer.html'); ?>