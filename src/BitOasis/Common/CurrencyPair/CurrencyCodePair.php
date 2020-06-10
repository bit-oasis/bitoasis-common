<?php

namespace BitOasis\Common\CurrencyPair;

/**
 * @author Daniel Robenek <daniel.robenek@me.com>
 */
class CurrencyCodePair implements Pair {

	const DEFAULT_PAIR = 'BTC-AED';
	/** @deprecated 1.1.0 use {@see DEFAULT_BASE_CRYPTOCURRENCY_CODE} @var string */
	const DEFAULT_CURRENCY_CODE = 'AED';
	const DEFAULT_BASE_CRYPTOCURRENCY_CODE = 'AED';
	const DEFAULT_CRYPTOCURRENCY_CODE = 'BTC';
	const PAIRS = [
		'BTC-AED' => 'BTC-AED',

		'ETH-AED' => 'ETH-AED',
		'ETH-BTC' => 'ETH-BTC',

		'BCH-AED' => 'BCH-AED',
		'BCH-BTC' => 'BCH-BTC',
//		'BCH-ETH' => 'BCH-ETH', No longer supported

		'XRP-AED' => 'XRP-AED',
		'XRP-BTC' => 'XRP-BTC',

		'ETC-AED' => 'ETC-AED',
		'ETC-BTC' => 'ETC-BTC',

		'LTC-AED' => 'LTC-AED',
		'LTC-BTC' => 'LTC-BTC',

		'ZEC-AED' => 'ZEC-AED',
		'ZEC-BTC' => 'ZEC-BTC',

		'XMR-AED' => 'XMR-AED',

		'XLM-AED' => 'XLM-AED',

		'EOS-AED' => 'EOS-AED',
		'EOS-BTC' => 'EOS-BTC',
		'EOS-ETH' => 'EOS-ETH',

		'BSV-AED' => 'BSV-AED',
		'BSV-BTC' => 'BSV-BTC',

		'OMG-AED' => 'OMG-AED',
		'OMG-BTC' => 'OMG-BTC',

		'ZRX-AED' => 'ZRX-AED',
		'ZRX-BTC' => 'ZRX-BTC',

		'BAT-AED' => 'BAT-AED',
		'BAT-BTC' => 'BAT-BTC',

		'ALGO-AED' => 'ALGO-AED',
		'ALGO-BTC' => 'ALGO-BTC',

		'USDT-AED' => 'USDT-AED',
		'BTC-USDT' => 'BTC-USDT',
		'ETH-USDT' => 'ETH-USDT',

		'NEO-AED' => 'NEO-AED',
		'NEO-BTC' => 'NEO-BTC',

		'XTZ-AED' => 'XTZ-AED',
		'XTZ-BTC' => 'XTZ-BTC',

		'LINK-AED' => 'LINK-AED',
		'LINK-BTC' => 'LINK-BTC',
		'LINK-ETH' => 'LINK-ETH',

	];
	const VALID_PAIRS = [
		'BTC-AED', 'BTC-USD', 'BTC-KWD',

		'ETH-AED', 'ETH-USD',
		'ETH-BTC',

		'BCH-AED', 'BCH-USD',
		'BCH-BTC',
		'BCH-ETH',

		'XRP-AED', 'XRP-USD',
		'XRP-BTC',

		'ETC-AED', 'ETC-USD',
		'ETC-BTC',

		'LTC-AED', 'LTC-USD',
		'LTC-BTC',

		'ZEC-AED', 'ZEC-USD',
		'ZEC-BTC',

		'XMR-AED', 'XMR-USD',

		'XLM-AED', 'XLM-USD',

		'EOS-AED', 'EOS-USD',
		'EOS-BTC',
		'EOS-ETH',

		'BSV-AED', 'BSV-USD',
		'BSV-BTC',

		'OMG-AED', 'OMG-USD',
		'OMG-BTC',

		'ZRX-AED', 'ZRX-USD',
		'ZRX-BTC',

		'BAT-AED', 'BAT-USD',
		'BAT-BTC',

		'ALGO-AED', 'ALGO-USD',
		'ALGO-BTC',

		'USDT-AED', 'USDT-USD',
		'BTC-USDT',
		'ETH-USDT',

		'NEO-AED', 'NEO-USD',
		'NEO-BTC',

		'XTZ-AED', 'XTZ-USD',
		'XTZ-BTC',

		'LINK-AED', 'LINK-USD',
		'LINK-BTC',
		'LINK-ETH',
	];
	const FIAT_CRYPTOCURRENCY_CODES = ['USD', 'AED'];
	const VALID_BASE_CRYPTOCURRENCIES = ['USD', 'AED', 'BTC', 'ETH', 'USDT'];

	/** @var string */
	protected $baseCryptocurrencyCode;

	/** @var string */
	protected $cryptocurrencyCode;

	/**
	 * @param string $baseCryptocurrencyCode
	 * @param string $cryptocurrencyCode
	 * @throws InvalidCurrencyPairException
	 */
	public function __construct(string $baseCryptocurrencyCode, string $cryptocurrencyCode) {
		if(!self::isPairValid($cryptocurrencyCode . '-' . $baseCryptocurrencyCode)) {
			throw new InvalidCurrencyPairException('Unsupported currency pair ' . $cryptocurrencyCode . '-' . $baseCryptocurrencyCode);
		}
		$this->baseCryptocurrencyCode = $baseCryptocurrencyCode;
		$this->cryptocurrencyCode = $cryptocurrencyCode;
	}

	/**
	 * @deprecated 1.1.0 use {@see getBaseCryptocurrencyCode}
	 * @return string
	 */
	public function getCurrencyCode(): string {
		return $this->baseCryptocurrencyCode;
	}

	public function getBaseCryptocurrencyCode(): string {
		return $this->baseCryptocurrencyCode;
	}

	public function getCryptocurrencyCode(): string {
		return $this->cryptocurrencyCode;
	}

	public function getPairCode(): string {
		return strtoupper($this->cryptocurrencyCode) . '-'. strtoupper($this->baseCryptocurrencyCode);
	}

	/**
	 * @deprecated 1.1.0 use {@see equalsPairIgnoreUsdAedDifference}
	 * @param string $codePair
	 * @return bool
	 */
	public function equalsPairIgnoreFiatCurrencyDifference(string $codePair): bool {
		return $this->equalsPairIgnoreUsdAedDifference($codePair);
	}

	public function equalsPairIgnoreUsdAedDifference(string $codePair): bool {
		$currencies = explode('-', $codePair);
		return count($currencies) > 1 && $currencies[0] === $this->getCryptocurrencyCode()
			&& self::isFiatCryptocurrency($currencies[1]) && self::isFiatCryptocurrency($this->getBaseCryptocurrencyCode());
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

	public static function isCodeCombinationValid(string $cryptocurrencyCode, string $baseCryptocurrencyCode): bool {
		return self::isPairValid($cryptocurrencyCode . '-' . $baseCryptocurrencyCode);
	}

	public static function isPairValid(string $codePair): bool {
		return in_array($codePair, self::VALID_PAIRS, true);
	}

	public static function isFiatCryptocurrency(string $code): bool {
		return in_array($code, self::FIAT_CRYPTOCURRENCY_CODES, true);
	}

	public static function getBaseCryptocurrencyCodeForDb(string $code): string {
		if (self::isFiatCryptocurrency($code) && $code !== 'USD') {
			return 'USD';
		}
		return $code;
	}

	public static function hasPairFiatBaseCryptocurrency(string $codePair): bool {
		$currencies = explode('-', $codePair);
		return count($currencies) > 1 && self::isFiatCryptocurrency($currencies[1]);
	}

}
