<?php include 'include/common.php';
$email= mysqli_escape_string($con,$_POST['email']);
$query1="SELECT id FROM users WHERE users.email='$email'";
$result1= mysqli_query($con, $query1);
if(mysqli_num_rows($result)>0){
   echo "email already exist"; 
}
else{
$name= mysqli_escape_string($con,$_POST['name']);
$password= mysqli_escape_string($con,$_POST['password']);
$contact= mysqli_escape_string($con,$_POST['contact']);
$city= mysqli_escape_string($con,$_POST['city']);
$query="INSERT INTO users(name,email,password,contact,city) values('$name','$email','$password','$contact','$city')";
$result= mysqli_query($con, $query)or die(mysqli_error($con));
$_SESSION['id']= mysqli_insert_id($con);
$_SESSION['email']=$email;
header('Location:products.php');
}
?>