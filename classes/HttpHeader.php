<?php namespace Zaxbux\SecurityHeaders\Classes;

class HttpHeader {
	private ?string $name;
	private ?string $value;

	public function __construct(?string $name = null, ?string $value = null) {
		$this->name  = $name;
		$this->value = $value !== null ? trim($value) : null;
	}

	/**
	 * Get header name
	 *
	 * @return string|null
	 */
	public function getName(): ?string {
		return $this->name;
	}

	/**
	 * Get header value
	 *
	 * @return string|null
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * Set header name
	 *
	 * @param string $name
	 * @return HttpHeader
	 */
	public function setName(string $name): HttpHeader {
		$this->name = $name;

		return $this;
	}

	/**
	 * Set header value
	 *
	 * @param string $value
	 * @return HttpHeader
	 */
	public function setValue(string $value): HttpHeader {
		$this->value = trim($value);

		return $this;
	}
}
