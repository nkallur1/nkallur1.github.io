<?php 
session_start(); /// initialize session 
include("pwds.php"); 
check_logged(); 
/// function checks if visitor is logged. If user is not logged the user is redirected to login.php page  
?> 

<?php include 'header3.html';?>
  
<h1 id="nova">Nova Goes <span style="color:lightGreen">Green!!!</span></h1>
   <h1>Upcoming Recycling projects of villanova:</h1>
   
<table id="nova" border="0">

<tr >
<div>
<td width="2%">
<img src="novaimg1.png" alt="batteries">
</td>
</div>

  <div >
<td class="novapara">

<p> Villanova University, as a community of learned and learning scholars, respecting the sacredness of all creation, accepts its responsibility to the integrity of Earth and its biodiversity, to the heritage of future generations, and to the security of nations. By utilizing the Augustinian values of Unitas, Veritas, and Caritas, meaning love thy neighbor, promote community unity, and live life in moderation through our curriculum, work environment, and operations, Villanova approach to sustainability exemplifies an emphasis on social justice and community service. </p>
 </td>
</div>

</tr>
</table>

 
<?php include 'footer.html'; ?>
  