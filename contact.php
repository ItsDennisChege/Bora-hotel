<?php 
$con=mysqli_connect("localhost","root","","hotel bora");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$message = $_POST['txtMsg'];

	// Debugging statements
       echo "Name: $name<br>";
       echo "Email: $email<br>";
       echo "Message: $message<br>";

	$query="insert into contact(name,email,message) values('$name','$email','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Message sent successfully!");'; 
		echo 'window.location.href = "contact.html";';
		echo '</script>';
    }
}
?>

	

