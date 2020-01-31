<?php

use PHPUnit\Framework\TestCase;
use Rossjcooper\NumbersAPI\APIClient;

class APIClientTest extends TestCase {

	private $api;

	protected function setUp(): void
	{
		$this->api = new APIClient();
	}
	
	public function testRandomTrivia()
	{
		$this->assertIsString($this->api->randomTrivia());
	}

	public function testRandomYear()
	{
		$this->assertIsString($this->api->randomYear());
	}

	public function testRandomDate()
	{
		$this->assertIsString($this->api->randomDate());
	}

	public function testRandomMath()
	{
		$this->assertIsString($this->api->randomMath());
	}
}