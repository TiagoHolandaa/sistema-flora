<?php

session_start();
unset($_SESSION['iduser']);
header("Location: ../view/loginAdmin.php");

?>