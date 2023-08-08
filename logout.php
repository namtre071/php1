<?php
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['user']);
  unset($_SESSION['logined']);
  header("location:index.php");
?>