# Type 1
```php
$sort = "";
$n="id";
if(isset($_GET['sort']))
{   $sort = $_GET['sort'];  }

if(isset($_GET['n']))
{   $n = $_GET['n'];  }
  if($sort=='asc')
  {   $sort = 'desc'; }
  else
  {   $sort ='asc'; }
  
$rows = $wpdb->get_results("SELECT * from $table_name ORDER BY  $n $sort");

<th><a href="admin.php?page=all-job-manager&sort=<?php echo $sort; ?>&n=job_tittle">Position</a></th>       // $n = databse name
<th><a href="admin.php?page=all-job-manager&sort=<?php echo $sort; ?>&n=company_name">Company Name</a></th> //                   
```





  
                   
