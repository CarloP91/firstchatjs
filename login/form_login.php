<?php  session_start(); ?> 

<?php

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];

      if($user == $user)  // username is  set    
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;

        echo "Credenziali Corrette";
        header( "refresh:1;url=../index.php" );            //  On Successful Login redirects a tempo su index.php

        }

        else
        {
            ?> <span style="color:red">CREDENZIALI ERRATE</span>  <?php     
        }
}
 ?>

<html>
<head>

<title> Login Page</title>

</head>

<body>

<form action="" method="post">

    <table width="200" border="0">
  <tr>
    <td>  USERNAME </td>
    <td> <input type="text" name="user" > </td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>