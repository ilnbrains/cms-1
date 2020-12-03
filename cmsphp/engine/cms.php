<?php

namespace Engine;

class Cms
{
	/**
	 * [$di description]
	 * @var DI
	 */
	private $di;
	/**
	 * Cms contsruct
	 * @param $[di] [<description>]
	 */
	public function __construct($di)
	{
		$this->di = $di;
	}
	/**
	 * Run Cms
	 */
	public function run()
	{
		print_r($this->$di);
	}
}
