<?php

require_once "User.php";

class Model {
	private $attributes = [];
	protected static $table;

	public function __set($name, $value) {
		$this->attributes[$name] = $value;
	}

	public function __get($name) {
		if (array_key_exists($name, $this->attributes)) {
			return $this->attributes[$name];
		}
		return null;
	}

	public static function getTableName() {
		return static::$table;
	}

}


// $attribute = new Model();
// $attribute->anyProperty=['joey', 'is', 'awesome'];
// var_dump($attribute->anyProperty);

echo User::getTableName() . PHP_EOL;