<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="tolootdb";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
if(isset($_POST['buy_acer'])){
    $item = $_POST['item'];
    $price = $_POST['price'];

    $sql_query = "INSERT INTO payment_details (item, price) 
    VALUES ('$item', '$price')";
}
if(isset($_POST['confirm']))
{	
    $owner = $_POST['owner'];
    $cvv = $_POST['cvv'];
    $card_number = $_POST['card_number'];
    $months = $_POST['months'];
    $years = $_POST['years'];

    $sql_query = "INSERT INTO payment_details (owner,cvv,card_number,months,years)
    VALUES ('$owner','$cvv','$card_number','$months','$years')";

    if (mysqli_query($conn, $sql_query)) 
    {
    echo "New Details Entry inserted successfully !";
    } 
    else
    {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>