<?php
session_save_path("/tmp");
session_start();
$_SESSION["hideSupport"] = true;
