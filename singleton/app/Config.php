<?php

namespace App;

class Config
{
    private static ?Config $instance = null;
    private mixed $data;

    public static function getInstance(): Config
    {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $this->data = require dirname(__DIR__) . '/config/config.php';
    }

    public function get($key)
    {
        if (!isset($this->data[$key])) {
            return null;
        }
        return $this->data[$key];
    }
}