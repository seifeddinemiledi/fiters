<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo_options[PDO::ATTR_CASE] = PDO::CASE_NATURAL;
        self::$instance = new PDO('pgsql:host=37.59.30.169;port=5432;dbname=fitersdb', 'fiters', 'fiters2016!!S', $pdo_options);
      
      }
      return self::$instance;
    }
  }
?>