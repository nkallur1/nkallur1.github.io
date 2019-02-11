 <?php include 'header3.html';?>
   
  <?php
session_start();
include("pwds.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if ($_POST["ac"]=="log") { /// do after login form is submitted 
     if ($USERS[$_POST["username"]]==$_POST["password"]) {
     /// check if submitted username and password exist in $USERS array 
          $_SESSION["logged"]=$_POST["username"];
     } else {
          echo 'Incorrect username/password. Please, try again.';
     };
};    

}

if (isset($_SESSION['logged'])){

    if (array_key_exists($_SESSION["logged"],$USERS)) { //// check if user is logged or not 
         echo "You are logged in.";
         //echo "<br><a href=\"pagetop.php\">Go Back</a>"; 
             }
}

else { //// if not logged show login form
        
     echo '<form action="log.php" method="post"><input type="hidden" name="ac" value="log"> ';
     echo 'Username: <input type="text" name="username" /><br />';
     echo 'Password: <input type="password" name="password" /><br />';
     echo '<input type="submit" value="Login" />';
     echo '</form>';
}

?>
     <br>
     <br>
    <?php include 'footer.html'; ?>