# PHP Interview Questions & Answers.

### Table of Contents

| No. | Questions |
|:----:| ---------
|1  | [What is the PHP?](#What-is-the-PHP) |
|2  | [Which is the latest version of PHP?](#Which-is-the-latest-version-of-PHP)|
|3  | [What Type of Framework in Php?](#What-Type-of-Framework-in-Php)|
|4  | [What Type of CMS(Content Management System) in Php?](#What-Type-of-CMS-Content-Management System-in-Php)|


### What is the PHP?

PHP is an open source server side scripting language used to develop dynamic websites . PHP  stands for Hypertext Preprocessor , also stood for Personal Home Page. It was created by Rasmus lerdorf in 1995 . It is free software released under the PHP license .

**[⬆ Back to Top](#table-of-contents)**

### Which is the latest version of PHP?
The latest stable version of PHP is 7.2  released on November 30, 2019.

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
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**
###

**[⬆ Back to Top](#table-of-contents)**

```

Ques. Which is the latest version of PHP ?
Ans. The latest stable version of PHP is 7.2  released on November 30, 2019.

Ques. Framework in Php ?
Ans. Cakephp, Laravel, Codeigniter, Yii 2, Zend Framework, Phalcon, Slim, FuelPhp, Phpixie

Ques. Content Management System(CMS) in Php ?
Ans. Wordpress, Joomla, Magento, Drupal

Ques. Difference between Php4 and php5 ?
Ans.
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

Ques. Full Form of LAMP ?
Ans. Linux Apache MySql and Php.

Ques. Full Form of WAMP ?
Ans.  Windows Apache MySql And Php.

Ques. Full Form of XAMPP ?
Ans. X-OS, Apache Mysql Php Perl
X: Any of the different operating system(Windows, Linux, Mac OS X), to be read as “cross”, meaning cross-platform.
Apache(HTTP Server)
Mysql(Database)
PHP
Perl


Ques. What is Constant ?
Ans.
A constant is a name or an identifier for a simple value. A Constant value cannot be changed during the execution of the Script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Syntax:- define(name, value, case-insensitive)
EX:-
<?php
define("GREETING", "Welcome to mohit");
echo GREETING;
?>
Output:- Welcome to mohit

Ques. What is Variable ?
Ans. 
Variable temporary data hold Karta hai.
A variable starts with the $ sign, followed by the name of the variable.
A variable name must start with a letter or the underscore character.
A variable name cannot start with a number.
Variable names are case-sensitive ($age and $AGE are two different variables).

Ques. Difference between Constant And Variable ?
Ans. 
There is no need to write a dollar sign ($) before a constant, whereas in Variable one has to write a dollar sign.
Constants cannot be defined by simple assignment, they may only be defined using the define () function.
Constants may be defined and accessed anywhere without regard to variable scoping rules.
Once the Constants have been set, may not be redefined or undefined.
Ques. Difference between Echo And Print ?
Ans. 
Echo
Print
Echo is a statement i.e. used to display the output. It can be used with parentheses echo or without parentheses echo.
Print is also a statement i.e. used to display the output. It can be used with parentheses
print ( ) or without parentheses print.
Echo does not return any value
Print always return 1
Echo is faster than print
Print is slower than echo
echo can pass multiple string separated as ( , )
 
using print can doesn’t pass multiple argument

Ques. Php Global Variables (Superglobals) ?
Ans. predefined array varible  by php
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SEESION
 
Ques. Difference between Require and Include ?
Ans. 
If the file is not found by include(), A warning will be issued, but the script will continue.
If the file is not found by require(), it will cause a fatal error and stop the execution of the script. 
 
Ques. Difference between Get and Post ?
Ans. 
GET
POST
Get method  ki value url mai query string ka rup show hoti hai
post mai value hidden variable ka rup mai jati hai.
The get method is restricted to send upto 1024 characters only.
The post method can be used to send ASCII as well as binary data.
Get method ki value bookmark kar sakte hai
post method ki value bookmark nahi kar sakte hai.


Get method secure nahi hota hai  We can send 1024 bytes using GET method
but POST method can transfer large amount of data


Ques. Difference between Unlink and Unset ?
Ans. 	Unlink is used to delete the file used in the context.
Ex:- unlink(“index.html”);
Unset is used to unset or destroy the variable.
Ex:- unset($var);
Ques. What is the difference between Single Quoted & Double Quoted ?
Ans. Single quoted mai value parse nahi hoti.
·        Double quoted mai value parse ho jati hai.
$s = "dollars";
echo 'This costs a lot of $s.'; // This costs a lot of $s.
echo "This costs a lot of $s."; // This costs a lot of dollars.
Ques. Types of Error in Php ?
Ans. 
Notice:- Undefined varible,  does not stop the execution of script..
Fettel:- Undefined  function, this kind of error stop the execution of script
Warning:- file error(missing  included are required file)
Parse:- syntex Error, this kind of error stop the execution of script

Ques. What is the difference between Single == & === ?
Ans. 
==    Check the value.
=== Check the value and datatype.

Ques. What is the difference between $message and $$message ?
Ans. $message stores variable data while $$message is used to store variable of variable.
         $message is variable whereas $$message is reference variable
EX:-
$hello = “mohit”;
$message = “Hello”;
$$message = ?
Output:- mohit 

Ques. How we can retrive the data in the result set of the mysql using Php ?
Ans. 
Mysql_fetch_row:- It fetch array 
Mysql_fetch_object:-
Mysql_fetch_array:-
Mysql_fetch_assoc:-

Ques. What is the difference between mysqli_fetch_object() and mysqli_fetch_array ?
Ans. The mysqli_fetch_object() function collects the first single matching record where mysqli_fetch_array() collects all matching records from the table in an array.
 
Ques. What is Cookie ?
Ans. Php cookie is a small piece of information, which is stored on the client browser.
	Ex:- Remember me.
session_start();
$_SESSION["username"] = 'nikita';	// store session data
How to set cookie:- Setcookie(“name”, “value”, time()+3600);
How to Retrieve a cookie:- echo $_cookie[“user”];
How to unset Cookie:- Setcookie(“sample”, “ram”, time()-3600);

Two types of cookie:-
Persistent Cookie:- A persistent cookie is a cookie which is store information for certain time in a browser. By default cookie are temporary and are erased if we close the browser.

Non Persistent Cookie:- Non persistent cookies are stored in ram on the server. Ex:- login 

Ques. What is Session ?
Ans. Session is way to store information to be used across multiple pages. It stores information on the server.
Create session:- 			session_start(); 
Set value into session:- 		$_SESSION['USER_ID']=1; 
Remove data from a session:- 	unset($_SESSION['USER_ID'];

Ques. What is difference between seesion_unregister and session_unset ?
Ans. The session_unregister() function unregister a global variable from the current session and the session_unset() function frees all session variables.
Ques. Difference between cookie and Session ?
Ans.
Cookie
Session
Cookie are stored on the server in text file format
Session are stored on the server Side
Cookie can not hold multiple variables
Session can hold multiple variables.  
We can set expiry for a cookie
session only remains active as long as the browser is open


Users do not have access to the data you stored in Session,Since it is stored in the server
cookies using for user activity tracking
Session is mainly used for login/logout purpose

Ques. What is .htaccess file ?
Ans. .htaccess is a configuration file used to alter the default behavior of a Apache web server software. Most common usage is to redirect the http request to some URLs based on some conditions. For example, we can hide the .html or .php extensions of the URLs to make it SEO friendly


Ques. What is Timestamp ?
Ans. A timestamp is the current time of event that is recorded by a computer.

Ques. What does PEAR stand for ?
Ans. PEAR means "PHP Extension and Application Repository". It extends PHP and provides a higher level of programming for web developers.

Ques. What is the use of header function in php ?
Ans. The header() function sends a raw HTTP header to a client browser. We can use header() function for redirection of pages. It is important to notice that header() must be called before any actual output is seen.
PHP header are bits of information that are sent to a computer before anything else, like a web page is sent
THey tell the computer the information it needs so that it can execute commands when the rest of the information is received. 

Ques. What is MVC ?
Ans. The Model-view-controller (MVC) is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller.
·         Control mai hum logic rakhte hai
·         Model mai hum database ke function rakhte hai
·         View mai hum html part rakhta hai.

Ques. What is Ajax ?
Ans. AJAX = Asynchronous JavaScript and XML. 
AJAX is a technique for creating fast and dynamic web pages. 
AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

Ques. What are the 3 scope levels available in php  /  What is difference type of visibility ? or what are access modifiers  ? 
Ans. 
Public:- Public method or variable can be accessible from anywhere, Means a public method or variable of a class can be called outside of the class or in a subclass. 
Private:- A private  method or variable of a class can only be called inside that class only in which it is declared.
Protected:- A protected method or variable can only be called in that class & its subclass.

Ques. What are the formatting and printing strings available in php  ?
Ans.    printf(): Display a formatted string.
	sprintf(): Saves a formatted string in a variable.
	fprintf(): prints a formatted string to a file.
	number_format(): Formats number as string.
 
$today = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm 
$today = date("m.d.y"); // 03.10.01 
$today = date("j, n, Y"); // 10, 3, 2001 
$today = date("Ymd"); // 20010310 
$today = date('h-i-s, j-m-y, it is w Day'); // 05-16-18, 10-03-01, 1631 1618 6 Satpm01 $today = date('\i\t \i\s \t\h\e jS \d\a\y.'); // it is the 10th day. 
$today = date("D M j G:i:s T Y"); // Sat Mar 10 17:16:18 MST 2001 
$today = date('H:m:s \m \i\s\ \m\o\n\t\h'); // 17:03:18 m is month 
$today = date("H:i:s"); // 17:16:18 
$today = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (the MySQL DATETIME format)

Ques. What is PDO ?
Ans. Oops 

======Oops(Object oriented)======

Ques. Oops(Object oriented) ?
Ans. Oops provide way of programming language that organizes with object rather than data.

Ques. Oops(Object oriented) ?
Ans. 
Code Reusability: it can be achieved through inheritance and traits.
Modularity: it can be achieved through breaking large code into small modules, Modularity reduces complexity.
Flexibility: it can be achieved through polymorphism
Maintainability: it is to maintain code which follow Object Oriented Programming Concepts.
Security: it can be achieved through Encapsulation
Testability: it is easy to test.

Ques. What is class ?
A class/method is a blueprint or a prototype that defines the variables and methods.
A class is a collection of objects of similar type.  
Class represent all properties and behaviors of an object.
Example:-
<?php
class abc
{       	public function add()
        	{
                    	echo "mohit";
        	}
}
$obj = new abc(); //object create
$obj->add();    //call function
?>
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

Ques. What is Object ?
Any entity that has state and behaviours is known as object. Ex- Chair, Pen, table etc
//Create an object of MyClass 
$obj = new MyClass();
OR
$obj = new MyClass;

Ques. What is the relation between Classes and Objects ?
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

Ques. What is Encapsulation ?
Binding(or wrapping) code and data together into a single unit is known as encapsulation.
One object is encapsulated from another object.




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


Ques. What is Abstraction ?
Hiding internal details and showing functionality is known as abstraction. 
Abstract class is a class which contains at least one or more abstract methods.
Abstract method is a method which is declared, but not defined.

Abstract class ka hum obj nahi bana sakte hai... agar banate hai to fatal error dega: cannot instance abstract class.
Agar hame abstract class ke function ko call karni hai to inherit karke call karenge.
Ex:-
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
Q:- What is the need of abstract class?
Suppose we were modeling the behavior of animals, by creating a class hierarchy that started with a base class called Animal.
Animals are capable of doing different things like flying, digging and walking, but there are some common operations as well like eating and sleeping.
Some common operations are performed by all animals, but in a different way as well.
When an operation is performed in a different way, it is a good candidate for an abstract method (forcing subclasses to provide a custom implementation).
 
Ques. What is Polymorphism ?
When one task is performed by different ways i.e known as polymorphism.
Polymorphism is ability to use function & method in different ways.
Ques. Types of Polymorphism?
Polymorphism could be static and dynamic both. Overloading is static polymorphism while, overriding is dynamic polymorphism.
Compile time polymorphism (Static) - Method Overloading
Runtime time polymorphism (Dynamic) - Method Overriding
Overloading is defining functions/methods that have same signatures with different parameters in the same class.
Overriding is redefining parent class functions/methods in child class with same signature. So, basically the purpose of overriding is to change the behavior of your parent class method.
 The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms "inaccessible properties" and "inaccessible methods" to refer to this combination of declaration and visibility.

Interface:- An interface is a description of action that object can do.
jo interface mai function honge wo class mai hona jaruri hai.
Purpose of interface is to allow the computer to enforce these properties and to know that an object of type t.
Example:-
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
Q:- What is the key difference between concrete class and abstract class?
Concrete classes are those classes which has to declare body of abstract methods which extends or implements from abstract class or interface
OR
Abstract classes usually have partial or no implementation. On the other hand, Concrete classes always have full implementation of its behavior. Unlike Concrete classes, Abstract classes cannot be instantiated.

Inheritance:- Acquiring the property from parent class to child class is called the inheritance.

Static class:-
Static class ka hame object nahi banna padta hai, scope resolution se call kar lete hai.
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


Ques. What is the difference between Abstract class Interface ?

Abstract Class
Interface
In abstract class a method must be declared as abstract. Abstract methods doesn’t have any implementation.
In interface all the methods by default are abstract.
Abstract class can also contain member variables and concrete functions/methods.
Interfaces cannot contain any member variables and concrete functions/methods except constants.
An Abstract methods can be declare with access modifiers like public, protected etc. Concrete Class which is extending the abstract class must be defined with the same or visibility.
All methods declared in an interface must be public.
A class can Inherits only one Abstract class and Multiple inheritance is not possible for Abstract class.
A class can implement many interfaces and Multiple interface inheritance is possible.
Only complete member of abstract class can be static.
Members of Interface can not be static.
Abstract class does nor support multiple inheritance.
Interface Supports multiple inheritance
Abstract class contains Data Member.
Interface does not Contains Data member.
Abstract class contains Constructors.
Interface does not contains Constructors
An Abstract class  can contain both incomplete(abstract) and complete member
An interface contains only incomplete member (signature of member)







Ques. What is Constructor ?
Ans. Constructors are special function/method which is automatically called when an object is created.
Ques. Types of  Constructor ?
Ans.
Default Constructor: A constructor without any parameters is called a default constructor.
Parameterized Constructor: A constructor with at least one parameter is called a parametrized constructor.
Copy Constructor:
Static Constructor:
Private Constructor:

Ques. What is Destructor ?
Ans. A Destructor is special functions which are automatically called when an object is destroyed.

Ques. Is Multiple inheritance support in php ?
Ans. PHP supports only single inheritance; it means that a class can be extended from only one single class using the keyword 'extended'.

Ques. What is the meaning of a final class and final method ?
Ans. Final class means that this class cannot be extended and a final method cannot be overridden.

Ques. How to collect IP address from an HTTP request ?
Ans. $_SERVER['REMOTE_ADDR'];

Ques. How to collect IP address of the web server in php ?
Ans. $_SERVER['SERVER_ADDR'];

Ques. Find The Php Information ?
Ans.   <?php
   echo phpinfo();
?>

Ques. how to create a mySql connection ?
Ans.
mysql_connect("host_name", "User_name", "Password") ;
mysql_select_db("db_name");

Ques. how to stop the execution of php Script ?
Ans. The exit() function is used to stop the execution of PHP script.

Ques. how to upload file in php ?
Ans. The move_uploaded_file() function is used to upload file in PHP.
	move_uploaded_file($source_path,$des_path);

Ques. Difference between two dates in Php ?
Ans. <?php
   $now = time();
   $your_date = strtotime("2017-01-15");
   $datediff = $now - $your_date;
   echo floor($datediff / (60 * 60 * 24));
?>

Ques. How to get value in the url ?
Ans. $sort = $_GET[‘url’]

Ques. What We can ceil() and floor() function in php ?
Ans. Ceil() is used to find nearest maximum values of passing value.
	Ex:- 
$no = 6.5;
        	$ans = ceil($no);
        	Echo $ans;
        	Output:- 7

Floor() is used to find nearest minimum values of  passing value.
$no = 6.5;
        	$ans = ceil($no);
        	Echo $ans;
        	Output:- 6

Ques. What is the output of the following Code ?
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;
Output:- 21, 21

Ques. How to find the length of an array in php  ?
Ans.  count() or sizeof() function to get the number of elements or value in an array.
<?php
$days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
echo count($days);
echo "<br>";
echo sizeof($days);
?>

Ques. p  ?
Ans. 
```

