<?php
?>

<html>
<style>
   input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   }
  input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

 input[type=phone], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
 }
 textarea, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
 }

 input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
 }

 input[type=submit]:hover {
    background-color: #45a049;
 }

 div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
 }
 textarea
 {
   resize: none;
   overflow-y: scroll;
   height:100px;
  }
</style>
     <body>

		<form method="post" action="<?php echo site_url('user/student/insert_data'); ?>" name="data_register">
	     <table>
		  <tr>
		  	<th>
		  		<h2>Student Resitration Form</h2>
		  	</th>
		  </tr>
		<tr>
			<td>First Name *</td>
			<td>
         <input type="text" name="first_name" id="first_name" value="" > 
			</td>
		</tr>
		<tr>
			<td>Last Name *</td>
			<td>

				<input type="text" name="last_name" id="last_name" value="" required> 
			</td>
		</tr>
		<tr>
			<td>Choose Photo To Upload</td>
			<td>

				<input type="file" name="photo" id="photo" value=""> 
			</td>
		</tr>
		<br />
		<tr>
			<td><h3>Personal Details </h3></td>
		</tr>
		<tr>
			<td>EmailID *</td>
			<td>

				<input type="email" name="emailid" id="emailid" value=""> 
			</td>
		</tr>
		<tr>
			<td>Mobile No. *</td>
			<td>

				<input type="phone" name="mobile_no" id="mobile_no" value=""> 
			</td>
		</tr>
		<tr>
			<td>Address *</td>
			<td>
             <textarea name="address1" id="address1"></textarea>
			</td>

			<td>
              <textarea name="address2" id="address2"></textarea>
			</td>
		</tr>
		<tr>
			<td> City *</td>
			<td>
             <input type="text" name="city" id="city" value=""> 
			</td>
		</tr>
		<tr>
			<td>State *</td>
			<td>
             <input type="text" name="state" id="state" value=""> 
			</td>
		</tr>
		<tr>
			<td>Zipcode *</td>
			<td>
             <input type="text" name="zipcode" id="zipcode" value=""> 
			</td>
		</tr>
		<tr>
			<td><h3>Qualification Details</h3></td>
		</tr>
		<tr>

			<td>Course *</td>
			<td>
            
            <?php echo form_multiselect('course[]', $courses);?>
        
			</td>
			
		</tr>
		
		<tr>
			<td>Skills *</td>
			<td>
                <input type="text" name="skill[]" id="skill[]" value=""> 
            </td>
		<tr>
			<td></td>
			<td>
             <input type="text" name="skill[]" id="skill[]" value=""> 
             </td>
		   </tr>
		   <tr>
		   	<td></td>
			<td>
             <input type="text" name="skill[]" id="skill[]" value=""> 
            </td>
		  </tr>
		  <tr>
		  	<td></td>
			<td>
            <input type="text" name="skill[]" id="skill[]" value=""> 
             </td>
         </tr>
         <tr>
         	 <td>
             </td>
			<td>
            <input type="text" name="skill[]" id="skill[]" value=""> 
             </td>
            
         </tr>
			<td width="20">
				<input type="button" name="add" onClick="incrementCount()" value="+" class="add_field_button">
			    <input type="button" name="sub" onClick="incrementCount()" value="-">
		</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="add_student" value="Add">
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
	</table>
</form>

	</body>
</html>
