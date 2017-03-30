<?php

// connect to Server
$connection = mysql_connect('localhost', 'HUST', '!!HUST!!');

// select to Database
mysql_select_db('HUST_DB', $connection);

// select
$sql = "SELECT * FROM sample";

// run query
$result = mysql_query($sql);

// get select data
while ($row = mysql_fetch_assoc($result)) {
          print_r($row);
}

// close connection
mysql_close($connection);
