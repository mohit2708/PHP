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

