<?php 
    require_once("../businessLayer/promotionBLL.php");
    $data = new promotionBLL($_POST);
    if(isset($_GET['id'])){
        $value = $data->editPromo($_GET['id']);
    }
    
    if( !empty($_POST) ) {

        $id= $_POST['Id'];
        $name = $_POST["promo"];
        
       
         $data->updatePromo($id,$name);
        header("Location: index.php");
    }
    include('layouts/head.html');
?>
      
   
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="hero">
            <h4>Modfier promotion</h4>
                <form action="" method="post">
                    <div class="input-group">
                      <label for="promo">Nom de la promotion</label>
                      <input type="hidden" value=<?php echo $value->getId()?> name="Id" >  
                      <input type="text" name="promo" id="promo" value=<?php echo $value->getPromo() ?>>
                      <button type="submit">Envoyer</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
    <?php include('layouts/footer.html'); ?>