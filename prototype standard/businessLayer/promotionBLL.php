<?php 
require_once('../dataAccessLayer/promotionDA.php');
class promotionBLL{
    public function insert($promo){
        $promoAdd = new promotion();	
        $promoQuery = new promotionDA();
        $promoAdd->setPromo(($_POST['promo']));
        $promoQuery->insertPromoQuery($promoAdd);
        header("Location: index.php");
    }

    public function getAll(){
        $promo = new promotionDA();
        return $promo->getAllPromoQuery();
    }
  
    public function editPromo($id){
        $promo = new promotionDA();
        return $promo->edit($id);
    }

    public function updatePromo($id, $name){
        $promo = new promotionDA();
        return $promo->update($id, $name);
    }

    public function deletePromo($id){
        $promo = new promotionDA();
        return $promo->delete($id);
    }
}
?>