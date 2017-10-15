<?php
  session_start();
  if (isset($_POST["version"])) {
    $_SESSION["VLITE"] = $_POST["version"] == "lite";
  }
?>
