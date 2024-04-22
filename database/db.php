<?php  
define('DB_SERVER','jagasu-rds-db.cuu2dcpzakgi.us-east-2.rds.amazonaws.com:3307');
define('DB_USERNAME','admin');
define('DB_PASSWORD', 'mypassword');
define('DB_DATABASE', 'project_inventory');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die ("could not connect to mysql");      

    if(! $conn ) {
        die('Could not connect: ' . mysqli_error($conn));
    }else{
        echo 'Connected';
    }
    ?>