<?php

if($_COOKIE["sign_in_flg"] !== "true"){
          header('Location: signIn.php');
}

// sign out
if($_REQUEST["sign_out"] === "true"){
          setcookie("sign_in_flg","false");
                  header('Location: signIn.php');
}

?>
<html>
  <body>
    <h1>Hello, <?php echo $_COOKIE["name"] ?></h1>
    <form>
      <input type="hidden" name="sign_out"  value="true"/><br />
      <input type="submit" value="Sign out" />
    </form>
  </body>
</html>
