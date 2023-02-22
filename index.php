<?php
    include 'database.php';

    $obj = new Database();

    // $obj->insert('students',['student_name'=>'Kumar Sanu','age'=>'22','city'=>'Delhi']);
    // echo "Insert result is : ";
    // echo "<pre>";
    // print_r($obj->getResult());
    // echo "</pre>";

    // $obj->update('students',['student_name'=>'Krishna Kumar','age'=>'20','city'=>'Mumbai'], 'id="7"');
    // echo "Update result is : ";
    // echo "<pre>";
    // print_r($obj->getResult());
    // echo "</pre>";

    // $obj->delete('students','id="5"');
    // echo "<pre>";
    // print_r($obj->getResult());
    // echo "</pre>";

    // $obj->sql('SELECT * FROM students WHERE age = "20"');
    // echo "SQL Result is: ";
    // echo "<pre>";
    // print_r($obj->getResult());
    // echo "</pre>";

    //$obj->select('students','*',null,null,null,null);
    $obj->select('students','id,student_name',null,'city="Goa"','student_name',1);
    echo "SELECT Result is: ";
    echo "<pre>";
    print_r($obj->getResult());
    echo "</pre>";

?>