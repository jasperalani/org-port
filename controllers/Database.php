<?php

function db($mysqli = 0) {
    return ! $mysqli ? DatabaseController::instance() : DatabaseController::instance()->get();
}

class DatabaseController {

    public $s;
    public $connected = false;
	protected static $_instance = null;

    public function __construct () {
        $this->connect_db();
    }

    public function connect_db() {
        $connection = new mysqli(
            '127.0.0.1',
            'root',
            'orgport',
            'orgport'
        );

        if($connection->connect_error){
            die("MySQL connection error: $connection->connect_error");
        }

        $this->s = $connection;
        $this->connected = true;
    }

    public function query($query) {
        return $this->s->query($query);
    }

    public function get() {
        return $this->s;
    }

    public function escape($string) {
        return mysqli_real_escape_string(db()->get(), $string);
    }

    public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}    

}