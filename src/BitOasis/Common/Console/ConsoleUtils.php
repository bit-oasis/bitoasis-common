<?php

namespace BitOasis\Common\Console;

use InvalidArgumentException;

/**
 * @author David Fiedor <davefu@seznam.cz>
 */
class ConsoleUtils {
	
	const DESCRIPTION = 'description';
	const PAIR = 'pair';
	const SYMBOL = 'symbol';
	
	/** @var string[] */
	protected static $consoleOptions = [
		'btcaed' => [
			self::DESCRIPTION => 'BTC',
			self::PAIR => 'BTC-AED',
			self::SYMBOL => 'tBTCUSD',
		],
		'ethaed' => [
			self::DESCRIPTION => 'ETH',
			self::PAIR => 'ETH-AED',
			self::SYMBOL => 'tETHUSD',
		],
		'etcaed' => [
			self::DESCRIPTION => 'ETC',
			self::PAIR => 'ETC-AED',
			self::SYMBOL => 'tETCUSD',
		],
		'ethbtc' => [
			self::DESCRIPTION => 'ETH-BTC',
			self::PAIR => 'ETH-BTC',
			self::SYMBOL => 'tETHBTC',
		],
		'xrpbtc' => [
			self::DESCRIPTION => 'XRP-BTC',
			self::PAIR => 'XRP-BTC',
			self::SYMBOL => 'tXRPBTC',
		],
		'bchbtc' => [
			self::DESCRIPTION => 'BCH-BTC',
			self::PAIR => 'BCH-BTC',
			self::SYMBOL => 'tBCHBTC',
		],
		'bcheth' => [
			self::DESCRIPTION => 'BCH-ETH',
			self::PAIR => 'BCH-ETH',
			self::SYMBOL => 'tBCHETH',
		],
		'zecbtc' => [
			self::DESCRIPTION => 'ZEC-BTC',
			self::PAIR => 'ZEC-BTC',
			self::SYMBOL => 'tZECBTC',
		],
		'ltcbtc' => [
			self::DESCRIPTION => 'LTC-BTC',
			self::PAIR => 'LTC-BTC',
			self::SYMBOL => 'tLTCBTC',
		],
		'etcbtc' => [
			self::DESCRIPTION => 'ETC-BTC',
			self::PAIR => 'ETC-BTC',
			self::SYMBOL => 'tETCBTC',
		],
		'xrpaed' => [
			self::DESCRIPTION => 'XRP',
			self::PAIR => 'XRP-AED',
			self::SYMBOL => 'tXRPUSD',
		],
		'ltcaed' => [
			self::DESCRIPTION => 'LTC',
			self::PAIR => 'LTC-AED',
			self::SYMBOL => 'tLTCUSD',
		],
		'bchaed' => [
			self::DESCRIPTION => 'BCH',
			self::PAIR => 'BCH-AED',
			self::SYMBOL => 'tBCHUSD',
		],
		'zecaed' => [
			self::DESCRIPTION => 'ZEC',
			self::PAIR => 'ZEC-AED',
			self::SYMBOL => 'tZECUSD',
		],
		'xmraed' => [
			self::DESCRIPTION => 'XMR',
			self::PAIR => 'XMR-AED',
			self::SYMBOL => 'tXMRUSD',
		],
	];

	private function __construct() {
	}

	/**
	 * @return array [option => [shortcut, description, pair, symbol]]
	 */
	public function getFullConsoleOptions(): array {
		return static::$consoleOptions;
	}

	/**
	 * @return string[]
	 */
	public static function getConsoleOptions(): array {
		return array_keys(static::$consoleOptions);
	}

	/**
	 * @param string $option
	 * @return string
	 * @throws InvalidArgumentException
	 */
	public static function getOptionDescription(string $option): string {
		static::validateOption($option);
		return static::$consoleOptions[$option][self::DESCRIPTION];
	}

	/**
	 * @param string $option
	 * @return string
	 * @throws InvalidArgumentException
	 */
	public static function getOptionPair(string $option): string {
		static::validateOption($option);
		return static::$consoleOptions[$option][self::PAIR];
	}

	/**
	 * @param string $option
	 * @return string
	 * @throws InvalidArgumentException
	 */
	public static function getOptionSymbol(string $option): string {
		static::validateOption($option);
		return static::$consoleOptions[$option][self::SYMBOL];
	}

	/**
	 * @param string $option
	 * @throws InvalidArgumentException
	 */
	protected static function validateOption(string $option) {
		if (!isset(static::$consoleOptions[$option])) {
			throw new InvalidArgumentException("Option '$option' doesn't exist!");
		}
	}

}
