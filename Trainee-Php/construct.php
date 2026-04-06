<?php
    class ParentClass{
        function __construct(){
            echo "This is Parents Class";
        }
    }
    class ChildClass extends ParentClass{
        function __construct(){
            echo "This is Child Class";
        }
    }

    $obj=new ChildClass();

?>