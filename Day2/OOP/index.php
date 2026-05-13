<?php 
// capitalize
// class Human
// {
//     // properties  (variables)
//     public $name = "John";
//     public $age = 25;
//     public $phone = "0100256974";
//     private $email;
//     protected $address = "cairo";

//     // methods  (functions)

//     function __construct($name, $address, $age = "userAge", $phone = "userPhone", $email = "userEmail")
//     {   // this ==> refer to the current object
//         // this ->name(class property) = name (parameter)
//         $this->name = $name;
//         $this->age = $age;
//         $this->phone = $phone;
//         $this->email = $email;
//         $this->address = $address;
//     }
//     function walk(): void
//     {
//         echo "human is walking";
//     }
//     function talk(): string
//     {
//         return "<br> human is talking . <br>";
//     }

//      function setEmail($email) // assign data
//     {         // class  parameter
//         $this->email=$email;
//     }
//     function getEmail() // get data
//     {
//         return $this->email;
//     }

//      function setAddress($address) // assign data
//     {         // class  parameter   
//         $this->address=$address;
//     }
//     function getAddress() // get data
//     {
//         return $this->address;
//     }       
//     function printData()
//     {
//         echo "name : ". $this->name ."<br>";
//         echo "age : ". $this->age ."<br>";
//         echo "phone : ". $this->phone ."<br>";  
//         echo "address : ". $this->getAddress() ."<br>";
//         echo "email : ". $this->getEmail() ."<br>";
//     }
//     // setter and getter (Encapsulation)
   

//     function hasEmail()
//     {

       
//         if (isset($this->email)) {
//             return "email is set";
//         } else {
//             return "email is not set";
//         }
//     }
// }

// // inheriatance 
// /*** types
//  * single inheritance  ==> accepted in php 
//  * multi level inheritance ==> accepted in php
//  * multiple inheritance ==> not accepted in php
//  * hierarchical inheritance ==> accepted in php
//  * hybrid inheritance ==> not accepted in php
//  */

// class Employee extends Human{
//     protected $salary ;

//    function __construct($name="Employee Name",$address="Employee Address",$age="Employee Age",$phone="Employee Phone",$salary="Employee Salary")
//    {
//     // $this->name=$name;
//     // $this->age=$age;    
//     // $this->phone=$phone;
//     // $this->address=$address; 
//     // parent :: Human  
//     parent::__construct($name,$address,$age,$phone); 
//     $this->salary=$salary;
//    }
//     function printData()
//     {
//         parent ::setEmail("Employee Email");
//         parent::printData();
//         echo "salary : ". $this->salary ."<br>";
//         echo "email : ". parent ::getEmail();
  
//    }
   
// }

// class Manager extends Employee{
//     protected $department;

//    function __construct ($salary,$name="Manager Name",$address="Manager Address",$age="Manager Age",$phone="Manager Phone" ,$department="Manager Department")
//    {
//          // parent :: parent class that u inherit
//          // employee :: parent
         
//         parent::__construct($name,$address,$age,$phone,$salary);
//         $this->department=$department;
        

  
//    }

//    function printData()
//    {
//       // employee --- xxx ---human 
//        parent::printData();
//        parent::getEmail();
//         echo "salary : ". $this->salary ."<br>";
//         echo "department : ". $this->department ."<br>";

//    }
// }


// // manager ---> empolyee --> human
// $employee1=new Employee();
// $manager1=new Manager(5000);
// $manager1->printData();
// $human1 = new Human(); 
// var_dump($employee1);
// var_dump($manager1);
// var_dump($human1);

// $human1 = new Human("mahmoud", 25, "01065897410", "menoufia");  // object (var_dump , print_r)
// $human1 = new Human("nada", "cairo", $age = 18);  // object (var_dump , print_r)

// var_dump($human1);
// object(Human)#1 (4) { ["name"]=> string(4) "John" ["age"]=> int(25) ["phone":"Human":private]=> string(10) "0100256974" ["address":protected]=> string(5) "cairo" }
// echo "<br>", $human1->name;

// $human1->name="mahmoud";
// $human1->age=30;

// echo "<br>", $human1->name;
// echo "<br>", $human1->age;

// $human1-> printData();
//  echo $human1->talk();
// $human1->walk();


/***
 * function ---> return (return), void (echo or print)
 * 
 * 
 * function sum ():void {
 * echo 5+3;
 * }
 * 
 * function sum ():int {
 * return 5+3;}
 */



////*********************** Abstraction  */

/**
 * Hidden data 
 * hidden implementtion  
 * methods without body ---> has no implementation
 * methos has implementation 
 * 
 *  abstract class can not take object from it
 * u can inherit abstract class to use it
 */

// abstract class Bank{
//     protected $amount;
//     function sayhello ()
//     {
//         echo "welcome to our customers";
//     }

//     function deposit($amount)
//     {
//         $this->amount+=$amount;
        
//     }

//     abstract function printData();
//     abstract function test():void;
//     abstract function link():string;


// }


// // $bankMasr1=new Bank(); ===> error 

// class BankMasr extends Bank{
//     function printData()
//     {
//         echo "your moneny in bank masr is :", $this->amount;
    
//     } 
//     function test():void{
//         echo "this test bank masr";
//     }

//     function link():string{
//         return "https://www.bankmasr.com";
//     }

// }

// $bankMasr1=new BankMasr();
// $bankMasr1->deposit(5000);
// $bankMasr1->printData();


// interface 
/**
 * methods without body ===> abstract methods
 * abstract used to hide data and implementation
 * interface  declare methods
 * 
 * ========= deal with interface ==> implemts
 */

// interface Shape{
   
//     function area();
//     function perimeter();
//     function type($name):string;
// }
// interface Shape2 extends Shape{
   
//    function test();
// }


/**
 * variables ----> class (const , static)
 * self :: ===> current class 
 * this -> ===> current object
 */

// class Circle implements Shape , Shape2{
//     public $radius;
//     public $name;
//     public const PI=3.14;
//     static $counter=0;
//     function __construct($radius,$name)
//     {
//         $this->radius=$radius;
//         $this->name=$name;
//         self::$counter++;
//     }
//     function area(){
//       return self::PI * $this->radius * $this->radius;

//     }
//  function perimeter(){
//    return 2* self::PI * $this->radius;

//  }
//   function type($name):string{
//      return $this->name;
//   }

//   function test()
//   {
//     echo "<br>",self::$counter;
//   }
// }


// $c=new Circle(7,"circle");
// $c2=new Circle(7,"circle");
// $c3=new Circle(7,"circle");
// $c3=new Circle(7,"circle");
// $c3=new Circle(7,"circle");
// echo "area : ", $c->area();
// echo "<br> perimeter : ", $c->perimeter();
// echo "<br> type : ", $c->type("circle");
// $c3->test();




/***\
 * class extend class , abstract class
 * class implent interface (more than one interface) ---> multiple inheritance
 * iterface extend interface
 * abstract class implement interface  
 * abstract class extend abstract class
 */


/// *********** trait


// trait PrintTable
// {
//     function print()
//     {
//         echo "<table border='1'>";
       
//         echo "</table>";
//     }
// }

// namespace A;
// class Student {
//     // use PrintTable;
// }
//         // name: \nameSpace\className
// $c1=new \A\Student();
// namespace B;
// class Student {
//     // use PrintTable;
// }
// $c2=new \B\Student();


// ************** composition (اعتماديه)  ==> has a 


// car --- engin (car has an engin )


class Engine {
    public $type;

    function __construct($type)
    {
        $this->type=$type;
    }
}

class Car {
    public $color;
    public $engine;
    // function __construct ($color ,Engine $engine)
    function __construct ($color , $engine)
    {
        $this->color=$color;
        $this->engine= new Engine($engine);
        // $this->engine=$engine;
    }

    function printData()
    {
        echo "car color : ", $this->color;
       echo $this->engine->type;

    }
}

$c=new Car("red","v8");
// $c=new Car("red",new Engine("v8"));
$c->printData();