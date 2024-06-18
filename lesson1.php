<?php
    echo "Hello World!";
    echo("<br>");
    print("This is when using the print function!");
    echo("<br>");
    echo("This is a PHP code!");

    // This is a comment
    # This is also a php comment
    /*
        This is a multi-line comment
    */
    // Variables
    $name = "John"; // String
    $age = 20; // Integer
    $height = 5.7; // Float
    $isMale = true; // Boolean (true or false)
    $hobbies = array("Reading", "Coding", "Swimming"); // Array
    $carObject = (object)["brand" => "Toyota", "model" => "Corolla"]; // Object
    $personObject =(object)["name" => "Esther", "course" => "Fullstack","age" => "18", "address" => "K.road"]; // Object
    echo("<br>");
    $fruits= array("Apple", "Passion", "Pineapple", "Mango", "Banana"); // Array
    
    $break = "<br>";
    echo $break;
    echo $name;
    echo $break;
    // var_dump( $personObject);
    $array  = array(
        "foo"=> "bar",
        "bar" => "foo",
    );
    // Using the short array syntax
    $array = [
        "foo" => "bar",
        "bar" => "foo",
    ];
    var_dump($array["foo"]);
?>