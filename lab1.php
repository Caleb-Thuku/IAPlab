<?php
include_once 'DBConnector.php';
include_once 'user.php';
//$conn = new DBConnector;
//var_dump($conn);
if(isset($_POST['btn_save'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $city = $_POST['city_name'];

  $user = new User($first_name,$last_name,$city);
  $res = $user->save();

  if($res){
    echo "Save operation was successful";
  }
  else {
    echo "An error occured";
  }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <table align = "center">
        <tr>
          <td> <input type="text" name="first_name" placeholder="First Name" value=""> </td>
        </tr>
        <tr>
          <td><input type="text" name="last_name" placeholder="Last Name" value=""></td>
        </tr>
        <tr>
          <td><input type="text" name="city_name" placeholder="City"value=""></td>
        </tr>
        <tr>
          <td> <button type="submit" name="btn_save">SAVE</button></td>
        </tr>
      </table>
    </form>
  </body>
</html>
