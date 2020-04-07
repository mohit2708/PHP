# PHP Interview Questions & Answers.

### Table of Contents

| No. | Questions |
|:----:| ---------
|1  | [What is the PHP?](#Ques-What-is-the-PHP) |
|2  | [Which is the latest version of PHP?](#Ques-Which-is-the-latest-version-of-PHP)|
|3  | [What Type of Framework in Php?](#Ques-What-Type-of-Framework-in-Php)|
|4  | [What Type of CMS(Content Management System) in Php?](#Ques-What-Type-of-CMS-Content-Management-System-in-Php)|
|5  | [Difference between Php4 and php5?](#Ques-Difference-between-Php4-and-php5)|
|6  | [Full Form of LAMP?](#Ques-Full-Form-of-LAMP)|
|7  | [Full Form of WAMP?](#Ques-Full-Form-of-WAMP)|
|8  | [Full Form of XAMPP?](#Ques-Full-Form-of-XAMPP)|
|9  | [What is Constant?](#Ques-What-is-Constant)|
|10 | [What is Variable?](#Ques-What-is-Variable)|
|11 | [Difference between Constant And Variable?](#Ques-Difference-between-Constant-And-Variable)|
|12 | [Difference between Echo And Print?](#Ques-Difference-between-Echo-And-Print)|
|13 | [Php Global Variables/Superglobals?](#)|
|14 | [Difference between Get and Post?](#Ques-Difference-between-Get-and-Post)|
|15 | [Difference between Unlink and Unset?](#Ques-Difference-between-Unlink-and-Unset)|
|16 | [Difference between Require and Include?](Ques-Difference-between-Require-and-Include)|
|17 | [What is the difference between Single Quoted & Double Quoted?](#Ques-What-is-the-difference-between-Single-Quoted-&-Double-Quoted)|
|18 | [Types of Error in Php?](#Ques-Types-of-Error-in-Php)|
|19 | [What is the difference between Single == & ===?](#Ques-What-is-the-difference-between-Single-==-&-===)|
|20 | [What is the difference between $message and $$message?](#Ques-What-is-the-difference-between-$message-and-$$message)|
|21 | [What is Cookie?](#ques-What-is-Cookie)|
|22 | [What is Session?](#ques-What-is-Session)|
|   | [How can we destroy a session in PHP?](#ques-How-can-we-destroy-a-session-in-PHP)|
|   | [Difference between cookie and Session?](#Ques-Difference-between-cookie-and-Session)|
|21 | [What is Oops(Object-oriented programming System)?](#)|
|22 | [What is Advantage of Oops(Object-oriented programming System)?](#)|
|23 | [What is class?](#Ques-What-is-class)|
|24 | [What is object?](#ques-What-is-object)|
|25 | [What is Encapsulation?](#Ques-What-is-Encapsulation)|
|26 | [What is Abstraction?](#Ques-What-is-Abstraction)|
|27 | [What is Interface?](#Ques-What-is-Interface)|
|28 | [What is the difference between Abstract class Interface?](#ques-What-is-the-difference-between-Abstract-class-Interface)|
|29 | [What is Polymorphism?](#Ques-What-is-Polymorphism)|
|30 | [What is Inheritance?](#Ques-What-is-Inheritance)|
|31 | [What is Static class?](#Ques-What-is-Static-class)|
|32 | [What is Constructor?](#Ques-What-is-Constructor)|
|33 | [What is Destructor?](#Ques-What-is-Destructor)|
|   | [What does isset() function?](#ques-What-does-isset()-function)|

### Ques. What is the PHP?
__Ans.__ 
* PHP is an open source server side scripting language used to develop dynamic websites . PHP  stands for Hypertext Preprocessor , also stood for Personal Home Page. It was created by Rasmus lerdorf in 1995 . It is free software released under the PHP license .
* PHP is an acronym for "PHP: Hypertext Pre-processor" And Old name of PHP personal home page. 
* Rasmus Lerdorf is known as the father of PHP. 1994
* PHP is a server side scripting language/s/w/tool commonly used for web applications. And PHP has many framework and CMS for creating a website.
* PHP is a widely-used, open source scripting language. And server side scripting language.
* PHP it is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.

**[⬆ Back to Top](#table-of-contents)**
### Ques. Which is the latest version of PHP?
__Ans.__ The latest stable version of PHP is 7.2  released on November 30, 2019.

**[⬆ Back to Top](#table-of-contents)**
### Ques. What Type of Framework in Php?
__Ans.__ Cakephp, Laravel, Codeigniter, Yii 2, Zend Framework, Phalcon, Slim, FuelPhp, Phpixie, etc

**[⬆ Back to Top](#table-of-contents)**
### Ques. What Type of CMS(Content Management System) in Php?
__Ans.__ Wordpress, Joomla, Magento, Drupal, etc

**[⬆ Back to Top](#table-of-contents)**
### Ques. Full Form of LAMP?
__Ans.__ Linux Apache MySql and Php.

**[⬆ Back to Top](#table-of-contents)**
### Ques. Full Form of WAMP?
__Ans.__ Windows Apache MySql And Php.

**[⬆ Back to Top](#table-of-contents)**
### Ques. Full Form of XAMPP?
__Ans.__
X-OS, Apache Mysql Php Perl
X: Any of the different operating system(Windows, Linux, Mac OS X), to be read as “cross”, meaning cross-platform.
Apache(HTTP Server)
Mysql(Database)
PHP
Perl

**[⬆ Back to Top](#table-of-contents)**
### Ques. Difference between Php4 and php5?
__Ans.__
```
Php5
Php4
Php5 magic methods are used such as get, set etc 
But not used in Php4
All objects are passed by reference
Everything was passed by value 
Php5 abstract classes and interfaces are used
Not used in php4
Php5 has 3 levels of visibility: public, Private, and Protected
Not
```
**[⬆ Back to Top](#table-of-contents)**

### Ques. What is Constant?
__Ans.__ 
* A constant is a name or an identifier for a simple value. A Constant value cannot be changed during the execution of the Script.
* A valid constant name starts with a letter or underscore (no $ sign before the constant name).

__Syntex__  define(name, value, case-insensitive)
```php 
<?php
 define("GREETING", "Welcome to mohit");
 echo GREETING;
?>
Output:- Welcome to mohit 
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Variable?
__Ans.__  
* Variable temporary data hold Karta hai.
* A variable starts with the $ sign, followed by the name of the variable.
* A variable name must start with a letter or the underscore character.
* A variable name cannot start with a number.
* Variable names are case-sensitive ($age and $AGE are two different variables).

**[⬆ Back to Top](#table-of-contents)**
### Ques. Difference between Constant And Variable?
__Ans.__
* There is no need to write a dollar sign ($) before a constant, whereas in Variable one has to write a dollar sign.
* Constants cannot be defined by simple assignment, they may only be defined using the define () function.
* Constants may be defined and accessed anywhere without regard to variable scoping rules.
* Once the Constants have been set, may not be redefined or undefined.

**[⬆ Back to Top](#table-of-contents)**
### Ques. Difference between Echo And Print?
__Ans.__ 
|Echo | Print |
|:----:|:---------:|
|Echo is a statement i.e. used to display the output. It can be used with parentheses echo or without parentheses echo.|Print is also a statement i.e. used to display the output. It can be used with parentheses print ( ) or without parentheses print.|
|Echo does not return any value | Print always return 1 |
|Echo is faster than print | Print is slower than echo |
|echo can pass multiple string separated as ( , ) | using print can doesn’t pass multiple argument |
|Echo is statement|Print is function|

**[⬆ Back to Top](#table-of-contents)**
### Ques. Php Global Variables (Superglobals)?
__Ans.__ predefined array varible  by php
* $GLOBALS
* $_SERVER
* $_REQUEST
* $_POST
* $_GET
* $_FILES
* $_ENV
* $_COOKIE
* $_SEESION

**[⬆ Back to Top](#table-of-contents)**
### Ques. Difference between Get and Post?
__Ans.__
|Get|Post|
|:----:|:---------:|
|Get method  ki value url mai query string ka rup show hoti hai|post mai value hidden variable ka rup mai jati hai.|
|The get method is restricted to send upto 1024 characters only.|The post method can be used to send ASCII as well as binary data.|
|Get method ki value bookmark kar sakte hai|post method ki value bookmark nahi kar sakte hai.|
|Get method secure nahi hota hai  We can send 1024 bytes using GET method|but POST method can transfer large amount of data|

**[⬆ Back to Top](#table-of-contents)**
### Ques. Difference between Require and Include?
__Ans.__
* If the file is not found by include(), A warning will be issued, but the script will continue.
* If the file is not found by require(), it will cause a fatal error and stop the execution of the script.

__Example:-__ "include(a.php)"

**[⬆ Back to Top](#table-of-contents)**
### Ques. Difference between Unlink and Unset?
__Ans.__
* Unlink is used to delete the file used in the context.
	__Ex:-__ unlink(“index.html”);
* Unset is used to unset or destroy the variable.
	__Ex:-__ unset($var);

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is the difference between Single Quoted & Double Quoted?
__Ans.__
* Single quoted mai value parse nahi hoti.
* Double quoted mai value parse ho jati hai.
```php
$s = "dollars";
echo 'This costs a lot of $s.'; // This costs a lot of $s.
echo "This costs a lot of $s."; // This costs a lot of dollars.
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. Types of Error in Php?
__Ans.__
* __Notice:-__ Undefined varible,  does not stop the execution of script..
* __Fettel:-__ Undefined  function, this kind of error stop the execution of script
* __Warning:-__ file error(missing  included are required file)
* __Parse:-__ syntex Error, this kind of error stop the execution of script

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is the difference between Single == & ===?
__Ans.__ 
* ==:-  Check the value.
* ===:- Check the value and datatype.

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is the difference between $message and $$message?
__Ans.__
* $message stores variable data while $$message is used to store variable of variable.
* $message is variable whereas $$message is reference variable
__EX:-__
```php
<?php
$hello = “mohit”;
$message = “Hello”;
$$message = ?
?>
Output:- mohit 
```
**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Cookie?
__Ans.__
Php cookie is a small piece of information, which is stored on the client browser.
__Ex:-__ Remember me.

__How to set cookie:-__        Setcookie(“name”, “value”, time()+3600);<br>
__How to Retrieve a cookie:-__ echo $_cookie[“user”];<br>
__How to unset Cookie:-__      Setcookie(“sample”, “ram”, time()-3600);<br>

##### Two types of cookie:-
__Persistent Cookie:-__ A persistent cookie is a cookie which is store information for certain time in a browser. By default cookie are temporary and are erased if we close the browser.

__Non Persistent Cookie:-__ Non persistent cookies are stored in ram on the server, and destroyed when the browser is closed. Ex:- login

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Session ?
__Ans.__ Session is way to store information to be used across multiple pages. It stores information on the server.
```php
Create session:- 			session_start(); 
Set value into session:- 		$_SESSION['USER_ID']=1; 
Remove data from a session:- 		unset($_SESSION['USER_ID'];
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. How can we destroy a session in PHP?
We can destroy a session by:
```php
<?php
	session_destroy();
?>
```
To delete a speciﬁc session variable, we use:-
```php
<?php
	seesion_unset($_seesion['variable_name']);
?>
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is difference between seesion_unregister and session_unset ?
__Ans.__ The session_unregister() function unregister a global variable from the current session and the session_unset() function frees all session variables.

### Ques. Difference between cookie and Session ?
__Ans.__
|Cookie|Session|
|:---:|:---:|
|Cookie are stored on the server in text file format|Session are stored on the server Side|
|Cookie can not hold multiple variables|Session can hold multiple variables.  |
|We can set expiry for a cookie|session only remains active as long as the browser is open|
| |Users do not have access to the data you stored in Session,Since it is stored in the server|
|cookies using for user activity tracking|Session is mainly used for login/logout purpose|

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Array?
* Array is used to store multipal value in single value
* It stores the collection of datatype.
* An array is a special varibale, which can hold more than one value at a time.

__Three Types Of Array__
1. Indexed Array:-<br>
2. Multidimensional Array:-<br>
3. Associative Array:-<br>


**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Oops(Object-oriented programming System)?
__Ans.__
Oops provide a way of programming language that organizes with objects rather than data.

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Advantage of Oops(Object-oriented programming System)?
__Ans.__ 
* __Code Reusability:__ it can be achieved through inheritance and traits. 
* __Modularity:__ it can be achieved through breaking large code into small modules, Modularity reduces complexity.
* __Flexibility:__ it can be achieved through polymorphism
* __Maintainability:__ it is to maintain code which follow Object Oriented Programming Concepts.
* __Security:__ it can be achieved through Encapsulation
* __Testability:__ it is easy to test.

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Class?
__Ans.__ 
* A class/method is a blueprint or a prototype that defines the variables and methods.
* A class is a collection of objects of similar type.  
* Class represent all properties and behaviors of an object.

__Example:-__
```php
<?php
class abc
{   public function add()
   {
    echo "mohit";
   }
}
$obj = new abc(); //object create
$obj->add();    //call function
?>
```
```php
class Person{
   public $name;
   public $age;
   function __construct($name, $age){
       $this->name = $name;
       $this->age = $age;
   }
   function getUserDetails(){
       return "Hi, My Name is ".$this->name." and I'm ". $this->age ." old <br>";
   }
}
//To create php object we have to use a new operator. 
$obj = new Person("Ajay", 23);
echo $obj->getUserDetails();
//Output:
Hi, My Name is Ajay and I'm 23 old
```
**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Object?
__Ans.__
Any entity that has state and behaviours is known as object. Ex- Chair, Pen, table etc
```php
//Create an object of MyClass 
$obj = new MyClass();
OR
$obj = new MyClass;
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Encapsulation?
__Ans.__
Binding(or wrapping) code and data together into a single unit is known as encapsulation.
One object is encapsulated from another object.
```php
class Person {
	private $name;
	public function setName($name) {
		$this->name = $name;
	}
	public function getName($name) {
		return $this->name;
	}
}
$personObj = new Person();
$personObj->setName('Full Stack Tutorials');
$personObj->getName();
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Abstraction?
__Ans.__
* Hiding internal details and showing functionality is known as abstraction. 
* Abstract class is a class which contains at least one or more abstract methods.
* Abstract method is a method which is declared, but not defined.
* Abstract class ka hum obj nahi bana sakte hai... agar banate hai to fatal error dega: cannot instance abstract class.
* Agar hame abstract class ke function ko call karni hai to inherit karke call karenge.
* abstract class mai kam sa kam 1 abstract method hona chaiye.
```php
<?php
abstract class testParent
{
        	public function abc()
        	{
        	echo "mohit";
        	}
}
class testChild extends testParent
{
        	public function xyz()
        	{
        	echo "saxena";
        	}
}
$a = new testChild();
$a -> abc();
?>
```
#### What is the need of abstract class?
Suppose we were modeling the behavior of animals, by creating a class hierarchy that started with a base class called Animal.
Animals are capable of doing different things like flying, digging and walking, but there are some common operations as well like eating and sleeping.
Some common operations are performed by all animals, but in a different way as well.
When an operation is performed in a different way, it is a good candidate for an abstract method (forcing subclasses to provide a custom implementation).

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Interface?
__Ans.__ 
* An interface is a description of action that object can do.
* jo interface mai function honge wo class mai hona jaruri hai.
* Purpose of interface is to allow the computer to enforce these properties and to know that an object of type t.
```php
<?php
interface abc
{
	public function a();
	public function b();
}
class xyz implements abc
{  	public function a()
	{
    	echo "mohit";
	}
  	public function b()
	{
    	echo "saxena";
	}
}
$obj = new xyz();
$obj->a();
?>
```
**[⬆ Back to Top](#table-of-contents)**
### Ques. What is the difference between Abstract class Interface?
__Ans.__
|Abstract Class|Interface|
|:---:|:---:|
|abstract class ko hum extend karte hai|interface ko hum implement karte hai|
|abstarct class ko hum acess modifier bana sakte hai|not acess modifier|
|abstart class mai kam sa kam 1 abstarct method hona jaruri hai|interface mai sare abstarct method hona chaiye|
|In abstract class a method must be declared as abstract. Abstract methods doesn’t have any implementation.|In interface all the methods by default are abstract.|
|Abstract class can also contain member variables and concrete functions/methods.|Interfaces cannot contain any member variables and concrete functions/methods except constants.|
|An Abstract methods can be declare with access modifiers like public, protected etc. Concrete Class which is extending the abstract class must be defined with the same or visibility.|All methods declared in an interface must be public.|
|A class can Inherits only one Abstract class and Multiple inheritance is not possible for Abstract class.|A class can implement many interfaces and Multiple interface inheritance is possible.|
|Only complete member of abstract class can be static.|Members of Interface can not be static.|
|Abstract class does nor support multiple inheritance.|Interface Supports multiple inheritance|
|Abstract class contains Data Member.|Interface does not Contains Data member.|
|Abstract class contains Constructors.|Interface does not contains Constructors|
|An Abstract class  can contain both incomplete(abstract) and complete member|An interface contains only incomplete member (signature of member)|

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Polymorphism?
__Ans.__ 
* When one task is performed by different ways i.e known as polymorphism.
* Polymorphism is ability to use function & method in different ways.

#### Types of Polymorphism?
Polymorphism could be static and dynamic both. Overloading is static polymorphism while, overriding is dynamic polymorphism.

1. Compile time polymorphism (Static) - Method Overloading

2. Runtime time polymorphism (Dynamic) - Method Overriding

__Overloading__ is defining functions/methods that have same signatures with different parameters in the same class.

__Overriding__ is redefining parent class functions/methods in child class with same signature. So, basically the purpose of overriding is to change the behavior of your parent class method.

 The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms "inaccessible properties" and "inaccessible methods" to refer to this combination of declaration and visibility.


### Ques. What is Inheritance?
__Ans.__ 
* Acquiring the property from parent class to child class is called the inheritance.
* An inherited class is defined by using the extends keyword.

__Single Inheritance:-__
```php
class abc
{
	public function a()		//agar function private ho to or call karna ho to 
	{
		echo "mohit";
	}

	public function b()
	{
		//self::a();		// to self laga kar call  karenge
		echo "saxena";
	}
}
class xyz extends abc
{
	public function c()
	{
		echo "mohit saxena";
	}
}
$obj = New xyz();
$obj -> b(); //saxena
$obj -> a(); //mohit
$obj -> c(); //mohit saxena
```
```php
class BaseClass{
	function add(){
		$x=1000;
		$y=500;
		$add=$x+$y;
		echo "Addition=".$add."<br/>";
}}

class chld extends BaseClass{
	function sub(){
		$x=1000;
		$y=500;
		$sub=$x-$y;
		echo "subtraction=".$sub."<br/>";
}}
class Nestedchld extends chld{
	function mult(){
		$x=1000;
		$y=500;
		$mult=$x*$y;
		echo "multiplication=".$mult."<br/>";
}}
class show extends Nestedchld{
	function __construct(){
	parent::add();
	parent::sub();
	parent::mult();
}}
$obj= new show();
Output:- Addition=1500 subtraction=500 multiplication=500000

$obj= new Nestedchld();
$obj->sub(); //subtraction=500
$obj->add(); //Addition=1500
```


### Ques. What is Static class?
__Ans.__ Static class ka hame object nahi banna padta hai, scope resolution se call kar lete hai.
```php
<?php
class a
{
	static public function xyz()
        	{
                    	echo "mohit";
        	}
        	public function mno()
        	{
                    	echo "saxena";
        	}
}
class b extends a
{
        	public static function xy()
        	{
                    	echo "mohi saxena";
        	}
        	
}
b ::xyz();      	
?>
```
**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Constructor?
__Ans.__ 
* Constructors are special function/method which is automatically called when an object is created.
* the construct function starts with two underscores (__)!
* PHP Constructor, If a class name and function name will be similar in that case function is known as constructor.
* agar private karte hai to hum obj nahi bana sakte, agar banate hai to fetal error aati hai
* ek class mai ek hi constract hota hai.
```php
class Tree 
{ 
    function Tree() 
    { 
        echo "Its a User-defined Constructor of the class Tree"; 
    } 
  
    function __construct() 
    { 
        echo "Its a Pre-defined Constructor of the class Tree"; 
    } 
} 
  
$obj= new Tree();	//Its a Pre-defined Constructor of the class Tree
```

#### Types of  Constructor?

__Default Constructor:__ A constructor without any parameters is called a default constructor.

__Parameterized Constructor:__ A constructor with at least one parameter is called a parametrized constructor.

__Copy Constructor:__

__Static Constructor:__

__Private Constructor:__

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Destructor?
__Ans.__ A Destructor is special functions which are automatically called when an object is destroyed.

Tip: As constructors and destructors helps reducing the amount of code, they are very useful!

**[⬆ Back to Top](#table-of-contents)**
### Ques. How we can retrive the data in the result set of the mysql using Php?
__Ans.__
Mysql_fetch_row:- It fetch array 
Mysql_fetch_object:-
Mysql_fetch_array:-
Mysql_fetch_assoc:-


**[⬆ Back to Top](#table-of-contents)**
### Ques. What is the difference between mysqli_fetch_object() and mysqli_fetch_array?
__Ans.__
The mysqli_fetch_object() function collects the first single matching record where mysqli_fetch_array() collects all matching records from the table in an array.
 

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is .htaccess file?
__Ans.__ .htaccess is a configuration file used to alter the default behavior of a Apache web server software. Most common usage is to redirect the http request to some URLs based on some conditions. For example, we can hide the .html or .php extensions of the URLs to make it SEO friendly

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is Timestamp?
__Ans.__ A timestamp is the current time of event that is recorded by a computer.

**[⬆ Back to Top](#table-of-contents)**
### Ques. What does PEAR stand for?
__Ans.__ PEAR means "PHP Extension and Application Repository". It extends PHP and provides a higher level of programming for web developers.

**[⬆ Back to Top](#table-of-contents)**
### Ques. How to find the length of an array in php?
__Ans.__  count() or sizeof() function to get the number of elements or value in an array.
```php
<?php
$days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
echo count($days);
echo "<br>";
echo sizeof($days);
?>
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is the output of the following Code?
__Ans.__
```php
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;
Output:- 21, 21
```

### Ques. What is the use of header function in php ?
__Ans.__ The header() function sends a raw HTTP header to a client browser. We can use header() function for redirection of pages. It is important to notice that header() must be called before any actual output is seen.
PHP header are bits of information that are sent to a computer before anything else, like a web page is sent
THey tell the computer the information it needs so that it can execute commands when the rest of the information is received. 

### Ques. What is MVC ?
Ans. The Model-view-controller (MVC) is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller.
·         Control mai hum logic rakhte hai
·         Model mai hum database ke function rakhte hai
·         View mai hum html part rakhta hai.

### Ques. What is Ajax?
Ans. AJAX = Asynchronous JavaScript and XML.<br>
AJAX is a technique for creating fast and dynamic web pages. <br>
AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.<br>
```php
$.Ajax({
  url:
  type:
  data:
  sucess: function(data){
    -----
  }
  error: function(error)
  {

  }
});
```

### Ques. What are the 3 scope levels available in php  /  What is difference type of visibility ? or what are access modifiers  ? 
__Ans.__
__Public:-__ Public method or variable can be accessible from anywhere, Means a public method or variable of a class can be called outside of the class or in a subclass. 

__Private:-__ A private  method or variable of a class can only be called inside that class only in which it is declared.

__Protected:-__ A protected method or variable can only be called in that class & its subclass.

**[⬆ Back to Top](#table-of-contents)**
### Ques. Difference between two dates in Php ?
__Ans.__ A timestamp is the current time of an event that is recorded by a computer.
```php
<?php
   $now = time();
   $your_date = strtotime("2017-01-15");
   $datediff = $now - $your_date;
   echo floor($datediff / (60 * 60 * 24));
?>
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. What are the formatting and printing strings available in php  ?
__Ans.__    
* printf(): Display a formatted string.
* sprintf(): Saves a formatted string in a variable.
* fprintf(): prints a formatted string to a file.
* number_format(): Formats number as string.
```php
$today = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm 
$today = date("m.d.y"); // 03.10.01 
$today = date("j, n, Y"); // 10, 3, 2001 
$today = date("Ymd"); // 20010310 
$today = date('h-i-s, j-m-y, it is w Day'); // 05-16-18, 10-03-01, 1631 1618 6 Satpm01 $today = date('\i\t \i\s \t\h\e jS \d\a\y.'); // it is the 10th day. 
$today = date("D M j G:i:s T Y"); // Sat Mar 10 17:16:18 MST 2001 
$today = date('H:m:s \m \i\s\ \m\o\n\t\h'); // 17:03:18 m is month 
$today = date("H:i:s"); // 17:16:18 
$today = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (the MySQL DATETIME format)
```

###  Ques. What is PDO ?
Ans.  


### Ques. What is the relation between Classes and Objects ?
They look very much same but are not same.
A class is a definition, while an object is an instance of the class.
A class is a blueprint while objects are actual objects existing in the real world.
Suppose we have a class Person which has attributes and methods like name, age, height, weight, color etc.
Class Person is just a prototype, now we can create real-time objects of class Person.
#Example: Ajay is real time object of class Person, which have name=Ajay, age=23, height=170cm, weight=60kg and color=black etc.
Class
A way to bind data and associated functions together.
Class have many objects.
Class is a template for creating objects.
It is logical existence.
Memory space is not allocated, when it is created.
Definition (Declaration) is created once.
Class is declared using "class" keyword.
Object
Basic runtime entity in object oriented environment.
Object belongs to only class.
Object are a implementation of class.
It is physical existence.
Memory space is allocated when it is created.
It is created many times as you required.
Object is the instance or variable of class.
Ques:- What is Member Variable and Member function?
Member Variable − These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.
Member function − These are the function defined inside a class and are used to access object data.





PHP 5 introduces abstract classes and methods.
Classes defined as abstract may not be instantiated
Classes that contains at least one abstract method must also be abstract.
Methods defined as abstract simply declare the method's signature - they cannot define the implementation. Abstract methods cannot be defined as private.
Classes which are inheriting it's parent class must provides implementations for the abstract methods.
abstract class TV {
 
   private $isOn = false;
   abstract function getBrand();
   public function turnOnTV() {
       $this->isOn = true;
   }
   public function turnOffTV() {
       $this->isOn = false;
   }
}
class Panasonic extends TV {
   public function getBrand(){
       return "Panasonic";
   }
}
class Sony extends TV {
   public function getBrand(){
       return "Sony";
   }
}



### Ques:- What is the key difference between concrete class and abstract class?
__Ans.__ 
Concrete classes are those classes which has to declare body of abstract methods which extends or implements from abstract class or interface

OR

Abstract classes usually have partial or no implementation. On the other hand, Concrete classes always have full implementation of its behavior. Unlike Concrete classes, Abstract classes cannot be instantiated.

### Ques. Is Multiple inheritance support in php ?
__Ans.__ PHP supports only single inheritance; it means that a class can be extended from only one single class using the keyword 'extended'.

### Ques. What is the meaning of a final class and final method ?
__Ans.__ Final class means that this class cannot be extended and a final method cannot be overridden.

### Ques. How to collect IP address from an HTTP request ?
__Ans.__ $_SERVER['REMOTE_ADDR'];

### Ques. How to collect IP address of the web server in php ?
__Ans.__ $_SERVER['SERVER_ADDR'];

### Ques. how to create a mySql connection ?
__Ans.__
```
mysql_connect("host_name", "User_name", "Password") ;
mysql_select_db("db_name");
```

### Ques. how to stop the execution of php Script ?
__Ans.__ The exit() function is used to stop the execution of PHP script.

### Ques. how to upload file in php ?
__Ans.__ The move_uploaded_file() function is used to upload file in PHP.<br>
```php
move_uploaded_file($source_path,$des_path);
```

### Ques. How to get value in the url ?
__Ans.__ $sort = $_GET[‘url’]

### Magic Method
* Magic Method apne aap ek special event par call ho jata hai.<br>
ex:- get, set, isset, unset, tosting, clone, sleep, wakeup, invoice, Autoload
* magic method are member function that are available to all instance of class. magic method always start with "__"<br>
ex: ```__construct```
* all magic method need to be declared as public.
* various magic method used be defined within the class or program scope.

### Ques. What We can ceil() and floor() function in php ?
__Ceil()__ is used to find nearest maximum values of passing value.
```php
$no = 6.5;
$ans = ceil($no);
Echo $ans;
Output:- 7
```
__Floor()__ is used to find nearest minimum values of  passing value.
```php
$no = 6.5;
$ans = ceil($no);
Echo $ans;
Output:- 6
```

### Ques. Find The Php Information ?
__Ans.__
```php
<?php
   echo phpinfo();
?>
```

**[⬆ Back to Top](#table-of-contents)**
### Ques. What is the differance between explode and split?
__Split__ The Split function the string into an array using a regular expression and return an array.<br>
Spli regular expression ke sath work karta hai.
```php
$a = split(':', india : pakistan : srilanka : usa)
print_r($a);
```
__Explode__ The explode function splits the string by string.<br>
explode dalimeter char ke sath work karta hai.
```php
$a = explode('and','india and pakistan and usa');
print_r($a);
```

### Ques. How can we get the browser properties using PHP?
```php
$_SERVER['HTTP_USER_AGENT']
```

### Ques. What does isset() function?
The isset() function checks if the variable is defined and not null.

### Ques. How can we submit a form without a submit button?
```php
document.formname.submit()
```

### Ques. mysqli_real_escape_string() function?
The mysqli_real_escape_string() function escape special character in a string for use in an sql statement.
```php 
$fname = mysqli_real_escape_string($con, $_post['fname']);
```

```
Q:-
function changevalue(&$y)
	{ 
		 $y = $y + 7;  
	}  
	$num = 8; 
	changevalue($num); 
	echo $num;
```
