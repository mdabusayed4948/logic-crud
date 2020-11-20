<?php 
 include 'db.php';

if(isset($_POST['id'])){
    
   
    $id          = $_POST['id'];

    $query = "DELETE FROM logic WHERE id='$id' ";

    $result = mysqli_query($db, $query);

    if(!$result){
        die("THIS WENT BAD" . mysqli_error($db));
    }
}