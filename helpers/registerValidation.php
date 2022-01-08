<?php

//$name = $_POST['name'];
//echo $name;

class registerValidation
{
    private static string $name;

    public static function returnFieldsValues(): void {
        if (!self::checkIfRegularData()) {
            self::Logger("User created successfully");
        }
    }

    private static function checkIfRegularData(): string {
        self::$name = $_POST["name"];

        if(!preg_match("/^[a-z ,.'-]+$/i", self::$name)) {
            self::Logger("Incorrect data");
            return new Exception();
        }else {
            self::Logger("Provided data is correct");
            return self::$name;
        }
    }
}

