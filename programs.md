# PHP programs


### String Pattern

```php
<?php			
for($i=0;$i<=5;$i++){	
for($j=1;$j<=$i;$j++){	
echo $i;		
}			
echo '<br>';		
} 			
?>			

Output:- 		
1			
22			
333			
4444			
55555			
```

```php
<?php
for($i=0;$i<=5;$i++){
for($j=1;$j<=$i;$j++){
echo "1";
}
echo '<br>';
} 
?>

Output:-
1
11
111
1111
11111
```

```php
<?php
for($i=0;$i<=3;$i++){				
for($j=1;$j<=$i;$j++){
echo $j;		
}
echo '<br>';
} 
?>

Output:-
1
12
123
```

```php
<?php
 for($i=0;$i<=5;$i++){			
 for($j=5-$i;$j>=1;$j--){		
 echo "*&nbsp&nbsp;";			
 }								
 echo "<br>";
}
?>

Output:-
* * * * *
* * * *
* * *
* *
*
```

```php
<?php
	for($i=0;$i<=5;$i++)			
	{					
	for($j=1;$j<=$i;$j++)		
	{					
	echo "* ";				
	}					
	echo "<br>";
	}
?>

Output:-
*
* *
* * *
* * * *
* * * * *
```

```php
<?php
for ($row = 1; $row <= 5; $row++)
{		
echo "* </br>";	
}
?>
Output:-
*
*
*
*
*
```

```php
<?php
for ($row = 1; $row <= 5; $row++)
{				
 for ($col = 1; $col <= 5; $col++)
  {
   echo '* ';
  }
   echo "</br>";
}
?>

Output:-
* * * * *
* * * * *
* * * * *
* * * * *
* * * * *
```


```php
<?php
$num =23;
for( $j = 2; $j <= $num; $j++ )
{
	for( $k = 2; $k < $j; $k++ )
	{
		if( $j % $k == 0 )
		{
			break;
		}
	}
	if( $j == $k )
	echo $j;
}
?>
Output:- 2 3 5 7 11 13 17 19 23
```

### Bubble sort
```php
<?php
function bubbleSort(array $arr)
{
    $n = count($arr);
    for ($i = 1; $i<$n; $i++)
		{
        for ($j = $n-1; $j>= $i; $j--) 
		{
			if($arr[$j-1] > $arr[$j]) 
			{
				$tmp = $arr[$j-1];
                $arr[$j-1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
     return $arr;
}
echo '<pre>'; 
$arr = array(255,1,22,3,45,5);
$result = bubbleSort($arr);
print_r($result);
?>
Output:- 1 3 5 22 45 255
```

### Print the Odd Number
```php
<?php
function abc($s,$e)
{
 for($i=$s; $i<=$e; $i+=2)
 {
 echo '<pre>';
 echo $i;
 }
}
 abc (1,16);
?>
Output:- 1 3 5 7 9 11 13 15
```

### Greatest Number
```php
 <?php
function abc($a,$b)
{
	if($a>$b)							{
		echo $a;
	}
	else
	{
		echo $b;
	}
}
$n1 = 21;
$n2 = 20;
abc ($n1,$n2);
?>
Output:- 21
```

### Array mai 1 position & 4 position ki value ko add karna
```php
<?php
function add($x,$y) 
{
		$u = array(5,3,4,6,9);			
		$x1 = $u[$x];
		$y1 = $u[$y];
		 $sum = $x1 + $y1;
		 echo $sum;	
}
add(1,4);
?>
Output:- 12
```


```php
<?php 
function check_palindrome($n){
 
     $inpt = $n;
     $sum = 0;
 
    while(floor($inpt)) {
 
        $newnum = $inpt % 10;
        $sum = $sum * 10 + $newnum;
        $inpt = $inpt/10;
    }
    return $sum;
}
 
  $input = 12321;
  $num = check_palindrome($input);
  
 if($input==$num){
 echo "Palindrome number";
  } else {
 echo "Not a Palindrome";
 }
 ?>
```



```php
<?php
$count ='a';			// a
for($i=0;$i<5;$i++)		// b
{	echo $count;		// c
	echo '<br>';		// d
	$count++;
}
?> 
```
 
```php
<?php
for ($i=2; $i<=100; $i+=2)		//Find all even numbers between 1 to 100
{
	echo $i." ";
} 
?>
```

```php
<?php 
$myarray = array(8,7,5,14,4,5,9,11,9,10);			// arraye ki even location wale number add jo jae
$c = count($myarray);
$x = 0;
for ($i=0; $i<$c; $i++) 
{ 
	echo '<pre>';
	echo  $i;
	if ($i % 2 == 0) 
	{
		$sum = $myarray[$i] + $x;
		$x = $sum;
		echo $x;
	}
	else 
	{
		echo "odd\n";
	}
}
?>
```


```php
<?php
function add($n1) 
{	//$a = count($n1);			// array ke sare no add karne ke liye
	$b = 0;
	for($i=0; $i<3 ;$i++)		// array ke 1 to 3 number add ho jae
	{	 $x = $n1[$i];
		 $y = $b + $x;
		 $b = $y;

		 echo '<pre>';
		 echo $b;
	}
}
$x = array(5,5,4,6,1);
add($x);
?>
```

```php
string mai 3 ka baad dot(....) ho jae....
<?php
function abc($a)
{ $l = strlen($a);
  $str='';
 for($i=0; $i<$l; $i++) 
	{						
	 $m = $a[$i];
	 $str = $str.$m;	
	 if(strlen($str)>=4)
	  {
		echo $str.'------';
		break;
	  }
	}
}
$x = 'abcdefgh';
abc ($x);
?>
Output:-
abc------
```

```php
<?php
 for ($i=1; $i<=5; $i++){
 echo "The Number is: ".$i."<br/>";
 } 
 ?>
Output:-
The Number is: 1<br>
The Number is: 2<br>
The Number is: 3<br>
The Number is: 4<br>
The Number is: 5<br>
```

```php
<?php
 for($i=0;$i<=5;$i++){
 for($j=1;$j<=$i;$j++){
 echo $j;
 }
 echo '<br>';
} 
?>
Output:-
1
12
123
1234
12345
```


