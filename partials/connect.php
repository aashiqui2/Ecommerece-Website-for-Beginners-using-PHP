<?php  

$conn =new mysqli("localhost","root","","ecommerce");
if(!$conn){
    //echo "Succesfully connected";
    die(mysqli_error($conn));
}
// else{
// }


?>