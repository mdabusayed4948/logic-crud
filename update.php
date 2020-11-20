<?php 
 include 'db.php';

if(isset($_POST['id'])){
    
   
    $id          = $_POST['id'];
    $longname    = mysqli_real_escape_string($db, $_POST['longname']);
    $shortname    = mysqli_real_escape_string($db, $_POST['shortname']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    $query = "UPDATE logic SET longname = '$longname', shortname='$shortname', description ='$description' WHERE id='$id' ";

    $result = mysqli_query($db, $query);

    if(!$result){
        
        die("THIS WENT BAD" . mysqli_error($db));
    }else{
        echo "ok";
    }
}