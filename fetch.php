<?php
include 'db.php';



$query = "SELECT * FROM logic ORDER BY id DESC";

$users = mysqli_query($db, $query) or die('Failed to query database' . mysqli_connect_error($db));

$i = 0;

$jsonData = '{
    "data": [';

    while($user = mysqli_fetch_assoc($users))
    {   
        $buttons =  "<div class='btn-group'><button class='btn btn-outline-dark btnEditLogic ' idLogicdata='".$user["id"]."' ><i class='fa fa-cog fa-spin' style='font-size:20px;' ></i></button></div>";
        
            $jsonData .= '[
                
                "'.(++$i).'",
                "<td>'.$user["longname"].'</td>",
                "<td>'.$user["shortname"].'</td>",
                "<td>'.$user["description"].'</td>",
                "'.$buttons.'"
               
              ],';
              
        }

        $jsonData = substr($jsonData, 0, -1);
      
     $jsonData .= ']

  }'; 

  echo $jsonData;

// echo '{
//     "data": [
//       [
//         "1",
//         "101",
//         "Industrial vacuum cleaner",
//         "Drills"
//       ],
//       [
//         "2",
//         "102",
//         "Float Plate for Palletizer",
//         "Scaffolds"
//       ]
      
//     ]
//   }';