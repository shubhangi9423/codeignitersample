<html>
    
   
  
<?php

foreach($val as $t)

{
 ?>
<form>
  <fieldset>
 <table style="margin-left:200px">
 	<tr>
 		
 		<td>
 			<center style="font-size:20px"><?php echo $t->first_name;?></center>
 		</td>
 	</tr>
 	    <tr>
 		 
 		<td>
 			<center style="font-size:20px"><?php echo $t->email_id;?></center>
 		</td>
 	</tr>
 	<tr>
 	    <hr>
    </tr>
 	<tr>
 		<td>
 			<h2>Personal Details</h2>
 		</td>
 	</tr>
 	<tr>
 		<td>
 			Contact No.
 	   </td>
 		<td>
 			<label><?php echo $t->mobile_no;?></label>
 		</td>
 	</tr>
 	<tr>
 		<td>
 			Address:
 		</td>
 		<td>
 			<label><?php echo $t->address1;?></label>
 		</td>
 	</tr>
 	<tr>
 		<td>
 		</td>
 		<td>
 			<label><?php echo $t->address2;?></label>
 		</td>
 	</tr>
 	<tr>
 		<td>
 		</td>
 		<td>
 			<label><?php echo $t->city;?></label>
 		</td>
 	</tr>
 	<tr>
 		<td>
 		</td>
 		<td>
 			<label><?php echo $t->state;?></label>
 		</td>
 	</tr>
 	<tr>
 		<td>
 			
 		</td>
 		<td>
 			<label><?php echo $t->zipcode;?></label>
 		</td>
 	</tr>
 	 <tr>
 		<td>
 			<h2>
 				Qualification Details
 			</h2>
 		</td>

 	</tr>
 </table>
 </fieldset>
</form>
 <?php
}
?>
</html>