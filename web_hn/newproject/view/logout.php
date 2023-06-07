<?php
session_start();

function logout()
{
   if (isset($_SESSION['uname'])) {
      unset($_SESSION['uname']);
   }

   header("Location: ../view/login.php");
   exit;
}

logout();
?>