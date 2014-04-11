<?php
include('config.php');
	// DB connection info
    //TODO: Update the values for $host, $user, $pwd, and $db
    //using the values you retrieved earlier from the portal.
    $host_c = $host;
    $user_c = $user;
    $pwd = $pass;
    $db_c = $db;
    // Connect to database.
    try {
        $conn = new PDO( "mysql:host=$host_c;dbname=$db_c", $user_c, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        if($conn)
            print_r("hello: ","there");
    }
    catch(Exception $e){
        die(var_dump($e));
    }
?>
