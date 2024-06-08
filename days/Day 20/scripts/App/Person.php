<?php

namespace App;

class Person {
	public function __construct(
		public string $name,
		public int $age
	) {
	
	}

	public function printProperties() {
		print("Name: {$this->name}." . PHP_EOL);
		print "Age: {$this->age}." . PHP_EOL;
	}
}
