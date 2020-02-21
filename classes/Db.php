<?php


class Db
{
    public static function getdbconnect(){
        $conn = mysqli_connect("localhost","root","","14.10") or die("Couldn't connect");
        return $conn;
    }
}