<?php

include('dbconnection.php');
$db=$conn;// database connection  

//legal input values
 $customername  = legal_input($_POST['customername']);
 $customeraddress = legal_input($_POST['customeraddress']);
 $customernotes = legal_input($_POST['customernotes']);
 $customeremail = legal_input(($_POST['customeremail']));
 $customerisd = legal_input($_POST['customerisd']);
 $customermobile = legal_input($_POST['customermobile']);
   
if(!empty($customername) && !empty($customeraddress) && !empty($customeremail) && !empty($customerisd) && !empty($customermobile)){
    //  Sql Query to insert user data into database table
    insert_data($customername,$customeraddress,$customernotes,$customeremail,$customerisd,$customermobile);
}else{
 echo "All fields are required";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

// // function to insert user data into database table
 function insert_data($customername,$customeraddress,$customernotes,$customeremail,$customerisd,$customermobile){
 
     global $db;
    $customerisd=(int)$customerisd;
      $query="INSERT INTO customers(Customer_Name,Address,Notes,Email,ISD_Code,Mobile_Number) VALUES('$customername','$customeraddress','$customernotes','$customeremail','$customerisd','$customermobile')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
        echo json_encode(array("success"=>true));
        // echo  "<script>alert('User Added Successfully')</script>";
     }
     else{
        echo json_encode(array("success"=>false,"error"=> mysqli_error($db)));
        // echo  "<script>alert('Error Adding New Customer')</script>";
     }
 }

?>