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

```
-------------------------------------------------------------------------------
Mvc mai list blank column show na ho
--------------------------------------------------------------------------------
public function getuserlist($condition)
	{
		
		$sql ="select * from user  $condition";  
		$result = mysql_query($sql);
		$record = array();
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
		{
			if($row['email']!="")
			{
				$record[] = $row;
			}
			
		}
		
			return $record;
			mysql_free_result($result);
		
	}
¬-------------------------------------------------------------------------------
Add form and jQuery mai validation 
--------------------------------------------------------------------------------
<?php
mysql_connect("localhost","root","");
mysql_select_db("myexamplan");
if(@$_POST['SubmitButton'])
{	$txtName = $_POST['name'];
	$eamil = $_POST['emname'];
	$sql = "INSERT INTO user (name,email) values('$txtName','$eamil')";
		mysql_query($sql);
		echo $location ='user_list.php?msg=succ';
	header("Location:$location");
	exit();
}
?>
<html>
<head></head>
<body>
<script src="jquery.min.js"></script>
<form name="adduser" id="adduser" action="#" method="post" onsubmit="return validateForm()">
<table border ="1">
<tr><td>Name:</td><td><input type="text" id="name" name="name"></td></tr>
<tr><td>Email:</td><td><input type="text" id="emname" name="emname"></td></tr>
<tr><td><input type="submit" name="SubmitButton" value="Submit"/></td></tr>
</table>
</form>
<script type="text/javascript">
$('#adduser').submit(function()
{
var name =$("#name").val()
	if(name=="")
	{	checkformsubmit=0;
		alert("Name can not be blank");
		document.getElementById("name").focus()
		return false;
	}
var email =$("#email").val()
	if(email=="")
	{	alert("email can not be blank");
		$("#email").focus()
		return false;
	}
var des = $("#dname").val()
	if(des=="")
	{	checkformsubmit=0;
		alert("Password can not be blank");
		document.getElementById("dname").focus()
		return false;
	}
})
</script>
</body>
</html>
---------------------------------------------------------------------------java Script mai validation
---------------------------------------------------------------------------
function validateForm()				//text box validaition
{	var name=document.addform.txtName.value;
			if(name=="")
			{
				alert("name can not be blank");
				document.getElementById("txtName").focus();
				return false;
			}	}
-----------------------------------------------------------------------------------------------------------------
checked_count =0;  // scrip for chek box	// checkbox validation
	qulification_length = document.getElementsByName("qulification").length;
	for(i=0;i<qulification_length;i++)
	{		if(document.getElementsByName("qulification")[i].checked == true)
		{				checked_count ++;
		}
	}	if(checked_count==0)
	{	alert('Please select qualification');
	}

---------------------------------------------------------------------------List mai data show karne ke liye
---------------------------------------------------------------------------
<table border='1'>
<?php
mysql_connect("localhost", "root", "") ;
mysql_select_db("myexamplan");
$sql ="select * from user";
$result = mysql_query($sql);
?>
<tr><td>Id</td><td>Name</td><td>Email</td><td>Password</td><td>City</td><td>Country Id</td></tr>
<?php
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{	?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
	</tr>
	<?php 
}
mysql_free_result($result);
?>

---------------------------------------------------------------------------List par sorting lagana or search karna kisi column mai sa
---------------------------------------------------------------------------
<?php
$sort = "";
$n="id";
$search="";
$gobutton="";
if(isset($_GET['sort']))
{		$sort = $_GET['sort'];	}

if(isset($_GET['n']))
{		$n = $_GET['n'];	}
	if($sort=='asc')
	{		$sort = 'desc';	}
	else
	{		$sort ='asc';	}
	if(isset($_GET['search'])){
	$search = $_GET['search']; 
	}
	if(isset($_GET['goButton'])){
		 $goButton = $_GET['goButton'];  	}

?>
<html>
<head></head>
<body>
<table border='3'>
<form>
Search:<input type="text" id="search" name="search">
<input type="submit" name="goButton" value="search">

</form>
<?php

mysql_connect("localhost", "root", "") ;
mysql_select_db("project");
if(@$goButton=='search')
{
$sql = "select * from user where email like '%$search%'";
}
else
{
	$sql ="select * from user order by $n $sort"; 
}
//$sql ="select * from user order by $n $sort"; 
$result = mysql_query($sql);
?>
	<tr>
		<td>id</td>
		
		<td><a href="registaion_list.php?sort=<?php echo $sort; ?>&n=name">name</td>
		<td>password</td>
		<td><a href="registaion_list.php?sort=<?php echo $sort; ?>&n=email">email</td>
		<td>date of birth</td>
		<td>country</td>
		<td>city</td>
	</tr>
<?php
while ($row = mysql_fetch_array($result, MYSQL_NUM)) 
{
	?>
	<tr>
		<td><?php echo $row['0'];?></td>
		<td><?php echo $row['1'];?></td>
	</tr>
	<?php 
}
mysql_free_result($result);
?>
</body>
</html>
===============================================
<?php 
$where='';
$sort ='';
$texname ='';
	if(isset($_GET['sort'])){
		$sort = $_GET['sort'];
	}
	if(isset($_GET['texname'])){
		$texname = $_GET['texname'];
	}
	
	if(isset($_GET['n'])){
		$n = $_GET['n'];
	}
	
	$condition ='';
	if($sort !='' && $n !=''){
		$condition =" order by $n $sort";
	}
	
	if($sort =='asc')
	{
			$sort ='desc';
	}
	else
	{
			$sort ='asc';
	}
	
	if($texname !=""){
		$where ="where name like '%$texname%'";
	}
		
		
?>
<html>
<head></head>
<body>
<table border='1'>
<input type="button" name="btnAdd" value="Add Record">
<a href="addform.php">Add form</a>
<input type="button" name="btngo" value="Form" onclick="gotoform('addform.php')"/><br>
<form>
Search:<input type="text" id="name1" name="texname">
<input type="submit" name="goButton" value="Go">

</form>
<tr>
	<td>id</td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=name">name</a></td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=city">email</a></td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=city">city</a></td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=country">country</a></td>
</tr>
<?php

	mysql_connect("localhost", "root", "") ;
	mysql_select_db("school_management");
	$sql ="select * from addform $where $condition";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{	
?>
	
		<tr><td><?php echo $row['id'];?></td>
		<tr><td><img width="100" height="100" src="images/<?php echo $row['pic'];?>"></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row ['email']?></td>
		<td><?php echo $row ['city']?></td>
		<td><?php echo $row ['country']?></td>
	</tr>
	<?php 
}

mysql_free_result($result);
?>
</table>
<script type="text/javascript">
function gotoform(url)
{
	alert(url)
	window.location.href=url
}
</script>
</body>
</html>
---------------------------------------------------------------------------listing mai show karna by oops
---------------------------------------------------------------------------
=======list in oops
<?php
include('countrylist_ctrl.php');
$objclscountrylist = new clscountrylist();
$record = $objclscountrylist -> getlist();
?>
<table border ='1'>
<tr><td>ID</td><td>Country Name</td><td>City</td>
<?php
for ($i=0; $i<count($record); $i++)
{
	?>
	<tr>
		<td><?php echo $record[$i]['id']; ?> </td>
		<td><?php echo $record[$i]['country_name']; ?> </td>
		<td><?php echo $record[$i]['city']; ?> </td>
	</tr>
	<?php
}
?>
===============
<?php
include('country_model.php');
class clscountrylist
{
	public function getlist()
	{
		$user = new user();
		$record = $user -> getcountrylist();
		return $record;
	}
}
?>
==============
<?php 
class User
{
	public function User()	
	{
		mysql_connect("localhost", "root", "") ;
		mysql_select_db("myexam");
	}
	
	public function AddUser($txtName,$eamil,$coun)
	{
			$sql = "INSERT INTO user (name,email,country_id) values('$txtName','$eamil','$coun')";
			mysql_query($sql);
			echo $location ='userlist.php?msg=succ';
			header("Location:$location");
			exit();
		
	}
	
	public function getcountrylist()
	{
		
		$sql ="select * from country";
		$result = mysql_query($sql);
		$record = array();
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
		{
			$record[] = $row;
		}
		return $record;
		mysql_free_result($result);
	}
}
?>
---------------------------------------------------------------------------Data insert karana by oops
---------------------------------------------------------------------------
==============user.php
<?php
include('../config/config.php');
include(DOCUMENT_ROOT.'/user/user_ctrl.php');

$objclsUser = new clsUser();
$objclsUser->getUser();

?>
<html>
<head>
</head>
<body>
<form name="adduser" id="adduser" action="#" method="post" onsubmit="return validateForm()">
<table border ="1">
<tr>
	<td>Name:</td><td><input type="text" id="name" name="name"></td>
</tr>
<tr>
	<td>Email:</td><td><input type="email" id="email" name="email"></td>
</tr>
<tr>
	<td><input type="submit" name="SubmitButton" value="Submit"/></td>
</tr>
</table>
</form>
</body>
</html>
============user.ctrl.php
<?php 
include('userlist_model.php');
class  clsUser
{
	public function getUser()
	{
		if(@$_POST['SubmitButton'])
		{
			$txtName = $_POST['name'];
			$eamil = $_POST['email'];
			$User = new User();
			$record = $User->AddUser($txtName,$eamil);
			return $record;
		}
	}
}
?>
===============user.model.php
<?php 
class User
{
	public function User()	
	{
		mysql_connect("localhost", "root", "") ;
		mysql_select_db("myexam");
	}
	
	public function AddUser($txtName,$eamil)
	{
			$sql = "INSERT INTO user (name,email) values('$txtName','$eamil')";
			mysql_query($sql);
			echo $location ='userlist.php?msg=succ';
			header("Location:$location");
			exit();
		
	}
	
	public function getuserlist()
	{
		
		$sql ="select * from user";
		$result = mysql_query($sql);
		$record = array();
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
		{
			$record[] = $row;
		}
		return $record;
		mysql_free_result($result);
	}
}
?>
---------------------------------------------------------------------------lsit pr sorting karna in mvc
---------------------------------------------------------------------------
<?php
include('exammasterlist_ctrl.php');

$sort = "";
$n="id";

if(isset($_GET['sort'])){
		$sort = $_GET['sort'];
	}
	if(isset($_GET['texname'])){
		$texname = $_GET['texname'];
	}
	
	if(isset($_GET['n'])){
		$n = $_GET['n'];
	}
	
	$condition ='';
	if($sort !='' && $n !=''){
		  $condition =" order by $n $sort";
	}else{
			$condition =" order by $n $sort";
	}
	
	if($sort=='asc')
	{
			$sort ='desc';
	}
	else
	{
			$sort ='asc';
	}
	$objclsexamlist = new clsexamlist();
	$record = $objclsexamlist -> getlist($condition);
?>

<table border ='1'>
<tr>
	<td><a href="exammaster_list.php?sort=<?php echo $sort; ?>&n=id">Id</td>
	<td><a href="exammaster_list.php?sort=<?php echo $sort; ?>&n=exam_name">Exam Name</td>
	<td><a href="exammaster_list.php?sort=<?php echo $sort; ?>&n=description">Description</td>
	<td>Exam Date</td>
	<td>published</td>
<?php
for ($i=0; $i<count($record); $i++)
{
	?>
	<tr>
		<td><?php echo $record[$i]['id']; ?> </td>
		<td><?php echo $record[$i]['exam_name']; ?> </td>
		<td><?php echo $record[$i]['description']; ?></td>
		<td><?php echo $record[$i]['exam_date']; ?></td>
		<td><?php echo $record[$i]['published']; ?></td>
	</tr>
	<?php
}
?>
=====ctrl
<?php
include('exammasterlist_model.php');
class clsexamlist
{
	public function getlist($condition)
	{
		$user = new user();
		$record = $user -> getexamlist($condition);
		return $record;
	}
}
?>
=====model
<?php 
class User
{
	public function User()	
	{
		mysql_connect("localhost", "root", "") ;
		mysql_select_db("myexam");
	}
	
	
	public function getexamlist($condition)
	{
		echo $condition;
		$sql ="select * from exam_master $condition";
		$result = mysql_query($sql);
		$record = array();
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
		{
			//if($row['email']!="")
			$record[] = $row;
		}
		return $record;
		mysql_free_result($result);
	}
}
?>
---------------------------------------------------------------------------confrig.php
---------------------------------------------------------------------------
<?php 
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'myexam/');
define('HTTP_PATH','http://'.$_SERVER['SERVER_NAME'].'/myexam');

mysql_connect("localhost", "root", "") ;
mysql_select_db("myexam");
		
#echo '<pre>';
#print_r($_SERVER);
#die;

?>
---------------------------------------------------------------------------clscomman.php header footer & link karne ke liye
---------------------------------------------------------------------------
<?php 
Class clsCommon
{
	static function getlink()
	{
	$html ='';
	$html ='<table border="1">
	<tr><td><a href="'. HTTP_PATH.'/blog/addblog.php">Add Blog</a></td>
	    <td><a href="'. HTTP_PATH.'/blog/bloglist.php">Blog list</a></td></tr>
	<tr><td><a href="'. HTTP_PATH.'/blogcategory/addblogcategory.php">Add blogc</a></td>
	    <td><a href="'. HTTP_PATH.'/blogcategory/blogcategorylist.php">blogcategory list</a></td>
				</tr>
		return $html;
	}

	static function getHeader()
	{
		return "<h1>header</h1>";
	}
	static function getfooter()
	{
		return "<h1>footer</h1>";
	}
}
---------------------------------------------------------------------------headder add
---------------------------------------------------------------------------
include('../config/config.php');
include(DOCUMENT_ROOT.'common/clsCommon.php');
include(DOCUMENT_ROOT.'user/userlist_ctrl.php');
$header = clsCommon::getHeader();
echo $header;
?>

==============================
echo $date = ($row['added_date']);
			
			$date = strtotime('$date');
			echo date('m-Y-d',$date);
			echo '<br>';			








---------------------------------------------------------------------------Image upload
---------------------------------------------------------------------------

<?php
mysql_connect("localhost","root","");
mysql_select_db("school_management");
if(@$_POST['SubmitButton'])
{
	 $source_path = $_FILES['fileToUpload']['tmp_name'];
	 $name = $_FILES['fileToUpload']['name'];
	  $pic = $_FILES['fileToUpload']['name'];
	 	 
	 $rand = time().'_';
	  $des_path ="images/$rand$name";
	 move_uploaded_file($source_path,$des_path);
	
	$txtName = addslashes($_POST['txtName']);
	$country = addslashes($_POST['countryname']);
	
	$pic1 = addslashes($_post['fileToUpload']);
	
	
	$img = $rand.$pic;
	$sql = "INSERT INTO addform (name,country,pic) values('$txtName','$country','$img')";
	
					
		mysql_query($sql);
		$location ='addformlist.php?msg=succ';
		header("Location:$location");
		exit();
	
}
	$sql = "select * from country";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{	
	print_r ($row);
	
?>
		<?php echo $row['id'];?>
		<?php echo $row ['']?>
		
	<?php 
	}
mysql_free_result($result);		
?>

<html>
<head></head>
<body>
<form name="addform" action="#" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()"> 
<table border="1">
<tr> <td>Name:</td> <td><input type="text" id="txtName" name="txtName"></td> </tr>
<tr> <td>Country:</td> <td><input type="" id="countryname" name="countryname"></td> </tr>
<tr> <td>File Name:</td> <td><input type="file" name="fileToUpload" id="fileToUpload"></td> </tr>
<tr><td><input type="submit" name="SubmitButton" value="Submit"></td>
<td><input type="button" name="btngo" value="List" onclick="gotopage('addformlist.php')"/></td>
</table>
</form>
</body>
</html>
---------------------------------------------------------------------------Image ko list mai show karna
---------------------------------------------------------------------------
<?php 
$where='';
$sort ='';
$texname ='';
	if(isset($_GET['sort'])){
		$sort = $_GET['sort'];
	}
	if(isset($_GET['texname'])){
		$texname = $_GET['texname'];
	}
	
	if(isset($_GET['n'])){
		$n = $_GET['n'];
	}
	
	$condition ='';
	if($sort !='' && $n !=''){
		$condition =" order by $n $sort";
	}
	
	if($sort =='asc')
	{
			$sort ='desc';
	}
	else
	{
			$sort ='asc';
	}
	
	if($texname !=""){
		$where ="where name like '%$texname%'";
	}
		
		
?>
<html>
<head></head>
<body>
<table border='1'>
<input type="button" name="btnAdd" value="Add Record">
<a href="addform.php">Add form</a>
<input type="button" name="btngo" value="Form" onclick="gotoform('addform.php')"/><br>
<form>
Search:<input type="text" id="name1" name="texname">
<input type="submit" name="goButton" value="Go">

</form>
<tr>
	<td>id</td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=name">name</a></td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=city">email</a></td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=city">city</a></td>
	<td><a href="addformlist.php?sort=<?php echo $sort; ?>&n=country">country</a></td>
</tr>
<?php

	mysql_connect("localhost", "root", "") ;
	mysql_select_db("project");
	$sql ="select * from addform $where $condition";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{	
?>
	
		<tr><td><?php echo $row['id'];?></td>
		<tr><td><img width="100" height="100" src="images/<?php echo $row['pic'];?>"></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row ['email']?></td>
		<td><?php echo $row ['city']?></td>
		<td><?php echo $row ['country']?></td>
	</tr>
	<?php 
}

mysql_free_result($result);
?>
</table>
<script type="text/javascript">
function gotoform(url)
{
	alert(url)
	window.location.href=url
}
</script>
</body>
</html>
---------------------------------------------------------------------------Drop down list
---------------------------------------------------------------------------
<html>
<body>
<select>
<?php 
for($i=1;$i<11;$i++){
?>
<option>
<?php echo $i; ?>
</option>
<?php } ?>
</select>
</body>
</html>
 ```
