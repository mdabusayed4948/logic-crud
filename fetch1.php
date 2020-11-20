<?php session_start();
include 'db.php';

$output = ""; 

$query = "SELECT * FROM logic ORDER BY id DESC";

$users = mysqli_query($db, $query);

$i = 0;

while($user = mysqli_fetch_assoc($users))
{
    
    if($user)
    {
        $output .= '
                
                <tr class="btnEditLogic" idLogicdata="'.$user["id"].'" style="cursor:pointer">
                    <td>'.++$i.'</td>
                    <td>'.$user["longname"].'</td>
                    <td>'.$user["shortname"].'</td>
                    <td>'.$user["description"].'</td>
                </tr>
            ';
  

    }

}
echo json_encode($output) ;