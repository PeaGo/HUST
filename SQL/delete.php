<?php

// connect to Server
$connection = mysql_connect('localhost', 'HUST', '!!HUST!!');

// select to Database
mysql_select_db('HUST_DB', $connection);

$id = 5;
$sql = "DELETE FROM sample WHERE id = {$id};";

// run query
$result = mysql_query($sql);

if($result === true){
    echo "DELETE complete!";
}else{
    echo "DELETE fail!";
}

// close connection
mysql_close($connection);
