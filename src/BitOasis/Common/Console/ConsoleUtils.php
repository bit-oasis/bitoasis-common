<?php

namespace BitOasis\Common\Console;

use InvalidArgumentException;

/**
 * @author David Fiedor <davefu@seznam.cz>
 */
class ConsoleUtils {
	
	const SHORTCUT = 'shortcut';
	const DESCRIPTION = 'description';
	const PAIR = 'pair';
	const SYMBOL = 'symbol';
	
	/** @var string[] */
	protected static $consoleOptions = [
		'btc' => [
			self::SHORTCUT => 'b',
			self::DESCRIPTION => 'BTC',
			self::PAIR => 'BTC-AED',
			self::SYMBOL => 'tBTCUSD',
		],
		'eth' => [
			self::SHORTCUT => 'e',
			self::DESCRIPTION => 'ETH',
			self::PAIR => 'ETH-AED',
			self::SYMBOL => 'tETHUSD',
		],
		'etc' => [
			self::SHORTCUT => 'i',
			self::DESCRIPTION => 'ETC',
			self::PAIR => 'ETC-AED',
			self::SYMBOL => 'tETCUSD',
		],
		'ethbtc' => [
			self::SHORTCUT => 'eb', // todo: rename to single character
			self::DESCRIPTION => 'ETH-BTC',
			self::PAIR => 'ETH-BTC',
			self::SYMBOL => 'tETHBTC',
		],
		'xrpbtc' => [
			self::SHORTCUT => 'xb', // todo: rename to single character
			self::DESCRIPTION => 'XRP-BTC',
			self::PAIR => 'XRP-BTC',
			self::SYMBOL => 'tXRPBTC',
		],
		'bchbtc' => [
			self::SHORTCUT => 'cb', // todo: rename to single character
			self::DESCRIPTION => 'BCH-BTC',
			self::PAIR => 'BCH-BTC',
			self::SYMBOL => 'tBCHBTC',
		],
		'bcheth' => [
			self::SHORTCUT => 'ce', // todo: rename to single character
			self::DESCRIPTION => 'BCH-ETH',
			self::PAIR => 'BCH-ETH',
			self::SYMBOL => 'tBCHETH',
		],
		'zecbtc' => [
			self::SHORTCUT => 'zb', // todo: rename to single character
			self::DESCRIPTION => 'ZEC-BTC',
			self::PAIR => 'ZEC-BTC',
			self::SYMBOL => 'tZECBTC',
		],
		'ltcbtc' => [
			self::SHORTCUT => 'lb', // todo: rename to single character
			self::DESCRIPTION => 'LTC-BTC',
			self::PAIR => 'LTC-BTC',
			self::SYMBOL => 'tLTCBTC',
		],
		'etcbtc' => [
			self::SHORTCUT => 'ib', // todo: rename to single character
			self::DESCRIPTION => 'ETC-BTC',
			self::PAIR => 'ETC-BTC',
			self::SYMBOL => 'tETCBTC',
		],
		'xrp' => [
			self::SHORTCUT => 'x',
			self::DESCRIPTION => 'XRP',
			self::PAIR => 'XRP-AED',
			self::SYMBOL => 'tXRPUSD',
		],
		'ltc' => [
			self::SHORTCUT => 'l',
			self::DESCRIPTION => 'LTC',
			self::PAIR => 'LTC-AED',
			self::SYMBOL => 'tLTCUSD',
		],
		'bch' => [
			self::SHORTCUT => 'c',
			self::DESCRIPTION => 'BCH',
			self::PAIR => 'BCH-AED',
			self::SYMBOL => 'tBCHUSD',
		],
		'zec' => [
			self::SHORTCUT => 'z',
			self::DESCRIPTION => 'ZEC',
			self::PAIR => 'ZEC-AED',
			self::SYMBOL => 'tZECUSD',
		],
		'xrm' => [
			self::SHORTCUT => 'm',
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
	public static function getOptionShortcut(string $option): string {
		static::validateOption($option);
		return static::$consoleOptions[$option][self::SHORTCUT];
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
