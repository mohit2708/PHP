# PHP programs

### Table of Contents

| No. | Questions |
|:----:| ---------
|1  | [Swap Number?](#Swap-Number) |
|2  | [Swap Number Without Third Variable?](#Swap-Number-Without-Third-Variable)|
|3  | [Reverse String?](#Reverse-String)|
|4  | [Revers number?](#Revers-number)|
|5  | [Check the Prime Number or not?](#Check-the-Prime-Number-or-not)|
|6  | [Print the prime number?](#Print-the-prime-number)|
|7  | [Fibonacci Number print?](#Fibonacci-Number-print)|
|8  | [Print The Matrix?](#Print-The-Matrix)|
|9  | [Find The Number Even Or Odd?](#Find-The-Number-Even-Or-Odd)|
|10 | [Highest Value in the array?](#Highest-Value-in-the-array)|
|   | [String Pattern](#string-Pattern)|


### Swap Number?
```php
<?php
  function abc($a,$b)		
  {
  echo "Value of a: $a</br>";
  echo "Value of b: $b</br>";
  $temp=$a;
  $a=$b;
  $b=$temp;
  echo "Value of a: $a</br>";
  echo "Value of b: $b</br>";
  }
  $n1 = 4;
  $n2 = 2;
  abc ($n1,$n2);
?>
```

**[⬆ Back to Top](#table-of-contents)**

### Swap Number Without Third Variable?
```php
<?php
$a = 5;
$b = 9;

$a =  $a + $b;  // 5 + 6 = 11
$b = $a - $b;   // 11 - 6 = 5
$a = $a - $b;  // 11 - 5 = 6

echo $a . ',' . $b;
?>
```

**[⬆ Back to Top](#table-of-contents)**
### Reverse String?
```php
<?php
 $s = 'mohit saxena';		
 $l = strlen($s);
 for($i=$l-1; $i>=0; $i--)
  {
   echo $s[$i];
  }
?>
Output:- anexas tihom
```

**[⬆ Back to Top](#table-of-contents)**

### Revers number?
###### Type 1st:-
```php
<?php
 $num = 2039;
 $revnum = 0;
 while ($num != 0)
 {
  $revnum = $revnum * 10 + $num % 10;
  $num = (int)($num / 10); 
 } 
 echo "Reverse number: $revnum";
?>
```
###### Type 2nd:-
```php
<?php  
 $num = 23456;  
 $revnum = 0;  
 while ($num > 1)  
 {  
  $rem = $num % 10;  
  $revnum = ($revnum * 10) + $rem;  
  $num = ($num / 10);   
 }  
 echo "Reverse number of 23456 is: $revnum";  
?>
```

**[⬆ Back to Top](#table-of-contents)**
### Check the Prime Number or not?
```php
<?php  
 function IsPrime($n)
 {
 for($x=2; $x<$n; $x++)  
  {  
   if($n %$x ==0)  
  {  
  return 0;  
  }  
 return 1;  
 }  
 $a = IsPrime(7);  
 if ($a==0)  
 echo 'This is not a Prime Number.....'."\n";  
 else  
 echo 'This is a Prime Number..'."\n";  
?>
Output :-  This is a Prime Number..
```

**[⬆ Back to Top](#table-of-contents)**
### Print the prime number?
```php
<?php 
 function primeno($n)
 {
  for($i=1;$i<=$n;$i++){  //numbers to be checked as prime
  $counter = 0; 
  for($j=1;$j<=$i;$j++){ //all divisible factors
  if($i % $j==0)
  {
  $counter++;
  }
 }        
if($counter==2){
echo $i." is Prime <br/>";
 }
 }
 } 
primeno(100); 
?>
```
**[⬆ Back to Top](#table-of-contents)**

### Fibonacci Number print?
###### Type 1st:-
```php
<?php
	$count = 0 ;
	$f1 = 0;
	$f2 = 1;
	echo $f1." , ";
	echo $f2." , ";
	while ($count < 20 )
	{      
		$f3 = $f2 + $f1 ;
		echo $f3." , ";
		$f1 = $f2 ;
		$f2 = $f3 ;
		$count = $count + 1;
	}
?>
Output :- 
0 , 1 , 1 , 2 , 3 , 5 , 8 , 13 , 21 , 34 , 55 , 89 , 144 , 233 , 377
```
###### Type 2nd:-
```php
<?php
define('NUM',5);
$a = 0;
$b = 1;
echo "$a $b "; // 0 1
for($i=1; $i<= NUM-2; $a=$b, $b=$c, $i++ )
 {
  echo $c = $a+$b;
  echo " ";
             }
?>
Output :- 
0, 1, 1, 2
```
###### Type 3rd:-
```php
<?php
	$first = 0;
	$second = 1;
	echo "Fibonacci Series \n";
	echo $first.' '.$second.' ';
	for($i = 2; $i < 12; $i++)
	{
		$third = $first + $second;
		echo $third.' ';
		$first = $second;
		$second = $third;
	}
?>
Output :- 
Fibonacci Series 0 1 1 2 3 5 8 13 21 34 55 89
```

**[⬆ Back to Top](#table-of-contents)**
### Print The Matrix?
```php
<?php
for($i=0;$i<3;$i++)
{ 
	for($j=0;$j<3;$j++)
	{
		if($i==$j)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}     
	} 
	echo '<br/>';
}
?>
Output:- 
1 0 0 
0 1 0 
0 0 1
```

**[⬆ Back to Top](#table-of-contents)**
### Find The Number Even Or Odd?
```php 
<?php
	function eof($n)				
	{
	if($n%2==0)
		{
			echo 'even number'; 
		}
		else 
		{
	 		echo 'odd number';	
		}
	}
	$a = '5';
	eof ($a);
?> 
Output:-  odd number
```

**[⬆ Back to Top](#table-of-contents)**
### Minimum value in array:-
__Type 1__
```php
<?php
    $a = array(10, 44, 5, 6, 68, 9);
    $blank = $a[0];
    foreach($a as $v)
{
    if($blank > $v)
    $blank = $v;
 }
    echo $blank;

?>
```
__Type 2__
```php
<?php
$a = array(15,10,20,100,25,30);
$max = max($a);
$l = count($a);
for ($i=0; $i<$l; $i++)
{
	$chek = $a[$i];	
	if($chek<$max)
	{
	$z = $chek;
	$max = $z;	
	}
    }
echo $z;
?>
```

**[⬆ Back to Top](#table-of-contents)**
### Higest value in array:-
```php
<?php
$a = array(10, 20, 52, 105, 56,120, 89, 96);
$b = 0;
foreach ($a as $key=>$val) {
    if ($val > $b) {
        $b = $val;
    }
}
echo $b;
?>
```

### Add space after 2 character:- //my-na-me-is-mo-hi-ts
```php
<?php
$str = "my name is mohit saxena";
$len = strlen($str);
for($i=0; $i<$len; $i++)
{
	if($i%2==0 && $i!=0)
	{
		echo "-";
	}
	echo $str[$i];
}
?>
```

### Array max value:- 
__Type 1__
```php
<?php
     $a = array(1, 44, 5, 6, 68, 9);
     $blank = 0;
     foreach($a as $v)
{
       if($blank < $v)
      $blank = $v;
 }
 echo $blank;
?>
```
__Type 2__
```php
<?php
 $a =array(2,44,5,6,68,9);
 $l = count($a);
 $res=0;
for($i=0;$i<$l;$i++)
{	
  if($res<$a[$i])
    {
      $res=$a[$i];
    }
}
echo $res;
?>
```

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

```
4.	print ho jae 1, 3 ,5 ,7 ,9, 11, 13, 15….
<?php
function abc($s,$e)
{
	 for($i=$s; $i<=$e; $i+=2)			// print ho jae 1 3 5 7 9 11 13 15
	 {
		 echo '<pre>';
		 echo $i;
	 }
}
 abc (1,50);
?>

5.	Greatest Number:-
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
6.	Array mai 1 position & 4 position ki value ko add karna:- 
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





<br>
<?php
$count ='a';			// a
for($i=0;$i<5;$i++)		// b
{	echo $count;		// c
	echo '<br>';		// d
	$count++;
}
?> 
<br>
 
<br>
<?php
function add($x,$y) 
{
		$u = array(5,3,4,6,9);			// array mai 1 or 4 value ko add karna
		$x1 = $u[$x];
		$y1 = $u[$y];
		 $sum = $x1 + $y1;
		 echo $sum;	
}
add(0,4);
?>
<br>
<?php
for ($i=2; $i<=100; $i+=2)		//Find all even numbers between 1 to 100
{
	echo $i." ";
} 
?>
<br>
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

<br>
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
<br>

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


