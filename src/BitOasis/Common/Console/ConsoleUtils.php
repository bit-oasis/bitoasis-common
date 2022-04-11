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
		'btcsar' => [
			self::DESCRIPTION => 'BTC',
			self::PAIR => 'BTC-SAR',
			self::SYMBOL => 'tBTCUSD',
		],
		'btctry' => [
			self::DESCRIPTION => 'BTC',
			self::PAIR => 'BTC-TRY',
			self::SYMBOL => 'tBTCUSD',
		],
		'ethaed' => [
			self::DESCRIPTION => 'ETH',
			self::PAIR => 'ETH-AED',
			self::SYMBOL => 'tETHUSD',
		],
		'ethsar' => [
			self::DESCRIPTION => 'ETH',
			self::PAIR => 'ETH-SAR',
			self::SYMBOL => 'tETHUSD',
		],
		'ethtry' => [
			self::DESCRIPTION => 'ETH',
			self::PAIR => 'ETH-TRY',
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
		'xrpsar' => [
			self::DESCRIPTION => 'XRP',
			self::PAIR => 'XRP-SAR',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrptry' => [
			self::DESCRIPTION => 'XRP',
			self::PAIR => 'XRP-TRY',
			self::SYMBOL => 'tXRPUSD',
		],
		'ltcaed' => [
			self::DESCRIPTION => 'LTC',
			self::PAIR => 'LTC-AED',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltcsar' => [
			self::DESCRIPTION => 'LTC',
			self::PAIR => 'LTC-SAR',
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
		'xmrbtc' => [
			self::DESCRIPTION => 'XMR',
			self::PAIR => 'XMR-BTC',
			self::SYMBOL => 'tXMRBTC',
		],
		'xlmaed' => [
			self::DESCRIPTION => 'XLM',
			self::PAIR => 'XLM-AED',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmsar' => [
			self::DESCRIPTION => 'XLM',
			self::PAIR => 'XLM-SAR',
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
		'usdtsar' => [
			self::DESCRIPTION => 'USDT',
			self::PAIR => 'USDT-SAR',
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
			self::SYMBOL => 'tLINK:USD',
		],
//		'linkbtc' => [
//			self::DESCRIPTION => 'LINK-BTC',
//			self::PAIR => 'LINK-BTC',
//			self::SYMBOL => 'tLINK:BTC',
//		],
//		'linketh' => [
//			self::DESCRIPTION => 'LINK-ETH',
//			self::PAIR => 'LINK-ETH',
//			self::SYMBOL => 'tLINK:ETH',
//		],
		'daiaed' => [
			self::DESCRIPTION => 'DAI-AED',
			self::PAIR => 'DAI-AED',
			self::SYMBOL => 'tDAIUSD',
		],
		'daisar' => [
			self::DESCRIPTION => 'DAI-SAR',
			self::PAIR => 'DAI-SAR',
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
		'repv2aed' => [
			self::DESCRIPTION => 'REPV2-AED',
			self::PAIR => 'REPV2-AED',
			self::SYMBOL => 'tREPUSD',
		],
		'repv2btc' => [
			self::DESCRIPTION => 'REPV2-BTC',
			self::PAIR => 'REPV2-BTC',
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
		'unisar' => [
			self::DESCRIPTION => 'UNI-SAR',
			self::PAIR => 'UNI-SAR',
			self::SYMBOL => 'tUNIUSD',
		],
		'uniusdt' => [
			self::DESCRIPTION => 'UNI-USDT',
			self::PAIR => 'UNI-USDT',
			self::SYMBOL => 'tUNIUST',
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
		'dogeaed' => [
			self::DESCRIPTION => 'DOGE-AED',
			self::PAIR => 'DOGE-AED',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogesar' => [
			self::DESCRIPTION => 'DOGE-SAR',
			self::PAIR => 'DOGE-SAR',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogeusdt' => [
			self::DESCRIPTION => 'DOGE-USDT',
			self::PAIR => 'DOGE-USDT',
			self::SYMBOL => 'tDOGE:UST',
		],
		'aaveaed' => [
			self::DESCRIPTION => 'AAVE-AED',
			self::PAIR => 'AAVE-AED',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aavesar' => [
			self::DESCRIPTION => 'AAVE-SAR',
			self::PAIR => 'AAVE-SAR',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aaveusdt' => [
			self::DESCRIPTION => 'AAVE-USDT',
			self::PAIR => 'AAVE-USDT',
			self::SYMBOL => 'tAAVE:UST',
		],
		'bntaed' => [
			self::DESCRIPTION => 'BNT-AED',
			self::PAIR => 'BNT-AED',
			self::SYMBOL => 'tBNTUSD',
		],
		'bntsar' => [
			self::DESCRIPTION => 'BNT-SAR',
			self::PAIR => 'BNT-SAR',
			self::SYMBOL => 'tBNTUSD',
		],
		'enjaed' => [
			self::DESCRIPTION => 'ENJ-AED',
			self::PAIR => 'ENJ-AED',
			self::SYMBOL => 'tENJUSD',
		],
		'enjsar' => [
			self::DESCRIPTION => 'ENJ-SAR',
			self::PAIR => 'ENJ-SAR',
			self::SYMBOL => 'tENJUSD',
		],
		'lrcaed' => [
			self::DESCRIPTION => 'LRC-AED',
			self::PAIR => 'LRC-AED',
			self::SYMBOL => 'tLRCUSD',
		],
		'lrcsar' => [
			self::DESCRIPTION => 'LRC-SAR',
			self::PAIR => 'LRC-SAR',
			self::SYMBOL => 'tLRCUSD',
		],
		'manaaed' => [
			self::DESCRIPTION => 'MANA-AED',
			self::PAIR => 'MANA-AED',
			self::SYMBOL => 'tMNAUSD',
		],
		'manasar' => [
			self::DESCRIPTION => 'MANA-SAR',
			self::PAIR => 'MANA-SAR',
			self::SYMBOL => 'tMNAUSD',
		],
		'maticaed' => [
			self::DESCRIPTION => 'MATIC-AED',
			self::PAIR => 'MATIC-AED',
			self::SYMBOL => 'tMATIC:USD',
		],
		'maticsar' => [
			self::DESCRIPTION => 'MATIC-SAR',
			self::PAIR => 'MATIC-SAR',
			self::SYMBOL => 'tMATIC:USD',
		],
		'maticusdt' => [
			self::DESCRIPTION => 'MATIC-USDT',
			self::PAIR => 'MATIC-USDT',
			self::SYMBOL => 'tMATIC:UST',
		],
		'storjaed' => [
			self::DESCRIPTION => 'STORJ-AED',
			self::PAIR => 'STORJ-AED',
			self::SYMBOL => 'tSTJUSD',
		],
		'storjsar' => [
			self::DESCRIPTION => 'STORJ-SAR',
			self::PAIR => 'STORJ-SAR',
			self::SYMBOL => 'tSTJUSD',
		],
		'sushiaed' => [
			self::DESCRIPTION => 'SUSHI-AED',
			self::PAIR => 'SUSHI-AED',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushisar' => [
			self::DESCRIPTION => 'SUSHI-SAR',
			self::PAIR => 'SUSHI-SAR',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushiusdt' => [
			self::DESCRIPTION => 'SUSHI-USDT',
			self::PAIR => 'SUSHI-USDT',
			self::SYMBOL => 'tSUSHI:UST',
		],
		'usdcaed' => [
			self::DESCRIPTION => 'USDC-AED',
			self::PAIR => 'USDC-AED',
			self::SYMBOL => 'tUDCUSD',
		],
		'usdcsar' => [
			self::DESCRIPTION => 'USDC-SAR',
			self::PAIR => 'USDC-SAR',
			self::SYMBOL => 'tUDCUSD',
		],
		'wavesaed' => [
			self::DESCRIPTION => 'WAVES-AED',
			self::PAIR => 'WAVES-AED',
			self::SYMBOL => 'tWAVES:USD',
		],
		'wavessar' => [
			self::DESCRIPTION => 'WAVES-SAR',
			self::PAIR => 'WAVES-SAR',
			self::SYMBOL => 'tWAVES:USD',
		],
		'wavesusdt' => [
			self::DESCRIPTION => 'WAVES-USDT',
			self::PAIR => 'WAVES-USDT',
			self::SYMBOL => 'tWAVES:UST',
		],
		'solaed' => [
			self::DESCRIPTION => 'SOL-AED',
			self::PAIR => 'SOL-AED',
			self::SYMBOL => 'tSOLUSD',
		],
		'solsar' => [
			self::DESCRIPTION => 'SOL-SAR',
			self::PAIR => 'SOL-SAR',
			self::SYMBOL => 'tSOLUSD',
		],
		'solusdt' => [
			self::DESCRIPTION => 'SOL-USDT',
			self::PAIR => 'SOL-USDT',
			self::SYMBOL => 'tSOLUST',
		],
		'adaaed' => [
			self::DESCRIPTION => 'ADA-AED',
			self::PAIR => 'ADA-AED',
			self::SYMBOL => 'tADAUSD',
		],
		'adasar' => [
			self::DESCRIPTION => 'ADA-SAR',
			self::PAIR => 'ADA-SAR',
			self::SYMBOL => 'tADAUSD',
		],
		'adausdt' => [
			self::DESCRIPTION => 'ADA-USDT',
			self::PAIR => 'ADA-USDT',
			self::SYMBOL => 'tADAUST',
		],
		'dotaed' => [
			self::DESCRIPTION => 'DOT-AED',
			self::PAIR => 'DOT-AED',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotsar' => [
			self::DESCRIPTION => 'DOT-SAR',
			self::PAIR => 'DOT-SAR',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotusdt' => [
			self::DESCRIPTION => 'DOT-USDT',
			self::PAIR => 'DOT-USDT',
			self::SYMBOL => 'tDOTUST',
		],
		'shibaed' => [
			self::DESCRIPTION => 'SHIB-AED',
			self::PAIR => 'SHIB-AED',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibsar' => [
			self::DESCRIPTION => 'SHIB-SAR',
			self::PAIR => 'SHIB-SAR',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibusdt' => [
			self::DESCRIPTION => 'SHIB-USDT',
			self::PAIR => 'SHIB-USDT',
			self::SYMBOL => 'tSHIB:UST',
		],
		'avaxaed' => [
			self::DESCRIPTION => 'AVAX-AED',
			self::PAIR => 'AVAX-AED',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxsar' => [
			self::DESCRIPTION => 'AVAX-SAR',
			self::PAIR => 'AVAX-SAR',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxusdt' => [
			self::DESCRIPTION => 'AVAX-USDT',
			self::PAIR => 'AVAX-USDT',
			self::SYMBOL => 'tAVAX:UST',
		],
		'lunaaed' => [
			self::DESCRIPTION => 'LUNA-AED',
			self::PAIR => 'LUNA-AED',
			self::SYMBOL => 'tLUNA:USD',
		],
		'lunasar' => [
			self::DESCRIPTION => 'LUNA-SAR',
			self::PAIR => 'LUNA-SAR',
			self::SYMBOL => 'tLUNA:USD',
		],
		'lunausdt' => [
			self::DESCRIPTION => 'LUNA-USDT',
			self::PAIR => 'LUNA-USDT',
			self::SYMBOL => 'tLUNA:UST',
		],
		'nearaed' => [
			self::DESCRIPTION => 'NEAR-AED',
			self::PAIR => 'NEAR-AED',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearsar' => [
			self::DESCRIPTION => 'NEAR-SAR',
			self::PAIR => 'NEAR-SAR',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearusdt' => [
			self::DESCRIPTION => 'NEAR-USDT',
			self::PAIR => 'NEAR-USDT',
			self::SYMBOL => 'tNEAR:UST',
		],
		'ftmaed' => [
			self::DESCRIPTION => 'FTM-AED',
			self::PAIR => 'FTM-AED',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmsar' => [
			self::DESCRIPTION => 'FTM-SAR',
			self::PAIR => 'FTM-SAR',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmusdt' => [
			self::DESCRIPTION => 'FTM-USDT',
			self::PAIR => 'FTM-USDT',
			self::SYMBOL => 'tFTMUST',
		],
		'wbtcaed' => [
			self::DESCRIPTION => 'WBTC-AED',
			self::PAIR => 'WBTC-AED',
			self::SYMBOL => 'tWBTUSD',
		],
		'wbtcsar' => [
			self::DESCRIPTION => 'WBTC-SAR',
			self::PAIR => 'WBTC-SAR',
			self::SYMBOL => 'tWBTUSD',
		],
		'atomaed' => [
			self::DESCRIPTION => 'ATOM-AED',
			self::PAIR => 'ATOM-AED',
			self::SYMBOL => 'tATOUSD',
		],
		'atomsar' => [
			self::DESCRIPTION => 'ATOM-SAR',
			self::PAIR => 'ATOM-SAR',
			self::SYMBOL => 'tATOUSD',
		],
		'atomusdt' => [
			self::DESCRIPTION => 'ATOM-USDT',
			self::PAIR => 'ATOM-USDT',
			self::SYMBOL => 'tATOUST',
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
