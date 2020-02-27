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
function primeno($n){
  for($i=1;$i<=$n;$i++){  //numbers to be checked as prime
          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors
                if($i % $j==0){
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

==================
Print The Matrix:-
==================
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

=============================
Find The Number Even Or Odd:-
=============================
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
============================
Highest Value in the array:-
============================
<?php
	$a = array(10, 20, 52, 105, 56, 20, 89, 96);		//highest value in aaray
	$b = 0;
	foreach ($a as $key=>$val) 
	{
	    if ($b < $val) {
	        $b = $val;
	    }
	}
	echo $b;
?>
Output:- 105
===========================
Star printing Formeting 1:-
===========================
<?php
	for($i=0;$i<=5;$i++){			
	for($j=5-$i;$j>=1;$j--){		
	echo "*&nbsp&nbsp;";			
	}								
	echo "<br>";
	}
?>
* * * * *
* * * *
* * *
* *
*
===========================
Star printing Formeting 2:-
===========================
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
*
* *
* * *
* * * *
* * * * *
