<html>
    <head>
        <title>All_Users</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-image:url('https://video-images.vice.com/articles/5d44c9622980b0000824a7e3/lede/1564789576071-GettyImages-949118068.jpeg?crop=1xw:0.8419xh;0xw,0.1581xh');background-size: cover;">
    <?php
        include_once 'DBConnector.php';
        include_once 'user.php';

        $conn = new DBConnector; //DB connection is made
        $first_name=0;
        $last_name=0;
        $city=0;
        $user = new User($first_name,$last_name,$city);
        $res = $user -> readAll();

        echo '
        <div class="row">
            <div class="col s12 m9">
                <div class="card" style="margin-left:40%!important;margin-top:0%!important;">
                    <div class="card-content">
                        <a class="waves-effect waves-light btn-small" href="Homepage.php"><i class="material-icons left">navigate_before</i></a>
                        <h6 align="center"><b>Current Users in DataBase</b></h6>
                            <table align="center"style="width:100%!important;">
                        <tr>
                          <td> <font face="Arial"><b>user_id</b></font> </td>
                          <td> <font face="Arial"><b>first_name</b></font> </td>
                          <td> <font face="Arial"><b>last_name</b></font> </td>
                          <td> <font face="Arial"><b>user_city</b></font> </td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>';

        while ($row = $res->fetch_assoc()) {
            $user_id = $row["user_id"];
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $user_city = $row["user_city"];

             echo '<tr>
                      <td>'.$user_id.'</td>
                      <td>'.$first_name.'</td>
                      <td>'.$last_name.'</td>
                      <td>'.$user_city.'</td>
                  </tr>';

        }
?>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
