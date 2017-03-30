<?php

// connect to Server
$connection = mysql_connect('localhost', 'HUST', '!!HUST!!');

// select to Database
mysql_select_db('HUST_DB', $connection);

$id = 9;
$name = "test name 1";
$message = "this is test message";
$sql = "UPDATE sample SET name = '$name',message = '{$message}' WHERE id = {$id}"; // update

// run query
$result = mysql_query($sql);

if($result === true){
    echo "UPDATED complete!";
}else{
    echo "UPDATED fail!";
}

// close connection
mysql_close($connection);
