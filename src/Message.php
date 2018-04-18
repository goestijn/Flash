<?php

namespace Cube\Flash;

class Message
{
	/**
	 * Body of the flash message
	 * 
	 * @var string
	 */
	protected $_message;

	/**
	 * Title of the flash message
	 * 
	 * @var string
	 */
	protected $_title;

	/**
	 * Type of the flash message
	 * 
	 * @var string
	 */
	protected $_type;

	/**
	 * Create a new instance
	 * 
	 * @param string $message 
	 * @param string $title 
	 * @param string $type
	 * @return void
	 */
	public function __construct($message, $title, $type)
	{

		$this->_message = $message;
		$this->_title = $title;
		$this->_type = $type;

	}

	/**
	 * Get property
	 * 
	 * @param  string $property
	 * @return mixed
	 */
	public function __get($property)
	{

		$property = sprintf('_%s', $property);

		if (!property_exists($this, $property))
			throw new \Exception(sprintf('Undefined property: %s::$%s', __CLASS__, ltrim($property, '_')));

		return $this->{$property};

	}

	/**
	 * Set property
	 * 
	 * @param string $property
	 * @param string $value
	 * @return mixed
	 */
	public function __set($property, $value)
	{

		$property = sprintf('_%s', $property);

		if (!property_exists($this, $property))
			throw new \Exception(sprintf('Undefined property: %s::$%s', __CLASS__, ltrim($property, '_')));

		$this->{$property} = $value;
		
	}
}
