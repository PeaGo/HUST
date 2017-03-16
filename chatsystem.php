<?php

// get name & message data from FormData
$name = $_REQUEST['name'];
$message = $_REQUEST['message'];

// save data with CSV format
$csv_file = 'chat.csv';
$csv_data = "{$name},{$message}\n";
file_put_contents($csv_file,$csv_data,FILE_APPEND);

$csv_data = file_get_contents($csv_file);

$lines = explode("\n",$csv_data);
?>

<?php
foreach ($lines as $line) {
          $data = explode(',',$line);

            echo "<p>{$data[0]}: {$data[1]}</p>";
}       
?>
<html>
<body>
  <form>
    name: <input type='text' name='name' />
    message:<input type='text' name='message' />
    <input type='submit' />
  </form>
</body>
</html>
