<?php 
/*
error_reporting(0);
ini_set('display_errors', 0);*/

session_start();

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese', 'pt_BR.utf-8');
date_default_timezone_set('America/Sao_Paulo');

class Database{
    protected static $db;
    private function __construct(){

        $db_host = "localhost";
        $db_name = "computerhead";
        $db_user = "root";
        $db_password = "";
        $db_driver = "mysql";

        try{
            self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_name", $db_user, $db_password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->exec('SET NAMES utf8');
        }
        catch (PDOException $e){
            die("Connection Error: " . $e->getMessage());
        }
    }
    public static function connection(){
        if (!self::$db){
            new Database();
        }
        return self::$db;
    }
}

$data = date('Y-m-d H:i:s');
$hoje = date('d/m/Y');
$hora = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$ip = $_SERVER["REMOTE_ADDR"];