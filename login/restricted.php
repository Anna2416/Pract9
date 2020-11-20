<?php 
   session_start (); 

   if (!($_SESSION ['Login'] == "admin" && 
    $_SESSION ['Passwd'] == 1111)) 
    {
      echo "Невірне введення, 
      спробуйте ще раз <br> "; 
       echo "<html> 
       <head>
       <title> Info </title>
       <a href='login.php'>Авторизироваться</a>
       </head> 
       </Html> ";
    }
    else{
      echo "Добро пожаловать, admin!";
    }

   ?> 