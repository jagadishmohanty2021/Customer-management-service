<?php
session_start();
unset($_SESSION["messaage"]);

header("Location:index.html#login");
?>