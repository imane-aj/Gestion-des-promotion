
<?php 
require('db.php');
require('promotion.php');

    class promotionDA {
        private $con = null;
        public function getConnect(){
            $db = new database();
            $this->con = $db->connect_db();
            return $this->con ;

            if(!$this->con){
                die('error while connection ,,,,!');
            }
        }

        public function insertPromoQuery($promo){
                $promo = $promo->getPromo();
           
            
                $res = "INSERT INTO promotion (promo) Values ('$promo')";
                mysqli_query($this->getConnect(), $res);
        }
    }       

?>