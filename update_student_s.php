<?php
     include('connection.php');
     if (isset($_POST['submit'])) {
         $username = $_GET('user');
         $usernameN = $_POST['user'];
         $surname = $_POST['sur'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];

         $sql = "UPDATE `student` SET `NAME`='$username',`SURNAME`='$surname',`phone`='$phone',`EMAIL`='$email' WHERE 'NAME=$username'";
        //  $sql = "UPDATE `user` SET `NAME`='$username',`SURNAME`='$surname',
        //  `company_name`='$company',`Phone`='$phone',`email`='$email' WHERE `company_id=1'";  
        //  $result = mysqli_query($conn, $sql);  
        //  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        //  $count = mysqli_num_rows($result);  
         
        //  if($count == 1){  
             header("Location: index_user.php");
        //  }  
        //  else{  
        //      echo  '<script>
        //                  window.location.href = "index.php";
        //                  alert("Login failed. Invalid username or password!!")
        //              </script>';
        //  }     
     }
?>