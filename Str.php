<?php

class Str
{
	private $s;

	public function __construct(string $s)
	{
		$this->s = $s;
	}

	public function lower()
	{
		return mb_strtolower($this->s, 'UTF-8');
	}

	public function upper()
	{
		return mb_strtoupper($this->s, 'UTF-8');
	}

	public function title()
	{
		return mb_convert_case($this->s, MB_CASE_TITLE, 'UTF-8');
	}

	public function convert(string $format)
	{
		if (!in_array($format, ['lower', 'upper', 'title'])) {
			throw new Exception('The format is not supported.');
		}

		return $this->$format();
	}
}