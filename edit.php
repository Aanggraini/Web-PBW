<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$message=$_POST['message'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',message='$message' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$firstname = $user_data['firstname'];
	$lastname = $user_data['lastname'];
	$email = $user_data['email'];
	$message = $user_data['message'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Firstname</td>
				<td><input type="text" name="firstname" value=<?php echo $firstname;?>></td>
			</tr>
			<tr> 
				<td>Lastname</td>
				<td><input type="text" name="lastname" value=<?php echo $lastname;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Message</td>
				<td><input type="text" name="message" value=<?php echo $message;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>