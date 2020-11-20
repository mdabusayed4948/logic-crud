<?php 
 include 'db.php';

if(isset($_POST['longname'])){
    
   
    $longname    = mysqli_real_escape_string($db, $_POST['longname']);
    $shortname    = mysqli_real_escape_string($db, $_POST['shortname']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    $query = "INSERT INTO logic(longname, shortname, description) VALUES('$longname','$shortname','$description')";

    $result = mysqli_query($db, $query);

    if(!$result){
        die("THIS WENT BAD" . mysqli_error($db));
    }
}