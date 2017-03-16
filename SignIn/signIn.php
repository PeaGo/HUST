<?php
// password check
$sign_in_flg = false;
if ($_REQUEST["password"] === "12345"){
    $sign_in_flg = true;
}else{
    $sign_in_flg = false;
}

// show ID
if($sign_in_flg === true){
    echo "Hello, " . $_REQUEST["id"];
}

// save cookie
if($sign_in_flg === true){
    setcookie("name",$_REQUEST["id"]);
      setcookie("sign_in_flg","true");
        header('Location: myPage.php');
}
?>

<HTML>
  <body>
    <form>
      <input type="text" name="id" /><br />
      <input type="text" name="password" /><br />
      <input type="submit" value="Sign In" />
    </form>
  </body>
</HTML>
