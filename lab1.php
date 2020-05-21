<?php
	include_once 'DBConnector.php';
	include_once 'user.php';

	$conn = new DBConnector; //DB connection is made

	//data insert code starts here

	if (isset($_POST['btn-save'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city = $_POST['city_name'];

		//create user object
		//Note how we create the object using constructor that will be used to initialize your variables
		$user = new User($first_name,$last_name,$city);
		$res = $user -> save();

		//We check if the operation save occurred successfully
		if ($res){
			echo "Save operation was successful";
		}else{
			echo "An error occurred!";
		}
	}
?>

<html>
	<head>
		<title>New User</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body style="background-image:url('https://video-images.vice.com/articles/5d44c9622980b0000824a7e3/lede/1564789576071-GettyImages-949118068.jpeg?crop=1xw:0.8419xh;0xw,0.1581xh');background-size: cover;">
		<div class="row">
			<div class="col s12 m9">
				<div class="card" style="margin-left:40%!important;margin-top:10%!important;">

		<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
			<a class="waves-effect waves-light btn-small" href="Homepage.php"><i class="material-icons left">navigate_before</i></a>
			<p class="card-title center"><b>User's Details Form</b></p>
			<table align="center"style="width:80%!important;">
				<tr>
					<td><i class="material-icons left">person</i>First Name:</td> <td><input type="text" name="first_name" required placeholder="First Name"/></td>
				</tr>

				<tr>
					<td><i class="material-icons left">person</i>Last Name:</td> <td><input type="text" name="last_name" placeholder="Last Name"/></td>
				</tr>

				<tr>
					<td><i class="material-icons left">add_location</i>City Name:</td> <td><input type="text" name="city_name" placeholder="City"/></td>
				</tr>
				<tr>
					<td ><button class="waves-effect waves-light btn" type="submit" name="btn-save"><i class="material-icons left">person_add</i><strong>SAVE</strong></button></td>
				</tr>
			</table>
		</form>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/materialize.min.js"></script>

	</body>
</html>
