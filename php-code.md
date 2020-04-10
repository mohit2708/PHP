# Php Code

### country ko database sa uthana hai
```php
<tr> <td>Country</td>  
	<td><select name="county" id="county" style="width:130px">
		<option value=""  selected>--Select Country--</option>	
		<?php 
		$sql = "select * from user where country !=''";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
		print_r($row);
		if($row['country']!="")
		{
		?><option value="<?php echo $row['country'] ?>"><?php echo $row['country'] ?></option>
		<?php		}		?>			
		<?php 		} 		?>
	</select> </td>
</tr>
```
