 <?php include 'header.html';?>


 <div class="slides">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slide1.jpg" style="width:100%">
  <div class="text">We told</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slide2.jpg" style="width:100%">
  <div class="text">waste</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slide3.jpg" style="width:100%">
  <div class="text">Has value</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

  </div>
  

<title> sell your waste </title>
  
    <?php

// Get form data values

     
 $plastic = $_POST["plastic"];
      $ewaste = $_POST["ewaste"];
      
$food = $_POST["food"];
 
     $metals = $_POST["metals"];
  $others = $_POST["others"];

  
   $name = $_POST["name"];
     
 $street = $_POST["street"];
      $city = $_POST["city"];
    
  $payment = $_POST["payment"];

// If any of the quantities are blank, set them to zero

      
if ($plastic == "") $plastic = 0;

if ($ewaste == "") $ewaste = 0;
      
if ($food == "") $food = 0;
    
if ($metals== "") $metals = 0;

if ($others == "") $others = 0;
  

 
 

// Compute the item costs and total cost

 
     $plastic_cost = 3.0 * $plastic;
    
  $ewaste_cost = 5.0 * $ewaste;
     
 $food_cost = 9.50 * $food;
      
$metals_cost = 8.0 * $metals;

$others_cost = 5.0 * $others;
 

      
 $total_price = $plastic_cost + $ewaste_cost + 
                     $food_cost + $metals_cost + $others_cost ;
     
 $total_items = $plastic + $ewaste + $food + $metals + $others ;


// Return the results to the browser in a table

    ?>
    <div class="tablestyle">
   
 <h2> Billing Information:</h2>
    <?php
      print ("$name <br /> $street <br /> $city <br />");
    ?>
  
  <p /> <p />
<table border = "border">
      <caption> Order Information </caption>
      <tr>
    
    <th> Product </th>
        <th> Unit Price </th>
        <th> Quantity Ordered </th>
     
   <th> Item Cost </th>
      </tr>
      <tr align = "center">
        <td> plastic </td>
   
 
    <td> $3.00 </td>
        <td> <?php print ("$plastic"); ?> </td>
   
     <td> <?php printf ("$ %4.2f", $plastic_cost); ?>
        </td>
      </tr>
      <tr align = "center">
      
  <td> ewaste </td>
        <td> $5.00 </td>
        <td> <?php print ("$ewaste"); ?> </td>
   
     <td> <?php printf ("$ %4.2f", $ewaste_cost); ?>
        </td>
        </tr>
   
   <tr align = "center">
  
      <td> food </td>
        <td> $9.50 </td>
        <td> <?php print ("$food "); ?> </td>
     
   <td> <?php printf ("$ %4.2f", $food_cost); ?>
        </td>
      </tr>
    
  <tr align = "center">
       
 <td> metals</td>
        <td> $8.00 </td>
        <td> <?php print ("$metals"); ?> </td>
  
      <td> <?php printf ("$ %4.2f", $metals_cost); ?>
        </td>
      </tr>
  

<tr align = "center">
  
      <td> others</td>
        <td> $2.25</td>
        <td> <?php print ("$others"); ?> </td>
     
   <td> <?php printf ("$ %4.2f", $others_cost); ?>
        </td>
      </tr>
  


    
  </table>
    <p /> <p />

    <?php
      print ("You are giving $total_items items <br />");
  
    printf ("You earn: $ %5.2f <br />", $total_price);
    
  print ("Your chosen method of payment is: $payment <br />");
    ?>
    
  </div>        
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
  </body>
</html>