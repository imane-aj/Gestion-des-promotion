<?php 
require_once('../dataAccessLayer/promotionDA.php');
class promotionBLL{
    // private $data;
    // private $errors = [];
    // private static $fields = ['promo'];
    // public $isSuccess = false;

    // public function __construct($post_data)
    // {
    //     $this->data = $post_data;
    // }

    // function checkInput($data){
    //     $data=trim($data);          // remove white spaces
    //     $data=stripslashes($data);  // removes backslashes added by the addslashes() function.
    //     $data=htmlspecialchars($data);
    //     return $data;
    // } 
    
 
    // public function insert(){
    //     if(empty($this->checkInput($this->data['promo']))){
    //         $this->promoError = 'This field can not be empty';
    //         $this->isSuccess = false;
    //         echo 'this field can not be empty';
    //         }
    //         else{
    //             $promoAdd = new promotion();	
    //             $promoQuery = new promotionDA();
    //             $promoAdd->setPromo($this->checkInput($this->data['promo']));
    //             $promoQuery->insertPromoQuery($promoAdd);
    //             $this->isSuccess = true;
    //             header("Location: index.php");
    //             echo "success";
    //         }
    // }
    public function insert(){
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