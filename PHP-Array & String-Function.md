# PHP Array & String Function

## Array

* [array_chunk](#array_chunk)
* [array_key_exists](#array_key_exists)







### array_chunk
 The __array_chunk()__ function splits an array into chunks of new arrays.
__syntex:-__ array_chunk(array, size, preserve_key)
```php
<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
?>
output:- Array ( [0] => Array ( [0] => Volvo [1] => BMW ) [1] => Array ( [0] => Toyota [1] => Honda ) [2] => Array ( [0] => Mercedes [1] => Opel ) )
```
The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
syntex:-array_key_exists(key,array)
<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>
output:- Key Exists!
 
The array_keys() function returns an array containing the keys.
Syntex:-array_keys(array,value,strict)
<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
?>
output:-
Array
(
	[0] => Volvo
	[1] => BMW
	[2] => Toyota
)

The array_merge() function merges one or more arrays into one array.
syntex:-array_merge(array1,array2,array3...)
<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>





output:-

The array_push() function inserts one or more elements to the end of an array.
syntex:-array_push(array,value1,value2...)
<?php
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?>
output:-

The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.
syntex:-array_rand(array,number)
<?php
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>
output:-

The array_slice() function returns selected parts of an array.
syntex:-array_slice(array,start,length,preserve)
<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
?>



output:-

The array_values() function returns an array containing all the values of an array.
syntex:-array_values(array)
<?php
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
?>
output:-


The sort() function sorts an indexed array in ascending order.
syntex:-sort(array,sortingtype);
<?php
$cars=array("Volvo","BMW","Toyota");
sort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
?>
output:-

The asort() function sorts an associative array in ascending order, according to the value.
syntex:-asort(array,sortingtype);
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>


output:-

The usort() function sorts an array using a user-defined comparison function.
syntex:-usort(array,myfunction);
<?php
function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}
$a=array(4,2,8,6);
usort($a,"my_sort");

$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
  {
  echo $a[$x];
  echo "<br>";
  }
?> 
output:-

The uasort() function sorts an array by values using a user-defined comparison function.
syntex:-uasort(array,myfunction);
<?php
function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}
$arr=array("a"=>4,"b"=>2,"c"=>8,d=>"6");
uasort($arr,"my_sort");
 
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
output:-
 
The uksort() function sorts an array by keys using a user-defined comparison function.
syntex:-uksort(array,myfunction);
<?php
function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}

$arr=array("a"=>4,"b"=>2,"c"=>8,d=>"6");
uksort($arr,"my_sort");
 
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
output:-

The arsort() function sorts an associative array in descending order, according to the value.
syntex:-arsort(array,sortingtype);
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>




output:-

The ksort() function sorts an associative array in ascending order, according to the key.
syntex:-ksort(array,sortingtype);
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
output:-

The krsort() function sorts an associative array in descending order, according to the key.
syntex:-krsort(array,sortingtype);
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
output:-






The rsort() function sorts an indexed array in descending order.
syntex:-rsort(array,sortingtype);
<?php
$cars=array("Volvo","BMW","Toyota");
rsort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
?>
output:-

The count() function returns the number of elements in an array.
syntex:-count(array,mode);
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>
output:- 3

The in_array() function searches an array for a specific value.
syntex:-in_array(search,array,type)
<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>
output:- Match found
...


String Function:-
The PHP strlen() function returns the length of a string.
<?php
echo strlen("Hello world!");
?> 
Output:-12
The PHP str_word_count() function counts the number of words in a string:
<?php
echo str_word_count("Hello world!");
?> 
Output:- 2
The PHP strrev() function reverses a string:
<?php
echo strrev("Hello world!");
?> 
Output:-dlrowolleH
The PHP strpos() function searches for a specific text within a string.
<?php
echo strpos("Hello world!", "world");
?> 
Output:- 6
The PHP str_replace() function replaces some characters with some other characters in a string.
<?php
echo str_replace("world", "Dolly", "Hello world!");
?> 
Output:-Hello Dolly!



The strtoupper() function converts a string to uppercase.
syntex:-strtoupper(string)
<?php
echo strtoupper("Hello WORLD!");
?> 
output:-

The strtolower() function converts a string to lowercase.
syntex:-strtolower(string)
<?php
echo strtolower("Hello WORLD.");
?>
output:-

The ucfirst() function converts the first character of a string to uppercase.
syntex:-ucfirst(string)
<?php
echo ucfirst("hello world!");
?> 
output:-

The lcfirst() function converts the first character of a string to lowercase.
syntex:-lcfirst(string)
<?php
echo lcfirst("Hello world!");
?> 
output:-

The ucwords() function converts the first character of each word in a string to uppercase.
syntex:-ucwords(string)
<?php
echo ucwords("hello world");
?> 
output:-

The addcslashes() function returns a string with backslashes in front of the specified characters.
syntex:-addcslashes(string,characters)
<?php 
$str = addcslashes("Hello World!","W");
echo($str); 
?>
output:- 

The addslashes() function returns a string with backslashes in front of predefined characters.
syntex:-addslashes(string)
<?php 
$str = addslashes('What does "yolo" mean?');
echo($str); 
?> 
output:-

The stripslashes() function removes backslashes
Syntax: - stripslashes(string)
<?php
echo stripslashes("Who\'s Peter Griffin?");
?>

The explode() function breaks a string into an array.
Syntax:-explode(separator,string,limit)
<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?> 

The implode() function returns a string from the elements of an array.
syntex:-implode(separator,array)
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
?>


output:-

The str_split() function splits a string into an array.
syntes:-str_split(string,length)
<?php
print_r(str_split("Hello"));
?>
output:-


The trim() function removes whitespace and other predefined characters from both sides of a string.
syntex:-trim(string,charlist)
<?php
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
?>
output:-

The ltrim() function removes whitespace or other predefined characters from the left side of a string.
syntex:-ltrim(string,charlist)
<?php
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?> 
output:-

The rtrim() function removes whitespace or other predefined characters from the right side of a string.
syntex:-rtrim(string,charlist)
<?php
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
?>
output:-

The strstr() function searches for the first occurrence of a string inside another string.
Syntax:-strstr(string,search,before_search)
<?php
echo strstr("Hello world! mohit","world");
?>
output:-

The md5() function calculates the MD5 hash of a string.
Syntax:-md5(string,raw)
<?php
$str = "Hello";
echo md5($str);
?>
output:  

The substr() function returns a part of a string.
Syntax:-substr(string,start,length)
<?php
echo substr("Hello world",4);
?>
output:-

The wordwrap() function wraps a string into new lines when it reaches a specific length.
Syntax:-wordwrap(string,width,break,cut)
<?php
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");
?>
output:-



The nl2br() function inserts HTML line breaks (<br> or <br />) in front of each newline (\n) in a string.
syntex:-nl2br(string,xhtml)
<?php
echo nl2br("One line.\nAnother line.");
?>
output:-

.....

