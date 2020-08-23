<?php
   session_start();
   require('dbconnect.php');
 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']); 
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
      
      $sql = "SELECT * FROM users WHERE username = '$myusername';";
  
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if($count == 1) 
      {

         $_SESSION['passInDB'] = $row['password'];

         if(!password_verify($mypassword, $_SESSION['passInDB']))
         {
            echo "Wrong Password";
            die();
         }

         $_SESSION['login_user'] = $myusername;
         $_SESSION['user_type'] = $row['user_role'];


         if($_SESSION['user_type'] == 1)
         {
            header("Location: ../admin_page.php");
            die();
         }
         else if($_SESSION['user_type'] == 2)
         {
            header("Location: ../manager_page.php");
            die();
         } 
         else if($_SESSION['user_type'] == 3)
         {
            header("Location: ../user_page.php");
            die();
         }
         else 
         {
            header("Location: ../external_company.php");
            die();
         }
      }

      else
      {
         alert('Invalid Username or Password');
         header("Location: ../index.php");
         die();
      }
   }

   function alert($msg) 
   {
   echo "<script type='text/javascript'>alert('$msg');</script>";
   }
?>
