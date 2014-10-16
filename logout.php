<?php include("include/session.php"); 
session_destroy(); 
echo "<script language=Javascript> top.location.href=\"http://www.cedesko.com\"; </script>";
?>