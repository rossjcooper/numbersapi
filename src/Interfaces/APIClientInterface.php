<?php

namespace Rossjcooper\NumbersAPI\Interfaces;

interface APIClientInterface
{

	public function randomTrivia(): string;

	public function randomYear(): string;

	public function randomDate(): string;

	public function randomMath(): string;
}
