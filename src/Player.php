<?php

namespace Cspivack\Faker;

class Player
{
	public function __construct(array $data)
	{
		$this->data = $data;
	}

	public function name(): string
	{
		return $this->data['first'] . ' ' . $this->data['last'];
	}

	public function firstName(): string
	{
		return $this->data['first'];
	}

	public function lastName(): string
	{
		return $this->data['first'];
	}

	public function team(): string
	{
		return $this->data['team'];
	}

	public function position(): string
	{
		return $this->data['position'];
	}

	public function benched(): bool
	{
		return $this->data['bench'];
	}

	public function __toString(): string
	{
		return $this->name();
	}
}