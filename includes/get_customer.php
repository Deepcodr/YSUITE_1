<?php

include('dbconnection.php');
$db=$conn;// database connection  

get_data();
function get_data(){
 
    global $db;
    $query="SELECT * FROM customers";

    $retval=mysqli_query($db, $query);  
  
    if(mysqli_num_rows($retval) > 0){
        while($row = mysqli_fetch_assoc($retval))
        {  
            $result[]=$row;
        } 
        echo json_encode($result);
    }
    else{  
        echo "0 results";  
    }  
}

?>