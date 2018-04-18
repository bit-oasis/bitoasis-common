<?php

namespace BitOasis\Common\CurrencyPair;

/**
 * @author Daniel Robenek <daniel.robenek@me.com>
 */
class CurrencyCodePair implements Pair {

	const DEFAULT_PAIR = 'BTC-AED';
	const DEFAULT_CURRENCY_CODE = 'AED';
	const DEFAULT_CRYPTOCURRENCY_CODE = 'BTC';
	const PAIRS = ['BTC-AED' => 'BTC-AED', 'ETH-AED' => 'ETH-AED', 'XRP-AED' => 'XRP-AED', 'LTC-AED' => 'LTC-AED', 'BCH-AED' => 'BCH-AED', 'ZEC-AED' => 'ZEC-AED'];
	const VALID_PAIRS = ['BTC-AED', 'BTC-USD', 'ETH-AED', 'ETH-USD', 'XRP-AED', 'XRP-USD', 'LTC-AED', 'LTC-USD', 'BCH-AED', 'BCH-USD', 'ZEC-AED', 'ZEC-USD'];

	/** @var string */
	protected $currencyCode;

	/** @var string */
	protected $cryptocurrencyCode;

	/**
	 * @param string $currencyCode
	 * @param string $cryptocurrencyCode
	 * @throws InvalidCurrencyPairException
	 */
	public function __construct(string $currencyCode, string $cryptocurrencyCode) {
		if(!in_array($cryptocurrencyCode . '-' . $currencyCode, self::VALID_PAIRS, true)) {
			throw new InvalidCurrencyPairException('Unsupported currency pair ' . $cryptocurrencyCode . '-' . $currencyCode);
		}
		$this->currencyCode = $currencyCode;
		$this->cryptocurrencyCode = $cryptocurrencyCode;
	}

	public function getCurrencyCode(): string {
		return $this->currencyCode;
	}

	public function getCryptocurrencyCode(): string {
		return $this->cryptocurrencyCode;
	}

	public function getPairCode(): string {
		return strtoupper($this->cryptocurrencyCode) . '-'. strtoupper($this->currencyCode);
	}

	public function equalsPairIgnoreFiatCurrencyDifference(string $codePair): bool {
		$currencies = explode('-', $codePair);
	    return $currencies[0] === $this->getCryptocurrencyCode();
	}

	/**
	 * @throws InvalidCurrencyPairException
	 */
	public static function fromCodePair(string $codePair): CurrencyCodePair {
		$currencies = explode('-', $codePair);
		if(count($currencies) !== 2) {
			throw new InvalidCurrencyPairException('Code pair ' . $codePair . "can't be parsed!");
		}
	    return new static($currencies[1], $currencies[0]);
	}

	public static function isCodeCombinationValid(string $cryptocurrencyCode, string $currencyCode): bool {
		return self::isPairValid($cryptocurrencyCode . '-' . $currencyCode);
	}

	public static function isPairValid(string $codePair): bool {
		return in_array($codePair, self::VALID_PAIRS, true);
	}

}