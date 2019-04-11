=============
Swap Number:-
=============
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
====================================
Swap Number Without Third Variable:-
====================================
<?php
$a = 5;
$b = 9;

$a =  $a + $b;  // 5 + 6 = 11
$b = $a - $b;   // 11 - 6 = 5
$a = $a - $b;  // 11 - 5 = 6

echo $a . ',' . $b;
?>
================
Reverse String:-
================
<?php
	$s = 'mohit saxena';		
	$l = strlen($s);
	for($i=$l-1; $i>=0; $i--)
	{
		echo $s[$i];
	}
?>
==================
Reversing number:-
==================
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
-------------------
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
===============================
Check the Prime Number or not:-
===============================
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
========================
Print the prime number:-
========================
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
========================
Fibonacci Number print:-
========================
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
-----------------------------------
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
------------------------------
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
