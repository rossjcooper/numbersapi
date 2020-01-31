<?php

namespace Rossjcooper\NumbersAPI;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * An API client for getting results from the NumbersAPI
 * 
 * @see http://numbersapi.com/
 */
class APIClient implements APIClientInterface
{
	private $client;

	private const API_URL = 'http://numbersapi.com';

	public function __construct(ClientInterface $client = null)
	{
		$config = [
			'timeout' => 5,
			'base_uri' => self::API_URL,
		];
		$this->client = $client ?? new Client($config);
	}

	public function randomTrivia(): string
	{
		return $this->client->request('GET', '/random/trivia')->getBody();
	}

	public function randomYear(): string
	{
		return $this->client->request('GET', '/random/year')->getBody();
	}

	public function randomDate(): string
	{
		return $this->client->request('GET', '/random/date')->getBody();
	}

	public function randomMath(): string
	{
		return $this->client->request('GET', '/random/trivia')->getBody();
	}
}
