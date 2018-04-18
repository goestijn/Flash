<?php

namespace Cube\Flash;

use Illuminate\Session\Store;

class Flash
{
	/**
	 * Collection with all flash messages
	 * 
	 * @var Illuminate\Support\Collection
	 */
	protected $_messages;

	/**
	 * Session storage
	 * 
	 * @var Illuminate\Session\Store
	 */
	protected $_session;

	/**
	 * Create new flash instance
	 * 
	 * @param Illuminate\Session\Store $session
	 */
	public function __construct(\Illuminate\Session\Store $session)
	{

		$this->_messages = collect();
		$this->_session = $session;

	}

	/**
	 * Create a new danger message
	 * 
	 * @param  string $message
	 * @param  string $title
	 * @return void
	 */
	public function danger($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}

	/**
	 * Create a new info message
	 * 
	 * @param  string $message
	 * @param  string $title
	 * @return void
	 */
	public function info($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}

	/**
	 * Create a new success message
	 * 
	 * @param  string $message
	 * @param  string $title
	 * @return void
	 */
	public function success($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}

	/**
	 * Create a new warning message
	 * 
	 * @param  string $message
	 * @param  string $title
	 * @return void
	 */
	public function warning($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}

	/**
	 * Create a new message
	 * 
	 * @param  string $message
	 * @param  string $title
	 * @param  string $type
	 * @return void
	 */
	public function message($message, $title = null, $type = 'default')
	{

		$message = new Message($message, $title, $type);
		
		$this->_messages->push($message);
		$this->_session->flash('flash', $this->_messages);

	}
}
