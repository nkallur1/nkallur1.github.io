 
  <?php include 'header1.html';?>
<div class="welcome">
<h1 id="w1">Welcome to our family <?php echo $_POST["firstname"]; ?> !!  <h1>
    <h2 id="w2">"I alone cannot change the world, but I can cast a stone across the waters to create many ripples." <br> - Mother Teresa </h2>
  <p id="w3">
  Thank you for your courage and your conviction, for leaving behind all that is familiar and comfortable to serve others. Thank you for your compassion and your awareness, for seeing the need and responding. Thank you for sharing your skills and knowledge to help improve lives and build the capacity of those who have not had the same good fortune of opportunity and education -but thank you also for knowing that the experiences you will live and the people you will encounter will teach you more than you could have imagine.  Thank you for your patience, respect and perseverance, change is never easy. But most of all thank you for your kindness, care and love and for being the inspiration the world needs.
  </p> 
  
   <?php 
   
   $server='localhost';
   $username='webber55';
   $password='Sp01827562';
   $connection = mysqli_connect($server, $username, $password,'webber55');
  //$data = mysqli_select_db($connection, "webber55");
   if(isset($_POST['submit'])) {
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $phn = $_POST['phone'];
    $qu = "INSERT INTO volunteer (fname, lname, phone) VALUES ('$fn', '$ln', '$phn');"; 
    $result = mysqli_query($connection, $qu);   
     }
      mysqli_close($connection);
     
   ?>
  
 </div>
 
    <?php include 'footer.html'; ?>