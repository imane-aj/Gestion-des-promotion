<?php
require_once('../dataAccessLayer/promotionDA.php');
if(isset($_POST['input'])){
    $ajax = new promotionDA();
    $data = $ajax->ajax();
    if(mysqli_num_rows($data)>0){
        while($row = mysqli_fetch_assoc($data)){
            $name = $row['promo'];
            $id = $row['id'];
            ?>
            <tr>
                <td><?php echo $name ?></td>
                <td>
                    <a href="update.php?id=<?php echo $id ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="index.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure?')"><i class="fa-regular fa-trash-can"></i></a>
                </td>
            </tr>
            <?php
        }
    }else{
        echo "<h3>no data found</h3>";
    }
}
    

?>