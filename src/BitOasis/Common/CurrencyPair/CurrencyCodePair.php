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
		'BTC-SAR' => 'BTC-SAR',
		'BTC-TRY' => 'BTC-TRY',

		'ETH-AED' => 'ETH-AED',
		'ETH-SAR' => 'ETH-SAR',
		'ETH-TRY' => 'ETH-TRY',
		'ETH-BTC' => 'ETH-BTC',

		'BCH-AED' => 'BCH-AED',
		'BCH-BTC' => 'BCH-BTC',
//		'BCH-ETH' => 'BCH-ETH', No longer supported

		'XRP-AED' => 'XRP-AED',
		'XRP-SAR' => 'XRP-SAR',
		'XRP-TRY' => 'XRP-TRY',
		'XRP-BTC' => 'XRP-BTC',

		'ETC-AED' => 'ETC-AED',
		'ETC-BTC' => 'ETC-BTC',

		'LTC-AED' => 'LTC-AED',
		'LTC-SAR' => 'LTC-SAR',
		'LTC-BTC' => 'LTC-BTC',

		'ZEC-AED' => 'ZEC-AED',
		'ZEC-BTC' => 'ZEC-BTC',

		'XMR-AED' => 'XMR-AED',
		'XMR-BTC' => 'XMR-BTC',

		'XLM-AED' => 'XLM-AED',
		'XLM-SAR' => 'XLM-SAR',

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
		'USDT-SAR' => 'USDT-SAR',
		'BTC-USDT' => 'BTC-USDT',
		'ETH-USDT' => 'ETH-USDT',

		'NEO-AED' => 'NEO-AED',
		'NEO-BTC' => 'NEO-BTC',

		'XTZ-AED' => 'XTZ-AED',
		'XTZ-BTC' => 'XTZ-BTC',

		'LINK-AED' => 'LINK-AED',
		'LINK-BTC' => 'LINK-BTC',
		'LINK-ETH' => 'LINK-ETH',

		'DAI-AED' => 'DAI-AED',
		'DAI-SAR' => 'DAI-SAR',
		'DAI-BTC' => 'DAI-BTC',

		'MKR-AED' => 'MKR-AED',
		'MKR-BTC' => 'MKR-BTC',

		'REP-AED' => 'REP-AED',
		'REP-BTC' => 'REP-BTC',

		'KNC-AED' => 'KNC-AED',
		'KNC-BTC' => 'KNC-BTC',

		'UNI-AED' => 'UNI-AED',
		'UNI-SAR' => 'UNI-SAR',
		'UNI-USDT' => 'UNI-USDT',

		'YFI-AED' => 'YFI-AED',

		'BAL-AED' => 'BAL-AED',

		'COMP-AED' => 'COMP-AED',

		'SNX-AED' => 'SNX-AED',

		'DOGE-AED' => 'DOGE-AED',
		'DOGE-SAR' => 'DOGE-SAR',
		'DOGE-BTC' => 'DOGE-BTC',
		'DOGE-USDT' => 'DOGE-USDT',

		'AAVE-AED' => 'AAVE-AED',
		'AAVE-SAR' => 'AAVE-SAR',
		'AAVE-USDT' => 'AAVE-USDT',

		'BNT-AED' => 'BNT-AED',
		'BNT-SAR' => 'BNT-SAR',

		'ENJ-AED' => 'ENJ-AED',
		'ENJ-SAR' => 'ENJ-SAR',

		'LRC-AED' => 'LRC-AED',
		'LRC-SAR' => 'LRC-SAR',

		'MANA-AED' => 'MANA-AED',
		'MANA-SAR' => 'MANA-SAR',

		'MATIC-AED' => 'MATIC-AED',
		'MATIC-SAR' => 'MATIC-SAR',
		'MATIC-USDT' => 'MATIC-USDT',

		'STORJ-AED' => 'STORJ-AED',
		'STORJ-SAR' => 'STORJ-SAR',

		'SUSHI-AED' => 'SUSHI-AED',
		'SUSHI-SAR' => 'SUSHI-SAR',
		'SUSHI-USDT' => 'SUSHI-USDT',

		'USDC-AED' => 'USDC-AED',
		'USDC-SAR' => 'USDC-SAR',

		'WAVES-AED' => 'WAVES-AED',
		'WAVES-SAR' => 'WAVES-SAR',
		'WAVES-USDT' => 'WAVES-USDT',
	];
	const VALID_PAIRS = [
		'BTC-AED', 'BTC-USD', 'BTC-KWD', 'BTC-SAR', 'BTC-TRY',

		'ETH-AED', 'ETH-USD', 'ETH-SAR', 'ETH-TRY',
		'ETH-BTC',

		'BCH-AED', 'BCH-USD',
		'BCH-BTC',
		'BCH-ETH',

		'XRP-AED', 'XRP-USD', 'XRP-SAR', 'XRP-TRY',
		'XRP-BTC',

		'ETC-AED', 'ETC-USD',
		'ETC-BTC',

		'LTC-AED', 'LTC-USD', 'LTC-SAR',
		'LTC-BTC',

		'ZEC-AED', 'ZEC-USD',
		'ZEC-BTC',

		'XMR-AED', 'XMR-USD',
		'XMR-BTC',

		'XLM-AED', 'XLM-USD', 'XLM-SAR',

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

		'USDT-AED', 'USDT-USD', 'USDT-SAR',
		'BTC-USDT',
		'ETH-USDT',

		'NEO-AED', 'NEO-USD',
		'NEO-BTC',

		'XTZ-AED', 'XTZ-USD',
		'XTZ-BTC',

		'LINK-AED', 'LINK-USD',
		'LINK-BTC',
		'LINK-ETH',

		'DAI-AED', 'DAI-SAR', 'DAI-USD',
		'DAI-BTC',

		'MKR-AED', 'MKR-USD',
		'MKR-BTC',

		'REP-AED', 'REP-USD',
		'REP-BTC',

		'KNC-AED', 'KNC-USD',
		'KNC-BTC',

		'UNI-AED', 'UNI-SAR', 'UNI-USD',
		'UNI-USDT',

		'YFI-AED', 'YFI-USD',

		'BAL-AED', 'BAL-USD',

		'COMP-AED', 'COMP-USD',

		'SNX-AED', 'SNX-USD',

		'DOGE-AED', 'DOGE-SAR', 'DOGE-USD',
		'DOGE-BTC', 'DOGE-USDT',

		'AAVE-AED', 'AAVE-SAR', 'AAVE-USD',
		'AAVE-USDT',

		'BNT-AED', 'BNT-SAR', 'BNT-USD',

		'ENJ-AED', 'ENJ-SAR', 'ENJ-USD',

		'LRC-AED', 'LRC-SAR', 'LRC-USD',

		'MANA-AED', 'MANA-SAR', 'MANA-USD',

		'MATIC-AED', 'MATIC-SAR', 'MATIC-USD',
		'MATIC-USDT',

		'STORJ-AED', 'STORJ-SAR', 'STORJ-USD',

		'SUSHI-AED', 'SUSHI-SAR', 'SUSHI-USD',
		'SUSHI-USDT',

		'USDC-AED', 'USDC-SAR', 'USDC-USD',

		'WAVES-AED', 'WAVES-SAR', 'WAVES-USD',
		'WAVES-USDT',
	];
	const FIAT_CRYPTOCURRENCY_CODES = ['USD', 'AED', 'SAR', 'TRY'];
	const VALID_BASE_CRYPTOCURRENCIES = ['USD', 'AED', 'BTC', 'ETH', 'USDT', 'SAR'];

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
