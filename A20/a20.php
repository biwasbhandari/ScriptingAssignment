<?php
// a. Constructor and Destructor
class MyClass {
    // Constructor
    public function __construct() {
        echo "Constructor called!\n";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor called!\n";
    }
}

$obj = new MyClass(); // Output: Constructor called!
unset($obj); // Output: Destructor called!

// b. Single Inheritance
class ParentClass {
    public function parentMethod() {
        echo "Parent method\n";
    }
}

class ChildClass extends ParentClass {
    public function childMethod() {
        echo "Child method\n";
    }
}

$childObj = new ChildClass();
$childObj->parentMethod(); // Output: Parent method
$childObj->childMethod(); // Output: Child method

// c. Multi-level Inheritance
class GrandParentClass {
    public function grandParentMethod() {
        echo "Grandparent method\n";
    }
}

class ParentClass2 extends GrandParentClass {
    public function parentMethod() {
        echo "Parent method\n";
    }
}

class ChildClass2 extends ParentClass2 {
    public function childMethod() {
        echo "Child method\n";
    }
}

$childObj2 = new ChildClass2();
$childObj2->grandParentMethod(); // Output: Grandparent method
$childObj2->parentMethod(); // Output: Parent method
$childObj2->childMethod(); // Output: Child method

// d. Hierarchical Inheritance
class ParentClass3 {
    public function parentMethod() {
        echo "Parent method\n";
    }
}

class ChildClass3A extends ParentClass3 {
    public function childMethodA() {
        echo "Child method A\n";
    }
}

class ChildClass3B extends ParentClass3 {
    public function childMethodB() {
        echo "Child method B\n";
    }
}

$childObj3A = new ChildClass3A();
$childObj3A->parentMethod(); // Output: Parent method
$childObj3A->childMethodA(); // Output: Child method A

$childObj3B = new ChildClass3B();
$childObj3B->parentMethod(); // Output: Parent method
$childObj3B->childMethodB(); // Output: Child method B

// e. Method Overriding
class ParentClass4 {
    public function methodToOverride() {
        echo "Parent method\n";
    }
}

class ChildClass4 extends ParentClass4 {
    public function methodToOverride() {
        echo "Child method\n";
    }
}

$childObj4 = new ChildClass4();
$childObj4->methodToOverride(); // Output: Child method

// f. Exceptions Handling
try {
    // Try block where exception might occur
    $number = 10 / 0; // Division by zero
} catch (Exception $e) {
    // Catch block to handle the exception
    echo "Caught exception: " . $e->getMessage() . "\n";
}

// g. Access Static Members
class MyClass2 {
    public static $staticVar = "Static variable";

    public static function staticMethod() {
        echo "Static method\n";
    }
}

echo MyClass2::$staticVar . "\n"; // Output: Static variable
MyClass2::staticMethod(); // Output: Static method
?>
