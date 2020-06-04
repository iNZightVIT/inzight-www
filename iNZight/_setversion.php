<?php

  session_save_path("/tmp");
  session_start();
  if (isset($_POST["version"])) {
    $_SESSION["VLITE"] = $_POST["version"] == "lite";
  }

  var_dump($_SESSION);
?>
