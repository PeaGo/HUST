<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload" name="submit">
</form>
  <pre>
  <?php
    print_r($_FILES);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  $_FILES["fileToUpload"]["name"]);
  ?>
  </pre>
</body>
</html>
