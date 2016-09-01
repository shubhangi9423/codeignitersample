<html>

<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.button {
    background-color: #4CAF50; /* Green */
    border: 1px solid green;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    cursor: pointer;
    float: left;
}

.button:hover {
    background-color: #3e8e41;
}
</style>


<body>
	<table border='1'>
		<tr>
			<th>SNo.</th>
			<th>Sname </th>
		    <th>Qualification</th>
		   
		    <th>EmailId</th>
		    <th>Contact No</th>
		    <th>View</th>
		    <th>Delete</th>		
		</tr>
		
			<?php
			foreach($val as $v)
			{
			?>
			<tr>
			<td><?php echo $v->sid ;?></td>
			<td><?php echo $v->first_name ;?></td>
			<td><?php echo $v->sid;?></td>
			
			<td><?php echo $v->email_id ;?></td>
			<td><?php echo $v->mobile_no ;?></td>
			<td><a href="<?php echo site_url('user/student/single_view/'. $v->sid.''); ?>">Edit</a></td>
 
			<td><a href="<?php echo site_url('user/student/delete_data/'. $v->sid.''); ?>">Delete</a></td>
			</tr>
			<?php	
			
}
			?>
		
	</table>
<a href="<?php echo site_url('user/Student/adds'); ?>"><input type="Submit" Value="Add" class="button"></a>
	</body>
</html>