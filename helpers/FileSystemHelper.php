<?php

class FileSystemHelper
{
    private static string $dataPath = "D:/Xampp/htdocs/routing/data/";

    public static function listData() {
        return scandir(self::$dataPath);
    }

    public static function printUserFile($name, $content): void {
        file_put_contents(self::$dataPath . "{$name}.auth", $content);
    }

    public static function printFile($absolutePath, $content) {
        file_put_contents($absolutePath, $content, FILE_APPEND);
    }

    public static function readFile($fileName): string {
        return file_get_contents(self::$dataPath ."{$fileName}.auth");
    }

}

//print_r(FileSystemHelper::listData());
//FileSystemHelper::printUserFile("user", "kontent dupki");


//echo FileSystemHelper::readFile("user");

//echo $_SERVER['PHP_SELF'];