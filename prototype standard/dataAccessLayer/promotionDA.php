
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

        public function getAllPromoQuery(){
            $getQuery = "SELECT * FROM promotion";
            $sqlQuery = mysqli_query($this->getConnect(), $getQuery);
            $promoData = mysqli_fetch_all($sqlQuery, MYSQLI_ASSOC);

            $promoData_array = array();

            foreach($promoData as $value){
                $promo = new promotion;
                $promo->setId($value['id']);
                $promo->setPromo($value['promo']);
                array_push($promoData_array, $promo);
            }
            return $promoData_array;
        }

        public function edit($id){
            $edit = "SELECT * FROM promotion WHERE id= $id";
            $queryConnect = mysqli_query($this->getConnect(), $edit);
            $editData = mysqli_fetch_assoc($queryConnect);

            $editPromo = new promotion();
            $editPromo->setId($editData['id']);
            $editPromo->setPromo($editData['promo']);

            return $editPromo;
        }

        public function update($id, $name){
            $update = "UPDATE promotion SET promo = '$name' WHERE id =$id";
            mysqli_query($this->getConnect(), $update);
        }

        public function delete($id){
            $delete = "DELETE FROM promotion WHERE id = $id";
            mysqli_query($this->getConnect(), $delete);
        }

    }       

?>