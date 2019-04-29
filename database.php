<?php
require_once("DB.php");

class Database {
  private static $mysqli = null;

  public function __construct() {
    die('Init function error');
  }

  public static function dbConnect() {
	//try connecting to your database
  try{
    $mysqli = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,USERNAME,PASSWORD);
    echo "Successful Connection";
  }
  //catch a potential error, if unable to connect
  catch(PDOException $pdoe){
    echo "Could not connect";
    $mysqli=null;
  }

    return $mysqli;
  }

  public static function dbDisconnect() {
    $mysqli = null;
  }
}
?>
