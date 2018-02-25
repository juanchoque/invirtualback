<?php
    class Database
    {
        private static $dbName = 'inmobiliaria_virtual' ;
        //private static $dbName = 'u175271230_inmo';
        private static $dbHost = 'localhost' ;
        //private static $dbHost = 'mysql.hostinger.es';
        private static $dbUsername = 'root';
        //private static $dbUsername = 'u175271230_inmo';
        private static $dbUserPassword = '';
        //private static $dbUserPassword = 'appinmo';

        private static $cont  = null;

        public function __construct() {
            die('Init function is not allowed');
        }

        public static function connect()
        {
           // One connection through whole application
           if ( null == self::$cont )
           {     
                try
                {
                    self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
                    self::$cont->exec("set names utf8");
                }
                catch(PDOException $e)
                {
                    die($e->getMessage()); 
                }
           }
           return self::$cont;
        }

        public static function disconnect()
        {
            self::$cont = null;
        }
    }
?>
