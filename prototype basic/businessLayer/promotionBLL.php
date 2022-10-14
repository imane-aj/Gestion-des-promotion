<?php 
require_once('../dataAccessLayer/promotionDA.php');
require_once('../dataAccessLayer/promotion.php');
class promotionBLL{
    public function insert($promo){
        $promoAdd = new promotion();	
        $promoQuery = new promotionDA();
        $promoAdd->setPromo(($_POST['promo']));
        $promoQuery->insertPromoQuery($promoAdd);
        $this->isSuccess = true;
        header("Location: ajout.php");
    }
}
?>