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
//		'bchbtc' => [
//			self::DESCRIPTION => 'BCH-BTC',
//			self::PAIR => 'BCH-BTC',
//			self::SYMBOL => 'tBCHN:BTC',
//		],
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
		'bsvbtc' => [
			self::DESCRIPTION => 'BSV-BTC',
			self::PAIR => 'BSV-BTC',
			self::SYMBOL => 'tBSVBTC',
		],
		'eosbtc' => [
			self::DESCRIPTION => 'EOS-BTC',
			self::PAIR => 'EOS-BTC',
			self::SYMBOL => 'tEOSBTC',
		],
		'eoseth' => [
			self::DESCRIPTION => 'EOS-ETH',
			self::PAIR => 'EOS-ETH',
			self::SYMBOL => 'tEOSETH',
		],
		'omgbtc' => [
			self::DESCRIPTION => 'OMG-BTC',
			self::PAIR => 'OMG-BTC',
			self::SYMBOL => 'tOMGBTC',
		],
		'zrxbtc' => [
			self::DESCRIPTION => 'ZRX-BTC',
			self::PAIR => 'ZRX-BTC',
			self::SYMBOL => 'tZRXBTC',
		],
		'batbtc' => [
			self::DESCRIPTION => 'BAT-BTC',
			self::PAIR => 'BAT-BTC',
			self::SYMBOL => 'tBATBTC',
		],
		'algobtc' => [
			self::DESCRIPTION => 'ALGO-BTC',
			self::PAIR => 'ALGO-BTC',
			self::SYMBOL => 'tALGBTC',
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
			self::SYMBOL => 'tBCHN:USD',
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
		'xlmaed' => [
			self::DESCRIPTION => 'XLM',
			self::PAIR => 'XLM-AED',
			self::SYMBOL => 'tXLMUSD',
		],
		'bsvaed' => [
			self::DESCRIPTION => 'BSV',
			self::PAIR => 'BSV-AED',
			self::SYMBOL => 'tBSVUSD',
		],
		'eosaed' => [
			self::DESCRIPTION => 'EOS',
			self::PAIR => 'EOS-AED',
			self::SYMBOL => 'tEOSUSD',
		],
		'omgaed' => [
			self::DESCRIPTION => 'OMG',
			self::PAIR => 'OMG-AED',
			self::SYMBOL => 'tOMGUSD',
		],
		'zrxaed' => [
			self::DESCRIPTION => 'ZRX',
			self::PAIR => 'ZRX-AED',
			self::SYMBOL => 'tZRXUSD',
		],
		'bataed' => [
			self::DESCRIPTION => 'BAT',
			self::PAIR => 'BAT-AED',
			self::SYMBOL => 'tBATUSD',
		],
		'algoaed' => [
			self::DESCRIPTION => 'ALGO',
			self::PAIR => 'ALGO-AED',
			self::SYMBOL => 'tALGUSD',
		],
		'usdtaed' => [
			self::DESCRIPTION => 'USDT',
			self::PAIR => 'USDT-AED',
			self::SYMBOL => 'tUSTUSD',
		],
		'btcusdt' => [
			self::DESCRIPTION => 'BTC-USDT',
			self::PAIR => 'BTC-USDT',
			self::SYMBOL => 'tBTCUST',
		],
		'ethusdt' => [
			self::DESCRIPTION => 'ETH-USDT',
			self::PAIR => 'ETH-USDT',
			self::SYMBOL => 'tETHUST',
		],
		'neoaed' => [
			self::DESCRIPTION => 'NEO',
			self::PAIR => 'NEO-AED',
			self::SYMBOL => 'tNEOUSD',
		],
		'neobtc' => [
			self::DESCRIPTION => 'NEO-BTC',
			self::PAIR => 'NEO-BTC',
			self::SYMBOL => 'tNEOBTC',
		],
		'xtzaed' => [
			self::DESCRIPTION => 'XTZ',
			self::PAIR => 'XTZ-AED',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzbtc' => [
			self::DESCRIPTION => 'XTZ-BTC',
			self::PAIR => 'XTZ-BTC',
			self::SYMBOL => 'tXTZBTC',
		],
		'linkaed' => [
			self::DESCRIPTION => 'LINK-AED',
			self::PAIR => 'LINK-AED',
			self::SYMBOL => 'tLINKUSD',
		],
		'linkbtc' => [
			self::DESCRIPTION => 'LINK-BTC',
			self::PAIR => 'LINK-BTC',
			self::SYMBOL => 'tLINKBTC',
		],
		'linketh' => [
			self::DESCRIPTION => 'LINK-ETH',
			self::PAIR => 'LINK-ETH',
			self::SYMBOL => 'tLINKETH',
		],
		'daiaed' => [
			self::DESCRIPTION => 'DAI-AED',
			self::PAIR => 'DAI-AED',
			self::SYMBOL => 'tDAIUSD',
		],
		'daibtc' => [
			self::DESCRIPTION => 'DAI-BTC',
			self::PAIR => 'DAI-BTC',
			self::SYMBOL => 'tDAIBTC',
		],
		'mkraed' => [
			self::DESCRIPTION => 'MKR-AED',
			self::PAIR => 'MKR-AED',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrbtc' => [
			self::DESCRIPTION => 'MKR-BTC',
			self::PAIR => 'MKR-BTC',
			self::SYMBOL => 'tMKRBTC',
		],
		'repaed' => [
			self::DESCRIPTION => 'REP-AED',
			self::PAIR => 'REP-AED',
			self::SYMBOL => 'tREPUSD',
		],
		'repbtc' => [
			self::DESCRIPTION => 'REP-BTC',
			self::PAIR => 'REP-BTC',
			self::SYMBOL => 'tREPBTC',
		],
		'kncaed' => [
			self::DESCRIPTION => 'KNC-AED',
			self::PAIR => 'KNC-AED',
			self::SYMBOL => 'tKNCUSD',
		],
		'kncbtc' => [
			self::DESCRIPTION => 'KNC-BTC',
			self::PAIR => 'KNC-BTC',
			self::SYMBOL => 'tKNCBTC',
		],
		'uniaed' => [
			self::DESCRIPTION => 'UNI-AED',
			self::PAIR => 'UNI-AED',
			self::SYMBOL => 'tUNIUSD',
		],
		'yfiaed' => [
			self::DESCRIPTION => 'YFI-AED',
			self::PAIR => 'YFI-AED',
			self::SYMBOL => 'tYFIUSD',
		],
		'balaed' => [
			self::DESCRIPTION => 'BAL-AED',
			self::PAIR => 'BAL-AED',
			self::SYMBOL => 'tBALUSD',
		],
		'compaed' => [
			self::DESCRIPTION => 'COMP-AED',
			self::PAIR => 'COMP-AED',
			self::SYMBOL => 'tCOMP:USD',
		],
		'snxaed' => [
			self::DESCRIPTION => 'SNX-AED',
			self::PAIR => 'SNX-AED',
			self::SYMBOL => 'tSNXUSD',
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
