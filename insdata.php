<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert-data</title>
</head>
<body>
    <h2 style="text-align:center;">Admin Panel</h2>
    <form action="" method="POST">
    <lebel name="hospital-name">Hospital:</lable>
    <input type="text" name="hospital-name" placeholder="Hospital Name" id="" required>
    <lebel name="address">Address:</lable>
    <input type="text" name="address" placeholder="" id="" required>
    <lebel name="phno">Ph.No:</lable>
    <input type="text" name="phno" placeholder="" id="" required>
    <lebel name="pin">pin:</lable>
    <input type="number" name="pin" placeholder="" id="" required>
    <lebel name="timing">Time:</leble>
    <input type="text" name="timing" placeholder="open-close" id="" required>
    <button id="" name="insertdata">Submit</button>
    </form>
    <?php
 $connection = mysqli_connect("localhost", "root", "", "iemhcktn");
 echo "CONNECTION ESTABLISHED! ready to go";
 if (isset($_POST['insertdata'])) 
 {
     $hosname = $_POST['hospital-name'];
     $address =$_POST['address'];
     $phno = $_POST['phno'];
     $pincode =$_POST['pin'];
     $time = $_POST['timing'];
    $query = "INSERT INTO `hospital` (`hid` ,`name`,`address`,`phno`,`timing`,`pincode`,`catagory`) VALUES (NULL, '$hosname','$address','$phno','$pincode','$time','hospital')";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
     echo "record inserted";
 }
 else{
echo "Record not inserted";
 }
 }
?>
</body>
</html>