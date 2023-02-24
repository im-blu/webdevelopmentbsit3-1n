<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navigation Page</title>
        <link rel="stylesheet" href="/user_mgmt/assets/css/Navigation-Style.css"/>
    </head>
    <body>
        <ul>
            <?php
                    if(!isset($_SESSION['username'])){
                ?>
                    <li><a href="/user_mgmt/Access-Level.php">Login</a></li>
                    <li style="margin-left: 930px"><a href="/user_mgmt/user_registration/Registration-Form.php">Register</a></li>
            <?php
                }else{
                ?>
                    <li><a href="/user_mgmt/user_update/userProfile.php">User Profile</a></li>
                    <li style="margin-left: 850px"><a href="/user_mgmt/user_logout/logoutProcess.php">Logout</a></li>
                <?php
                    } 
                ?>
        </ul>
    </body>
</html>