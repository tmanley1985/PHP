<?php
namespace App;

interface ContainerInterface {

	public function addToContainer($key, $callback);
	public function makeFromContainer($key);
}

trait PipeFromContainer {

	public function pipeToFunction($key, callable $callback)
	{

		$data = parent::makeFromContainer($key);

		return $callback($data);

	}
}

class Computer implements ContainerInterface {

	public $keys = [];
	protected $monitor_size;
	private $password = 'pass';
	public $container = [];

	public function __construct($keys, $monitor_size)
	{
		$this->keys = $keys;
		$this->monitor_size = $monitor_size;

	}

	public function addToContainer($key, $callback)
	{
		$this->container[$key] = $callback;

	}

	public function makeFromContainer($key)
	{
		return $this->container[$key]();
	}


	public function getKeys()
	{
		return $this->var_dump($this->keys);

	}

	protected function var_dump($data)
	{
		var_dump($data);

	}

	public function getClass()
	{
		return $this->thisClass();
	}

	private function thisClass()
	{
		return $this->var_dump(self::class);
	}

}

class Workstation extends Computer {
	public $keys = [];
	protected $monitor_size;
	private $password = 'pass2';

	// Overrides the parent construct function.

	public function __construct($keys, $monitor_size)
	{
		$this->keys = $keys;
		$this->monitor_size = $monitor_size;

	}

	// Overrides the parent getKeys function.

	public function getKeys($newKeys = [])
	{
		if(count($newKeys) > 0) 
		{
			$this->keys = array_merge($newKeys,$this->keys);
		}

		// Uses parent var_dump function after implementation difference.
		return parent::var_dump($this->keys);

	}



}

class Mac extends Workstation {

	public $keys;
	protected $monitor_size;
	protected $owner;

	public function __construct($keys, $monitor_size, $owner)
	{

		$this->owner = $owner;
		parent::__construct($keys,$monitor_size);
		
	}

	public function getOwner()
	{
		$this->var_dump($this->owner);
	}

}

class PC extends Workstation {
	public $keys;
	protected $monitor_size;
	protected $owner;
	
	public function __construct($keys, $monitor_size, $owner)
	{

		$this->owner = $owner;
		parent::_construct($keys,$monitor_size);
		

	}

	public function getOwner()
	{
		$this->var_dump($this->owner);
	}

}

class Server extends Computer {

	public $keys = [];
	protected $monitor_size;
	private $password = 'pass';
	public $container = [];
	protected $os;

	public function __construct($keys, $monitor_size, $os, $fileExtensions = [])
	{
		$this->os = $os;
		$this->fileExtensions = $fileExtensions;

		parent::__construct($keys,$monitor_size);

	}


}

class WebServer extends Server {

	use PipeFromContainer;

}

class DatabaseServer extends Server {
	use PipeFromContainer;
}