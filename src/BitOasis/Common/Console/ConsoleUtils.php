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
		// --------------------------------------------- BTC pairs
		'btcaed' => [
			self::DESCRIPTION => 'BTC-AED',
			self::PAIR => 'BTC-AED',
			self::SYMBOL => 'tBTCUSD',
		],
		'btcsar' => [
			self::DESCRIPTION => 'BTC-SAR',
			self::PAIR => 'BTC-SAR',
			self::SYMBOL => 'tBTCUSD',
		],
		'btctry' => [
			self::DESCRIPTION => 'BTC-TRY',
			self::PAIR => 'BTC-TRY',
			self::SYMBOL => 'tBTCUSD',
		],
		'btcusd' => [
			self::DESCRIPTION => 'BTC-USD',
			self::PAIR => 'BTC-USD',
			self::SYMBOL => 'tBTCUSD',
		],
		'btcusdt' => [
			self::DESCRIPTION => 'BTC-USDT',
			self::PAIR => 'BTC-USDT',
			self::SYMBOL => 'tBTCUST',
		],
		'btckwd' => [
			self::DESCRIPTION => 'BTC-KWD',
			self::PAIR => 'BTC-KWD',
			self::SYMBOL => 'tBTCUSD',
		],
		'btcomr' => [
			self::DESCRIPTION => 'BTC-OMR',
			self::PAIR => 'BTC-OMR',
			self::SYMBOL => 'tBTCUSD',
		],
		'btcbhd' => [
			self::DESCRIPTION => 'BTC-BHD',
			self::PAIR => 'BTC-BHD',
			self::SYMBOL => 'tBTCUSD',
		],
		'btcqar' => [
			self::DESCRIPTION => 'BTC-QAR',
			self::PAIR => 'BTC-QAR',
			self::SYMBOL => 'tBTCUSD',
		],
		// --------------------------------------------- ETH pairs
		'ethaed' => [
			self::DESCRIPTION => 'ETH-AED',
			self::PAIR => 'ETH-AED',
			self::SYMBOL => 'tETHUSD',
		],
		'ethsar' => [
			self::DESCRIPTION => 'ETH-SAR',
			self::PAIR => 'ETH-SAR',
			self::SYMBOL => 'tETHUSD',
		],
		'ethtry' => [
			self::DESCRIPTION => 'ETH-TRY',
			self::PAIR => 'ETH-TRY',
			self::SYMBOL => 'tETHUSD',
		],
		'ethusd' => [
			self::DESCRIPTION => 'ETH-USD',
			self::PAIR => 'ETH-USD',
			self::SYMBOL => 'tETHUSD',
		],
		'ethkwd' => [
			self::DESCRIPTION => 'ETH-KWD',
			self::PAIR => 'ETH-KWD',
			self::SYMBOL => 'tETHUSD',
		],
		'ethomr' => [
			self::DESCRIPTION => 'ETH-OMR',
			self::PAIR => 'ETH-OMR',
			self::SYMBOL => 'tETHUSD',
		],
		'ethbhd' => [
			self::DESCRIPTION => 'ETH-BHD',
			self::PAIR => 'ETH-BHD',
			self::SYMBOL => 'tETHUSD',
		],
		'ethqar' => [
			self::DESCRIPTION => 'ETH-QAR',
			self::PAIR => 'ETH-QAR',
			self::SYMBOL => 'tETHUSD',
		],
		'ethbtc' => [
			self::DESCRIPTION => 'ETH-BTC',
			self::PAIR => 'ETH-BTC',
			self::SYMBOL => 'tETHBTC',
		],
		'ethusdt' => [
			self::DESCRIPTION => 'ETH-USDT',
			self::PAIR => 'ETH-USDT',
			self::SYMBOL => 'tETHUST',
		],
		// --------------------------------------------- ETHW pairs
		'ethwaed' => [
			self::DESCRIPTION => 'ETHW-AED',
			self::PAIR => 'ETHW-AED',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwsar' => [
			self::DESCRIPTION => 'ETHW-SAR',
			self::PAIR => 'ETHW-SAR',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwtry' => [
			self::DESCRIPTION => 'ETHW-TRY',
			self::PAIR => 'ETHW-TRY',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwusd' => [
			self::DESCRIPTION => 'ETHW-USD',
			self::PAIR => 'ETHW-USD',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwkwd' => [
			self::DESCRIPTION => 'ETHW-KWD',
			self::PAIR => 'ETHW-KWD',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwomr' => [
			self::DESCRIPTION => 'ETHW-OMR',
			self::PAIR => 'ETHW-OMR',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwbhd' => [
			self::DESCRIPTION => 'ETHW-BHD',
			self::PAIR => 'ETHW-BHD',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwqar' => [
			self::DESCRIPTION => 'ETHW-QAR',
			self::PAIR => 'ETHW-QAR',
			self::SYMBOL => 'tETHW:USD',
		],
		'ethwusdt' => [
			self::DESCRIPTION => 'ETHW-USDT',
			self::PAIR => 'ETHW-USDT',
			self::SYMBOL => 'tETHW:UST',
		],
		// --------------------------------------------- ETC pairs
		'etcaed' => [
			self::DESCRIPTION => 'ETC-AED',
			self::PAIR => 'ETC-AED',
			self::SYMBOL => 'tETCUSD',
		],
		'etcsar' => [
			self::DESCRIPTION => 'ETC-SAR',
			self::PAIR => 'ETC-SAR',
			self::SYMBOL => 'tETCUSD',
		],
		'etctry' => [
			self::DESCRIPTION => 'ETC-TRY',
			self::PAIR => 'ETC-TRY',
			self::SYMBOL => 'tETCUSD',
		],
		'etcusd' => [
			self::DESCRIPTION => 'ETC-USD',
			self::PAIR => 'ETC-USD',
			self::SYMBOL => 'tETCUSD',
		],
		'etckwd' => [
			self::DESCRIPTION => 'ETC-KWD',
			self::PAIR => 'ETC-KWD',
			self::SYMBOL => 'tETCUSD',
		],
		'etcomr' => [
			self::DESCRIPTION => 'ETC-OMR',
			self::PAIR => 'ETC-OMR',
			self::SYMBOL => 'tETCUSD',
		],
		'etcbhd' => [
			self::DESCRIPTION => 'ETC-BHD',
			self::PAIR => 'ETC-BHD',
			self::SYMBOL => 'tETCUSD',
		],
		'etcqar' => [
			self::DESCRIPTION => 'ETC-QAR',
			self::PAIR => 'ETC-QAR',
			self::SYMBOL => 'tETCUSD',
		],
		'etcbtc' => [
			self::DESCRIPTION => 'ETC-BTC',
			self::PAIR => 'ETC-BTC',
			self::SYMBOL => 'tETCBTC',
		],
		'etcusdt' => [
			self::DESCRIPTION => 'ETC-USDT',
			self::PAIR => 'ETC-USDT',
			self::SYMBOL => 'tETCUST',
		],
		// --------------------------------------------- BCH pairs
		'bchaed' => [
			self::DESCRIPTION => 'BCH-AED',
			self::PAIR => 'BCH-AED',
			self::SYMBOL => 'tBCHN:USD',
		],
		'bchsar' => [
			self::DESCRIPTION => 'BCH-SAR',
			self::PAIR => 'BCH-SAR',
			self::SYMBOL => 'tBCHN:USD',
		],
		'bchtry' => [
			self::DESCRIPTION => 'BCH-TRY',
			self::PAIR => 'BCH-TRY',
			self::SYMBOL => 'tBCHN:USD',
		],
		'bchusd' => [
			self::DESCRIPTION => 'BCH-USD',
			self::PAIR => 'BCH-USD',
			self::SYMBOL => 'tBCHN:USD',
		],
		'bchkwd' => [
			self::DESCRIPTION => 'BCH-KWD',
			self::PAIR => 'BCH-KWD',
			self::SYMBOL => 'tBCHN:USD',
		],
		'bchomr' => [
			self::DESCRIPTION => 'BCH-OMR',
			self::PAIR => 'BCH-OMR',
			self::SYMBOL => 'tBCHN:USD',
		],
		'bchbhd' => [
			self::DESCRIPTION => 'BCH-BHD',
			self::PAIR => 'BCH-BHD',
			self::SYMBOL => 'tBCHN:USD',
		],
		'bchqar' => [
			self::DESCRIPTION => 'BCH-QAR',
			self::PAIR => 'BCH-QAR',
			self::SYMBOL => 'tBCHN:USD',
		],
//		'bchbtc' => [
//			self::DESCRIPTION => 'BCH-BTC',
//			self::PAIR => 'BCH-BTC',
//			self::SYMBOL => 'tBCHN:BTC',
//		],
		// --------------------------------------------- XRP pairs
		'xrpaed' => [
			self::DESCRIPTION => 'XRP-AED',
			self::PAIR => 'XRP-AED',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrpsar' => [
			self::DESCRIPTION => 'XRP-SAR',
			self::PAIR => 'XRP-SAR',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrptry' => [
			self::DESCRIPTION => 'XRP-TRY',
			self::PAIR => 'XRP-TRY',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrpusd' => [
			self::DESCRIPTION => 'XRP-USD',
			self::PAIR => 'XRP-USD',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrpkwd' => [
			self::DESCRIPTION => 'XRP-KWD',
			self::PAIR => 'XRP-KWD',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrpomr' => [
			self::DESCRIPTION => 'XRP-OMR',
			self::PAIR => 'XRP-OMR',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrpbhd' => [
			self::DESCRIPTION => 'XRP-BHD',
			self::PAIR => 'XRP-BHD',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrpqar' => [
			self::DESCRIPTION => 'XRP-QAR',
			self::PAIR => 'XRP-QAR',
			self::SYMBOL => 'tXRPUSD',
		],
		'xrpusdt' => [
			self::DESCRIPTION => 'XRP-USDT',
			self::PAIR => 'XRP-USDT',
			self::SYMBOL => 'tXRPUST',
		],
		'xrpbtc' => [
			self::DESCRIPTION => 'XRP-BTC',
			self::PAIR => 'XRP-BTC',
			self::SYMBOL => 'tXRPBTC',
		],
		// --------------------------------------------- LTC pairs
		'ltcaed' => [
			self::DESCRIPTION => 'LTC-AED',
			self::PAIR => 'LTC-AED',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltcsar' => [
			self::DESCRIPTION => 'LTC-SAR',
			self::PAIR => 'LTC-SAR',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltctry' => [
			self::DESCRIPTION => 'LTC-TRY',
			self::PAIR => 'LTC-TRY',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltcusd' => [
			self::DESCRIPTION => 'LTC-USD',
			self::PAIR => 'LTC-USD',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltckwd' => [
			self::DESCRIPTION => 'LTC-KWD',
			self::PAIR => 'LTC-KWD',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltcomr' => [
			self::DESCRIPTION => 'LTC-OMR',
			self::PAIR => 'LTC-OMR',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltcbhd' => [
			self::DESCRIPTION => 'LTC-BHD',
			self::PAIR => 'LTC-BHD',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltcqar' => [
			self::DESCRIPTION => 'LTC-QAR',
			self::PAIR => 'LTC-QAR',
			self::SYMBOL => 'tLTCUSD',
		],
		'ltcusdt' => [
			self::DESCRIPTION => 'LTC-USDT',
			self::PAIR => 'LTC-USDT',
			self::SYMBOL => 'tLTCUST',
		],
		'ltcbtc' => [
			self::DESCRIPTION => 'LTC-BTC',
			self::PAIR => 'LTC-BTC',
			self::SYMBOL => 'tLTCBTC',
		],
		// --------------------------------------------- ZEC pairs / Deprecated
		'zecaed' => [
			self::DESCRIPTION => 'ZEC',
			self::PAIR => 'ZEC-AED',
			self::SYMBOL => 'tZECUSD',
		],
		'zecbtc' => [
			self::DESCRIPTION => 'ZEC-BTC',
			self::PAIR => 'ZEC-BTC',
			self::SYMBOL => 'tZECBTC',
		],
		// --------------------------------------------- XMR pairs / Deprecated
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
		// --------------------------------------------- XML pairs
		'xlmaed' => [
			self::DESCRIPTION => 'XLM-AED',
			self::PAIR => 'XLM-AED',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmsar' => [
			self::DESCRIPTION => 'XLM-SAR',
			self::PAIR => 'XLM-SAR',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmtry' => [
			self::DESCRIPTION => 'XLM-TRY',
			self::PAIR => 'XLM-TRY',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmusd' => [
			self::DESCRIPTION => 'XLM-USD',
			self::PAIR => 'XLM-USD',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmkwd' => [
			self::DESCRIPTION => 'XLM-KWD',
			self::PAIR => 'XLM-KWD',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmomr' => [
			self::DESCRIPTION => 'XLM-OMR',
			self::PAIR => 'XLM-OMR',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmbhd' => [
			self::DESCRIPTION => 'XLM-BHD',
			self::PAIR => 'XLM-BHD',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmqar' => [
			self::DESCRIPTION => 'XLM-QAR',
			self::PAIR => 'XLM-QAR',
			self::SYMBOL => 'tXLMUSD',
		],
		'xlmusdt' => [
			self::DESCRIPTION => 'XLM-USDT',
			self::PAIR => 'XLM-USDT',
			self::SYMBOL => 'tXLMUST',
		],
		'xlmbtc' => [
			self::DESCRIPTION => 'XLM-BTC',
			self::PAIR => 'XLM-BTC',
			self::SYMBOL => 'tXLMBTC',
		],
		// --------------------------------------------- BSV pairs / Deprecated
		'bsvaed' => [
			self::DESCRIPTION => 'BSV',
			self::PAIR => 'BSV-AED',
			self::SYMBOL => 'tBSVUSD',
		],
		'bsvbtc' => [
			self::DESCRIPTION => 'BSV-BTC',
			self::PAIR => 'BSV-BTC',
			self::SYMBOL => 'tBSVBTC',
		],
		// --------------------------------------------- EOS pairs
		'eosaed' => [
			self::DESCRIPTION => 'EOS-AED',
			self::PAIR => 'EOS-AED',
			self::SYMBOL => 'tEOSUSD',
		],
		'eossar' => [
			self::DESCRIPTION => 'EOS-SAR',
			self::PAIR => 'EOS-SAR',
			self::SYMBOL => 'tEOSUSD',
		],
		'eostry' => [
			self::DESCRIPTION => 'EOS-TRY',
			self::PAIR => 'EOS-TRY',
			self::SYMBOL => 'tEOSUSD',
		],
		'eosusd' => [
			self::DESCRIPTION => 'EOS-USD',
			self::PAIR => 'EOS-USD',
			self::SYMBOL => 'tEOSUSD',
		],
		'eoskwd' => [
			self::DESCRIPTION => 'EOS-KWD',
			self::PAIR => 'EOS-KWD',
			self::SYMBOL => 'tEOSUSD',
		],
		'eosomr' => [
			self::DESCRIPTION => 'EOS-OMR',
			self::PAIR => 'EOS-OMR',
			self::SYMBOL => 'tEOSUSD',
		],
		'eosbhd' => [
			self::DESCRIPTION => 'EOS-BHD',
			self::PAIR => 'EOS-BHD',
			self::SYMBOL => 'tEOSUSD',
		],
		'eosqar' => [
			self::DESCRIPTION => 'EOS-QAR',
			self::PAIR => 'EOS-QAR',
			self::SYMBOL => 'tEOSUSD',
		],
		'eosusdt' => [
			self::DESCRIPTION => 'EOS-USDT',
			self::PAIR => 'EOS-USDT',
			self::SYMBOL => 'tEOSUST',
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
		// --------------------------------------------- OMG pairs
		'omgaed' => [
			self::DESCRIPTION => 'OMG-AED',
			self::PAIR => 'OMG-AED',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgsar' => [
			self::DESCRIPTION => 'OMG-SAR',
			self::PAIR => 'OMG-SAR',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgtry' => [
			self::DESCRIPTION => 'OMG-TRY',
			self::PAIR => 'OMG-TRY',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgusd' => [
			self::DESCRIPTION => 'OMG-USD',
			self::PAIR => 'OMG-USD',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgkwd' => [
			self::DESCRIPTION => 'OMG-KWD',
			self::PAIR => 'OMG-KWD',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgomr' => [
			self::DESCRIPTION => 'OMG-OMR',
			self::PAIR => 'OMG-OMR',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgbhd' => [
			self::DESCRIPTION => 'OMG-BHD',
			self::PAIR => 'OMG-BHD',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgqar' => [
			self::DESCRIPTION => 'OMG-QAR',
			self::PAIR => 'OMG-QAR',
			self::SYMBOL => 'tOMGUSD',
		],
		'omgbtc' => [
			self::DESCRIPTION => 'OMG-BTC',
			self::PAIR => 'OMG-BTC',
			self::SYMBOL => 'tOMGBTC',
		],
		'omgeth' => [
			self::DESCRIPTION => 'OMG-ETH',
			self::PAIR => 'OMG-ETH',
			self::SYMBOL => 'tOMGETH',
		],
		// --------------------------------------------- ZRX pairs
		'zrxaed' => [
			self::DESCRIPTION => 'ZRX-AED',
			self::PAIR => 'ZRX-AED',
			self::SYMBOL => 'tZRXUSD',
		],
		'zrxsar' => [
			self::DESCRIPTION => 'ZRX-SAR',
			self::PAIR => 'ZRX-SAR',
			self::SYMBOL => 'tZRXUSD',
		],
		'zrxtry' => [
			self::DESCRIPTION => 'ZRX-TRY',
			self::PAIR => 'ZRX-TRY',
			self::SYMBOL => 'tZRXUSD',
		],
		'zrxusd' => [
			self::DESCRIPTION => 'ZRX-USD',
			self::PAIR => 'ZRX-USD',
			self::SYMBOL => 'tZRXUSD',
		],
		'zrxkwd' => [
			self::DESCRIPTION => 'ZRX-KWD',
			self::PAIR => 'ZRX-KWD',
			self::SYMBOL => 'tZRXUSD',
		],
		'zrxomr' => [
			self::DESCRIPTION => 'ZRX-OMR',
			self::PAIR => 'ZRX-OMR',
			self::SYMBOL => 'tZRXUSD',
		],
		'zrxbhd' => [
			self::DESCRIPTION => 'ZRX-BHD',
			self::PAIR => 'ZRX-BHD',
			self::SYMBOL => 'tZRXUSD',
		],
		'zrxqar' => [
			self::DESCRIPTION => 'ZRX-QAR',
			self::PAIR => 'ZRX-QAR',
			self::SYMBOL => 'tZRXUSD',
		],
		// --------------------------------------------- BAT pairs
		'bataed' => [
			self::DESCRIPTION => 'BAT-AED',
			self::PAIR => 'BAT-AED',
			self::SYMBOL => 'tBATUSD',
		],
		'batsar' => [
			self::DESCRIPTION => 'BAT-SAR',
			self::PAIR => 'BAT-SAR',
			self::SYMBOL => 'tBATUSD',
		],
		'battry' => [
			self::DESCRIPTION => 'BAT-TRY',
			self::PAIR => 'BAT-TRY',
			self::SYMBOL => 'tBATUSD',
		],
		'batusd' => [
			self::DESCRIPTION => 'BAT-USD',
			self::PAIR => 'BAT-USD',
			self::SYMBOL => 'tBATUSD',
		],
		'batkwd' => [
			self::DESCRIPTION => 'BAT-KWD',
			self::PAIR => 'BAT-KWD',
			self::SYMBOL => 'tBATUSD',
		],
		'batomr' => [
			self::DESCRIPTION => 'BAT-OMR',
			self::PAIR => 'BAT-OMR',
			self::SYMBOL => 'tBATUSD',
		],
		'batbhd' => [
			self::DESCRIPTION => 'BAT-BHD',
			self::PAIR => 'BAT-BHD',
			self::SYMBOL => 'tBATUSD',
		],
		'batqar' => [
			self::DESCRIPTION => 'BAT-QAR',
			self::PAIR => 'BAT-QAR',
			self::SYMBOL => 'tBATUSD',
		],
		'batusdt' => [
			self::DESCRIPTION => 'BAT-USDT',
			self::PAIR => 'BAT-USDT',
			self::SYMBOL => 'tBATUST',
		],
		'batbtc' => [
			self::DESCRIPTION => 'BAT-BTC',
			self::PAIR => 'BAT-BTC',
			self::SYMBOL => 'tBATBTC',
		],
		// --------------------------------------------- ALGO pairs
		'algoaed' => [
			self::DESCRIPTION => 'ALGO-AED',
			self::PAIR => 'ALGO-AED',
			self::SYMBOL => 'tALGUSD',
		],
		'algosar' => [
			self::DESCRIPTION => 'ALGO-SAR',
			self::PAIR => 'ALGO-SAR',
			self::SYMBOL => 'tALGUSD',
		],
		'algotry' => [
			self::DESCRIPTION => 'ALGO-TRY',
			self::PAIR => 'ALGO-TRY',
			self::SYMBOL => 'tALGUSD',
		],
		'algousd' => [
			self::DESCRIPTION => 'ALGO-USD',
			self::PAIR => 'ALGO-USD',
			self::SYMBOL => 'tALGUSD',
		],
		'algokwd' => [
			self::DESCRIPTION => 'ALGO-KWD',
			self::PAIR => 'ALGO-KWD',
			self::SYMBOL => 'tALGUSD',
		],
		'algoomr' => [
			self::DESCRIPTION => 'ALGO-OMR',
			self::PAIR => 'ALGO-OMR',
			self::SYMBOL => 'tALGUSD',
		],
		'algobhd' => [
			self::DESCRIPTION => 'ALGO-BHD',
			self::PAIR => 'ALGO-BHD',
			self::SYMBOL => 'tALGUSD',
		],
		'algoqar' => [
			self::DESCRIPTION => 'ALGO-QAR',
			self::PAIR => 'ALGO-QAR',
			self::SYMBOL => 'tALGUSD',
		],
		'algousdt' => [
			self::DESCRIPTION => 'ALGO-USDT',
			self::PAIR => 'ALGO-USDT',
			self::SYMBOL => 'tALGUST',
		],
		'algobtc' => [
			self::DESCRIPTION => 'ALGO-BTC',
			self::PAIR => 'ALGO-BTC',
			self::SYMBOL => 'tALGBTC',
		],
		// --------------------------------------------- USDT pairs
		'usdtaed' => [
			self::DESCRIPTION => 'USDT-AED',
			self::PAIR => 'USDT-AED',
			self::SYMBOL => 'tUSTUSD',
		],
		'usdtsar' => [
			self::DESCRIPTION => 'USDT-SAR',
			self::PAIR => 'USDT-SAR',
			self::SYMBOL => 'tUSTUSD',
		],
		'usdttry' => [
			self::DESCRIPTION => 'USDT-TRY',
			self::PAIR => 'USDT-TRY',
			self::SYMBOL => 'tUSTUSD',
		],
		'usdtusd' => [
			self::DESCRIPTION => 'USDT-USD',
			self::PAIR => 'USDT-USD',
			self::SYMBOL => 'tUSTUSD',
		],
		'usdtkwd' => [
			self::DESCRIPTION => 'USDT-KWD',
			self::PAIR => 'USDT-KWD',
			self::SYMBOL => 'tUSTUSD',
		],
		'usdtomr' => [
			self::DESCRIPTION => 'USDT-OMR',
			self::PAIR => 'USDT-OMR',
			self::SYMBOL => 'tUSTUSD',
		],
		'usdtbhd' => [
			self::DESCRIPTION => 'USDT-BHD',
			self::PAIR => 'USDT-BHD',
			self::SYMBOL => 'tUSTUSD',
		],
		'usdtqar' => [
			self::DESCRIPTION => 'USDT-QAR',
			self::PAIR => 'USDT-QAR',
			self::SYMBOL => 'tUSTUSD',
		],
		// --------------------------------------------- NEO pairs
		'neoaed' => [
			self::DESCRIPTION => 'NEO-AED',
			self::PAIR => 'NEO-AED',
			self::SYMBOL => 'tNEOUSD',
		],
		'neosar' => [
			self::DESCRIPTION => 'NEO-SAR',
			self::PAIR => 'NEO-SAR',
			self::SYMBOL => 'tNEOUSD',
		],
		'neotry' => [
			self::DESCRIPTION => 'NEO-TRY',
			self::PAIR => 'NEO-TRY',
			self::SYMBOL => 'tNEOUSD',
		],
		'neousd' => [
			self::DESCRIPTION => 'NEO-USD',
			self::PAIR => 'NEO-USD',
			self::SYMBOL => 'tNEOUSD',
		],
		'neokwd' => [
			self::DESCRIPTION => 'NEO-KWD',
			self::PAIR => 'NEO-KWD',
			self::SYMBOL => 'tNEOUSD',
		],
		'neoomr' => [
			self::DESCRIPTION => 'NEO-OMR',
			self::PAIR => 'NEO-OMR',
			self::SYMBOL => 'tNEOUSD',
		],
		'neobhd' => [
			self::DESCRIPTION => 'NEO-BHD',
			self::PAIR => 'NEO-BHD',
			self::SYMBOL => 'tNEOUSD',
		],
		'neoqar' => [
			self::DESCRIPTION => 'NEO-QAR',
			self::PAIR => 'NEO-QAR',
			self::SYMBOL => 'tNEOUSD',
		],
		'neousdt' => [
			self::DESCRIPTION => 'NEO-USDT',
			self::PAIR => 'NEO-USDT',
			self::SYMBOL => 'tNEOUST',
		],
		'neobtc' => [
			self::DESCRIPTION => 'NEO-BTC',
			self::PAIR => 'NEO-BTC',
			self::SYMBOL => 'tNEOBTC',
		],
		// --------------------------------------------- XTZ pairs
		'xtzaed' => [
			self::DESCRIPTION => 'XTZ-AED',
			self::PAIR => 'XTZ-AED',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzsar' => [
			self::DESCRIPTION => 'XTZ-SAR',
			self::PAIR => 'XTZ-SAR',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtztry' => [
			self::DESCRIPTION => 'XTZ-TRY',
			self::PAIR => 'XTZ-TRY',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzusd' => [
			self::DESCRIPTION => 'XTZ-USD',
			self::PAIR => 'XTZ-USD',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzkwd' => [
			self::DESCRIPTION => 'XTZ-KWD',
			self::PAIR => 'XTZ-KWD',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzomr' => [
			self::DESCRIPTION => 'XTZ-OMR',
			self::PAIR => 'XTZ-OMR',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzbhd' => [
			self::DESCRIPTION => 'XTZ-BHD',
			self::PAIR => 'XTZ-BHD',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzqar' => [
			self::DESCRIPTION => 'XTZ-QAR',
			self::PAIR => 'XTZ-QAR',
			self::SYMBOL => 'tXTZUSD',
		],
		'xtzusdt' => [
			self::DESCRIPTION => 'XTZ-USDT',
			self::PAIR => 'XTZ-USDT',
			self::SYMBOL => 'tXTZUST',
		],
		'xtzbtc' => [
			self::DESCRIPTION => 'XTZ-BTC',
			self::PAIR => 'XTZ-BTC',
			self::SYMBOL => 'tXTZBTC',
		],
		// --------------------------------------------- LINK pairs
		'linkaed' => [
			self::DESCRIPTION => 'LINK-AED',
			self::PAIR => 'LINK-AED',
			self::SYMBOL => 'tLINK:USD',
		],
		'linksar' => [
			self::DESCRIPTION => 'LINK-SAR',
			self::PAIR => 'LINK-SAR',
			self::SYMBOL => 'tLINK:USD',
		],
		'linktry' => [
			self::DESCRIPTION => 'LINK-TRY',
			self::PAIR => 'LINK-TRY',
			self::SYMBOL => 'tLINK:USD',
		],
		'linkusd' => [
			self::DESCRIPTION => 'LINK-USD',
			self::PAIR => 'LINK-USD',
			self::SYMBOL => 'tLINK:USD',
		],
		'linkkwd' => [
			self::DESCRIPTION => 'LINK-KWD',
			self::PAIR => 'LINK-KWD',
			self::SYMBOL => 'tLINK:USD',
		],
		'linkomr' => [
			self::DESCRIPTION => 'LINK-OMR',
			self::PAIR => 'LINK-OMR',
			self::SYMBOL => 'tLINK:USD',
		],
		'linkbhd' => [
			self::DESCRIPTION => 'LINK-BHD',
			self::PAIR => 'LINK-BHD',
			self::SYMBOL => 'tLINK:USD',
		],
		'linkqar' => [
			self::DESCRIPTION => 'LINK-QAR',
			self::PAIR => 'LINK-QAR',
			self::SYMBOL => 'tLINK:USD',
		],
		'linkusdt' => [
			self::DESCRIPTION => 'LINK-USDT',
			self::PAIR => 'LINK-USDT',
			self::SYMBOL => 'tLINK:UST',
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
		// --------------------------------------------- DAI pairs
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
		'daitry' => [
			self::DESCRIPTION => 'DAI-TRY',
			self::PAIR => 'DAI-TRY',
			self::SYMBOL => 'tDAIUSD',
		],
		'daiusd' => [
			self::DESCRIPTION => 'DAI-USD',
			self::PAIR => 'DAI-USD',
			self::SYMBOL => 'tDAIUSD',
		],
		'daikwd' => [
			self::DESCRIPTION => 'DAI-KWD',
			self::PAIR => 'DAI-KWD',
			self::SYMBOL => 'tDAIUSD',
		],
		'daiomr' => [
			self::DESCRIPTION => 'DAI-OMR',
			self::PAIR => 'DAI-OMR',
			self::SYMBOL => 'tDAIUSD',
		],
		'daibhd' => [
			self::DESCRIPTION => 'DAI-BHD',
			self::PAIR => 'DAI-BHD',
			self::SYMBOL => 'tDAIUSD',
		],
		'daiqar' => [
			self::DESCRIPTION => 'DAI-QAR',
			self::PAIR => 'DAI-QAR',
			self::SYMBOL => 'tDAIUSD',
		],
		'daibtc' => [
			self::DESCRIPTION => 'DAI-BTC',
			self::PAIR => 'DAI-BTC',
			self::SYMBOL => 'tDAIBTC',
		],
		// --------------------------------------------- MKR pairs
		'mkraed' => [
			self::DESCRIPTION => 'MKR-AED',
			self::PAIR => 'MKR-AED',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrsar' => [
			self::DESCRIPTION => 'MKR-SAR',
			self::PAIR => 'MKR-SAR',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrtry' => [
			self::DESCRIPTION => 'MKR-TRY',
			self::PAIR => 'MKR-TRY',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrusd' => [
			self::DESCRIPTION => 'MKR-USD',
			self::PAIR => 'MKR-USD',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrkwd' => [
			self::DESCRIPTION => 'MKR-KWD',
			self::PAIR => 'MKR-KWD',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkromr' => [
			self::DESCRIPTION => 'MKR-OMR',
			self::PAIR => 'MKR-OMR',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrbhd' => [
			self::DESCRIPTION => 'MKR-BHD',
			self::PAIR => 'MKR-BHD',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrqar' => [
			self::DESCRIPTION => 'MKR-QAR',
			self::PAIR => 'MKR-QAR',
			self::SYMBOL => 'tMKRUSD',
		],
		'mkrusdt' => [
			self::DESCRIPTION => 'MKR-USDT',
			self::PAIR => 'MKR-USDT',
			self::SYMBOL => 'tMKRUST',
		],
		'mkrbtc' => [
			self::DESCRIPTION => 'MKR-BTC',
			self::PAIR => 'MKR-BTC',
			self::SYMBOL => 'tMKRBTC',
		],
		// --------------------------------------------- REP pairs
		'repaed' => [
			self::DESCRIPTION => 'REP-AED',
			self::PAIR => 'REP-AED',
			self::SYMBOL => 'tREPUSD',
		],
		// --------------------------------------------- KNC pairs
		'kncaed' => [
			self::DESCRIPTION => 'KNC-AED',
			self::PAIR => 'KNC-AED',
			self::SYMBOL => 'tKNCUSD',
		],
		'kncsar' => [
			self::DESCRIPTION => 'KNC-SAR',
			self::PAIR => 'KNC-SAR',
			self::SYMBOL => 'tKNCUSD',
		],
		'knctry' => [
			self::DESCRIPTION => 'KNC-TRY',
			self::PAIR => 'KNC-TRY',
			self::SYMBOL => 'tKNCUSD',
		],
		'kncusd' => [
			self::DESCRIPTION => 'KNC-USD',
			self::PAIR => 'KNC-USD',
			self::SYMBOL => 'tKNCUSD',
		],
		'knckwd' => [
			self::DESCRIPTION => 'KNC-KWD',
			self::PAIR => 'KNC-KWD',
			self::SYMBOL => 'tKNCUSD',
		],
		'kncomr' => [
			self::DESCRIPTION => 'KNC-OMR',
			self::PAIR => 'KNC-OMR',
			self::SYMBOL => 'tKNCUSD',
		],
		'kncbhd' => [
			self::DESCRIPTION => 'KNC-BHD',
			self::PAIR => 'KNC-BHD',
			self::SYMBOL => 'tKNCUSD',
		],
		'kncqar' => [
			self::DESCRIPTION => 'KNC-QAR',
			self::PAIR => 'KNC-QAR',
			self::SYMBOL => 'tKNCUSD',
		],
		'kncbtc' => [
			self::DESCRIPTION => 'KNC-BTC',
			self::PAIR => 'KNC-BTC',
			self::SYMBOL => 'tKNCBTC',
		],
		// --------------------------------------------- UNI pairs
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
		'unitry' => [
			self::DESCRIPTION => 'UNI-TRY',
			self::PAIR => 'UNI-TRY',
			self::SYMBOL => 'tUNIUSD',
		],
		'uniusd' => [
			self::DESCRIPTION => 'UNI-USD',
			self::PAIR => 'UNI-USD',
			self::SYMBOL => 'tUNIUSD',
		],
		'unikwd' => [
			self::DESCRIPTION => 'UNI-KWD',
			self::PAIR => 'UNI-KWD',
			self::SYMBOL => 'tUNIUSD',
		],
		'uniomr' => [
			self::DESCRIPTION => 'UNI-OMR',
			self::PAIR => 'UNI-OMR',
			self::SYMBOL => 'tUNIUSD',
		],
		'unibhd' => [
			self::DESCRIPTION => 'UNI-BHD',
			self::PAIR => 'UNI-BHD',
			self::SYMBOL => 'tUNIUSD',
		],
		'uniqar' => [
			self::DESCRIPTION => 'UNI-QAR',
			self::PAIR => 'UNI-QAR',
			self::SYMBOL => 'tUNIUSD',
		],
		'uniusdt' => [
			self::DESCRIPTION => 'UNI-USDT',
			self::PAIR => 'UNI-USDT',
			self::SYMBOL => 'tUNIUST',
		],
		// --------------------------------------------- YFI pairs
		'yfiaed' => [
			self::DESCRIPTION => 'YFI-AED',
			self::PAIR => 'YFI-AED',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfisar' => [
			self::DESCRIPTION => 'YFI-SAR',
			self::PAIR => 'YFI-SAR',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfitry' => [
			self::DESCRIPTION => 'YFI-TRY',
			self::PAIR => 'YFI-TRY',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfiusd' => [
			self::DESCRIPTION => 'YFI-USD',
			self::PAIR => 'YFI-USD',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfikwd' => [
			self::DESCRIPTION => 'YFI-KWD',
			self::PAIR => 'YFI-KWD',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfiomr' => [
			self::DESCRIPTION => 'YFI-OMR',
			self::PAIR => 'YFI-OMR',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfibhd' => [
			self::DESCRIPTION => 'YFI-BHD',
			self::PAIR => 'YFI-BHD',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfiqar' => [
			self::DESCRIPTION => 'YFI-QAR',
			self::PAIR => 'YFI-QAR',
			self::SYMBOL => 'tYFIUSD',
		],
		'yfiusdt' => [
			self::DESCRIPTION => 'YFI-USDT',
			self::PAIR => 'YFI-USDT',
			self::SYMBOL => 'tYFIUST',
		],
		// --------------------------------------------- BAL pairs
		'balaed' => [
			self::DESCRIPTION => 'BAL-AED',
			self::PAIR => 'BAL-AED',
			self::SYMBOL => 'tBALUSD',
		],
		'balsar' => [
			self::DESCRIPTION => 'BAL-SAR',
			self::PAIR => 'BAL-SAR',
			self::SYMBOL => 'tBALUSD',
		],
		'baltry' => [
			self::DESCRIPTION => 'BAL-TRY',
			self::PAIR => 'BAL-TRY',
			self::SYMBOL => 'tBALUSD',
		],
		'balusd' => [
			self::DESCRIPTION => 'BAL-USD',
			self::PAIR => 'BAL-USD',
			self::SYMBOL => 'tBALUSD',
		],
		'balkwd' => [
			self::DESCRIPTION => 'BAL-KWD',
			self::PAIR => 'BAL-KWD',
			self::SYMBOL => 'tBALUSD',
		],
		'balomr' => [
			self::DESCRIPTION => 'BAL-OMR',
			self::PAIR => 'BAL-OMR',
			self::SYMBOL => 'tBALUSD',
		],
		'balbhd' => [
			self::DESCRIPTION => 'BAL-BHD',
			self::PAIR => 'BAL-BHD',
			self::SYMBOL => 'tBALUSD',
		],
		'balqar' => [
			self::DESCRIPTION => 'BAL-QAR',
			self::PAIR => 'BAL-QAR',
			self::SYMBOL => 'tBALUSD',
		],
		'balusdt' => [
			self::DESCRIPTION => 'BAL-USDT',
			self::PAIR => 'BAL-USDT',
			self::SYMBOL => 'tBALUST',
		],
		// --------------------------------------------- COMP pairs
		'compaed' => [
			self::DESCRIPTION => 'COMP-AED',
			self::PAIR => 'COMP-AED',
			self::SYMBOL => 'tCOMP:USD',
		],
		'compsar' => [
			self::DESCRIPTION => 'COMP-SAR',
			self::PAIR => 'COMP-SAR',
			self::SYMBOL => 'tCOMP:USD',
		],
		'comptry' => [
			self::DESCRIPTION => 'COMP-TRY',
			self::PAIR => 'COMP-TRY',
			self::SYMBOL => 'tCOMP:USD',
		],
		'compusd' => [
			self::DESCRIPTION => 'COMP-USD',
			self::PAIR => 'COMP-USD',
			self::SYMBOL => 'tCOMP:USD',
		],
		'compkwd' => [
			self::DESCRIPTION => 'COMP-KWD',
			self::PAIR => 'COMP-KWD',
			self::SYMBOL => 'tCOMP:USD',
		],
		'compomr' => [
			self::DESCRIPTION => 'COMP-OMR',
			self::PAIR => 'COMP-OMR',
			self::SYMBOL => 'tCOMP:USD',
		],
		'compbhd' => [
			self::DESCRIPTION => 'COMP-BHD',
			self::PAIR => 'COMP-BHD',
			self::SYMBOL => 'tCOMP:USD',
		],
		'compqar' => [
			self::DESCRIPTION => 'COMP-QAR',
			self::PAIR => 'COMP-QAR',
			self::SYMBOL => 'tCOMP:USD',
		],
		'compusdt' => [
			self::DESCRIPTION => 'COMP-USDT',
			self::PAIR => 'COMP-USDT',
			self::SYMBOL => 'tCOMP:UST',
		],
		// --------------------------------------------- DOGE pairs
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
		'dogetry' => [
			self::DESCRIPTION => 'DOGE-TRY',
			self::PAIR => 'DOGE-TRY',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogeusd' => [
			self::DESCRIPTION => 'DOGE-USD',
			self::PAIR => 'DOGE-USD',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogekwd' => [
			self::DESCRIPTION => 'DOGE-KWD',
			self::PAIR => 'DOGE-KWD',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogeomr' => [
			self::DESCRIPTION => 'DOGE-OMR',
			self::PAIR => 'DOGE-OMR',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogebhd' => [
			self::DESCRIPTION => 'DOGE-BHD',
			self::PAIR => 'DOGE-BHD',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogeqar' => [
			self::DESCRIPTION => 'DOGE-QAR',
			self::PAIR => 'DOGE-QAR',
			self::SYMBOL => 'tDOGE:USD',
		],
		'dogeusdt' => [
			self::DESCRIPTION => 'DOGE-USDT',
			self::PAIR => 'DOGE-USDT',
			self::SYMBOL => 'tDOGE:UST',
		],
		'dogebtc' => [
			self::DESCRIPTION => 'DOGE-BTC',
			self::PAIR => 'DOGE-BTC',
			self::SYMBOL => 'tDOGE:BTC',
		],
		// --------------------------------------------- AAVE pairs
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
		'aavetry' => [
			self::DESCRIPTION => 'AAVE-TRY',
			self::PAIR => 'AAVE-TRY',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aaveusd' => [
			self::DESCRIPTION => 'AAVE-USD',
			self::PAIR => 'AAVE-USD',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aavekwd' => [
			self::DESCRIPTION => 'AAVE-KWD',
			self::PAIR => 'AAVE-KWD',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aaveomr' => [
			self::DESCRIPTION => 'AAVE-OMR',
			self::PAIR => 'AAVE-OMR',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aavebhd' => [
			self::DESCRIPTION => 'AAVE-BHD',
			self::PAIR => 'AAVE-BHD',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aaveqar' => [
			self::DESCRIPTION => 'AAVE-QAR',
			self::PAIR => 'AAVE-QAR',
			self::SYMBOL => 'tAAVE:USD',
		],
		'aaveusdt' => [
			self::DESCRIPTION => 'AAVE-USDT',
			self::PAIR => 'AAVE-USDT',
			self::SYMBOL => 'tAAVE:UST',
		],
		// --------------------------------------------- BNT pairs
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
		'bnttry' => [
			self::DESCRIPTION => 'BNT-TRY',
			self::PAIR => 'BNT-TRY',
			self::SYMBOL => 'tBNTUSD',
		],
		'bntusd' => [
			self::DESCRIPTION => 'BNT-USD',
			self::PAIR => 'BNT-USD',
			self::SYMBOL => 'tBNTUSD',
		],
		'bntkwd' => [
			self::DESCRIPTION => 'BNT-KWD',
			self::PAIR => 'BNT-KWD',
			self::SYMBOL => 'tBNTUSD',
		],
		'bntomr' => [
			self::DESCRIPTION => 'BNT-OMR',
			self::PAIR => 'BNT-OMR',
			self::SYMBOL => 'tBNTUSD',
		],
		'bntbhd' => [
			self::DESCRIPTION => 'BNT-BHD',
			self::PAIR => 'BNT-BHD',
			self::SYMBOL => 'tBNTUSD',
		],
		'bntqar' => [
			self::DESCRIPTION => 'BNT-QAR',
			self::PAIR => 'BNT-QAR',
			self::SYMBOL => 'tBNTUSD',
		],
		// --------------------------------------------- ENJ pairs
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
		'enjtry' => [
			self::DESCRIPTION => 'ENJ-TRY',
			self::PAIR => 'ENJ-TRY',
			self::SYMBOL => 'tENJUSD',
		],
		'enjusd' => [
			self::DESCRIPTION => 'ENJ-USD',
			self::PAIR => 'ENJ-USD',
			self::SYMBOL => 'tENJUSD',
		],
		'enjkwd' => [
			self::DESCRIPTION => 'ENJ-KWD',
			self::PAIR => 'ENJ-KWD',
			self::SYMBOL => 'tENJUSD',
		],
		'enjomr' => [
			self::DESCRIPTION => 'ENJ-OMR',
			self::PAIR => 'ENJ-OMR',
			self::SYMBOL => 'tENJUSD',
		],
		'enjbhd' => [
			self::DESCRIPTION => 'ENJ-BHD',
			self::PAIR => 'ENJ-BHD',
			self::SYMBOL => 'tENJUSD',
		],
		'enjqar' => [
			self::DESCRIPTION => 'ENJ-QAR',
			self::PAIR => 'ENJ-QAR',
			self::SYMBOL => 'tENJUSD',
		],
		// --------------------------------------------- LRC pairs
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
		'lrctry' => [
			self::DESCRIPTION => 'LRC-TRY',
			self::PAIR => 'LRC-TRY',
			self::SYMBOL => 'tLRCUSD',
		],
		'lrcusd' => [
			self::DESCRIPTION => 'LRC-USD',
			self::PAIR => 'LRC-USD',
			self::SYMBOL => 'tLRCUSD',
		],
		'lrckwd' => [
			self::DESCRIPTION => 'LRC-KWD',
			self::PAIR => 'LRC-KWD',
			self::SYMBOL => 'tLRCUSD',
		],
		'lrcomr' => [
			self::DESCRIPTION => 'LRC-OMR',
			self::PAIR => 'LRC-OMR',
			self::SYMBOL => 'tLRCUSD',
		],
		'lrcbhd' => [
			self::DESCRIPTION => 'LRC-BHD',
			self::PAIR => 'LRC-BHD',
			self::SYMBOL => 'tLRCUSD',
		],
		'lrcqar' => [
			self::DESCRIPTION => 'LRC-QAR',
			self::PAIR => 'LRC-QAR',
			self::SYMBOL => 'tLRCUSD',
		],
		// --------------------------------------------- MANA pairs
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
		'manatry' => [
			self::DESCRIPTION => 'MANA-TRY',
			self::PAIR => 'MANA-TRY',
			self::SYMBOL => 'tMNAUSD',
		],
		'manausd' => [
			self::DESCRIPTION => 'MANA-USD',
			self::PAIR => 'MANA-USD',
			self::SYMBOL => 'tMNAUSD',
		],
		'manakwd' => [
			self::DESCRIPTION => 'MANA-KWD',
			self::PAIR => 'MANA-KWD',
			self::SYMBOL => 'tMNAUSD',
		],
		'manaomr' => [
			self::DESCRIPTION => 'MANA-OMR',
			self::PAIR => 'MANA-OMR',
			self::SYMBOL => 'tMNAUSD',
		],
		'manabhd' => [
			self::DESCRIPTION => 'MANA-BHD',
			self::PAIR => 'MANA-BHD',
			self::SYMBOL => 'tMNAUSD',
		],
		'manaqar' => [
			self::DESCRIPTION => 'MANA-QAR',
			self::PAIR => 'MANA-QAR',
			self::SYMBOL => 'tMNAUSD',
		],
		'manabtc' => [
			self::DESCRIPTION => 'MANA-BTC',
			self::PAIR => 'MANA-BTC',
			self::SYMBOL => 'tMNABTC',
		],
		// --------------------------------------------- MATIC pairs
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
		'matictry' => [
			self::DESCRIPTION => 'MATIC-TRY',
			self::PAIR => 'MATIC-TRY',
			self::SYMBOL => 'tMATIC:USD',
		],
		'maticusd' => [
			self::DESCRIPTION => 'MATIC-USD',
			self::PAIR => 'MATIC-USD',
			self::SYMBOL => 'tMATIC:USD',
		],
		'matickwd' => [
			self::DESCRIPTION => 'MATIC-KWD',
			self::PAIR => 'MATIC-KWD',
			self::SYMBOL => 'tMATIC:USD',
		],
		'maticomr' => [
			self::DESCRIPTION => 'MATIC-OMR',
			self::PAIR => 'MATIC-OMR',
			self::SYMBOL => 'tMATIC:USD',
		],
		'maticbhd' => [
			self::DESCRIPTION => 'MATIC-BHD',
			self::PAIR => 'MATIC-BHD',
			self::SYMBOL => 'tMATIC:USD',
		],
		'maticqar' => [
			self::DESCRIPTION => 'MATIC-QAR',
			self::PAIR => 'MATIC-QAR',
			self::SYMBOL => 'tMATIC:USD',
		],
		'maticusdt' => [
			self::DESCRIPTION => 'MATIC-USDT',
			self::PAIR => 'MATIC-USDT',
			self::SYMBOL => 'tMATIC:UST',
		],
		'maticbtc' => [
			self::DESCRIPTION => 'MATIC-BTC',
			self::PAIR => 'MATIC-BTC',
			self::SYMBOL => 'tMATIC:BTC',
		],
		// --------------------------------------------- STORJ pairs
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
		'storjtry' => [
			self::DESCRIPTION => 'STORJ-TRY',
			self::PAIR => 'STORJ-TRY',
			self::SYMBOL => 'tSTJUSD',
		],
		'storjusd' => [
			self::DESCRIPTION => 'STORJ-USD',
			self::PAIR => 'STORJ-USD',
			self::SYMBOL => 'tSTJUSD',
		],
		'storjkwd' => [
			self::DESCRIPTION => 'STORJ-KWD',
			self::PAIR => 'STORJ-KWD',
			self::SYMBOL => 'tSTJUSD',
		],
		'storjomr' => [
			self::DESCRIPTION => 'STORJ-OMR',
			self::PAIR => 'STORJ-OMR',
			self::SYMBOL => 'tSTJUSD',
		],
		'storjbhd' => [
			self::DESCRIPTION => 'STORJ-BHD',
			self::PAIR => 'STORJ-BHD',
			self::SYMBOL => 'tSTJUSD',
		],
		'storjqar' => [
			self::DESCRIPTION => 'STORJ-QAR',
			self::PAIR => 'STORJ-QAR',
			self::SYMBOL => 'tSTJUSD',
		],
		// --------------------------------------------- SUSHI pairs
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
		'sushitry' => [
			self::DESCRIPTION => 'SUSHI-TRY',
			self::PAIR => 'SUSHI-TRY',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushiusd' => [
			self::DESCRIPTION => 'SUSHI-USD',
			self::PAIR => 'SUSHI-USD',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushikwd' => [
			self::DESCRIPTION => 'SUSHI-KWD',
			self::PAIR => 'SUSHI-KWD',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushiomr' => [
			self::DESCRIPTION => 'SUSHI-OMR',
			self::PAIR => 'SUSHI-OMR',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushibhd' => [
			self::DESCRIPTION => 'SUSHI-BHD',
			self::PAIR => 'SUSHI-BHD',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushiqar' => [
			self::DESCRIPTION => 'SUSHI-QAR',
			self::PAIR => 'SUSHI-QAR',
			self::SYMBOL => 'tSUSHI:USD',
		],
		'sushiusdt' => [
			self::DESCRIPTION => 'SUSHI-USDT',
			self::PAIR => 'SUSHI-USDT',
			self::SYMBOL => 'tSUSHI:UST',
		],
		// --------------------------------------------- USDC pairs
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
		'usdctry' => [
			self::DESCRIPTION => 'USDC-TRY',
			self::PAIR => 'USDC-TRY',
			self::SYMBOL => 'tUDCUSD',
		],
		'usdcusd' => [
			self::DESCRIPTION => 'USDC-USD',
			self::PAIR => 'USDC-USD',
			self::SYMBOL => 'tUDCUSD',
		],
		'usdckwd' => [
			self::DESCRIPTION => 'USDC-KWD',
			self::PAIR => 'USDC-KWD',
			self::SYMBOL => 'tUDCUSD',
		],
		'usdcomr' => [
			self::DESCRIPTION => 'USDC-OMR',
			self::PAIR => 'USDC-OMR',
			self::SYMBOL => 'tUDCUSD',
		],
		'usdcbhd' => [
			self::DESCRIPTION => 'USDC-BHD',
			self::PAIR => 'USDC-BHD',
			self::SYMBOL => 'tUDCUSD',
		],
		'usdcqar' => [
			self::DESCRIPTION => 'USDC-QAR',
			self::PAIR => 'USDC-QAR',
			self::SYMBOL => 'tUDCUSD',
		],
		'usdcusdt' => [
			self::DESCRIPTION => 'USDC-USDT',
			self::PAIR => 'USDC-USDT',
			self::SYMBOL => 'tUDCUST',
		],
		// --------------------------------------------- WAVES pairs
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
		'wavestry' => [
			self::DESCRIPTION => 'WAVES-TRY',
			self::PAIR => 'WAVES-TRY',
			self::SYMBOL => 'tWAVES:USD',
		],
		'wavesusd' => [
			self::DESCRIPTION => 'WAVES-USD',
			self::PAIR => 'WAVES-USD',
			self::SYMBOL => 'tWAVES:USD',
		],
		'waveskwd' => [
			self::DESCRIPTION => 'WAVES-KWD',
			self::PAIR => 'WAVES-KWD',
			self::SYMBOL => 'tWAVES:USD',
		],
		'wavesomr' => [
			self::DESCRIPTION => 'WAVES-OMR',
			self::PAIR => 'WAVES-OMR',
			self::SYMBOL => 'tWAVES:USD',
		],
		'wavesbhd' => [
			self::DESCRIPTION => 'WAVES-BHD',
			self::PAIR => 'WAVES-BHD',
			self::SYMBOL => 'tWAVES:USD',
		],
		'wavesqar' => [
			self::DESCRIPTION => 'WAVES-QAR',
			self::PAIR => 'WAVES-QAR',
			self::SYMBOL => 'tWAVES:USD',
		],
		'wavesusdt' => [
			self::DESCRIPTION => 'WAVES-USDT',
			self::PAIR => 'WAVES-USDT',
			self::SYMBOL => 'tWAVES:UST',
		],
		// --------------------------------------------- SOL pairs
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
		'soltry' => [
			self::DESCRIPTION => 'SOL-TRY',
			self::PAIR => 'SOL-TRY',
			self::SYMBOL => 'tSOLUSD',
		],
		'solusd' => [
			self::DESCRIPTION => 'SOL-USD',
			self::PAIR => 'SOL-USD',
			self::SYMBOL => 'tSOLUSD',
		],
		'solkwd' => [
			self::DESCRIPTION => 'SOL-KWD',
			self::PAIR => 'SOL-KWD',
			self::SYMBOL => 'tSOLUSD',
		],
		'solomr' => [
			self::DESCRIPTION => 'SOL-OMR',
			self::PAIR => 'SOL-OMR',
			self::SYMBOL => 'tSOLUSD',
		],
		'solbhd' => [
			self::DESCRIPTION => 'SOL-BHD',
			self::PAIR => 'SOL-BHD',
			self::SYMBOL => 'tSOLUSD',
		],
		'solqar' => [
			self::DESCRIPTION => 'SOL-QAR',
			self::PAIR => 'SOL-QAR',
			self::SYMBOL => 'tSOLUSD',
		],
		'solusdt' => [
			self::DESCRIPTION => 'SOL-USDT',
			self::PAIR => 'SOL-USDT',
			self::SYMBOL => 'tSOLUST',
		],
		'solbtc' => [
			self::DESCRIPTION => 'SOL-BTC',
			self::PAIR => 'SOL-BTC',
			self::SYMBOL => 'tSOLBTC',
		],
		// --------------------------------------------- ADA pairs
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
		'adatry' => [
			self::DESCRIPTION => 'ADA-TRY',
			self::PAIR => 'ADA-TRY',
			self::SYMBOL => 'tADAUSD',
		],
		'adausd' => [
			self::DESCRIPTION => 'ADA-USD',
			self::PAIR => 'ADA-USD',
			self::SYMBOL => 'tADAUSD',
		],
		'adakwd' => [
			self::DESCRIPTION => 'ADA-KWD',
			self::PAIR => 'ADA-KWD',
			self::SYMBOL => 'tADAUSD',
		],
		'adaomr' => [
			self::DESCRIPTION => 'ADA-OMR',
			self::PAIR => 'ADA-OMR',
			self::SYMBOL => 'tADAUSD',
		],
		'adabhd' => [
			self::DESCRIPTION => 'ADA-BHD',
			self::PAIR => 'ADA-BHD',
			self::SYMBOL => 'tADAUSD',
		],
		'adaqar' => [
			self::DESCRIPTION => 'ADA-QAR',
			self::PAIR => 'ADA-QAR',
			self::SYMBOL => 'tADAUSD',
		],
		'adausdt' => [
			self::DESCRIPTION => 'ADA-USDT',
			self::PAIR => 'ADA-USDT',
			self::SYMBOL => 'tADAUST',
		],
		// --------------------------------------------- DOT pairs
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
		'dottry' => [
			self::DESCRIPTION => 'DOT-TRY',
			self::PAIR => 'DOT-TRY',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotusd' => [
			self::DESCRIPTION => 'DOT-USD',
			self::PAIR => 'DOT-USD',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotkwd' => [
			self::DESCRIPTION => 'DOT-KWD',
			self::PAIR => 'DOT-KWD',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotomr' => [
			self::DESCRIPTION => 'DOT-OMR',
			self::PAIR => 'DOT-OMR',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotbhd' => [
			self::DESCRIPTION => 'DOT-BHD',
			self::PAIR => 'DOT-BHD',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotqar' => [
			self::DESCRIPTION => 'DOT-QAR',
			self::PAIR => 'DOT-QAR',
			self::SYMBOL => 'tDOTUSD',
		],
		'dotusdt' => [
			self::DESCRIPTION => 'DOT-USDT',
			self::PAIR => 'DOT-USDT',
			self::SYMBOL => 'tDOTUST',
		],
		'dotbtc' => [
			self::DESCRIPTION => 'DOT-BTC',
			self::PAIR => 'DOT-BTC',
			self::SYMBOL => 'tDOTBTC',
		],
		// --------------------------------------------- SHIB pairs
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
		'shibtry' => [
			self::DESCRIPTION => 'SHIB-TRY',
			self::PAIR => 'SHIB-TRY',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibusd' => [
			self::DESCRIPTION => 'SHIB-USD',
			self::PAIR => 'SHIB-USD',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibkwd' => [
			self::DESCRIPTION => 'SHIB-KWD',
			self::PAIR => 'SHIB-KWD',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibomr' => [
			self::DESCRIPTION => 'SHIB-OMR',
			self::PAIR => 'SHIB-OMR',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibbhd' => [
			self::DESCRIPTION => 'SHIB-BHD',
			self::PAIR => 'SHIB-BHD',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibqar' => [
			self::DESCRIPTION => 'SHIB-QAR',
			self::PAIR => 'SHIB-QAR',
			self::SYMBOL => 'tSHIB:USD',
		],
		'shibusdt' => [
			self::DESCRIPTION => 'SHIB-USDT',
			self::PAIR => 'SHIB-USDT',
			self::SYMBOL => 'tSHIB:UST',
		],
		// --------------------------------------------- AVAX pairs
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
		'avaxtry' => [
			self::DESCRIPTION => 'AVAX-TRY',
			self::PAIR => 'AVAX-TRY',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxusd' => [
			self::DESCRIPTION => 'AVAX-USD',
			self::PAIR => 'AVAX-USD',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxkwd' => [
			self::DESCRIPTION => 'AVAX-KWD',
			self::PAIR => 'AVAX-KWD',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxomr' => [
			self::DESCRIPTION => 'AVAX-OMR',
			self::PAIR => 'AVAX-OMR',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxbhd' => [
			self::DESCRIPTION => 'AVAX-BHD',
			self::PAIR => 'AVAX-BHD',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxqar' => [
			self::DESCRIPTION => 'AVAX-QAR',
			self::PAIR => 'AVAX-QAR',
			self::SYMBOL => 'tAVAX:USD',
		],
		'avaxusdt' => [
			self::DESCRIPTION => 'AVAX-USDT',
			self::PAIR => 'AVAX-USDT',
			self::SYMBOL => 'tAVAX:UST',
		],
		// --------------------------------------------- NEAR pairs
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
		'neartry' => [
			self::DESCRIPTION => 'NEAR-TRY',
			self::PAIR => 'NEAR-TRY',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearusd' => [
			self::DESCRIPTION => 'NEAR-USD',
			self::PAIR => 'NEAR-USD',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearkwd' => [
			self::DESCRIPTION => 'NEAR-KWD',
			self::PAIR => 'NEAR-KWD',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearomr' => [
			self::DESCRIPTION => 'NEAR-OMR',
			self::PAIR => 'NEAR-OMR',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearbhd' => [
			self::DESCRIPTION => 'NEAR-BHD',
			self::PAIR => 'NEAR-BHD',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearqar' => [
			self::DESCRIPTION => 'NEAR-QAR',
			self::PAIR => 'NEAR-QAR',
			self::SYMBOL => 'tNEAR:USD',
		],
		'nearusdt' => [
			self::DESCRIPTION => 'NEAR-USDT',
			self::PAIR => 'NEAR-USDT',
			self::SYMBOL => 'tNEAR:UST',
		],
		// --------------------------------------------- FTM pairs
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
		'ftmtry' => [
			self::DESCRIPTION => 'FTM-TRY',
			self::PAIR => 'FTM-TRY',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmusd' => [
			self::DESCRIPTION => 'FTM-USD',
			self::PAIR => 'FTM-USD',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmkwd' => [
			self::DESCRIPTION => 'FTM-KWD',
			self::PAIR => 'FTM-KWD',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmomr' => [
			self::DESCRIPTION => 'FTM-OMR',
			self::PAIR => 'FTM-OMR',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmbhd' => [
			self::DESCRIPTION => 'FTM-BHD',
			self::PAIR => 'FTM-BHD',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmqar' => [
			self::DESCRIPTION => 'FTM-QAR',
			self::PAIR => 'FTM-QAR',
			self::SYMBOL => 'tFTMUSD',
		],
		'ftmusdt' => [
			self::DESCRIPTION => 'FTM-USDT',
			self::PAIR => 'FTM-USDT',
			self::SYMBOL => 'tFTMUST',
		],
		// --------------------------------------------- WBTC pairs
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
		'wbtctry' => [
			self::DESCRIPTION => 'WBTC-TRY',
			self::PAIR => 'WBTC-TRY',
			self::SYMBOL => 'tWBTUSD',
		],
		'wbtcusd' => [
			self::DESCRIPTION => 'WBTC-USD',
			self::PAIR => 'WBTC-USD',
			self::SYMBOL => 'tWBTUSD',
		],
		'wbtckwd' => [
			self::DESCRIPTION => 'WBTC-KWD',
			self::PAIR => 'WBTC-KWD',
			self::SYMBOL => 'tWBTUSD',
		],
		'wbtcomr' => [
			self::DESCRIPTION => 'WBTC-OMR',
			self::PAIR => 'WBTC-OMR',
			self::SYMBOL => 'tWBTUSD',
		],
		'wbtcbhd' => [
			self::DESCRIPTION => 'WBTC-BHD',
			self::PAIR => 'WBTC-BHD',
			self::SYMBOL => 'tWBTUSD',
		],
		'wbtcqar' => [
			self::DESCRIPTION => 'WBTC-QAR',
			self::PAIR => 'WBTC-QAR',
			self::SYMBOL => 'tWBTUSD',
		],
		// --------------------------------------------- ATOM pairs
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
		'atomtry' => [
			self::DESCRIPTION => 'ATOM-TRY',
			self::PAIR => 'ATOM-TRY',
			self::SYMBOL => 'tATOUSD',
		],
		'atomusd' => [
			self::DESCRIPTION => 'ATOM-USD',
			self::PAIR => 'ATOM-USD',
			self::SYMBOL => 'tATOUSD',
		],
		'atomkwd' => [
			self::DESCRIPTION => 'ATOM-KWD',
			self::PAIR => 'ATOM-KWD',
			self::SYMBOL => 'tATOUSD',
		],
		'atomomr' => [
			self::DESCRIPTION => 'ATOM-OMR',
			self::PAIR => 'ATOM-OMR',
			self::SYMBOL => 'tATOUSD',
		],
		'atombhd' => [
			self::DESCRIPTION => 'ATOM-BHD',
			self::PAIR => 'ATOM-BHD',
			self::SYMBOL => 'tATOUSD',
		],
		'atomqar' => [
			self::DESCRIPTION => 'ATOM-QAR',
			self::PAIR => 'ATOM-QAR',
			self::SYMBOL => 'tATOUSD',
		],
		'atomusdt' => [
			self::DESCRIPTION => 'ATOM-USDT',
			self::PAIR => 'ATOM-USDT',
			self::SYMBOL => 'tATOUST',
		],
		'atombtc' => [
			self::DESCRIPTION => 'ATOM-BTC',
			self::PAIR => 'ATOM-BTC',
			self::SYMBOL => 'tATOBTC',
		],
		'atometh' => [
			self::DESCRIPTION => 'ATOM-ETH',
			self::PAIR => 'ATOM-ETH',
			self::SYMBOL => 'tATOETH',
		],
		// --------------------------------------------- 1INCH pairs
		'1inchaed' => [
			self::DESCRIPTION => '1INCH-AED',
			self::PAIR => '1INCH-AED',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchsar' => [
			self::DESCRIPTION => '1INCH-SAR',
			self::PAIR => '1INCH-SAR',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchtry' => [
			self::DESCRIPTION => '1INCH-TRY',
			self::PAIR => '1INCH-TRY',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchusd' => [
			self::DESCRIPTION => '1INCH-USD',
			self::PAIR => '1INCH-USD',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchkwd' => [
			self::DESCRIPTION => '1INCH-KWD',
			self::PAIR => '1INCH-KWD',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchomr' => [
			self::DESCRIPTION => '1INCH-OMR',
			self::PAIR => '1INCH-OMR',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchbhd' => [
			self::DESCRIPTION => '1INCH-BHD',
			self::PAIR => '1INCH-BHD',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchqar' => [
			self::DESCRIPTION => '1INCH-QAR',
			self::PAIR => '1INCH-QAR',
			self::SYMBOL => 't1INCH:USD',
		],
		'1inchusdt' => [
			self::DESCRIPTION => '1INCH-USDT',
			self::PAIR => '1INCH-USDT',
			self::SYMBOL => 't1INCH:UST',
		],
		// --------------------------------------------- ANT pairs
		'antaed' => [
			self::DESCRIPTION => 'ANT-AED',
			self::PAIR => 'ANT-AED',
			self::SYMBOL => 'tANTUSD',
		],
		'antsar' => [
			self::DESCRIPTION => 'ANT-SAR',
			self::PAIR => 'ANT-SAR',
			self::SYMBOL => 'tANTUSD',
		],
		'anttry' => [
			self::DESCRIPTION => 'ANT-TRY',
			self::PAIR => 'ANT-TRY',
			self::SYMBOL => 'tANTUSD',
		],
		'antusd' => [
			self::DESCRIPTION => 'ANT-USD',
			self::PAIR => 'ANT-USD',
			self::SYMBOL => 'tANTUSD',
		],
		'antkwd' => [
			self::DESCRIPTION => 'ANT-KWD',
			self::PAIR => 'ANT-KWD',
			self::SYMBOL => 'tANTUSD',
		],
		'antomr' => [
			self::DESCRIPTION => 'ANT-OMR',
			self::PAIR => 'ANT-OMR',
			self::SYMBOL => 'tANTUSD',
		],
		'antbhd' => [
			self::DESCRIPTION => 'ANT-BHD',
			self::PAIR => 'ANT-BHD',
			self::SYMBOL => 'tANTUSD',
		],
		'antqar' => [
			self::DESCRIPTION => 'ANT-QAR',
			self::PAIR => 'ANT-QAR',
			self::SYMBOL => 'tANTUSD',
		],
		'antbtc' => [
			self::DESCRIPTION => 'ANT-BTC',
			self::PAIR => 'ANT-BTC',
			self::SYMBOL => 'tANTBTC',
		],
		'anteth' => [
			self::DESCRIPTION => 'ANT-ETH',
			self::PAIR => 'ANT-ETH',
			self::SYMBOL => 'tANTETH',
		],
		// --------------------------------------------- AXS pairs
		'axsaed' => [
			self::DESCRIPTION => 'AXS-AED',
			self::PAIR => 'AXS-AED',
			self::SYMBOL => 'tAXSUSD',
		],
		'axssar' => [
			self::DESCRIPTION => 'AXS-SAR',
			self::PAIR => 'AXS-SAR',
			self::SYMBOL => 'tAXSUSD',
		],
		'axstry' => [
			self::DESCRIPTION => 'AXS-TRY',
			self::PAIR => 'AXS-TRY',
			self::SYMBOL => 'tAXSUSD',
		],
		'axsusd' => [
			self::DESCRIPTION => 'AXS-USD',
			self::PAIR => 'AXS-USD',
			self::SYMBOL => 'tAXSUSD',
		],
		'axskwd' => [
			self::DESCRIPTION => 'AXS-KWD',
			self::PAIR => 'AXS-KWD',
			self::SYMBOL => 'tAXSUSD',
		],
		'axsomr' => [
			self::DESCRIPTION => 'AXS-OMR',
			self::PAIR => 'AXS-OMR',
			self::SYMBOL => 'tAXSUSD',
		],
		'axsbhd' => [
			self::DESCRIPTION => 'AXS-BHD',
			self::PAIR => 'AXS-BHD',
			self::SYMBOL => 'tAXSUSD',
		],
		'axsqar' => [
			self::DESCRIPTION => 'AXS-QAR',
			self::PAIR => 'AXS-QAR',
			self::SYMBOL => 'tAXSUSD',
		],
		'axsusdt' => [
			self::DESCRIPTION => 'AXS-USDT',
			self::PAIR => 'AXS-USDT',
			self::SYMBOL => 'tAXSUST',
		],
		// --------------------------------------------- BAND pairs
		'bandaed' => [
			self::DESCRIPTION => 'BAND-AED',
			self::PAIR => 'BAND-AED',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandsar' => [
			self::DESCRIPTION => 'BAND-SAR',
			self::PAIR => 'BAND-SAR',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandtry' => [
			self::DESCRIPTION => 'BAND-TRY',
			self::PAIR => 'BAND-TRY',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandusd' => [
			self::DESCRIPTION => 'BAND-USD',
			self::PAIR => 'BAND-USD',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandkwd' => [
			self::DESCRIPTION => 'BAND-KWD',
			self::PAIR => 'BAND-KWD',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandomr' => [
			self::DESCRIPTION => 'BAND-OMR',
			self::PAIR => 'BAND-OMR',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandbhd' => [
			self::DESCRIPTION => 'BAND-BHD',
			self::PAIR => 'BAND-BHD',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandqar' => [
			self::DESCRIPTION => 'BAND-QAR',
			self::PAIR => 'BAND-QAR',
			self::SYMBOL => 'tBAND:USD',
		],
		'bandusdt' => [
			self::DESCRIPTION => 'BAND-USDT',
			self::PAIR => 'BAND-USDT',
			self::SYMBOL => 'tBAND:UST',
		],
		// --------------------------------------------- CHZ pairs
		'chzaed' => [
			self::DESCRIPTION => 'CHZ-AED',
			self::PAIR => 'CHZ-AED',
			self::SYMBOL => 'tCHZUSD',
		],
		'chzsar' => [
			self::DESCRIPTION => 'CHZ-SAR',
			self::PAIR => 'CHZ-SAR',
			self::SYMBOL => 'tCHZUSD',
		],
		'chztry' => [
			self::DESCRIPTION => 'CHZ-TRY',
			self::PAIR => 'CHZ-TRY',
			self::SYMBOL => 'tCHZUSD',
		],
		'chzusd' => [
			self::DESCRIPTION => 'CHZ-USD',
			self::PAIR => 'CHZ-USD',
			self::SYMBOL => 'tCHZUSD',
		],
		'chzkwd' => [
			self::DESCRIPTION => 'CHZ-KWD',
			self::PAIR => 'CHZ-KWD',
			self::SYMBOL => 'tCHZUSD',
		],
		'chzomr' => [
			self::DESCRIPTION => 'CHZ-OMR',
			self::PAIR => 'CHZ-OMR',
			self::SYMBOL => 'tCHZUSD',
		],
		'chzbhd' => [
			self::DESCRIPTION => 'CHZ-BHD',
			self::PAIR => 'CHZ-BHD',
			self::SYMBOL => 'tCHZUSD',
		],
		'chzqar' => [
			self::DESCRIPTION => 'CHZ-QAR',
			self::PAIR => 'CHZ-QAR',
			self::SYMBOL => 'tCHZUSD',
		],
		'chzusdt' => [
			self::DESCRIPTION => 'CHZ-USDT',
			self::PAIR => 'CHZ-USDT',
			self::SYMBOL => 'tCHZUST',
		],
		// --------------------------------------------- CRV pairs
		'crvaed' => [
			self::DESCRIPTION => 'CRV-AED',
			self::PAIR => 'CRV-AED',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvsar' => [
			self::DESCRIPTION => 'CRV-SAR',
			self::PAIR => 'CRV-SAR',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvtry' => [
			self::DESCRIPTION => 'CRV-TRY',
			self::PAIR => 'CRV-TRY',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvusd' => [
			self::DESCRIPTION => 'CRV-USD',
			self::PAIR => 'CRV-USD',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvkwd' => [
			self::DESCRIPTION => 'CRV-KWD',
			self::PAIR => 'CRV-KWD',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvomr' => [
			self::DESCRIPTION => 'CRV-OMR',
			self::PAIR => 'CRV-OMR',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvbhd' => [
			self::DESCRIPTION => 'CRV-BHD',
			self::PAIR => 'CRV-BHD',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvqar' => [
			self::DESCRIPTION => 'CRV-QAR',
			self::PAIR => 'CRV-QAR',
			self::SYMBOL => 'tCRVUSD',
		],
		'crvusdt' => [
			self::DESCRIPTION => 'CRV-USDT',
			self::PAIR => 'CRV-USDT',
			self::SYMBOL => 'tCRVUST',
		],
		// --------------------------------------------- DGB pairs
		'dbgaed' => [
			self::DESCRIPTION => 'DGB-AED',
			self::PAIR => 'DGB-AED',
			self::SYMBOL => 'tDGBUSD',
		],
		'dbgsar' => [
			self::DESCRIPTION => 'DGB-SAR',
			self::PAIR => 'DGB-SAR',
			self::SYMBOL => 'tDGBUSD',
		],
		'dbgtry' => [
			self::DESCRIPTION => 'DGB-TRY',
			self::PAIR => 'DGB-TRY',
			self::SYMBOL => 'tDGBUSD',
		],
		'dbgusd' => [
			self::DESCRIPTION => 'DGB-USD',
			self::PAIR => 'DGB-USD',
			self::SYMBOL => 'tDGBUSD',
		],
		'dgbkwd' => [
			self::DESCRIPTION => 'DGB-KWD',
			self::PAIR => 'DGB-KWD',
			self::SYMBOL => 'tDGBUSD',
		],
		'dgbomr' => [
			self::DESCRIPTION => 'DGB-OMR',
			self::PAIR => 'DGB-OMR',
			self::SYMBOL => 'tDGBUSD',
		],
		'dgbbhd' => [
			self::DESCRIPTION => 'DGB-BHD',
			self::PAIR => 'DGB-BHD',
			self::SYMBOL => 'tDGBUSD',
		],
		'dgbqar' => [
			self::DESCRIPTION => 'DGB-QAR',
			self::PAIR => 'DGB-QAR',
			self::SYMBOL => 'tDGBUSD',
		],
		// --------------------------------------------- EGLD pairs
		'egldaed' => [
			self::DESCRIPTION => 'EGLD-AED',
			self::PAIR => 'EGLD-AED',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldsar' => [
			self::DESCRIPTION => 'EGLD-SAR',
			self::PAIR => 'EGLD-SAR',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldtry' => [
			self::DESCRIPTION => 'EGLD-TRY',
			self::PAIR => 'EGLD-TRY',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldusd' => [
			self::DESCRIPTION => 'EGLD-USD',
			self::PAIR => 'EGLD-USD',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldkwd' => [
			self::DESCRIPTION => 'EGLD-KWD',
			self::PAIR => 'EGLD-KWD',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldomr' => [
			self::DESCRIPTION => 'EGLD-OMR',
			self::PAIR => 'EGLD-OMR',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldbhd' => [
			self::DESCRIPTION => 'EGLD-BHD',
			self::PAIR => 'EGLD-BHD',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldqar' => [
			self::DESCRIPTION => 'EGLD-QAR',
			self::PAIR => 'EGLD-QAR',
			self::SYMBOL => 'tEGLD:USD',
		],
		'egldusdt' => [
			self::DESCRIPTION => 'EGLD-USDT',
			self::PAIR => 'EGLD-USDT',
			self::SYMBOL => 'tEGLD:UST',
		],
		// --------------------------------------------- FIL pairs
		'filaed' => [
			self::DESCRIPTION => 'FIL-AED',
			self::PAIR => 'FIL-AED',
			self::SYMBOL => 'tFILUSD',
		],
		'filsar' => [
			self::DESCRIPTION => 'FIL-SAR',
			self::PAIR => 'FIL-SAR',
			self::SYMBOL => 'tFILUSD',
		],
		'filtry' => [
			self::DESCRIPTION => 'FIL-TRY',
			self::PAIR => 'FIL-TRY',
			self::SYMBOL => 'tFILUSD',
		],
		'filusd' => [
			self::DESCRIPTION => 'FIL-USD',
			self::PAIR => 'FIL-USD',
			self::SYMBOL => 'tFILUSD',
		],
		'filkwd' => [
			self::DESCRIPTION => 'FIL-KWD',
			self::PAIR => 'FIL-KWD',
			self::SYMBOL => 'tFILUSD',
		],
		'filomr' => [
			self::DESCRIPTION => 'FIL-OMR',
			self::PAIR => 'FIL-OMR',
			self::SYMBOL => 'tFILUSD',
		],
		'filbhd' => [
			self::DESCRIPTION => 'FIL-BHD',
			self::PAIR => 'FIL-BHD',
			self::SYMBOL => 'tFILUSD',
		],
		'filqar' => [
			self::DESCRIPTION => 'FIL-QAR',
			self::PAIR => 'FIL-QAR',
			self::SYMBOL => 'tFILUSD',
		],
		'filusdt' => [
			self::DESCRIPTION => 'FIL-USDT',
			self::PAIR => 'FIL-USDT',
			self::SYMBOL => 'tFILUST',
		],
		// --------------------------------------------- GALA pairs
		'galaaed' => [
			self::DESCRIPTION => 'GALA-AED',
			self::PAIR => 'GALA-AED',
			self::SYMBOL => 'tGALA:USD',
		],
		'galasar' => [
			self::DESCRIPTION => 'GALA-SAR',
			self::PAIR => 'GALA-SAR',
			self::SYMBOL => 'tGALA:USD',
		],
		'galatry' => [
			self::DESCRIPTION => 'GALA-TRY',
			self::PAIR => 'GALA-TRY',
			self::SYMBOL => 'tGALA:USD',
		],
		'galausd' => [
			self::DESCRIPTION => 'GALA-USD',
			self::PAIR => 'GALA-USD',
			self::SYMBOL => 'tGALA:USD',
		],
		'galakwd' => [
			self::DESCRIPTION => 'GALA-KWD',
			self::PAIR => 'GALA-KWD',
			self::SYMBOL => 'tGALA:USD',
		],
		'galaomr' => [
			self::DESCRIPTION => 'GALA-OMR',
			self::PAIR => 'GALA-OMR',
			self::SYMBOL => 'tGALA:USD',
		],
		'galabhd' => [
			self::DESCRIPTION => 'GALA-BHD',
			self::PAIR => 'GALA-BHD',
			self::SYMBOL => 'tGALA:USD',
		],
		'galaqar' => [
			self::DESCRIPTION => 'GALA-QAR',
			self::PAIR => 'GALA-QAR',
			self::SYMBOL => 'tGALA:USD',
		],
		'galausdt' => [
			self::DESCRIPTION => 'GALA-USDT',
			self::PAIR => 'GALA-USDT',
			self::SYMBOL => 'tGALA:UST',
		],
		// --------------------------------------------- GNO pairs
		'gnoaed' => [
			self::DESCRIPTION => 'GNO-AED',
			self::PAIR => 'GNO-AED',
			self::SYMBOL => 'tGNOUSD',
		],
		'gnosar' => [
			self::DESCRIPTION => 'GNO-SAR',
			self::PAIR => 'GNO-SAR',
			self::SYMBOL => 'tGNOUSD',
		],
		'gnotry' => [
			self::DESCRIPTION => 'GNO-TRY',
			self::PAIR => 'GNO-TRY',
			self::SYMBOL => 'tGNOUSD',
		],
		'gnousd' => [
			self::DESCRIPTION => 'GNO-USD',
			self::PAIR => 'GNO-USD',
			self::SYMBOL => 'tGNOUSD',
		],
		'gnokwd' => [
			self::DESCRIPTION => 'GNO-KWD',
			self::PAIR => 'GNO-KWD',
			self::SYMBOL => 'tGNOUSD',
		],
		'gnoomr' => [
			self::DESCRIPTION => 'GNO-OMR',
			self::PAIR => 'GNO-OMR',
			self::SYMBOL => 'tGNOUSD',
		],
		'gnobhd' => [
			self::DESCRIPTION => 'GNO-BHD',
			self::PAIR => 'GNO-BHD',
			self::SYMBOL => 'tGNOUSD',
		],
		'gnoqar' => [
			self::DESCRIPTION => 'GNO-QAR',
			self::PAIR => 'GNO-QAR',
			self::SYMBOL => 'tGNOUSD',
		],
		// --------------------------------------------- GRT pairs
		'grtaed' => [
			self::DESCRIPTION => 'GRT-AED',
			self::PAIR => 'GRT-AED',
			self::SYMBOL => 'tGRTUSD',
		],
		'grtsar' => [
			self::DESCRIPTION => 'GRT-SAR',
			self::PAIR => 'GRT-SAR',
			self::SYMBOL => 'tGRTUSD',
		],
		'grttry' => [
			self::DESCRIPTION => 'GRT-TRY',
			self::PAIR => 'GRT-TRY',
			self::SYMBOL => 'tGRTUSD',
		],
		'grtusd' => [
			self::DESCRIPTION => 'GRT-USD',
			self::PAIR => 'GRT-USD',
			self::SYMBOL => 'tGRTUSD',
		],
		'grtkwd' => [
			self::DESCRIPTION => 'GRT-KWD',
			self::PAIR => 'GRT-KWD',
			self::SYMBOL => 'tGRTUSD',
		],
		'grtomr' => [
			self::DESCRIPTION => 'GRT-OMR',
			self::PAIR => 'GRT-OMR',
			self::SYMBOL => 'tGRTUSD',
		],
		'grtbhd' => [
			self::DESCRIPTION => 'GRT-BHD',
			self::PAIR => 'GRT-BHD',
			self::SYMBOL => 'tGRTUSD',
		],
		'grtqar' => [
			self::DESCRIPTION => 'GRT-QAR',
			self::PAIR => 'GRT-QAR',
			self::SYMBOL => 'tGRTUSD',
		],
		'grtusdt' => [
			self::DESCRIPTION => 'GRT-USDT',
			self::PAIR => 'GRT-USDT',
			self::SYMBOL => 'tGRTUST',
		],
		// --------------------------------------------- IOTA pairs
		'iotaaed' => [
			self::DESCRIPTION => 'IOTA-AED',
			self::PAIR => 'IOTA-AED',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotasar' => [
			self::DESCRIPTION => 'IOTA-SAR',
			self::PAIR => 'IOTA-SAR',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotatry' => [
			self::DESCRIPTION => 'IOTA-TRY',
			self::PAIR => 'IOTA-TRY',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotausd' => [
			self::DESCRIPTION => 'IOTA-USD',
			self::PAIR => 'IOTA-USD',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotakwd' => [
			self::DESCRIPTION => 'IOTA-KWD',
			self::PAIR => 'IOTA-KWD',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotaomr' => [
			self::DESCRIPTION => 'IOTA-OMR',
			self::PAIR => 'IOTA-OMR',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotabhd' => [
			self::DESCRIPTION => 'IOTA-BHD',
			self::PAIR => 'IOTA-BHD',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotaqar' => [
			self::DESCRIPTION => 'IOTA-QAR',
			self::PAIR => 'IOTA-QAR',
			self::SYMBOL => 'tIOTUSD',
		],
		'iotabtc' => [
			self::DESCRIPTION => 'IOTA-BTC',
			self::PAIR => 'IOTA-BTC',
			self::SYMBOL => 'tIOTBTC',
		],
		// --------------------------------------------- KSM pairs
		'ksmaed' => [
			self::DESCRIPTION => 'KSM-AED',
			self::PAIR => 'KSM-AED',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmsar' => [
			self::DESCRIPTION => 'KSM-SAR',
			self::PAIR => 'KSM-SAR',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmtry' => [
			self::DESCRIPTION => 'KSM-TRY',
			self::PAIR => 'KSM-TRY',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmusd' => [
			self::DESCRIPTION => 'KSM-USD',
			self::PAIR => 'KSM-USD',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmkwd' => [
			self::DESCRIPTION => 'KSM-KWD',
			self::PAIR => 'KSM-KWD',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmomr' => [
			self::DESCRIPTION => 'KSM-OMR',
			self::PAIR => 'KSM-OMR',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmbhd' => [
			self::DESCRIPTION => 'KSM-BHD',
			self::PAIR => 'KSM-BHD',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmqar' => [
			self::DESCRIPTION => 'KSM-QAR',
			self::PAIR => 'KSM-QAR',
			self::SYMBOL => 'tKSMUSD',
		],
		'ksmusdt' => [
			self::DESCRIPTION => 'KSM-USDT',
			self::PAIR => 'KSM-USDT',
			self::SYMBOL => 'tKSMUST',
		],
		// --------------------------------------------- LEO pairs
		'leoaed' => [
			self::DESCRIPTION => 'LEO-AED',
			self::PAIR => 'LEO-AED',
			self::SYMBOL => 'tLEOUSD',
		],
		'leosar' => [
			self::DESCRIPTION => 'LEO-SAR',
			self::PAIR => 'LEO-SAR',
			self::SYMBOL => 'tLEOUSD',
		],
		'leotry' => [
			self::DESCRIPTION => 'LEO-TRY',
			self::PAIR => 'LEO-TRY',
			self::SYMBOL => 'tLEOUSD',
		],
		'leousd' => [
			self::DESCRIPTION => 'LEO-USD',
			self::PAIR => 'LEO-USD',
			self::SYMBOL => 'tLEOUSD',
		],
		'leokwd' => [
			self::DESCRIPTION => 'LEO-KWD',
			self::PAIR => 'LEO-KWD',
			self::SYMBOL => 'tLEOUSD',
		],
		'leoomr' => [
			self::DESCRIPTION => 'LEO-OMR',
			self::PAIR => 'LEO-OMR',
			self::SYMBOL => 'tLEOUSD',
		],
		'leobhd' => [
			self::DESCRIPTION => 'LEO-BHD',
			self::PAIR => 'LEO-BHD',
			self::SYMBOL => 'tLEOUSD',
		],
		'leoqar' => [
			self::DESCRIPTION => 'LEO-QAR',
			self::PAIR => 'LEO-QAR',
			self::SYMBOL => 'tLEOUSD',
		],
		'leousdt' => [
			self::DESCRIPTION => 'LEO-USDT',
			self::PAIR => 'LEO-USDT',
			self::SYMBOL => 'tLEOUST',
		],
		'leobtc' => [
			self::DESCRIPTION => 'LEO-BTC',
			self::PAIR => 'LEO-BTC',
			self::SYMBOL => 'tLEOBTC',
		],
		'leoeth' => [
			self::DESCRIPTION => 'LEO-ETH',
			self::PAIR => 'LEO-ETH',
			self::SYMBOL => 'tLEOETH',
		],
		// --------------------------------------------- OCEAN pairs
		'oceanaed' => [
			self::DESCRIPTION => 'OCEAN-AED',
			self::PAIR => 'OCEAN-AED',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceansar' => [
			self::DESCRIPTION => 'OCEAN-SAR',
			self::PAIR => 'OCEAN-SAR',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceantry' => [
			self::DESCRIPTION => 'OCEAN-TRY',
			self::PAIR => 'OCEAN-TRY',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceanusd' => [
			self::DESCRIPTION => 'OCEAN-USD',
			self::PAIR => 'OCEAN-USD',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceankwd' => [
			self::DESCRIPTION => 'OCEAN-KWD',
			self::PAIR => 'OCEAN-KWD',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceanomr' => [
			self::DESCRIPTION => 'OCEAN-OMR',
			self::PAIR => 'OCEAN-OMR',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceanbhd' => [
			self::DESCRIPTION => 'OCEAN-BHD',
			self::PAIR => 'OCEAN-BHD',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceanqar' => [
			self::DESCRIPTION => 'OCEAN-QAR',
			self::PAIR => 'OCEAN-QAR',
			self::SYMBOL => 'tOCEAN:USD',
		],
		'oceanusdt' => [
			self::DESCRIPTION => 'OCEAN-USDT',
			self::PAIR => 'OCEAN-USDT',
			self::SYMBOL => 'tOCEAN:UST',
		],
		// --------------------------------------------- QTUM pairs
		'qtumaed' => [
			self::DESCRIPTION => 'QTUM-AED',
			self::PAIR => 'QTUM-AED',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumsar' => [
			self::DESCRIPTION => 'QTUM-SAR',
			self::PAIR => 'QTUM-SAR',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumtry' => [
			self::DESCRIPTION => 'QTUM-TRY',
			self::PAIR => 'QTUM-TRY',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumusd' => [
			self::DESCRIPTION => 'QTUM-USD',
			self::PAIR => 'QTUM-USD',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumkwd' => [
			self::DESCRIPTION => 'QTUM-KWD',
			self::PAIR => 'QTUM-KWD',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumomr' => [
			self::DESCRIPTION => 'QTUM-OMR',
			self::PAIR => 'QTUM-OMR',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumbhd' => [
			self::DESCRIPTION => 'QTUM-BHD',
			self::PAIR => 'QTUM-BHD',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumqar' => [
			self::DESCRIPTION => 'QTUM-QAR',
			self::PAIR => 'QTUM-QAR',
			self::SYMBOL => 'tQTMUSD',
		],
		'qtumbtc' => [
			self::DESCRIPTION => 'QTUM-BTC',
			self::PAIR => 'QTUM-BTC',
			self::SYMBOL => 'tQTMBTC',
		],
		// --------------------------------------------- SNX pairs
		'snxaed' => [
			self::DESCRIPTION => 'SNX-AED',
			self::PAIR => 'SNX-AED',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxsar' => [
			self::DESCRIPTION => 'SNX-SAR',
			self::PAIR => 'SNX-SAR',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxtry' => [
			self::DESCRIPTION => 'SNX-TRY',
			self::PAIR => 'SNX-TRY',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxusd' => [
			self::DESCRIPTION => 'SNX-USD',
			self::PAIR => 'SNX-USD',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxkwd' => [
			self::DESCRIPTION => 'SNX-KWD',
			self::PAIR => 'SNX-KWD',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxomr' => [
			self::DESCRIPTION => 'SNX-OMR',
			self::PAIR => 'SNX-OMR',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxbhd' => [
			self::DESCRIPTION => 'SNX-BHD',
			self::PAIR => 'SNX-BHD',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxqar' => [
			self::DESCRIPTION => 'SNX-QAR',
			self::PAIR => 'SNX-QAR',
			self::SYMBOL => 'tSNXUSD',
		],
		'snxusdt' => [
			self::DESCRIPTION => 'SNX-USDT',
			self::PAIR => 'SNX-USDT',
			self::SYMBOL => 'tSNXUST',
		],
		// --------------------------------------------- THETA pairs
		'thetaaed' => [
			self::DESCRIPTION => 'THETA-AED',
			self::PAIR => 'THETA-AED',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetasar' => [
			self::DESCRIPTION => 'THETA-SAR',
			self::PAIR => 'THETA-SAR',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetatry' => [
			self::DESCRIPTION => 'THETA-TRY',
			self::PAIR => 'THETA-TRY',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetausd' => [
			self::DESCRIPTION => 'THETA-USD',
			self::PAIR => 'THETA-USD',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetakwd' => [
			self::DESCRIPTION => 'THETA-KWD',
			self::PAIR => 'THETA-KWD',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetaomr' => [
			self::DESCRIPTION => 'THETA-OMR',
			self::PAIR => 'THETA-OMR',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetabhd' => [
			self::DESCRIPTION => 'THETA-BHD',
			self::PAIR => 'THETA-BHD',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetaqar' => [
			self::DESCRIPTION => 'THETA-QAR',
			self::PAIR => 'THETA-QAR',
			self::SYMBOL => 'tTHETA:USD',
		],
		'thetausdt' => [
			self::DESCRIPTION => 'THETA-USDT',
			self::PAIR => 'THETA-USDT',
			self::SYMBOL => 'tTHETA:UST',
		],
		// --------------------------------------------- TRX pairs
		'trxaed' => [
			self::DESCRIPTION => 'TRX-AED',
			self::PAIR => 'TRX-AED',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxsar' => [
			self::DESCRIPTION => 'TRX-SAR',
			self::PAIR => 'TRX-SAR',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxtry' => [
			self::DESCRIPTION => 'TRX-TRY',
			self::PAIR => 'TRX-TRY',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxusd' => [
			self::DESCRIPTION => 'TRX-USD',
			self::PAIR => 'TRX-USD',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxkwd' => [
			self::DESCRIPTION => 'TRX-KWD',
			self::PAIR => 'TRX-KWD',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxomr' => [
			self::DESCRIPTION => 'TRX-OMR',
			self::PAIR => 'TRX-OMR',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxbhd' => [
			self::DESCRIPTION => 'TRX-BHD',
			self::PAIR => 'TRX-BHD',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxqar' => [
			self::DESCRIPTION => 'TRX-QAR',
			self::PAIR => 'TRX-QAR',
			self::SYMBOL => 'tTRXUSD',
		],
		'trxusdt' => [
			self::DESCRIPTION => 'TRX-USDT',
			self::PAIR => 'TRX-USDT',
			self::SYMBOL => 'tTRXUST',
		],
		'trxbtc' => [
			self::DESCRIPTION => 'TRX-BTC',
			self::PAIR => 'TRX-BTC',
			self::SYMBOL => 'tTRXBTC',
		],
		'trxeth' => [
			self::DESCRIPTION => 'TRX-ETH',
			self::PAIR => 'TRX-ETH',
			self::SYMBOL => 'tTRXETH',
		],
		// --------------------------------------------- VET pairs
		'vetaed' => [
			self::DESCRIPTION => 'VET-AED',
			self::PAIR => 'VET-AED',
			self::SYMBOL => 'tVETUSD',
		],
		'vetsar' => [
			self::DESCRIPTION => 'VET-SAR',
			self::PAIR => 'VET-SAR',
			self::SYMBOL => 'tVETUSD',
		],
		'vettry' => [
			self::DESCRIPTION => 'VET-TRY',
			self::PAIR => 'VET-TRY',
			self::SYMBOL => 'tVETUSD',
		],
		'vetusd' => [
			self::DESCRIPTION => 'VET-USD',
			self::PAIR => 'VET-USD',
			self::SYMBOL => 'tVETUSD',
		],
		'vetkwd' => [
			self::DESCRIPTION => 'VET-KWD',
			self::PAIR => 'VET-KWD',
			self::SYMBOL => 'tVETUSD',
		],
		'vetomr' => [
			self::DESCRIPTION => 'VET-OMR',
			self::PAIR => 'VET-OMR',
			self::SYMBOL => 'tVETUSD',
		],
		'vetbhd' => [
			self::DESCRIPTION => 'VET-BHD',
			self::PAIR => 'VET-BHD',
			self::SYMBOL => 'tVETUSD',
		],
		'vetqar' => [
			self::DESCRIPTION => 'VET-QAR',
			self::PAIR => 'VET-QAR',
			self::SYMBOL => 'tVETUSD',
		],
		'vetusdt' => [
			self::DESCRIPTION => 'VET-USDT',
			self::PAIR => 'VET-USDT',
			self::SYMBOL => 'tVETUST',
		],
		'vetbtc' => [
			self::DESCRIPTION => 'VET-BTC',
			self::PAIR => 'VET-BTC',
			self::SYMBOL => 'tVETBTC',
		],
		// --------------------------------------------- XVG pairs
		'xvgaed' => [
			self::DESCRIPTION => 'XVG-AED',
			self::PAIR => 'XVG-AED',
			self::SYMBOL => 'tXVGUSD',
		],
		'xvgsar' => [
			self::DESCRIPTION => 'XVG-SAR',
			self::PAIR => 'XVG-SAR',
			self::SYMBOL => 'tXVGUSD',
		],
		'xvgtry' => [
			self::DESCRIPTION => 'XVG-TRY',
			self::PAIR => 'XVG-TRY',
			self::SYMBOL => 'tXVGUSD',
		],
		'xvgusd' => [
			self::DESCRIPTION => 'XVG-USD',
			self::PAIR => 'XVG-USD',
			self::SYMBOL => 'tXVGUSD',
		],
		'xvgkwd' => [
			self::DESCRIPTION => 'XVG-KWD',
			self::PAIR => 'XVG-KWD',
			self::SYMBOL => 'tXVGUSD',
		],
		'xvgomr' => [
			self::DESCRIPTION => 'XVG-OMR',
			self::PAIR => 'XVG-OMR',
			self::SYMBOL => 'tXVGUSD',
		],
		'xvgbhd' => [
			self::DESCRIPTION => 'XVG-BHD',
			self::PAIR => 'XVG-BHD',
			self::SYMBOL => 'tXVGUSD',
		],
		'xvgqar' => [
			self::DESCRIPTION => 'XVG-QAR',
			self::PAIR => 'XVG-QAR',
			self::SYMBOL => 'tXVGUSD',
		],
		// --------------------------------------------- LUNA2 pairs
		'luna2aed' => [
			self::DESCRIPTION => 'LUNA2-AED',
			self::PAIR => 'LUNA2-AED',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2sar' => [
			self::DESCRIPTION => 'LUNA2-SAR',
			self::PAIR => 'LUNA2-SAR',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2try' => [
			self::DESCRIPTION => 'LUNA2-TRY',
			self::PAIR => 'LUNA2-TRY',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2usd' => [
			self::DESCRIPTION => 'LUNA2-USD',
			self::PAIR => 'LUNA2-USD',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2kwd' => [
			self::DESCRIPTION => 'LUNA2-KWD',
			self::PAIR => 'LUNA2-KWD',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2omr' => [
			self::DESCRIPTION => 'LUNA2-OMR',
			self::PAIR => 'LUNA2-OMR',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2bhd' => [
			self::DESCRIPTION => 'LUNA2-BHD',
			self::PAIR => 'LUNA2-BHD',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2qar' => [
			self::DESCRIPTION => 'LUNA2-QAR',
			self::PAIR => 'LUNA2-QAR',
			self::SYMBOL => 'tLUNA2:USD',
		],
		'luna2usdt' => [
			self::DESCRIPTION => 'LUNA2-USDT',
			self::PAIR => 'LUNA2-USDT',
			self::SYMBOL => 'tLUNA2:UST',
		],
		// --------------------------------------------- XAUT pairs
		'xautaed' => [
			self::DESCRIPTION => 'XAUT-AED',
			self::PAIR => 'XAUT-AED',
			self::SYMBOL => 'tXAUT:USD',
		],
		'xautsar' => [
			self::DESCRIPTION => 'XAUT-SAR',
			self::PAIR => 'XAUT-SAR',
			self::SYMBOL => 'tXAUT:USD',
		],
		'xautusd' => [
			self::DESCRIPTION => 'XAUT-USD',
			self::PAIR => 'XAUT-USD',
			self::SYMBOL => 'tXAUT:USD',
		],
		'xautkwd' => [
			self::DESCRIPTION => 'XAUT-KWD',
			self::PAIR => 'XAUT-KWD',
			self::SYMBOL => 'tXAUT:USD',
		],
		'xautomr' => [
			self::DESCRIPTION => 'XAUT-OMR',
			self::PAIR => 'XAUT-OMR',
			self::SYMBOL => 'tXAUT:USD',
		],
		'xautbhd' => [
			self::DESCRIPTION => 'XAUT-BHD',
			self::PAIR => 'XAUT-BHD',
			self::SYMBOL => 'tXAUT:USD',
		],
		'xautqar' => [
			self::DESCRIPTION => 'XAUT-QAR',
			self::PAIR => 'XAUT-QAR',
			self::SYMBOL => 'tXAUT:USD',
		],
		'xautusdt' => [
			self::DESCRIPTION => 'XAUT-USDT',
			self::PAIR => 'XAUT-USDT',
			self::SYMBOL => 'tXAUT:UST',
		],
		'xautbtc' => [
			self::DESCRIPTION => 'XAUT-BTC',
			self::PAIR => 'XAUT-BTC',
			self::SYMBOL => 'tXAUT:BTC',
		],
		// --------------------------------------------- ARB pairs
		'arbaed' => [
			self::DESCRIPTION => 'ARB-AED',
			self::PAIR => 'ARB-AED',
			self::SYMBOL => 'tARBUSD',
		],
		'arbsar' => [
			self::DESCRIPTION => 'ARB-SAR',
			self::PAIR => 'ARB-SAR',
			self::SYMBOL => 'tARBUSD',
		],
		'arbusd' => [
			self::DESCRIPTION => 'ARB-USD',
			self::PAIR => 'ARB-USD',
			self::SYMBOL => 'tARBUSD',
		],
		'arbkwd' => [
			self::DESCRIPTION => 'ARB-KWD',
			self::PAIR => 'ARB-KWD',
			self::SYMBOL => 'tARBUSD',
		],
		'arbomr' => [
			self::DESCRIPTION => 'ARB-OMR',
			self::PAIR => 'ARB-OMR',
			self::SYMBOL => 'tARBUSD',
		],
		'arbbhd' => [
			self::DESCRIPTION => 'ARB-BHD',
			self::PAIR => 'ARB-BHD',
			self::SYMBOL => 'tARBUSD',
		],
		'arbqar' => [
			self::DESCRIPTION => 'ARB-QAR',
			self::PAIR => 'ARB-QAR',
			self::SYMBOL => 'tARBUSD',
		],
		'arbusdt' => [
			self::DESCRIPTION => 'ARB-USDT',
			self::PAIR => 'ARB-USDT',
			self::SYMBOL => 'tARBUST',
		],
		// --------------------------------------------- APE pairs
		'apeaed' => [
			self::DESCRIPTION => 'APE-AED',
			self::PAIR => 'APE-AED',
			self::SYMBOL => 'tAPEUSD',
		],
		'apesar' => [
			self::DESCRIPTION => 'APE-SAR',
			self::PAIR => 'APE-SAR',
			self::SYMBOL => 'tAPEUSD',
		],
		'apeusd' => [
			self::DESCRIPTION => 'APE-USD',
			self::PAIR => 'APE-USD',
			self::SYMBOL => 'tAPEUSD',
		],
		'apekwd' => [
			self::DESCRIPTION => 'APE-KWD',
			self::PAIR => 'APE-KWD',
			self::SYMBOL => 'tAPEUSD',
		],
		'apeomr' => [
			self::DESCRIPTION => 'APE-OMR',
			self::PAIR => 'APE-OMR',
			self::SYMBOL => 'tAPEUSD',
		],
		'apebhd' => [
			self::DESCRIPTION => 'APE-BHD',
			self::PAIR => 'APE-BHD',
			self::SYMBOL => 'tAPEUSD',
		],
		'apeqar' => [
			self::DESCRIPTION => 'APE-QAR',
			self::PAIR => 'APE-QAR',
			self::SYMBOL => 'tAPEUSD',
		],
		'apeusdt' => [
			self::DESCRIPTION => 'APE-USDT',
			self::PAIR => 'APE-USDT',
			self::SYMBOL => 'tAPEUST',
		],
		// --------------------------------------------- SAND pairs
		'sandaed' => [
			self::DESCRIPTION => 'SAND-AED',
			self::PAIR => 'SAND-AED',
			self::SYMBOL => 'tSAND:USD',
		],
		'sandsar' => [
			self::DESCRIPTION => 'SAND-SAR',
			self::PAIR => 'SAND-SAR',
			self::SYMBOL => 'tSAND:USD',
		],
		'sandusd' => [
			self::DESCRIPTION => 'SAND-USD',
			self::PAIR => 'SAND-USD',
			self::SYMBOL => 'tSAND:USD',
		],
		'sandkwd' => [
			self::DESCRIPTION => 'SAND-KWD',
			self::PAIR => 'SAND-KWD',
			self::SYMBOL => 'tSAND:USD',
		],
		'sandomr' => [
			self::DESCRIPTION => 'SAND-OMR',
			self::PAIR => 'SAND-OMR',
			self::SYMBOL => 'tSAND:USD',
		],
		'sandbhd' => [
			self::DESCRIPTION => 'SAND-BHD',
			self::PAIR => 'SAND-BHD',
			self::SYMBOL => 'tSAND:USD',
		],
		'sandqar' => [
			self::DESCRIPTION => 'SAND-QAR',
			self::PAIR => 'SAND-QAR',
			self::SYMBOL => 'tSAND:USD',
		],
		'sandusdt' => [
			self::DESCRIPTION => 'SAND-USDT',
			self::PAIR => 'SAND-USDT',
			self::SYMBOL => 'tSAND:UST',
		],
		// --------------------------------------------- LDO pairs
		'ldoaed' => [
			self::DESCRIPTION => 'LDO-AED',
			self::PAIR => 'LDO-AED',
			self::SYMBOL => 'tLDOUSD',
		],
		'ldosar' => [
			self::DESCRIPTION => 'LDO-SAR',
			self::PAIR => 'LDO-SAR',
			self::SYMBOL => 'tLDOUSD',
		],
		'ldousd' => [
			self::DESCRIPTION => 'LDO-USD',
			self::PAIR => 'LDO-USD',
			self::SYMBOL => 'tLDOUSD',
		],
		'ldokwd' => [
			self::DESCRIPTION => 'LDO-KWD',
			self::PAIR => 'LDO-KWD',
			self::SYMBOL => 'tLDOUSD',
		],
		'ldoomr' => [
			self::DESCRIPTION => 'LDO-OMR',
			self::PAIR => 'LDO-OMR',
			self::SYMBOL => 'tLDOUSD',
		],
		'ldobhd' => [
			self::DESCRIPTION => 'LDO-BHD',
			self::PAIR => 'LDO-BHD',
			self::SYMBOL => 'tLDOUSD',
		],
		'ldoqar' => [
			self::DESCRIPTION => 'LDO-QAR',
			self::PAIR => 'LDO-QAR',
			self::SYMBOL => 'tLDOUSD',
		],
		'ldousdt' => [
			self::DESCRIPTION => 'LDO-USDT',
			self::PAIR => 'LDO-USDT',
			self::SYMBOL => 'tLDOUST',
		],
		// --------------------------------------------- FET pairs
		'fetaed' => [
			self::DESCRIPTION => 'FET-AED',
			self::PAIR => 'FET-AED',
			self::SYMBOL => 'tFETUSD',
		],
		'fetsar' => [
			self::DESCRIPTION => 'FET-SAR',
			self::PAIR => 'FET-SAR',
			self::SYMBOL => 'tFETUSD',
		],
		'fetusd' => [
			self::DESCRIPTION => 'FET-USD',
			self::PAIR => 'FET-USD',
			self::SYMBOL => 'tFETUSD',
		],
		'fetkwd' => [
			self::DESCRIPTION => 'FET-KWD',
			self::PAIR => 'FET-KWD',
			self::SYMBOL => 'tFETUSD',
		],
		'fetomr' => [
			self::DESCRIPTION => 'FET-OMR',
			self::PAIR => 'FET-OMR',
			self::SYMBOL => 'tFETUSD',
		],
		'fetbhd' => [
			self::DESCRIPTION => 'FET-BHD',
			self::PAIR => 'FET-BHD',
			self::SYMBOL => 'tFETUSD',
		],
		'fetqar' => [
			self::DESCRIPTION => 'FET-QAR',
			self::PAIR => 'FET-QAR',
			self::SYMBOL => 'tFETUSD',
		],
		'fetusdt' => [
			self::DESCRIPTION => 'FET-USDT',
			self::PAIR => 'FET-USDT',
			self::SYMBOL => 'tFETUST',
		],
		// --------------------------------------------- XDC pairs
		'xdcaed' => [
			self::DESCRIPTION => 'XDC-AED',
			self::PAIR => 'XDC-AED',
			self::SYMBOL => 'tXDCUSD',
		],
		'xdcsar' => [
			self::DESCRIPTION => 'XDC-SAR',
			self::PAIR => 'XDC-SAR',
			self::SYMBOL => 'tXDCUSD',
		],
		'xdcusd' => [
			self::DESCRIPTION => 'XDC-USD',
			self::PAIR => 'XDC-USD',
			self::SYMBOL => 'tXDCUSD',
		],
		'xdckwd' => [
			self::DESCRIPTION => 'XDC-KWD',
			self::PAIR => 'XDC-KWD',
			self::SYMBOL => 'tXDCUSD',
		],
		'xdcomr' => [
			self::DESCRIPTION => 'XDC-OMR',
			self::PAIR => 'XDC-OMR',
			self::SYMBOL => 'tXDCUSD',
		],
		'xdcbhd' => [
			self::DESCRIPTION => 'XDC-BHD',
			self::PAIR => 'XDC-BHD',
			self::SYMBOL => 'tXDCUSD',
		],
		'xdcqar' => [
			self::DESCRIPTION => 'XDC-QAR',
			self::PAIR => 'XDC-QAR',
			self::SYMBOL => 'tXDCUSD',
		],
		'xdcusdt' => [
			self::DESCRIPTION => 'XDC-USDT',
			self::PAIR => 'XDC-USDT',
			self::SYMBOL => 'tXDCUST',
		],
		// --------------------------------------------- BTG pairs
		'btgaed' => [
			self::DESCRIPTION => 'BTG-AED',
			self::PAIR => 'BTG-AED',
			self::SYMBOL => 'tBTGUSD',
		],
		'btgsar' => [
			self::DESCRIPTION => 'BTG-SAR',
			self::PAIR => 'BTG-SAR',
			self::SYMBOL => 'tBTGUSD',
		],
		'btgusd' => [
			self::DESCRIPTION => 'BTG-USD',
			self::PAIR => 'BTG-USD',
			self::SYMBOL => 'tBTGUSD',
		],
		'btgkwd' => [
			self::DESCRIPTION => 'BTG-KWD',
			self::PAIR => 'BTG-KWD',
			self::SYMBOL => 'tBTGUSD',
		],
		'btgomr' => [
			self::DESCRIPTION => 'BTG-OMR',
			self::PAIR => 'BTG-OMR',
			self::SYMBOL => 'tBTGUSD',
		],
		'btgbhd' => [
			self::DESCRIPTION => 'BTG-BHD',
			self::PAIR => 'BTG-BHD',
			self::SYMBOL => 'tBTGUSD',
		],
		'btgqar' => [
			self::DESCRIPTION => 'BTG-QAR',
			self::PAIR => 'BTG-QAR',
			self::SYMBOL => 'tBTGUSD',
		],
		// --------------------------------------------- RLY pairs
		'rlyaed' => [
			self::DESCRIPTION => 'RLY-AED',
			self::PAIR => 'RLY-AED',
			self::SYMBOL => 'tRLYUSD',
		],
		'rlysar' => [
			self::DESCRIPTION => 'RLY-SAR',
			self::PAIR => 'RLY-SAR',
			self::SYMBOL => 'tRLYUSD',
		],
		'rlyusd' => [
			self::DESCRIPTION => 'RLY-USD',
			self::PAIR => 'RLY-USD',
			self::SYMBOL => 'tRLYUSD',
		],
		'rlykwd' => [
			self::DESCRIPTION => 'RLY-KWD',
			self::PAIR => 'RLY-KWD',
			self::SYMBOL => 'tRLYUSD',
		],
		'rlyomr' => [
			self::DESCRIPTION => 'RLY-OMR',
			self::PAIR => 'RLY-OMR',
			self::SYMBOL => 'tRLYUSD',
		],
		'rlybhd' => [
			self::DESCRIPTION => 'RLY-BHD',
			self::PAIR => 'RLY-BHD',
			self::SYMBOL => 'tRLYUSD',
		],
		'rlyqar' => [
			self::DESCRIPTION => 'RLY-QAR',
			self::PAIR => 'RLY-QAR',
			self::SYMBOL => 'tRLYUSD',
		],
		'rlyusdt' => [
			self::DESCRIPTION => 'RLY-USDT',
			self::PAIR => 'RLY-USDT',
			self::SYMBOL => 'tRLYUST',
		],
		// --------------------------------------------- RBTC pairs
		'rbtcaed' => [
			self::DESCRIPTION => 'RBTC-AED',
			self::PAIR => 'RBTC-AED',
			self::SYMBOL => 'tRBTUSD',
		],
		'rbtcsar' => [
			self::DESCRIPTION => 'RBTC-SAR',
			self::PAIR => 'RBTC-SAR',
			self::SYMBOL => 'tRBTUSD',
		],
		'rbtcusd' => [
			self::DESCRIPTION => 'RBTC-USD',
			self::PAIR => 'RBTC-USD',
			self::SYMBOL => 'tRBTUSD',
		],
		'rbtckwd' => [
			self::DESCRIPTION => 'RBTC-KWD',
			self::PAIR => 'RBTC-KWD',
			self::SYMBOL => 'tRBTUSD',
		],
		'rbtcomr' => [
			self::DESCRIPTION => 'RBTC-OMR',
			self::PAIR => 'RBTC-OMR',
			self::SYMBOL => 'tRBTUSD',
		],
		'rbtcbhd' => [
			self::DESCRIPTION => 'RBTC-BHD',
			self::PAIR => 'RBTC-BHD',
			self::SYMBOL => 'tRBTUSD',
		],
		'rbtcqar' => [
			self::DESCRIPTION => 'RBTC-QAR',
			self::PAIR => 'RBTC-QAR',
			self::SYMBOL => 'tRBTUSD',
		],
		// --------------------------------------------- VRA pairs
		'vraaed' => [
			self::DESCRIPTION => 'VRA-AED',
			self::PAIR => 'VRA-AED',
			self::SYMBOL => 'tVRAUSD',
		],
		'vrasar' => [
			self::DESCRIPTION => 'VRA-SAR',
			self::PAIR => 'VRA-SAR',
			self::SYMBOL => 'tVRAUSD',
		],
		'vrausd' => [
			self::DESCRIPTION => 'VRA-USD',
			self::PAIR => 'VRA-USD',
			self::SYMBOL => 'tVRAUSD',
		],
		'vrakwd' => [
			self::DESCRIPTION => 'VRA-KWD',
			self::PAIR => 'VRA-KWD',
			self::SYMBOL => 'tVRAUSD',
		],
		'vraomr' => [
			self::DESCRIPTION => 'VRA-OMR',
			self::PAIR => 'VRA-OMR',
			self::SYMBOL => 'tVRAUSD',
		],
		'vrabhd' => [
			self::DESCRIPTION => 'VRA-BHD',
			self::PAIR => 'VRA-BHD',
			self::SYMBOL => 'tVRAUSD',
		],
		'vraqar' => [
			self::DESCRIPTION => 'VRA-QAR',
			self::PAIR => 'VRA-QAR',
			self::SYMBOL => 'tVRAUSD',
		],
		'vrausdt' => [
			self::DESCRIPTION => 'VRA-USDT',
			self::PAIR => 'VRA-USDT',
			self::SYMBOL => 'tVRAUST',
		],
		// --------------------------------------------- UTK pairs
		'utkaed' => [
			self::DESCRIPTION => 'UTK-AED',
			self::PAIR => 'UTK-AED',
			self::SYMBOL => 'tUTKUSD',
		],
		'utksar' => [
			self::DESCRIPTION => 'UTK-SAR',
			self::PAIR => 'UTK-SAR',
			self::SYMBOL => 'tUTKUSD',
		],
		'utkusd' => [
			self::DESCRIPTION => 'UTK-USD',
			self::PAIR => 'UTK-USD',
			self::SYMBOL => 'tUTKUSD',
		],
		'utkkwd' => [
			self::DESCRIPTION => 'UTK-KWD',
			self::PAIR => 'UTK-KWD',
			self::SYMBOL => 'tUTKUSD',
		],
		'utkomr' => [
			self::DESCRIPTION => 'UTK-OMR',
			self::PAIR => 'UTK-OMR',
			self::SYMBOL => 'tUTKUSD',
		],
		'utkbhd' => [
			self::DESCRIPTION => 'UTK-BHD',
			self::PAIR => 'UTK-BHD',
			self::SYMBOL => 'tUTKUSD',
		],
		'utkqar' => [
			self::DESCRIPTION => 'UTK-QAR',
			self::PAIR => 'UTK-QAR',
			self::SYMBOL => 'tUTKUSD',
		],
		// --------------------------------------------- SGB pairs
		'sgbaed' => [
			self::DESCRIPTION => 'SGB-AED',
			self::PAIR => 'SGB-AED',
			self::SYMBOL => 'tSGBUSD',
		],
		'sgbsar' => [
			self::DESCRIPTION => 'SGB-SAR',
			self::PAIR => 'SGB-SAR',
			self::SYMBOL => 'tSGBUSD',
		],
		'sgbusd' => [
			self::DESCRIPTION => 'SGB-USD',
			self::PAIR => 'SGB-USD',
			self::SYMBOL => 'tSGBUSD',
		],
		'sgbkwd' => [
			self::DESCRIPTION => 'SGB-KWD',
			self::PAIR => 'SGB-KWD',
			self::SYMBOL => 'tSGBUSD',
		],
		'sgbomr' => [
			self::DESCRIPTION => 'SGB-OMR',
			self::PAIR => 'SGB-OMR',
			self::SYMBOL => 'tSGBUSD',
		],
		'sgbbhd' => [
			self::DESCRIPTION => 'SGB-BHD',
			self::PAIR => 'SGB-BHD',
			self::SYMBOL => 'tSGBUSD',
		],
		'sgbqar' => [
			self::DESCRIPTION => 'SGB-QAR',
			self::PAIR => 'SGB-QAR',
			self::SYMBOL => 'tSGBUSD',
		],
		'sgbusdt' => [
			self::DESCRIPTION => 'SGB-USDT',
			self::PAIR => 'SGB-USDT',
			self::SYMBOL => 'tSGBUST',
		],
		// --------------------------------------------- BLUR pairs
		'bluraed' => [
			self::DESCRIPTION => 'BLUR-AED',
			self::PAIR => 'BLUR-AED',
			self::SYMBOL => 'tBLUR:USD',
		],
		'blursar' => [
			self::DESCRIPTION => 'BLUR-SAR',
			self::PAIR => 'BLUR-SAR',
			self::SYMBOL => 'tBLUR:USD',
		],
		'blurusd' => [
			self::DESCRIPTION => 'BLUR-USD',
			self::PAIR => 'BLUR-USD',
			self::SYMBOL => 'tBLUR:USD',
		],
		'blurkwd' => [
			self::DESCRIPTION => 'BLUR-KWD',
			self::PAIR => 'BLUR-KWD',
			self::SYMBOL => 'tBLUR:USD',
		],
		'bluromr' => [
			self::DESCRIPTION => 'BLUR-OMR',
			self::PAIR => 'BLUR-OMR',
			self::SYMBOL => 'tBLUR:USD',
		],
		'blurbhd' => [
			self::DESCRIPTION => 'BLUR-BHD',
			self::PAIR => 'BLUR-BHD',
			self::SYMBOL => 'tBLUR:USD',
		],
		'blurqar' => [
			self::DESCRIPTION => 'BLUR-QAR',
			self::PAIR => 'BLUR-QAR',
			self::SYMBOL => 'tBLUR:USD',
		],
		'blurusdt' => [
			self::DESCRIPTION => 'BLUR-USDT',
			self::PAIR => 'BLUR-USDT',
			self::SYMBOL => 'tBLUR:UST',
		],
		// --------------------------------------------- OP pairs
		'opaed' => [
			self::DESCRIPTION => 'OP-AED',
			self::PAIR => 'OP-AED',
			self::SYMBOL => 'tOPXUSD',
		],
		'opsar' => [
			self::DESCRIPTION => 'OP-SAR',
			self::PAIR => 'OP-SAR',
			self::SYMBOL => 'tOPXUSD',
		],
		'opusd' => [
			self::DESCRIPTION => 'OP-USD',
			self::PAIR => 'OP-USD',
			self::SYMBOL => 'tOPXUSD',
		],
		'opkwd' => [
			self::DESCRIPTION => 'OP-KWD',
			self::PAIR => 'OP-KWD',
			self::SYMBOL => 'tOPXUSD',
		],
		'opomr' => [
			self::DESCRIPTION => 'OP-OMR',
			self::PAIR => 'OP-OMR',
			self::SYMBOL => 'tOPXUSD',
		],
		'opbhd' => [
			self::DESCRIPTION => 'OP-BHD',
			self::PAIR => 'OP-BHD',
			self::SYMBOL => 'tOPXUSD',
		],
		'opqar' => [
			self::DESCRIPTION => 'OP-QAR',
			self::PAIR => 'OP-QAR',
			self::SYMBOL => 'tOPXUSD',
		],
		'opusdt' => [
			self::DESCRIPTION => 'OP-USDT',
			self::PAIR => 'OP-USDT',
			self::SYMBOL => 'tOPXUST',
		],
		// --------------------------------------------- OPEN pairs
		'openaed' => [
			self::DESCRIPTION => 'OPEN-AED',
			self::PAIR => 'OPEN-AED',
			self::SYMBOL => 'tQRDO:USD',
		],
		'opensar' => [
			self::DESCRIPTION => 'OPEN-SAR',
			self::PAIR => 'OPEN-SAR',
			self::SYMBOL => 'tQRDO:USD',
		],
		'openusd' => [
			self::DESCRIPTION => 'OPEN-USD',
			self::PAIR => 'OPEN-USD',
			self::SYMBOL => 'tQRDO:USD',
		],
		'openkwd' => [
			self::DESCRIPTION => 'OPEN-KWD',
			self::PAIR => 'OPEN-KWD',
			self::SYMBOL => 'tQRDO:USD',
		],
		'openoomr' => [
			self::DESCRIPTION => 'OPEN-OMR',
			self::PAIR => 'OPEN-OMR',
			self::SYMBOL => 'tQRDO:USD',
		],
		'openbhd' => [
			self::DESCRIPTION => 'OPEN-BHD',
			self::PAIR => 'OPEN-BHD',
			self::SYMBOL => 'tQRDO:USD',
		],
		'openqar' => [
			self::DESCRIPTION => 'OPEN-QAR',
			self::PAIR => 'OPEN-QAR',
			self::SYMBOL => 'tQRDO:USD',
		],
		'openusdt' => [
			self::DESCRIPTION => 'OPEN-USDT',
			self::PAIR => 'OPEN-USDT',
			self::SYMBOL => 'tQRDO:UST',
		],
		// --------------------------------------------- BOSON pairs
		'bosonaed' => [
			self::DESCRIPTION => 'BOSON-AED',
			self::PAIR => 'BOSON-AED',
			self::SYMBOL => 'tBOSON:USD',
		],
		'bosonsar' => [
			self::DESCRIPTION => 'BOSON-SAR',
			self::PAIR => 'BOSON-SAR',
			self::SYMBOL => 'tBOSON:USD',
		],
		'bosonusd' => [
			self::DESCRIPTION => 'BOSON-USD',
			self::PAIR => 'BOSON-USD',
			self::SYMBOL => 'tBOSON:USD',
		],
		'bosonkwd' => [
			self::DESCRIPTION => 'BOSON-KWD',
			self::PAIR => 'BOSON-KWD',
			self::SYMBOL => 'tBOSON:USD',
		],
		'bosonomr' => [
			self::DESCRIPTION => 'BOSON-OMR',
			self::PAIR => 'BOSON-OMR',
			self::SYMBOL => 'tBOSON:USD',
		],
		'bosonbhd' => [
			self::DESCRIPTION => 'BOSON-BHD',
			self::PAIR => 'BOSON-BHD',
			self::SYMBOL => 'tBOSON:USD',
		],
		'bosonqar' => [
			self::DESCRIPTION => 'BOSON-QAR',
			self::PAIR => 'BOSON-QAR',
			self::SYMBOL => 'tBOSON:USD',
		],
		'bosonusdt' => [
			self::DESCRIPTION => 'BOSON-USDT',
			self::PAIR => 'BOSON-USDT',
			self::SYMBOL => 'tBOSON:UST',
		],
		// --------------------------------------------- FLOKI pairs
		'flokiaed' => [
			self::DESCRIPTION => 'FLOKI-AED',
			self::PAIR => 'FLOKI-AED',
			self::SYMBOL => 'tFLOKI:USD',
		],
		'flokisar' => [
			self::DESCRIPTION => 'FLOKI-SAR',
			self::PAIR => 'FLOKI-SAR',
			self::SYMBOL => 'tFLOKI:USD',
		],
		'flokiusd' => [
			self::DESCRIPTION => 'FLOKI-USD',
			self::PAIR => 'FLOKI-USD',
			self::SYMBOL => 'tFLOKI:USD',
		],
		'flokikwd' => [
			self::DESCRIPTION => 'FLOKI-KWD',
			self::PAIR => 'FLOKI-KWD',
			self::SYMBOL => 'tFLOKI:USD',
		],
		'flokiomr' => [
			self::DESCRIPTION => 'FLOKI-OMR',
			self::PAIR => 'FLOKI-OMR',
			self::SYMBOL => 'tFLOKI:USD',
		],
		'flokibhd' => [
			self::DESCRIPTION => 'FLOKI-BHD',
			self::PAIR => 'FLOKI-BHD',
			self::SYMBOL => 'tFLOKI:USD',
		],
		'flokiqar' => [
			self::DESCRIPTION => 'FLOKI-QAR',
			self::PAIR => 'FLOKI-QAR',
			self::SYMBOL => 'tFLOKI:USD',
		],
		'flokiusdt' => [
			self::DESCRIPTION => 'FLOKI-USDT',
			self::PAIR => 'FLOKI-USDT',
			self::SYMBOL => 'tFLOKI:UST',
		],
		// --------------------------------------------- TUSD pairs
		'tusdaed' => [
			self::DESCRIPTION => 'TUSD-AED',
			self::PAIR => 'TUSD-AED',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdsar' => [
			self::DESCRIPTION => 'TUSD-SAR',
			self::PAIR => 'TUSD-SAR',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdusd' => [
			self::DESCRIPTION => 'TUSD-USD',
			self::PAIR => 'TUSD-USD',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdkwd' => [
			self::DESCRIPTION => 'TUSD-KWD',
			self::PAIR => 'TUSD-KWD',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdomr' => [
			self::DESCRIPTION => 'TUSD-OMR',
			self::PAIR => 'TUSD-OMR',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdbhd' => [
			self::DESCRIPTION => 'TUSD-BHD',
			self::PAIR => 'TUSD-BHD',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdqar' => [
			self::DESCRIPTION => 'TUSD-QAR',
			self::PAIR => 'TUSD-QAR',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdusdt' => [
			self::DESCRIPTION => 'TUSD-USDT',
			self::PAIR => 'TUSD-USDT',
			self::SYMBOL => 'tTSDUST',
		],
		// --------------------------------------------- WILD pairs
		'wildaed' => [
			self::DESCRIPTION => 'WILD-AED',
			self::PAIR => 'WILD-AED',
			self::SYMBOL => 'tWILD:USD',
		],
		'wildsar' => [
			self::DESCRIPTION => 'WILD-SAR',
			self::PAIR => 'WILD-SAR',
			self::SYMBOL => 'tWILD:USD',
		],
		'wildusd' => [
			self::DESCRIPTION => 'WILD-USD',
			self::PAIR => 'WILD-USD',
			self::SYMBOL => 'tWILD:USD',
		],
		'wildkwd' => [
			self::DESCRIPTION => 'WILD-KWD',
			self::PAIR => 'WILD-KWD',
			self::SYMBOL => 'tWILD:USD',
		],
		'wildomr' => [
			self::DESCRIPTION => 'WILD-OMR',
			self::PAIR => 'WILD-OMR',
			self::SYMBOL => 'tWILD:USD',
		],
		'wildbhd' => [
			self::DESCRIPTION => 'WILD-BHD',
			self::PAIR => 'WILD-BHD',
			self::SYMBOL => 'tWILD:USD',
		],
		'wildqar' => [
			self::DESCRIPTION => 'WILD-QAR',
			self::PAIR => 'WILD-QAR',
			self::SYMBOL => 'tWILD:USD',
		],
		'wildusdt' => [
			self::DESCRIPTION => 'WILD-USDT',
			self::PAIR => 'WILD-USDT',
			self::SYMBOL => 'tWILD:UST',
		],
		// --------------------------------------------- SUI pairs
		'suiaed' => [
			self::DESCRIPTION => 'SUI-AED',
			self::PAIR => 'SUI-AED',
			self::SYMBOL => 'tSUIUSD',
		],
		'suisar' => [
			self::DESCRIPTION => 'SUI-SAR',
			self::PAIR => 'SUI-SAR',
			self::SYMBOL => 'tSUIUSD',
		],
		'suiusd' => [
			self::DESCRIPTION => 'SUI-USD',
			self::PAIR => 'SUI-USD',
			self::SYMBOL => 'tSUIUSD',
		],
		'suikwd' => [
			self::DESCRIPTION => 'SUI-KWD',
			self::PAIR => 'SUI-KWD',
			self::SYMBOL => 'tSUIUSD',
		],
		'suiomr' => [
			self::DESCRIPTION => 'SUI-OMR',
			self::PAIR => 'SUI-OMR',
			self::SYMBOL => 'tSUIUSD',
		],
		'suibhd' => [
			self::DESCRIPTION => 'SUI-BHD',
			self::PAIR => 'SUI-BHD',
			self::SYMBOL => 'tSUIUSD',
		],
		'suiqar' => [
			self::DESCRIPTION => 'SUI-QAR',
			self::PAIR => 'SUI-QAR',
			self::SYMBOL => 'tSUIUSD',
		],
		'suiusdt' => [
			self::DESCRIPTION => 'SUI-USDT',
			self::PAIR => 'SUI-USDT',
			self::SYMBOL => 'tSUIUST',
		],
		// --------------------------------------------- SEI pairs
		'seiaed' => [
			self::DESCRIPTION => 'SEI-AED',
			self::PAIR => 'SEI-AED',
			self::SYMBOL => 'tSEIUSD',
		],
		'seisar' => [
			self::DESCRIPTION => 'SEI-SAR',
			self::PAIR => 'SEI-SAR',
			self::SYMBOL => 'tSEIUSD',
		],
		'seiusd' => [
			self::DESCRIPTION => 'SEI-USD',
			self::PAIR => 'SEI-USD',
			self::SYMBOL => 'tSEIUSD',
		],
		'seikwd' => [
			self::DESCRIPTION => 'SEI-KWD',
			self::PAIR => 'SEI-KWD',
			self::SYMBOL => 'tSEIUSD',
		],
		'seiomr' => [
			self::DESCRIPTION => 'SEI-OMR',
			self::PAIR => 'SEI-OMR',
			self::SYMBOL => 'tSEIUSD',
		],
		'seibhd' => [
			self::DESCRIPTION => 'SEI-BHD',
			self::PAIR => 'SEI-BHD',
			self::SYMBOL => 'tSEIUSD',
		],
		'seiqar' => [
			self::DESCRIPTION => 'SEI-QAR',
			self::PAIR => 'SEI-QAR',
			self::SYMBOL => 'tSEIUSD',
		],
		'seiusdt' => [
			self::DESCRIPTION => 'SEI-USDT',
			self::PAIR => 'SEI-USDT',
			self::SYMBOL => 'tSEIUST',
		],
		// --------------------------------------------- TON pairs
		'tonaed' => [
			self::DESCRIPTION => 'TON-AED',
			self::PAIR => 'TON-AED',
			self::SYMBOL => 'tTONUSD',
		],
		'tonsar' => [
			self::DESCRIPTION => 'TON-SAR',
			self::PAIR => 'TON-SAR',
			self::SYMBOL => 'tTONUSD',
		],
		'tonusd' => [
			self::DESCRIPTION => 'TON-USD',
			self::PAIR => 'TON-USD',
			self::SYMBOL => 'tTONUSD',
		],
		'tonkwd' => [
			self::DESCRIPTION => 'TON-KWD',
			self::PAIR => 'TON-KWD',
			self::SYMBOL => 'tTONUSD',
		],
		'tonomr' => [
			self::DESCRIPTION => 'TON-OMR',
			self::PAIR => 'TON-OMR',
			self::SYMBOL => 'tTONUSD',
		],
		'tonbhd' => [
			self::DESCRIPTION => 'TON-BHD',
			self::PAIR => 'TON-BHD',
			self::SYMBOL => 'tTONUSD',
		],
		'tonqar' => [
			self::DESCRIPTION => 'TON-QAR',
			self::PAIR => 'TON-QAR',
			self::SYMBOL => 'tTONUSD',
		],
		'tonusdt' => [
			self::DESCRIPTION => 'TON-USDT',
			self::PAIR => 'TON-USDT',
			self::SYMBOL => 'tTONUST',
		],
		// --------------------------------------------- AMPL pairs
		'amplaed' => [
			self::DESCRIPTION => 'AMPL-AED',
			self::PAIR => 'AMPL-AED',
			self::SYMBOL => 'tAMPUSD',
		],
		'amplsar' => [
			self::DESCRIPTION => 'AMPL-SAR',
			self::PAIR => 'AMPL-SAR',
			self::SYMBOL => 'tAMPUSD',
		],
		'amplusd' => [
			self::DESCRIPTION => 'AMPL-USD',
			self::PAIR => 'AMPL-USD',
			self::SYMBOL => 'tAMPUSD',
		],
		'amplkwd' => [
			self::DESCRIPTION => 'AMPL-KWD',
			self::PAIR => 'AMPL-KWD',
			self::SYMBOL => 'tAMPUSD',
		],
		'amplomr' => [
			self::DESCRIPTION => 'AMPL-OMR',
			self::PAIR => 'AMPL-OMR',
			self::SYMBOL => 'tAMPUSD',
		],
		'amplbhd' => [
			self::DESCRIPTION => 'AMPL-BHD',
			self::PAIR => 'AMPL-BHD',
			self::SYMBOL => 'tAMPUSD',
		],
		'amplqar' => [
			self::DESCRIPTION => 'AMPL-QAR',
			self::PAIR => 'AMPL-QAR',
			self::SYMBOL => 'tAMPUSD',
		],
		'amplusdt' => [
			self::DESCRIPTION => 'AMPL-USDT',
			self::PAIR => 'AMPL-USDT',
			self::SYMBOL => 'tAMPUST',
		],
		'amplbtc' => [
			self::DESCRIPTION => 'AMPL-BTC',
			self::PAIR => 'AMPL-BTC',
			self::SYMBOL => 'tAMPBTC',
		],
		// --------------------------------------------- BEST pairs
		'bestaed' => [
			self::DESCRIPTION => 'BEST-AED',
			self::PAIR => 'BEST-AED',
			self::SYMBOL => 'tBEST:USD',
		],
		'bestsar' => [
			self::DESCRIPTION => 'BEST-SAR',
			self::PAIR => 'BEST-SAR',
			self::SYMBOL => 'tBEST:USD',
		],
		'bestusd' => [
			self::DESCRIPTION => 'BEST-USD',
			self::PAIR => 'BEST-USD',
			self::SYMBOL => 'tBEST:USD',
		],
		'bestkwd' => [
			self::DESCRIPTION => 'BEST-KWD',
			self::PAIR => 'BEST-KWD',
			self::SYMBOL => 'tBEST:USD',
		],
		'bestomr' => [
			self::DESCRIPTION => 'BEST-OMR',
			self::PAIR => 'BEST-OMR',
			self::SYMBOL => 'tBEST:USD',
		],
		'bestbhd' => [
			self::DESCRIPTION => 'BEST-BHD',
			self::PAIR => 'BEST-BHD',
			self::SYMBOL => 'tBEST:USD',
		],
		'bestqar' => [
			self::DESCRIPTION => 'BEST-QAR',
			self::PAIR => 'BEST-QAR',
			self::SYMBOL => 'tBEST:USD',
		],
		// --------------------------------------------- CELO pairs
		'celoaed' => [
			self::DESCRIPTION => 'CELO-AED',
			self::PAIR => 'CELO-AED',
			self::SYMBOL => 'tCELO:USD',
		],
		'celosar' => [
			self::DESCRIPTION => 'CELO-SAR',
			self::PAIR => 'CELO-SAR',
			self::SYMBOL => 'tCELO:USD',
		],
		'celousd' => [
			self::DESCRIPTION => 'CELO-USD',
			self::PAIR => 'CELO-USD',
			self::SYMBOL => 'tCELO:USD',
		],
		'celokwd' => [
			self::DESCRIPTION => 'CELO-KWD',
			self::PAIR => 'CELO-KWD',
			self::SYMBOL => 'tCELO:USD',
		],
		'celoomr' => [
			self::DESCRIPTION => 'CELO-OMR',
			self::PAIR => 'CELO-OMR',
			self::SYMBOL => 'tCELO:USD',
		],
		'celobhd' => [
			self::DESCRIPTION => 'CELO-BHD',
			self::PAIR => 'CELO-BHD',
			self::SYMBOL => 'tCELO:USD',
		],
		'celoqar' => [
			self::DESCRIPTION => 'CELO-QAR',
			self::PAIR => 'CELO-QAR',
			self::SYMBOL => 'tCELO:USD',
		],
		'celousdt' => [
			self::DESCRIPTION => 'CELO-USDT',
			self::PAIR => 'CELO-USDT',
			self::SYMBOL => 'tCELO:UST',
		],
		// --------------------------------------------- DUSK pairs
		'duskaed' => [
			self::DESCRIPTION => 'DUSK-AED',
			self::PAIR => 'DUSK-AED',
			self::SYMBOL => 'tDUSK:USD',
		],
		'dusksar' => [
			self::DESCRIPTION => 'DUSK-SAR',
			self::PAIR => 'DUSK-SAR',
			self::SYMBOL => 'tDUSK:USD',
		],
		'duskusd' => [
			self::DESCRIPTION => 'DUSK-USD',
			self::PAIR => 'DUSK-USD',
			self::SYMBOL => 'tDUSK:USD',
		],
		'duskkwd' => [
			self::DESCRIPTION => 'DUSK-KWD',
			self::PAIR => 'DUSK-KWD',
			self::SYMBOL => 'tDUSK:USD',
		],
		'duskomr' => [
			self::DESCRIPTION => 'DUSK-OMR',
			self::PAIR => 'DUSK-OMR',
			self::SYMBOL => 'tDUSK:USD',
		],
		'duskbhd' => [
			self::DESCRIPTION => 'DUSK-BHD',
			self::PAIR => 'DUSK-BHD',
			self::SYMBOL => 'tDUSK:USD',
		],
		'duskqar' => [
			self::DESCRIPTION => 'DUSK-QAR',
			self::PAIR => 'DUSK-QAR',
			self::SYMBOL => 'tDUSK:USD',
		],
		// --------------------------------------------- DVF pairs
		'dvfaed' => [
			self::DESCRIPTION => 'DVF-AED',
			self::PAIR => 'DVF-AED',
			self::SYMBOL => 'tDVFUSD',
		],
		'dvfsar' => [
			self::DESCRIPTION => 'DVF-SAR',
			self::PAIR => 'DVF-SAR',
			self::SYMBOL => 'tDVFUSD',
		],
		'dvfusd' => [
			self::DESCRIPTION => 'DVF-USD',
			self::PAIR => 'DVF-USD',
			self::SYMBOL => 'tDVFUSD',
		],
		'dvfkwd' => [
			self::DESCRIPTION => 'DVF-KWD',
			self::PAIR => 'DVF-KWD',
			self::SYMBOL => 'tDVFUSD',
		],
		'dvfomr' => [
			self::DESCRIPTION => 'DVF-OMR',
			self::PAIR => 'DVF-OMR',
			self::SYMBOL => 'tDVFUSD',
		],
		'dvfbhd' => [
			self::DESCRIPTION => 'DVF-BHD',
			self::PAIR => 'DVF-BHD',
			self::SYMBOL => 'tDVFUSD',
		],
		'dvfqar' => [
			self::DESCRIPTION => 'DVF-QAR',
			self::PAIR => 'DVF-QAR',
			self::SYMBOL => 'tDVFUSD',
		],
		// --------------------------------------------- FCL pairs
		'fclaed' => [
			self::DESCRIPTION => 'FCL-AED',
			self::PAIR => 'FCL-AED',
			self::SYMBOL => 'tFCLUSD',
		],
		'fclsar' => [
			self::DESCRIPTION => 'FCL-SAR',
			self::PAIR => 'FCL-SAR',
			self::SYMBOL => 'tFCLUSD',
		],
		'fclusd' => [
			self::DESCRIPTION => 'FCL-USD',
			self::PAIR => 'FCL-USD',
			self::SYMBOL => 'tFCLUSD',
		],
		'fclkwd' => [
			self::DESCRIPTION => 'FCL-KWD',
			self::PAIR => 'FCL-KWD',
			self::SYMBOL => 'tFCLUSD',
		],
		'fclomr' => [
			self::DESCRIPTION => 'FCL-OMR',
			self::PAIR => 'FCL-OMR',
			self::SYMBOL => 'tFCLUSD',
		],
		'fclbhd' => [
			self::DESCRIPTION => 'FCL-BHD',
			self::PAIR => 'FCL-BHD',
			self::SYMBOL => 'tFCLUSD',
		],
		'fclqar' => [
			self::DESCRIPTION => 'FCL-QAR',
			self::PAIR => 'FCL-QAR',
			self::SYMBOL => 'tFCLUSD',
		],
		'fclusdt' => [
			self::DESCRIPTION => 'FCL-USDT',
			self::PAIR => 'FCL-USDT',
			self::SYMBOL => 'tFCLUST',
		],
		// --------------------------------------------- FLR pairs
		'flraed' => [
			self::DESCRIPTION => 'FLR-AED',
			self::PAIR => 'FLR-AED',
			self::SYMBOL => 'tFLRUSD',
		],
		'flrsar' => [
			self::DESCRIPTION => 'FLR-SAR',
			self::PAIR => 'FLR-SAR',
			self::SYMBOL => 'tFLRUSD',
		],
		'flrusd' => [
			self::DESCRIPTION => 'FLR-USD',
			self::PAIR => 'FLR-USD',
			self::SYMBOL => 'tFLRUSD',
		],
		'flrkwd' => [
			self::DESCRIPTION => 'FLR-KWD',
			self::PAIR => 'FLR-KWD',
			self::SYMBOL => 'tFLRUSD',
		],
		'flromr' => [
			self::DESCRIPTION => 'FLR-OMR',
			self::PAIR => 'FLR-OMR',
			self::SYMBOL => 'tFLRUSD',
		],
		'flrbhd' => [
			self::DESCRIPTION => 'FLR-BHD',
			self::PAIR => 'FLR-BHD',
			self::SYMBOL => 'tFLRUSD',
		],
		'flrqar' => [
			self::DESCRIPTION => 'FLR-QAR',
			self::PAIR => 'FLR-QAR',
			self::SYMBOL => 'tFLRUSD',
		],
		'flrusdt' => [
			self::DESCRIPTION => 'FLR-USDT',
			self::PAIR => 'FLR-USDT',
			self::SYMBOL => 'tFLRUST',
		],
		// --------------------------------------------- FORTH pairs
		'forthaed' => [
			self::DESCRIPTION => 'FORTH-AED',
			self::PAIR => 'FORTH-AED',
			self::SYMBOL => 'tFORTH:USD',
		],
		'forthsar' => [
			self::DESCRIPTION => 'FORTH-SAR',
			self::PAIR => 'FORTH-SAR',
			self::SYMBOL => 'tFORTH:USD',
		],
		'forthusd' => [
			self::DESCRIPTION => 'FORTH-USD',
			self::PAIR => 'FORTH-USD',
			self::SYMBOL => 'tFORTH:USD',
		],
		'forthkwd' => [
			self::DESCRIPTION => 'FORTH-KWD',
			self::PAIR => 'FORTH-KWD',
			self::SYMBOL => 'tFORTH:USD',
		],
		'forthomr' => [
			self::DESCRIPTION => 'FORTH-OMR',
			self::PAIR => 'FORTH-OMR',
			self::SYMBOL => 'tFORTH:USD',
		],
		'forthbhd' => [
			self::DESCRIPTION => 'FORTH-BHD',
			self::PAIR => 'FORTH-BHD',
			self::SYMBOL => 'tFORTH:USD',
		],
		'forthqar' => [
			self::DESCRIPTION => 'FORTH-QAR',
			self::PAIR => 'FORTH-QAR',
			self::SYMBOL => 'tFORTH:USD',
		],
		'forthusdt' => [
			self::DESCRIPTION => 'FORTH-USDT',
			self::PAIR => 'FORTH-USDT',
			self::SYMBOL => 'tFORTH:UST',
		],
		// --------------------------------------------- FUN pairs
		'funaed' => [
			self::DESCRIPTION => 'FUN-AED',
			self::PAIR => 'FUN-AED',
			self::SYMBOL => 'tFUNUSD',
		],
		'funsar' => [
			self::DESCRIPTION => 'FUN-SAR',
			self::PAIR => 'FUN-SAR',
			self::SYMBOL => 'tFUNUSD',
		],
		'funusd' => [
			self::DESCRIPTION => 'FUN-USD',
			self::PAIR => 'FUN-USD',
			self::SYMBOL => 'tFUNUSD',
		],
		'funkwd' => [
			self::DESCRIPTION => 'FUN-KWD',
			self::PAIR => 'FUN-KWD',
			self::SYMBOL => 'tFUNUSD',
		],
		'funomr' => [
			self::DESCRIPTION => 'FUN-OMR',
			self::PAIR => 'FUN-OMR',
			self::SYMBOL => 'tFUNUSD',
		],
		'funbhd' => [
			self::DESCRIPTION => 'FUN-BHD',
			self::PAIR => 'FUN-BHD',
			self::SYMBOL => 'tFUNUSD',
		],
		'funqar' => [
			self::DESCRIPTION => 'FUN-QAR',
			self::PAIR => 'FUN-QAR',
			self::SYMBOL => 'tFUNUSD',
		],
		// --------------------------------------------- HMT pairs
		'hmtaed' => [
			self::DESCRIPTION => 'HMT-AED',
			self::PAIR => 'HMT-AED',
			self::SYMBOL => 'tHMTUSD',
		],
		'hmtsar' => [
			self::DESCRIPTION => 'HMT-SAR',
			self::PAIR => 'HMT-SAR',
			self::SYMBOL => 'tHMTUSD',
		],
		'hmtusd' => [
			self::DESCRIPTION => 'HMT-USD',
			self::PAIR => 'HMT-USD',
			self::SYMBOL => 'tHMTUSD',
		],
		'hmtkwd' => [
			self::DESCRIPTION => 'HMT-KWD',
			self::PAIR => 'HMT-KWD',
			self::SYMBOL => 'tHMTUSD',
		],
		'hmtomr' => [
			self::DESCRIPTION => 'HMT-OMR',
			self::PAIR => 'HMT-OMR',
			self::SYMBOL => 'tHMTUSD',
		],
		'hmtbhd' => [
			self::DESCRIPTION => 'HMT-BHD',
			self::PAIR => 'HMT-BHD',
			self::SYMBOL => 'tHMTUSD',
		],
		'hmtqar' => [
			self::DESCRIPTION => 'HMT-QAR',
			self::PAIR => 'HMT-QAR',
			self::SYMBOL => 'tHMTUSD',
		],
		'hmtusdt' => [
			self::DESCRIPTION => 'HMT-USDT',
			self::PAIR => 'HMT-USDT',
			self::SYMBOL => 'tHMTUST',
		],
		// --------------------------------------------- INJ pairs
		'injaed' => [
			self::DESCRIPTION => 'INJ-AED',
			self::PAIR => 'INJ-AED',
			self::SYMBOL => 'tINJUSD',
		],
		'injsar' => [
			self::DESCRIPTION => 'INJ-SAR',
			self::PAIR => 'INJ-SAR',
			self::SYMBOL => 'tINJUSD',
		],
		'injusd' => [
			self::DESCRIPTION => 'INJ-USD',
			self::PAIR => 'INJ-USD',
			self::SYMBOL => 'tINJUSD',
		],
		'injkwd' => [
			self::DESCRIPTION => 'INJ-KWD',
			self::PAIR => 'INJ-KWD',
			self::SYMBOL => 'tINJUSD',
		],
		'injomr' => [
			self::DESCRIPTION => 'INJ-OMR',
			self::PAIR => 'INJ-OMR',
			self::SYMBOL => 'tINJUSD',
		],
		'injbhd' => [
			self::DESCRIPTION => 'INJ-BHD',
			self::PAIR => 'INJ-BHD',
			self::SYMBOL => 'tINJUSD',
		],
		'injqar' => [
			self::DESCRIPTION => 'INJ-QAR',
			self::PAIR => 'INJ-QAR',
			self::SYMBOL => 'tINJUSD',
		],
		'injusdt' => [
			self::DESCRIPTION => 'INJ-USDT',
			self::PAIR => 'INJ-USDT',
			self::SYMBOL => 'tINJUST',
		],
		// --------------------------------------------- JUP pairs
		'jupaed' => [
			self::DESCRIPTION => 'JUP-AED',
			self::PAIR => 'JUP-AED',
			self::SYMBOL => 'tJUPUSD',
		],
		'jupsar' => [
			self::DESCRIPTION => 'JUP-SAR',
			self::PAIR => 'JUP-SAR',
			self::SYMBOL => 'tJUPUSD',
		],
		'jupusd' => [
			self::DESCRIPTION => 'JUP-USD',
			self::PAIR => 'JUP-USD',
			self::SYMBOL => 'tJUPUSD',
		],
		'jupkwd' => [
			self::DESCRIPTION => 'JUP-KWD',
			self::PAIR => 'JUP-KWD',
			self::SYMBOL => 'tJUPUSD',
		],
		'jupomr' => [
			self::DESCRIPTION => 'JUP-OMR',
			self::PAIR => 'JUP-OMR',
			self::SYMBOL => 'tJUPUSD',
		],
		'jupbhd' => [
			self::DESCRIPTION => 'JUP-BHD',
			self::PAIR => 'JUP-BHD',
			self::SYMBOL => 'tJUPUSD',
		],
		'jupqar' => [
			self::DESCRIPTION => 'JUP-QAR',
			self::PAIR => 'JUP-QAR',
			self::SYMBOL => 'tJUPUSD',
		],
		'jupusdt' => [
			self::DESCRIPTION => 'JUP-USDT',
			self::PAIR => 'JUP-USDT',
			self::SYMBOL => 'tJUPUST',
		],
		// --------------------------------------------- KAVA pairs
		'kavaaed' => [
			self::DESCRIPTION => 'KAVA-AED',
			self::PAIR => 'KAVA-AED',
			self::SYMBOL => 'tKAVA:USD',
		],
		'kavasar' => [
			self::DESCRIPTION => 'KAVA-SAR',
			self::PAIR => 'KAVA-SAR',
			self::SYMBOL => 'tKAVA:USD',
		],
		'kavausd' => [
			self::DESCRIPTION => 'KAVA-USD',
			self::PAIR => 'KAVA-USD',
			self::SYMBOL => 'tKAVA:USD',
		],
		'kavakwd' => [
			self::DESCRIPTION => 'KAVA-KWD',
			self::PAIR => 'KAVA-KWD',
			self::SYMBOL => 'tKAVA:USD',
		],
		'kavaomr' => [
			self::DESCRIPTION => 'KAVA-OMR',
			self::PAIR => 'KAVA-OMR',
			self::SYMBOL => 'tKAVA:USD',
		],
		'kavabhd' => [
			self::DESCRIPTION => 'KAVA-BHD',
			self::PAIR => 'KAVA-BHD',
			self::SYMBOL => 'tKAVA:USD',
		],
		'kavaqar' => [
			self::DESCRIPTION => 'KAVA-QAR',
			self::PAIR => 'KAVA-QAR',
			self::SYMBOL => 'tKAVA:USD',
		],
		'kavausdt' => [
			self::DESCRIPTION => 'KAVA-USDT',
			self::PAIR => 'KAVA-USDT',
			self::SYMBOL => 'tKAVA:UST',
		],
		// --------------------------------------------- MEME pairs
		'memeaed' => [
			self::DESCRIPTION => 'MEME-AED',
			self::PAIR => 'MEME-AED',
			self::SYMBOL => 'tMEME:USD',
		],
		'memesar' => [
			self::DESCRIPTION => 'MEME-SAR',
			self::PAIR => 'MEME-SAR',
			self::SYMBOL => 'tMEME:USD',
		],
		'memeusd' => [
			self::DESCRIPTION => 'MEME-USD',
			self::PAIR => 'MEME-USD',
			self::SYMBOL => 'tMEME:USD',
		],
		'memekwd' => [
			self::DESCRIPTION => 'MEME-KWD',
			self::PAIR => 'MEME-KWD',
			self::SYMBOL => 'tMEME:USD',
		],
		'memeomr' => [
			self::DESCRIPTION => 'MEME-OMR',
			self::PAIR => 'MEME-OMR',
			self::SYMBOL => 'tMEME:USD',
		],
		'memebhd' => [
			self::DESCRIPTION => 'MEME-BHD',
			self::PAIR => 'MEME-BHD',
			self::SYMBOL => 'tMEME:USD',
		],
		'memeqar' => [
			self::DESCRIPTION => 'MEME-QAR',
			self::PAIR => 'MEME-QAR',
			self::SYMBOL => 'tMEME:USD',
		],
		'memeusdt' => [
			self::DESCRIPTION => 'MEME-USDT',
			self::PAIR => 'MEME-USDT',
			self::SYMBOL => 'tMEME:UST',
		],
		// --------------------------------------------- MIM pairs
		'mimaed' => [
			self::DESCRIPTION => 'MIM-AED',
			self::PAIR => 'MIM-AED',
			self::SYMBOL => 'tMIMUSD',
		],
		'mimsar' => [
			self::DESCRIPTION => 'MIM-SAR',
			self::PAIR => 'MIM-SAR',
			self::SYMBOL => 'tMIMUSD',
		],
		'mimusd' => [
			self::DESCRIPTION => 'MIM-USD',
			self::PAIR => 'MIM-USD',
			self::SYMBOL => 'tMIMUSD',
		],
		'mimkwd' => [
			self::DESCRIPTION => 'MIM-KWD',
			self::PAIR => 'MIM-KWD',
			self::SYMBOL => 'tMIMUSD',
		],
		'mimomr' => [
			self::DESCRIPTION => 'MIM-OMR',
			self::PAIR => 'MIM-OMR',
			self::SYMBOL => 'tMIMUSD',
		],
		'mimbhd' => [
			self::DESCRIPTION => 'MIM-BHD',
			self::PAIR => 'MIM-BHD',
			self::SYMBOL => 'tMIMUSD',
		],
		'mimqar' => [
			self::DESCRIPTION => 'MIM-QAR',
			self::PAIR => 'MIM-QAR',
			self::SYMBOL => 'tMIMUSD',
		],
		'mimusdt' => [
			self::DESCRIPTION => 'MIM-USDT',
			self::PAIR => 'MIM-USDT',
			self::SYMBOL => 'tMIMUST',
		],
		// --------------------------------------------- MLN pairs
		'mlnaed' => [
			self::DESCRIPTION => 'MLN-AED',
			self::PAIR => 'MLN-AED',
			self::SYMBOL => 'tMLNUSD',
		],
		'mlnsar' => [
			self::DESCRIPTION => 'MLN-SAR',
			self::PAIR => 'MLN-SAR',
			self::SYMBOL => 'tMLNUSD',
		],
		'mlnusd' => [
			self::DESCRIPTION => 'MLN-USD',
			self::PAIR => 'MLN-USD',
			self::SYMBOL => 'tMLNUSD',
		],
		'mlnkwd' => [
			self::DESCRIPTION => 'MLN-KWD',
			self::PAIR => 'MLN-KWD',
			self::SYMBOL => 'tMLNUSD',
		],
		'mlnomr' => [
			self::DESCRIPTION => 'MLN-OMR',
			self::PAIR => 'MLN-OMR',
			self::SYMBOL => 'tMLNUSD',
		],
		'mlnbhd' => [
			self::DESCRIPTION => 'MLN-BHD',
			self::PAIR => 'MLN-BHD',
			self::SYMBOL => 'tMLNUSD',
		],
		'mlnqar' => [
			self::DESCRIPTION => 'MLN-QAR',
			self::PAIR => 'MLN-QAR',
			self::SYMBOL => 'tMLNUSD',
		],
		// --------------------------------------------- NEXO pairs
		'nexoaed' => [
			self::DESCRIPTION => 'NEXO-AED',
			self::PAIR => 'NEXO-AED',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexosar' => [
			self::DESCRIPTION => 'NEXO-SAR',
			self::PAIR => 'NEXO-SAR',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexousd' => [
			self::DESCRIPTION => 'NEXO-USD',
			self::PAIR => 'NEXO-USD',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexokwd' => [
			self::DESCRIPTION => 'NEXO-KWD',
			self::PAIR => 'NEXO-KWD',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexoomr' => [
			self::DESCRIPTION => 'NEXO-OMR',
			self::PAIR => 'NEXO-OMR',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexobhd' => [
			self::DESCRIPTION => 'NEXO-BHD',
			self::PAIR => 'NEXO-BHD',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexoqar' => [
			self::DESCRIPTION => 'NEXO-QAR',
			self::PAIR => 'NEXO-QAR',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexousdt' => [
			self::DESCRIPTION => 'NEXO-USDT',
			self::PAIR => 'NEXO-USDT',
			self::SYMBOL => 'tNEXO:UST',
		],
		'nexobtc' => [
			self::DESCRIPTION => 'NEXO-BTC',
			self::PAIR => 'NEXO-BTC',
			self::SYMBOL => 'tNEXO:BTC',
		],
		// --------------------------------------------- OGN pairs
		'ognaed' => [
			self::DESCRIPTION => 'OGN-AED',
			self::PAIR => 'OGN-AED',
			self::SYMBOL => 'tOGNUSD',
		],
		'ognsar' => [
			self::DESCRIPTION => 'OGN-SAR',
			self::PAIR => 'OGN-SAR',
			self::SYMBOL => 'tOGNUSD',
		],
		'ognusd' => [
			self::DESCRIPTION => 'OGN-USD',
			self::PAIR => 'OGN-USD',
			self::SYMBOL => 'tOGNUSD',
		],
		'ognkwd' => [
			self::DESCRIPTION => 'OGN-KWD',
			self::PAIR => 'OGN-KWD',
			self::SYMBOL => 'tOGNUSD',
		],
		'ognomr' => [
			self::DESCRIPTION => 'OGN-OMR',
			self::PAIR => 'OGN-OMR',
			self::SYMBOL => 'tOGNUSD',
		],
		'ognbhd' => [
			self::DESCRIPTION => 'OGN-BHD',
			self::PAIR => 'OGN-BHD',
			self::SYMBOL => 'tOGNUSD',
		],
		'ognqar' => [
			self::DESCRIPTION => 'OGN-QAR',
			self::PAIR => 'OGN-QAR',
			self::SYMBOL => 'tOGNUSD',
		],
		'ognusdt' => [
			self::DESCRIPTION => 'OGN-USDT',
			self::PAIR => 'OGN-USDT',
			self::SYMBOL => 'tOGNUST',
		],
		// --------------------------------------------- PAX pairs
		'paxaed' => [
			self::DESCRIPTION => 'PAX-AED',
			self::PAIR => 'PAX-AED',
			self::SYMBOL => 'tPAXUSD',
		],
		'paxsar' => [
			self::DESCRIPTION => 'PAX-SAR',
			self::PAIR => 'PAX-SAR',
			self::SYMBOL => 'tPAXUSD',
		],
		'paxusd' => [
			self::DESCRIPTION => 'PAX-USD',
			self::PAIR => 'PAX-USD',
			self::SYMBOL => 'tPAXUSD',
		],
		'paxkwd' => [
			self::DESCRIPTION => 'PAX-KWD',
			self::PAIR => 'PAX-KWD',
			self::SYMBOL => 'tPAXUSD',
		],
		'paxomr' => [
			self::DESCRIPTION => 'PAX-OMR',
			self::PAIR => 'PAX-OMR',
			self::SYMBOL => 'tPAXUSD',
		],
		'paxbhd' => [
			self::DESCRIPTION => 'PAX-BHD',
			self::PAIR => 'PAX-BHD',
			self::SYMBOL => 'tPAXUSD',
		],
		'paxqar' => [
			self::DESCRIPTION => 'PAX-QAR',
			self::PAIR => 'PAX-QAR',
			self::SYMBOL => 'tPAXUSD',
		],
		'paxusdt' => [
			self::DESCRIPTION => 'PAX-USDT',
			self::PAIR => 'PAX-USDT',
			self::SYMBOL => 'tPAXUST',
		],
		// --------------------------------------------- PLU pairs
		'pluaed' => [
			self::DESCRIPTION => 'PLU-AED',
			self::PAIR => 'PLU-AED',
			self::SYMBOL => 'tPLUUSD',
		],
		'plusar' => [
			self::DESCRIPTION => 'PLU-SAR',
			self::PAIR => 'PLU-SAR',
			self::SYMBOL => 'tPLUUSD',
		],
		'pluusd' => [
			self::DESCRIPTION => 'PLU-USD',
			self::PAIR => 'PLU-USD',
			self::SYMBOL => 'tPLUUSD',
		],
		'plukwd' => [
			self::DESCRIPTION => 'PLU-KWD',
			self::PAIR => 'PLU-KWD',
			self::SYMBOL => 'tPLUUSD',
		],
		'pluomr' => [
			self::DESCRIPTION => 'PLU-OMR',
			self::PAIR => 'PLU-OMR',
			self::SYMBOL => 'tPLUUSD',
		],
		'plubhd' => [
			self::DESCRIPTION => 'PLU-BHD',
			self::PAIR => 'PLU-BHD',
			self::SYMBOL => 'tPLUUSD',
		],
		'pluqar' => [
			self::DESCRIPTION => 'PLU-QAR',
			self::PAIR => 'PLU-QAR',
			self::SYMBOL => 'tPLUUSD',
		],
		// --------------------------------------------- PNK pairs
		'pnkaed' => [
			self::DESCRIPTION => 'PNK-AED',
			self::PAIR => 'PNK-AED',
			self::SYMBOL => 'tPNKUSD',
		],
		'pnksar' => [
			self::DESCRIPTION => 'PNK-SAR',
			self::PAIR => 'PNK-SAR',
			self::SYMBOL => 'tPNKUSD',
		],
		'pnkusd' => [
			self::DESCRIPTION => 'PNK-USD',
			self::PAIR => 'PNK-USD',
			self::SYMBOL => 'tPNKUSD',
		],
		'pnkkwd' => [
			self::DESCRIPTION => 'PNK-KWD',
			self::PAIR => 'PNK-KWD',
			self::SYMBOL => 'tPNKUSD',
		],
		'pnkomr' => [
			self::DESCRIPTION => 'PNK-OMR',
			self::PAIR => 'PNK-OMR',
			self::SYMBOL => 'tPNKUSD',
		],
		'pnkbhd' => [
			self::DESCRIPTION => 'PNK-BHD',
			self::PAIR => 'PNK-BHD',
			self::SYMBOL => 'tPNKUSD',
		],
		'pnkqar' => [
			self::DESCRIPTION => 'PNK-QAR',
			self::PAIR => 'PNK-QAR',
			self::SYMBOL => 'tPNKUSD',
		],
		// --------------------------------------------- REQ pairs
		'reqaed' => [
			self::DESCRIPTION => 'REQ-AED',
			self::PAIR => 'REQ-AED',
			self::SYMBOL => 'tREQUSD',
		],
		'reqsar' => [
			self::DESCRIPTION => 'REQ-SAR',
			self::PAIR => 'REQ-SAR',
			self::SYMBOL => 'tREQUSD',
		],
		'requsd' => [
			self::DESCRIPTION => 'REQ-USD',
			self::PAIR => 'REQ-USD',
			self::SYMBOL => 'tREQUSD',
		],
		'reqkwd' => [
			self::DESCRIPTION => 'REQ-KWD',
			self::PAIR => 'REQ-KWD',
			self::SYMBOL => 'tREQUSD',
		],
		'reqomr' => [
			self::DESCRIPTION => 'REQ-OMR',
			self::PAIR => 'REQ-OMR',
			self::SYMBOL => 'tREQUSD',
		],
		'reqbhd' => [
			self::DESCRIPTION => 'REQ-BHD',
			self::PAIR => 'REQ-BHD',
			self::SYMBOL => 'tREQUSD',
		],
		'reqqar' => [
			self::DESCRIPTION => 'REQ-QAR',
			self::PAIR => 'REQ-QAR',
			self::SYMBOL => 'tREQUSD',
		],
		// --------------------------------------------- SIDUS pairs
		'sidusaed' => [
			self::DESCRIPTION => 'SIDUS-AED',
			self::PAIR => 'SIDUS-AED',
			self::SYMBOL => 'tSIDUS:USD',
		],
		'sidussar' => [
			self::DESCRIPTION => 'SIDUS-SAR',
			self::PAIR => 'SIDUS-SAR',
			self::SYMBOL => 'tSIDUS:USD',
		],
		'sidususd' => [
			self::DESCRIPTION => 'SIDUS-USD',
			self::PAIR => 'SIDUS-USD',
			self::SYMBOL => 'tSIDUS:USD',
		],
		'siduskwd' => [
			self::DESCRIPTION => 'SIDUS-KWD',
			self::PAIR => 'SIDUS-KWD',
			self::SYMBOL => 'tSIDUS:USD',
		],
		'sidusomr' => [
			self::DESCRIPTION => 'SIDUS-OMR',
			self::PAIR => 'SIDUS-OMR',
			self::SYMBOL => 'tSIDUS:USD',
		],
		'sidusbhd' => [
			self::DESCRIPTION => 'SIDUS-BHD',
			self::PAIR => 'SIDUS-BHD',
			self::SYMBOL => 'tSIDUS:USD',
		],
		'sidusqar' => [
			self::DESCRIPTION => 'SIDUS-QAR',
			self::PAIR => 'SIDUS-QAR',
			self::SYMBOL => 'tSIDUS:USD',
		],
		// --------------------------------------------- SPELL pairs
		'spellaed' => [
			self::DESCRIPTION => 'SPELL-AED',
			self::PAIR => 'SPELL-AED',
			self::SYMBOL => 'tSPELL:USD',
		],
		'spellsar' => [
			self::DESCRIPTION => 'SPELL-SAR',
			self::PAIR => 'SPELL-SAR',
			self::SYMBOL => 'tSPELL:USD',
		],
		'spellusd' => [
			self::DESCRIPTION => 'SPELL-USD',
			self::PAIR => 'SPELL-USD',
			self::SYMBOL => 'tSPELL:USD',
		],
		'spellkwd' => [
			self::DESCRIPTION => 'SPELL-KWD',
			self::PAIR => 'SPELL-KWD',
			self::SYMBOL => 'tSPELL:USD',
		],
		'spellomr' => [
			self::DESCRIPTION => 'SPELL-OMR',
			self::PAIR => 'SPELL-OMR',
			self::SYMBOL => 'tSPELL:USD',
		],
		'spellbhd' => [
			self::DESCRIPTION => 'SPELL-BHD',
			self::PAIR => 'SPELL-BHD',
			self::SYMBOL => 'tSPELL:USD',
		],
		'spellqar' => [
			self::DESCRIPTION => 'SPELL-QAR',
			self::PAIR => 'SPELL-QAR',
			self::SYMBOL => 'tSPELL:USD',
		],
		'spellusdt' => [
			self::DESCRIPTION => 'SPELL-USDT',
			self::PAIR => 'SPELL-USDT',
			self::SYMBOL => 'tSPELL:UST',
		],
		// --------------------------------------------- STG pairs
		'stgaed' => [
			self::DESCRIPTION => 'STG-AED',
			self::PAIR => 'STG-AED',
			self::SYMBOL => 'tSTGUSD',
		],
		'stgsar' => [
			self::DESCRIPTION => 'STG-SAR',
			self::PAIR => 'STG-SAR',
			self::SYMBOL => 'tSTGUSD',
		],
		'stgusd' => [
			self::DESCRIPTION => 'STG-USD',
			self::PAIR => 'STG-USD',
			self::SYMBOL => 'tSTGUSD',
		],
		'stgkwd' => [
			self::DESCRIPTION => 'STG-KWD',
			self::PAIR => 'STG-KWD',
			self::SYMBOL => 'tSTGUSD',
		],
		'stgomr' => [
			self::DESCRIPTION => 'STG-OMR',
			self::PAIR => 'STG-OMR',
			self::SYMBOL => 'tSTGUSD',
		],
		'stgbhd' => [
			self::DESCRIPTION => 'STG-BHD',
			self::PAIR => 'STG-BHD',
			self::SYMBOL => 'tSTGUSD',
		],
		'stgqar' => [
			self::DESCRIPTION => 'STG-QAR',
			self::PAIR => 'STG-QAR',
			self::SYMBOL => 'tSTGUSD',
		],
		'stgusdt' => [
			self::DESCRIPTION => 'STG-USDT',
			self::PAIR => 'STG-USDT',
			self::SYMBOL => 'tSTGUST',
		],
		// --------------------------------------------- SUKU pairs
		'sukuaed' => [
			self::DESCRIPTION => 'SUKU-AED',
			self::PAIR => 'SUKU-AED',
			self::SYMBOL => 'tSUKU:USD',
		],
		'sukusar' => [
			self::DESCRIPTION => 'SUKU-SAR',
			self::PAIR => 'SUKU-SAR',
			self::SYMBOL => 'tSUKU:USD',
		],
		'sukuusd' => [
			self::DESCRIPTION => 'SUKU-USD',
			self::PAIR => 'SUKU-USD',
			self::SYMBOL => 'tSUKU:USD',
		],
		'sukukwd' => [
			self::DESCRIPTION => 'SUKU-KWD',
			self::PAIR => 'SUKU-KWD',
			self::SYMBOL => 'tSUKU:USD',
		],
		'sukuomr' => [
			self::DESCRIPTION => 'SUKU-OMR',
			self::PAIR => 'SUKU-OMR',
			self::SYMBOL => 'tSUKU:USD',
		],
		'sukubhd' => [
			self::DESCRIPTION => 'SUKU-BHD',
			self::PAIR => 'SUKU-BHD',
			self::SYMBOL => 'tSUKU:USD',
		],
		'sukuqar' => [
			self::DESCRIPTION => 'SUKU-QAR',
			self::PAIR => 'SUKU-QAR',
			self::SYMBOL => 'tSUKU:USD',
		],
		'sukuusdt' => [
			self::DESCRIPTION => 'SUKU-USDT',
			self::PAIR => 'SUKU-USDT',
			self::SYMBOL => 'tSUKU:UST',
		],
		// --------------------------------------------- UOS pairs
		'uosaed' => [
			self::DESCRIPTION => 'UOS-AED',
			self::PAIR => 'UOS-AED',
			self::SYMBOL => 'tUOSUSD',
		],
		'uossar' => [
			self::DESCRIPTION => 'UOS-SAR',
			self::PAIR => 'UOS-SAR',
			self::SYMBOL => 'tUOSUSD',
		],
		'uosusd' => [
			self::DESCRIPTION => 'UOS-USD',
			self::PAIR => 'UOS-USD',
			self::SYMBOL => 'tUOSUSD',
		],
		'uoskwd' => [
			self::DESCRIPTION => 'UOS-KWD',
			self::PAIR => 'UOS-KWD',
			self::SYMBOL => 'tUOSUSD',
		],
		'uosomr' => [
			self::DESCRIPTION => 'UOS-OMR',
			self::PAIR => 'UOS-OMR',
			self::SYMBOL => 'tUOSUSD',
		],
		'uosbhd' => [
			self::DESCRIPTION => 'UOS-BHD',
			self::PAIR => 'UOS-BHD',
			self::SYMBOL => 'tUOSUSD',
		],
		'uosqar' => [
			self::DESCRIPTION => 'UOS-QAR',
			self::PAIR => 'UOS-QAR',
			self::SYMBOL => 'tUOSUSD',
		],
		'uosbtc' => [
			self::DESCRIPTION => 'UOS-BTC',
			self::PAIR => 'UOS-BTC',
			self::SYMBOL => 'tUOSBTC',
		],
		// --------------------------------------------- WOO pairs
		'wooaed' => [
			self::DESCRIPTION => 'WOO-AED',
			self::PAIR => 'WOO-AED',
			self::SYMBOL => 'tWOOUSD',
		],
		'woosar' => [
			self::DESCRIPTION => 'WOO-SAR',
			self::PAIR => 'WOO-SAR',
			self::SYMBOL => 'tWOOUSD',
		],
		'woousd' => [
			self::DESCRIPTION => 'WOO-USD',
			self::PAIR => 'WOO-USD',
			self::SYMBOL => 'tWOOUSD',
		],
		'wookwd' => [
			self::DESCRIPTION => 'WOO-KWD',
			self::PAIR => 'WOO-KWD',
			self::SYMBOL => 'tWOOUSD',
		],
		'wooomr' => [
			self::DESCRIPTION => 'WOO-OMR',
			self::PAIR => 'WOO-OMR',
			self::SYMBOL => 'tWOOUSD',
		],
		'woobhd' => [
			self::DESCRIPTION => 'WOO-BHD',
			self::PAIR => 'WOO-BHD',
			self::SYMBOL => 'tWOOUSD',
		],
		'wooqar' => [
			self::DESCRIPTION => 'WOO-QAR',
			self::PAIR => 'WOO-QAR',
			self::SYMBOL => 'tWOOUSD',
		],
		'woousdt' => [
			self::DESCRIPTION => 'WOO-USDT',
			self::PAIR => 'WOO-USDT',
			self::SYMBOL => 'tWOOUST',
		],
		// --------------------------------------------- XTP pairs
		'xtpaed' => [
			self::DESCRIPTION => 'XTP-AED',
			self::PAIR => 'XTP-AED',
			self::SYMBOL => 'tXTPUSD',
		],
		'xtpsar' => [
			self::DESCRIPTION => 'XTP-SAR',
			self::PAIR => 'XTP-SAR',
			self::SYMBOL => 'tXTPUSD',
		],
		'xtpusd' => [
			self::DESCRIPTION => 'XTP-USD',
			self::PAIR => 'XTP-USD',
			self::SYMBOL => 'tXTPUSD',
		],
		'xtpkwd' => [
			self::DESCRIPTION => 'XTP-KWD',
			self::PAIR => 'XTP-KWD',
			self::SYMBOL => 'tXTPUSD',
		],
		'xtpomr' => [
			self::DESCRIPTION => 'XTP-OMR',
			self::PAIR => 'XTP-OMR',
			self::SYMBOL => 'tXTPUSD',
		],
		'xtpbhd' => [
			self::DESCRIPTION => 'XTP-BHD',
			self::PAIR => 'XTP-BHD',
			self::SYMBOL => 'tXTPUSD',
		],
		'xtpqar' => [
			self::DESCRIPTION => 'XTP-QAR',
			self::PAIR => 'XTP-QAR',
			self::SYMBOL => 'tXTPUSD',
		],
		'xtpusdt' => [
			self::DESCRIPTION => 'XTP-USDT',
			self::PAIR => 'XTP-USDT',
			self::SYMBOL => 'tXTPUST',
		],
		// --------------------------------------------- POL pairs
		'polaed' => [
			self::DESCRIPTION => 'POL-AED',
			self::PAIR => 'POL-AED',
			self::SYMBOL => 'tPOLUSD',
		],
		'polsar' => [
			self::DESCRIPTION => 'POL-SAR',
			self::PAIR => 'POL-SAR',
			self::SYMBOL => 'tPOLUSD',
		],
		'polusd' => [
			self::DESCRIPTION => 'POL-USD',
			self::PAIR => 'POL-USD',
			self::SYMBOL => 'tPOLUSD',
		],
		'polkwd' => [
			self::DESCRIPTION => 'POL-KWD',
			self::PAIR => 'POL-KWD',
			self::SYMBOL => 'tPOLUSD',
		],
		'polomr' => [
			self::DESCRIPTION => 'POL-OMR',
			self::PAIR => 'POL-OMR',
			self::SYMBOL => 'tPOLUSD',
		],
		'polbhd' => [
			self::DESCRIPTION => 'POL-BHD',
			self::PAIR => 'POL-BHD',
			self::SYMBOL => 'tPOLUSD',
		],
		'polqar' => [
			self::DESCRIPTION => 'POL-QAR',
			self::PAIR => 'POL-QAR',
			self::SYMBOL => 'tPOLUSD',
		],
		'polusdt' => [
			self::DESCRIPTION => 'POL-USDT',
			self::PAIR => 'POL-USDT',
			self::SYMBOL => 'tPOLUST',
		],
		// --------------------------------------------- PEPE pairs
		'pepeaed' => [
			self::DESCRIPTION => 'PEPE-AED',
			self::PAIR => 'PEPE-AED',
			self::SYMBOL => 'tPEPE:USD',
		],
		'pepesar' => [
			self::DESCRIPTION => 'PEPE-SAR',
			self::PAIR => 'PEPE-SAR',
			self::SYMBOL => 'tPEPE:USD',
		],
		'pepeusd' => [
			self::DESCRIPTION => 'PEPE-USD',
			self::PAIR => 'PEPE-USD',
			self::SYMBOL => 'tPEPE:USD',
		],
		'pepekwd' => [
			self::DESCRIPTION => 'PEPE-KWD',
			self::PAIR => 'PEPE-KWD',
			self::SYMBOL => 'tPEPE:USD',
		],
		'pepeomr' => [
			self::DESCRIPTION => 'PEPE-OMR',
			self::PAIR => 'PEPE-OMR',
			self::SYMBOL => 'tPEPE:USD',
		],
		'pepebhd' => [
			self::DESCRIPTION => 'PEPE-BHD',
			self::PAIR => 'PEPE-BHD',
			self::SYMBOL => 'tPEPE:USD',
		],
		'pepeqar' => [
			self::DESCRIPTION => 'PEPE-QAR',
			self::PAIR => 'PEPE-QAR',
			self::SYMBOL => 'tPEPE:USD',
		],
		'pepeusdt' => [
			self::DESCRIPTION => 'PEPE-USDT',
			self::PAIR => 'PEPE-USDT',
			self::SYMBOL => 'tPEPE:UST',
		],
		// --------------------------------------------- BONK pairs
		'bonkaed' => [
			self::DESCRIPTION => 'BONK-AED',
			self::PAIR => 'BONK-AED',
			self::SYMBOL => 'tBONK:USD',
		],
		'bonksar' => [
			self::DESCRIPTION => 'BONK-SAR',
			self::PAIR => 'BONK-SAR',
			self::SYMBOL => 'tBONK:USD',
		],
		'bonkusd' => [
			self::DESCRIPTION => 'BONK-USD',
			self::PAIR => 'BONK-USD',
			self::SYMBOL => 'tBONK:USD',
		],
		'bonkkwd' => [
			self::DESCRIPTION => 'BONK-KWD',
			self::PAIR => 'BONK-KWD',
			self::SYMBOL => 'tBONK:USD',
		],
		'bonkomr' => [
			self::DESCRIPTION => 'BONK-OMR',
			self::PAIR => 'BONK-OMR',
			self::SYMBOL => 'tBONK:USD',
		],
		'bonkbhd' => [
			self::DESCRIPTION => 'BONK-BHD',
			self::PAIR => 'BONK-BHD',
			self::SYMBOL => 'tBONK:USD',
		],
		'bonkqar' => [
			self::DESCRIPTION => 'BONK-QAR',
			self::PAIR => 'BONK-QAR',
			self::SYMBOL => 'tBONK:USD',
		],
		'bonkusdt' => [
			self::DESCRIPTION => 'BONK-USDT',
			self::PAIR => 'BONK-USDT',
			self::SYMBOL => 'tBONK:UST',
		],
		// --------------------------------------------- TOMI pairs
		'tomiaed' => [
			self::DESCRIPTION => 'TOMI-AED',
			self::PAIR => 'TOMI-AED',
			self::SYMBOL => 'tTOMI:USD',
		],
		'tomisar' => [
			self::DESCRIPTION => 'TOMI-SAR',
			self::PAIR => 'TOMI-SAR',
			self::SYMBOL => 'tTOMI:USD',
		],
		'tomiusd' => [
			self::DESCRIPTION => 'TOMI-USD',
			self::PAIR => 'TOMI-USD',
			self::SYMBOL => 'tTOMI:USD',
		],
		'tomikwd' => [
			self::DESCRIPTION => 'TOMI-KWD',
			self::PAIR => 'TOMI-KWD',
			self::SYMBOL => 'tTOMI:USD',
		],
		'tomiomr' => [
			self::DESCRIPTION => 'TOMI-OMR',
			self::PAIR => 'TOMI-OMR',
			self::SYMBOL => 'tTOMI:USD',
		],
		'tomibhd' => [
			self::DESCRIPTION => 'TOMI-BHD',
			self::PAIR => 'TOMI-BHD',
			self::SYMBOL => 'tTOMI:USD',
		],
		'tomiqar' => [
			self::DESCRIPTION => 'TOMI-QAR',
			self::PAIR => 'TOMI-QAR',
			self::SYMBOL => 'tTOMI:USD',
		],
		'tomiusdt' => [
			self::DESCRIPTION => 'TOMI-USDT',
			self::PAIR => 'TOMI-USDT',
			self::SYMBOL => 'tTOMI:UST',
		],
		// --------------------------------------------- TURBO pairs
		'turboaed' => [
			self::DESCRIPTION => 'TURBO-AED',
			self::PAIR => 'TURBO-AED',
			self::SYMBOL => 'tTURBO:USD',
		],
		'turbosar' => [
			self::DESCRIPTION => 'TURBO-SAR',
			self::PAIR => 'TURBO-SAR',
			self::SYMBOL => 'tTURBO:USD',
		],
		'turbousd' => [
			self::DESCRIPTION => 'TURBO-USD',
			self::PAIR => 'TURBO-USD',
			self::SYMBOL => 'tTURBO:USD',
		],
		'turbokwd' => [
			self::DESCRIPTION => 'TURBO-KWD',
			self::PAIR => 'TURBO-KWD',
			self::SYMBOL => 'tTURBO:USD',
		],
		'turboomr' => [
			self::DESCRIPTION => 'TURBO-OMR',
			self::PAIR => 'TURBO-OMR',
			self::SYMBOL => 'tTURBO:USD',
		],
		'turbobhd' => [
			self::DESCRIPTION => 'TURBO-BHD',
			self::PAIR => 'TURBO-BHD',
			self::SYMBOL => 'tTURBO:USD',
		],
		'turboqar' => [
			self::DESCRIPTION => 'TURBO-QAR',
			self::PAIR => 'TURBO-QAR',
			self::SYMBOL => 'tTURBO:USD',
		],
		'turbousdt' => [
			self::DESCRIPTION => 'TURBO-USDT',
			self::PAIR => 'TURBO-USDT',
			self::SYMBOL => 'tTURBO:UST',
		],
		// --------------------------------------------- WBT pairs
		'wbtaed' => [
			self::DESCRIPTION => 'WBT-AED',
			self::PAIR => 'WBT-AED',
			self::SYMBOL => 'tWHBT:USD',
		],
		'wbtsar' => [
			self::DESCRIPTION => 'WBT-SAR',
			self::PAIR => 'WBT-SAR',
			self::SYMBOL => 'tWHBT:USD',
		],
		'wbtusd' => [
			self::DESCRIPTION => 'WBT-USD',
			self::PAIR => 'WBT-USD',
			self::SYMBOL => 'tWHBT:USD',
		],
		'wbtkwd' => [
			self::DESCRIPTION => 'WBT-KWD',
			self::PAIR => 'WBT-KWD',
			self::SYMBOL => 'tWHBT:USD',
		],
		'wbtomr' => [
			self::DESCRIPTION => 'WBT-OMR',
			self::PAIR => 'WBT-OMR',
			self::SYMBOL => 'tWHBT:USD',
		],
		'wbtbhd' => [
			self::DESCRIPTION => 'WBT-BHD',
			self::PAIR => 'WBT-BHD',
			self::SYMBOL => 'tWHBT:USD',
		],
		'wbtqar' => [
			self::DESCRIPTION => 'WBT-QAR',
			self::PAIR => 'WBT-QAR',
			self::SYMBOL => 'tWHBT:USD',
		],
		'wbtusdt' => [
			self::DESCRIPTION => 'WBT-USDT',
			self::PAIR => 'WBT-USDT',
			self::SYMBOL => 'tWHBT:UST',
		],
		// --------------------------------------------- ENA pairs
		'enaaed' => [
			self::DESCRIPTION => 'ENA-AED',
			self::PAIR => 'ENA-AED',
			self::SYMBOL => 'tENAUSD',
		],
		'enasar' => [
			self::DESCRIPTION => 'ENA-SAR',
			self::PAIR => 'ENA-SAR',
			self::SYMBOL => 'tENAUSD',
		],
		'enausd' => [
			self::DESCRIPTION => 'ENA-USD',
			self::PAIR => 'ENA-USD',
			self::SYMBOL => 'tENAUSD',
		],
		'enakwd' => [
			self::DESCRIPTION => 'ENA-KWD',
			self::PAIR => 'ENA-KWD',
			self::SYMBOL => 'tENAUSD',
		],
		'enaomr' => [
			self::DESCRIPTION => 'ENA-OMR',
			self::PAIR => 'ENA-OMR',
			self::SYMBOL => 'tENAUSD',
		],
		'enabhd' => [
			self::DESCRIPTION => 'ENA-BHD',
			self::PAIR => 'ENA-BHD',
			self::SYMBOL => 'tENAUSD',
		],
		'enaqar' => [
			self::DESCRIPTION => 'ENA-QAR',
			self::PAIR => 'ENA-QAR',
			self::SYMBOL => 'tENAUSD',
		],
		'enausdt' => [
			self::DESCRIPTION => 'ENA-USDT',
			self::PAIR => 'ENA-USDT',
			self::SYMBOL => 'tENAUST',
		],
		// --------------------------------------------- MEW pairs
		'mewaed' => [
			self::DESCRIPTION => 'MEW-AED',
			self::PAIR => 'MEW-AED',
			self::SYMBOL => 'tMEWUSD',
		],
		'mewsar' => [
			self::DESCRIPTION => 'MEW-SAR',
			self::PAIR => 'MEW-SAR',
			self::SYMBOL => 'tMEWUSD',
		],
		'mewusd' => [
			self::DESCRIPTION => 'MEW-USD',
			self::PAIR => 'MEW-USD',
			self::SYMBOL => 'tMEWUSD',
		],
		'mewkwd' => [
			self::DESCRIPTION => 'MEW-KWD',
			self::PAIR => 'MEW-KWD',
			self::SYMBOL => 'tMEWUSD',
		],
		'mewomr' => [
			self::DESCRIPTION => 'MEW-OMR',
			self::PAIR => 'MEW-OMR',
			self::SYMBOL => 'tMEWUSD',
		],
		'mewbhd' => [
			self::DESCRIPTION => 'MEW-BHD',
			self::PAIR => 'MEW-BHD',
			self::SYMBOL => 'tMEWUSD',
		],
		'mewqar' => [
			self::DESCRIPTION => 'MEW-QAR',
			self::PAIR => 'MEW-QAR',
			self::SYMBOL => 'tMEWUSD',
		],
		'mewusdt' => [
			self::DESCRIPTION => 'MEW-USDT',
			self::PAIR => 'MEW-USDT',
			self::SYMBOL => 'tMEWUST',
		],
		// --------------------------------------------- TIA pairs
		'tiaaed' => [
			self::DESCRIPTION => 'TIA-AED',
			self::PAIR => 'TIA-AED',
			self::SYMBOL => 'tTIAUSD',
		],
		'tiasar' => [
			self::DESCRIPTION => 'TIA-SAR',
			self::PAIR => 'TIA-SAR',
			self::SYMBOL => 'tTIAUSD',
		],
		'tiausd' => [
			self::DESCRIPTION => 'TIA-USD',
			self::PAIR => 'TIA-USD',
			self::SYMBOL => 'tTIAUSD',
		],
		'tiakwd' => [
			self::DESCRIPTION => 'TIA-KWD',
			self::PAIR => 'TIA-KWD',
			self::SYMBOL => 'tTIAUSD',
		],
		'tiaomr' => [
			self::DESCRIPTION => 'TIA-OMR',
			self::PAIR => 'TIA-OMR',
			self::SYMBOL => 'tTIAUSD',
		],
		'tiabhd' => [
			self::DESCRIPTION => 'TIA-BHD',
			self::PAIR => 'TIA-BHD',
			self::SYMBOL => 'tTIAUSD',
		],
		'tiaqar' => [
			self::DESCRIPTION => 'TIA-QAR',
			self::PAIR => 'TIA-QAR',
			self::SYMBOL => 'tTIAUSD',
		],
		'tiausdt' => [
			self::DESCRIPTION => 'TIA-USDT',
			self::PAIR => 'TIA-USDT',
			self::SYMBOL => 'tTIAUST',
		],
		// --------------------------------------------- SWEAT pairs
		'sweataed' => [
			self::DESCRIPTION => 'SWEAT-AED',
			self::PAIR => 'SWEAT-AED',
			self::SYMBOL => 'tSWEAT:USD',
		],
		'sweatsar' => [
			self::DESCRIPTION => 'SWEAT-SAR',
			self::PAIR => 'SWEAT-SAR',
			self::SYMBOL => 'tSWEAT:USD',
		],
		'sweatusd' => [
			self::DESCRIPTION => 'SWEAT-USD',
			self::PAIR => 'SWEAT-USD',
			self::SYMBOL => 'tSWEAT:USD',
		],
		'sweatkwd' => [
			self::DESCRIPTION => 'SWEAT-KWD',
			self::PAIR => 'SWEAT-KWD',
			self::SYMBOL => 'tSWEAT:USD',
		],
		'sweatomr' => [
			self::DESCRIPTION => 'SWEAT-OMR',
			self::PAIR => 'SWEAT-OMR',
			self::SYMBOL => 'tSWEAT:USD',
		],
		'sweatbhd' => [
			self::DESCRIPTION => 'SWEAT-BHD',
			self::PAIR => 'SWEAT-BHD',
			self::SYMBOL => 'tSWEAT:USD',
		],
		'sweatqar' => [
			self::DESCRIPTION => 'SWEAT-QAR',
			self::PAIR => 'SWEAT-QAR',
			self::SYMBOL => 'tSWEAT:USD',
		],
		'sweatusdt' => [
			self::DESCRIPTION => 'SWEAT-USDT',
			self::PAIR => 'SWEAT-USDT',
			self::SYMBOL => 'tSWEAT:UST',
		],
		// --------------------------------------------- DOP pairs
		'dopaed' => [
			self::DESCRIPTION => 'DOP-AED',
			self::PAIR => 'DOP-AED',
			self::SYMBOL => 'tDOPUSD',
		],
		'dopsar' => [
			self::DESCRIPTION => 'DOP-SAR',
			self::PAIR => 'DOP-SAR',
			self::SYMBOL => 'tDOPUSD',
		],
		'dopusd' => [
			self::DESCRIPTION => 'DOP-USD',
			self::PAIR => 'DOP-USD',
			self::SYMBOL => 'tDOPUSD',
		],
		'dopkwd' => [
			self::DESCRIPTION => 'DOP-KWD',
			self::PAIR => 'DOP-KWD',
			self::SYMBOL => 'tDOPUSD',
		],
		'dopomr' => [
			self::DESCRIPTION => 'DOP-OMR',
			self::PAIR => 'DOP-OMR',
			self::SYMBOL => 'tDOPUSD',
		],
		'dopbhd' => [
			self::DESCRIPTION => 'DOP-BHD',
			self::PAIR => 'DOP-BHD',
			self::SYMBOL => 'tDOPUSD',
		],
		'dopqar' => [
			self::DESCRIPTION => 'DOP-QAR',
			self::PAIR => 'DOP-QAR',
			self::SYMBOL => 'tDOPUSD',
		],
		'dopusdt' => [
			self::DESCRIPTION => 'DOP-USDT',
			self::PAIR => 'DOP-USDT',
			self::SYMBOL => 'tDOPUST',
		],
		// --------------------------------------------- SPEC pairs
		'specaed' => [
			self::DESCRIPTION => 'SPEC-AED',
			self::PAIR => 'SPEC-AED',
			self::SYMBOL => 'tSPEC:USD',
		],
		'specsar' => [
			self::DESCRIPTION => 'SPEC-SAR',
			self::PAIR => 'SPEC-SAR',
			self::SYMBOL => 'tSPEC:USD',
		],
		'specusd' => [
			self::DESCRIPTION => 'SPEC-USD',
			self::PAIR => 'SPEC-USD',
			self::SYMBOL => 'tSPEC:USD',
		],
		'speckwd' => [
			self::DESCRIPTION => 'SPEC-KWD',
			self::PAIR => 'SPEC-KWD',
			self::SYMBOL => 'tSPEC:USD',
		],
		'specomr' => [
			self::DESCRIPTION => 'SPEC-OMR',
			self::PAIR => 'SPEC-OMR',
			self::SYMBOL => 'tSPEC:USD',
		],
		'specbhd' => [
			self::DESCRIPTION => 'SPEC-BHD',
			self::PAIR => 'SPEC-BHD',
			self::SYMBOL => 'tSPEC:USD',
		],
		'specqar' => [
			self::DESCRIPTION => 'SPEC-QAR',
			self::PAIR => 'SPEC-QAR',
			self::SYMBOL => 'tSPEC:USD',
		],
		'specusdt' => [
			self::DESCRIPTION => 'SPEC-USDT',
			self::PAIR => 'SPEC-USDT',
			self::SYMBOL => 'tSPEC:UST',
		],
		// --------------------------------------------- AIOZ pairs
		'aiozaed' => [
			self::DESCRIPTION => 'AIOZ-AED',
			self::PAIR => 'AIOZ-AED',
			self::SYMBOL => 'tAIOZ:USD',
		],
		'aiozsar' => [
			self::DESCRIPTION => 'AIOZ-SAR',
			self::PAIR => 'AIOZ-SAR',
			self::SYMBOL => 'tAIOZ:USD',
		],
		'aiozusd' => [
			self::DESCRIPTION => 'AIOZ-USD',
			self::PAIR => 'AIOZ-USD',
			self::SYMBOL => 'tAIOZ:USD',
		],
		'aiozkwd' => [
			self::DESCRIPTION => 'AIOZ-KWD',
			self::PAIR => 'AIOZ-KWD',
			self::SYMBOL => 'tAIOZ:USD',
		],
		'aiozomr' => [
			self::DESCRIPTION => 'AIOZ-OMR',
			self::PAIR => 'AIOZ-OMR',
			self::SYMBOL => 'tAIOZ:USD',
		],
		'aiozbhd' => [
			self::DESCRIPTION => 'AIOZ-BHD',
			self::PAIR => 'AIOZ-BHD',
			self::SYMBOL => 'tAIOZ:USD',
		],
		'aiozqar' => [
			self::DESCRIPTION => 'AIOZ-QAR',
			self::PAIR => 'AIOZ-QAR',
			self::SYMBOL => 'tAIOZ:USD',
		],
		// --------------------------------------------- GOMINING pairs
		'gominingaed' => [
			self::DESCRIPTION => 'GOMINING-AED',
			self::PAIR => 'GOMINING-AED',
			self::SYMBOL => 'tGOMINING:USD',
		],
		'gominingsar' => [
			self::DESCRIPTION => 'GOMINING-SAR',
			self::PAIR => 'GOMINING-SAR',
			self::SYMBOL => 'tGOMINING:USD',
		],
		'gominingusd' => [
			self::DESCRIPTION => 'GOMINING-USD',
			self::PAIR => 'GOMINING-USD',
			self::SYMBOL => 'tGOMINING:USD',
		],
		'gominingkwd' => [
			self::DESCRIPTION => 'GOMINING-KWD',
			self::PAIR => 'GOMINING-KWD',
			self::SYMBOL => 'tGOMINING:USD',
		],
		'gominingomr' => [
			self::DESCRIPTION => 'GOMINING-OMR',
			self::PAIR => 'GOMINING-OMR',
			self::SYMBOL => 'tGOMINING:USD',
		],
		'gominingbhd' => [
			self::DESCRIPTION => 'GOMINING-BHD',
			self::PAIR => 'GOMINING-BHD',
			self::SYMBOL => 'tGOMINING:USD',
		],
		'gominingqar' => [
			self::DESCRIPTION => 'GOMINING-QAR',
			self::PAIR => 'GOMINING-QAR',
			self::SYMBOL => 'tGOMINING:USD',
		],
		'gominingusdt' => [
			self::DESCRIPTION => 'GOMINING-USDT',
			self::PAIR => 'GOMINING-USDT',
			self::SYMBOL => 'tGOMINING:UST',
		],
		// --------------------------------------------- VELAR pairs
		'velaraed' => [
			self::DESCRIPTION => 'VELAR-AED',
			self::PAIR => 'VELAR-AED',
			self::SYMBOL => 'tVELAR:USD',
		],
		'velarsar' => [
			self::DESCRIPTION => 'VELAR-SAR',
			self::PAIR => 'VELAR-SAR',
			self::SYMBOL => 'tVELAR:USD',
		],
		'velarusd' => [
			self::DESCRIPTION => 'VELAR-USD',
			self::PAIR => 'VELAR-USD',
			self::SYMBOL => 'tVELAR:USD',
		],
		'velarkwd' => [
			self::DESCRIPTION => 'VELAR-KWD',
			self::PAIR => 'VELAR-KWD',
			self::SYMBOL => 'tVELAR:USD',
		],
		'velaromr' => [
			self::DESCRIPTION => 'VELAR-OMR',
			self::PAIR => 'VELAR-OMR',
			self::SYMBOL => 'tVELAR:USD',
		],
		'velarbhd' => [
			self::DESCRIPTION => 'VELAR-BHD',
			self::PAIR => 'VELAR-BHD',
			self::SYMBOL => 'tVELAR:USD',
		],
		'velarqar' => [
			self::DESCRIPTION => 'VELAR-QAR',
			self::PAIR => 'VELAR-QAR',
			self::SYMBOL => 'tVELAR:USD',
		],
		'velarusdt' => [
			self::DESCRIPTION => 'VELAR-USDT',
			self::PAIR => 'VELAR-USDT',
			self::SYMBOL => 'tVELAR:UST',
		],
		// --------------------------------------------- JUSTICE pairs
		'justiceaed' => [
			self::DESCRIPTION => 'JUSTICE-AED',
			self::PAIR => 'JUSTICE-AED',
			self::SYMBOL => 'tJUSTICE:USD',
		],
		'justicesar' => [
			self::DESCRIPTION => 'JUSTICE-SAR',
			self::PAIR => 'JUSTICE-SAR',
			self::SYMBOL => 'tJUSTICE:USD',
		],
		'justiceusd' => [
			self::DESCRIPTION => 'JUSTICE-USD',
			self::PAIR => 'JUSTICE-USD',
			self::SYMBOL => 'tJUSTICE:USD',
		],
		'justicekwd' => [
			self::DESCRIPTION => 'JUSTICE-KWD',
			self::PAIR => 'JUSTICE-KWD',
			self::SYMBOL => 'tJUSTICE:USD',
		],
		'justiceomr' => [
			self::DESCRIPTION => 'JUSTICE-OMR',
			self::PAIR => 'JUSTICE-OMR',
			self::SYMBOL => 'tJUSTICE:USD',
		],
		'justicebhd' => [
			self::DESCRIPTION => 'JUSTICE-BHD',
			self::PAIR => 'JUSTICE-BHD',
			self::SYMBOL => 'tJUSTICE:USD',
		],
		'justiceqar' => [
			self::DESCRIPTION => 'JUSTICE-QAR',
			self::PAIR => 'JUSTICE-QAR',
			self::SYMBOL => 'tJUSTICE:USD',
		],
		'justiceusdt' => [
			self::DESCRIPTION => 'JUSTICE-USDT',
			self::PAIR => 'JUSTICE-USDT',
			self::SYMBOL => 'tJUSTICE:UST',
		],
		// --------------------------------------------- KAN pairs
		'kanaed' => [
			self::DESCRIPTION => 'KAN-AED',
			self::PAIR => 'KAN-AED',
			self::SYMBOL => 'tKANUSD',
		],
		'kansar' => [
			self::DESCRIPTION => 'KAN-SAR',
			self::PAIR => 'KAN-SAR',
			self::SYMBOL => 'tKANUSD',
		],
		'kanusd' => [
			self::DESCRIPTION => 'KAN-USD',
			self::PAIR => 'KAN-USD',
			self::SYMBOL => 'tKANUSD',
		],
		'kankwd' => [
			self::DESCRIPTION => 'KAN-KWD',
			self::PAIR => 'KAN-KWD',
			self::SYMBOL => 'tKANUSD',
		],
		'kanomr' => [
			self::DESCRIPTION => 'KAN-OMR',
			self::PAIR => 'KAN-OMR',
			self::SYMBOL => 'tKANUSD',
		],
		'kanbhd' => [
			self::DESCRIPTION => 'KAN-BHD',
			self::PAIR => 'KAN-BHD',
			self::SYMBOL => 'tKANUSD',
		],
		'kanqar' => [
			self::DESCRIPTION => 'KAN-QAR',
			self::PAIR => 'KAN-QAR',
			self::SYMBOL => 'tKANUSD',
		],
		'kanusdt' => [
			self::DESCRIPTION => 'KAN-USDT',
			self::PAIR => 'KAN-USDT',
			self::SYMBOL => 'tKANUST',
		],
		// --------------------------------------------- S pairs
		'saed' => [
			self::DESCRIPTION => 'S-AED',
			self::PAIR => 'S-AED',
			self::SYMBOL => 'tSONIC:USD',
		],
		'ssar' => [
			self::DESCRIPTION => 'S-SAR',
			self::PAIR => 'S-SAR',
			self::SYMBOL => 'tSONIC:USD',
		],
		'susd' => [
			self::DESCRIPTION => 'S-USD',
			self::PAIR => 'S-USD',
			self::SYMBOL => 'tSONIC:USD',
		],
		'skwd' => [
			self::DESCRIPTION => 'S-KWD',
			self::PAIR => 'S-KWD',
			self::SYMBOL => 'tSONIC:USD',
		],
		'somr' => [
			self::DESCRIPTION => 'S-OMR',
			self::PAIR => 'S-OMR',
			self::SYMBOL => 'tSONIC:USD',
		],
		'sbhd' => [
			self::DESCRIPTION => 'S-BHD',
			self::PAIR => 'S-BHD',
			self::SYMBOL => 'tSONIC:USD',
		],
		'sqar' => [
			self::DESCRIPTION => 'S-QAR',
			self::PAIR => 'S-QAR',
			self::SYMBOL => 'tSONIC:USD',
		],
		'susdt' => [
			self::DESCRIPTION => 'S-USDT',
			self::PAIR => 'S-USDT',
			self::SYMBOL => 'tSONIC:UST',
		],
		// --------------------------------------------- TOKEN pairs
		'tokenaed' => [
			self::DESCRIPTION => 'TOKEN-AED',
			self::PAIR => 'TOKEN-AED',
			self::SYMBOL => 'tTOKEN:USD',
		],
		'tokensar' => [
			self::DESCRIPTION => 'TOKEN-SAR',
			self::PAIR => 'TOKEN-SAR',
			self::SYMBOL => 'tTOKEN:USD',
		],
		'tokenusd' => [
			self::DESCRIPTION => 'TOKEN-USD',
			self::PAIR => 'TOKEN-USD',
			self::SYMBOL => 'tTOKEN:USD',
		],
		'tokenkwd' => [
			self::DESCRIPTION => 'TOKEN-KWD',
			self::PAIR => 'TOKEN-KWD',
			self::SYMBOL => 'tTOKEN:USD',
		],
		'tokenomr' => [
			self::DESCRIPTION => 'TOKEN-OMR',
			self::PAIR => 'TOKEN-OMR',
			self::SYMBOL => 'tTOKEN:USD',
		],
		'tokenbhd' => [
			self::DESCRIPTION => 'TOKEN-BHD',
			self::PAIR => 'TOKEN-BHD',
			self::SYMBOL => 'tTOKEN:USD',
		],
		'tokenqar' => [
			self::DESCRIPTION => 'TOKEN-QAR',
			self::PAIR => 'TOKEN-QAR',
			self::SYMBOL => 'tTOKEN:USD',
		],
		'tokenusdt' => [
			self::DESCRIPTION => 'TOKEN-USDT',
			self::PAIR => 'TOKEN-USDT',
			self::SYMBOL => 'tTOKEN:UST',
		],
		// --------------------------------------------- EIGEN pairs
		'eigenaed' => [
			self::DESCRIPTION => 'EIGEN-AED',
			self::PAIR => 'EIGEN-AED',
			self::SYMBOL => 'tEIGEN:USD',
		],
		'eigensar' => [
			self::DESCRIPTION => 'EIGEN-SAR',
			self::PAIR => 'EIGEN-SAR',
			self::SYMBOL => 'tEIGEN:USD',
		],
		'eigenusd' => [
			self::DESCRIPTION => 'EIGEN-USD',
			self::PAIR => 'EIGEN-USD',
			self::SYMBOL => 'tEIGEN:USD',
		],
		'eigenkwd' => [
			self::DESCRIPTION => 'EIGEN-KWD',
			self::PAIR => 'EIGEN-KWD',
			self::SYMBOL => 'tEIGEN:USD',
		],
		'eigenomr' => [
			self::DESCRIPTION => 'EIGEN-OMR',
			self::PAIR => 'EIGEN-OMR',
			self::SYMBOL => 'tEIGEN:USD',
		],
		'eigenbhd' => [
			self::DESCRIPTION => 'EIGEN-BHD',
			self::PAIR => 'EIGEN-BHD',
			self::SYMBOL => 'tEIGEN:USD',
		],
		'eigenqar' => [
			self::DESCRIPTION => 'EIGEN-QAR',
			self::PAIR => 'EIGEN-QAR',
			self::SYMBOL => 'tEIGEN:USD',
		],
		'eigenusdt' => [
			self::DESCRIPTION => 'EIGEN-USDT',
			self::PAIR => 'EIGEN-USDT',
			self::SYMBOL => 'tEIGEN:UST',
		],
		// --------------------------------------------- JASMY pairs
		'jasmyaed' => [
			self::DESCRIPTION => 'JASMY-AED',
			self::PAIR => 'JASMY-AED',
			self::SYMBOL => 'tJASMY:USD',
		],
		'jasmysar' => [
			self::DESCRIPTION => 'JASMY-SAR',
			self::PAIR => 'JASMY-SAR',
			self::SYMBOL => 'tJASMY:USD',
		],
		'jasmyusd' => [
			self::DESCRIPTION => 'JASMY-USD',
			self::PAIR => 'JASMY-USD',
			self::SYMBOL => 'tJASMY:USD',
		],
		'jasmykwd' => [
			self::DESCRIPTION => 'JASMY-KWD',
			self::PAIR => 'JASMY-KWD',
			self::SYMBOL => 'tJASMY:USD',
		],
		'jasmyomr' => [
			self::DESCRIPTION => 'JASMY-OMR',
			self::PAIR => 'JASMY-OMR',
			self::SYMBOL => 'tJASMY:USD',
		],
		'jasmybhd' => [
			self::DESCRIPTION => 'JASMY-BHD',
			self::PAIR => 'JASMY-BHD',
			self::SYMBOL => 'tJASMY:USD',
		],
		'jasmyqar' => [
			self::DESCRIPTION => 'JASMY-QAR',
			self::PAIR => 'JASMY-QAR',
			self::SYMBOL => 'tJASMY:USD',
		],
		'jasmyusdt' => [
			self::DESCRIPTION => 'JASMY-USDT',
			self::PAIR => 'JASMY-USDT',
			self::SYMBOL => 'tJASMY:UST',
		],
		// --------------------------------------------- STRK pairs
		'strkaed' => [
			self::DESCRIPTION => 'STRK-AED',
			self::PAIR => 'STRK-AED',
			self::SYMBOL => 'tSTRK:USD',
		],
		'strksar' => [
			self::DESCRIPTION => 'STRK-SAR',
			self::PAIR => 'STRK-SAR',
			self::SYMBOL => 'tSTRK:USD',
		],
		'strkusd' => [
			self::DESCRIPTION => 'STRK-USD',
			self::PAIR => 'STRK-USD',
			self::SYMBOL => 'tSTRK:USD',
		],
		'strkkwd' => [
			self::DESCRIPTION => 'STRK-KWD',
			self::PAIR => 'STRK-KWD',
			self::SYMBOL => 'tSTRK:USD',
		],
		'strkomr' => [
			self::DESCRIPTION => 'STRK-OMR',
			self::PAIR => 'STRK-OMR',
			self::SYMBOL => 'tSTRK:USD',
		],
		'strkbhd' => [
			self::DESCRIPTION => 'STRK-BHD',
			self::PAIR => 'STRK-BHD',
			self::SYMBOL => 'tSTRK:USD',
		],
		'strkqar' => [
			self::DESCRIPTION => 'STRK-QAR',
			self::PAIR => 'STRK-QAR',
			self::SYMBOL => 'tSTRK:USD',
		],
		'strkusdt' => [
			self::DESCRIPTION => 'STRK-USDT',
			self::PAIR => 'STRK-USDT',
			self::SYMBOL => 'tSTRK:UST',
		],
		// --------------------------------------------- ATH pairs
		'athaed' => [
			self::DESCRIPTION => 'ATH-AED',
			self::PAIR => 'ATH-AED',
			self::SYMBOL => 'tATHUSD',
		],
		'athsar' => [
			self::DESCRIPTION => 'ATH-SAR',
			self::PAIR => 'ATH-SAR',
			self::SYMBOL => 'tATHUSD',
		],
		'athusd' => [
			self::DESCRIPTION => 'ATH-USD',
			self::PAIR => 'ATH-USD',
			self::SYMBOL => 'tATHUSD',
		],
		'athkwd' => [
			self::DESCRIPTION => 'ATH-KWD',
			self::PAIR => 'ATH-KWD',
			self::SYMBOL => 'tATHUSD',
		],
		'athomr' => [
			self::DESCRIPTION => 'ATH-OMR',
			self::PAIR => 'ATH-OMR',
			self::SYMBOL => 'tATHUSD',
		],
		'athbhd' => [
			self::DESCRIPTION => 'ATH-BHD',
			self::PAIR => 'ATH-BHD',
			self::SYMBOL => 'tATHUSD',
		],
		'athqar' => [
			self::DESCRIPTION => 'ATH-QAR',
			self::PAIR => 'ATH-QAR',
			self::SYMBOL => 'tATHUSD',
		],
		'athusdt' => [
			self::DESCRIPTION => 'ATH-USDT',
			self::PAIR => 'ATH-USDT',
			self::SYMBOL => 'tATHUST',
		],
		// --------------------------------------------- BGB pairs
		'bgbaed' => [
			self::DESCRIPTION => 'BGB-AED',
			self::PAIR => 'BGB-AED',
			self::SYMBOL => 'tBGBUSD',
		],
		'bgbsar' => [
			self::DESCRIPTION => 'BGB-SAR',
			self::PAIR => 'BGB-SAR',
			self::SYMBOL => 'tBGBUSD',
		],
		'bgbusd' => [
			self::DESCRIPTION => 'BGB-USD',
			self::PAIR => 'BGB-USD',
			self::SYMBOL => 'tBGBUSD',
		],
		'bgbkwd' => [
			self::DESCRIPTION => 'BGB-KWD',
			self::PAIR => 'BGB-KWD',
			self::SYMBOL => 'tBGBUSD',
		],
		'bgbomr' => [
			self::DESCRIPTION => 'BGB-OMR',
			self::PAIR => 'BGB-OMR',
			self::SYMBOL => 'tBGBUSD',
		],
		'bgbbhd' => [
			self::DESCRIPTION => 'BGB-BHD',
			self::PAIR => 'BGB-BHD',
			self::SYMBOL => 'tBGBUSD',
		],
		'bgbqar' => [
			self::DESCRIPTION => 'BGB-QAR',
			self::PAIR => 'BGB-QAR',
			self::SYMBOL => 'tBGBUSD',
		],
		'bgbusdt' => [
			self::DESCRIPTION => 'BGB-USDT',
			self::PAIR => 'BGB-USDT',
			self::SYMBOL => 'tBGBUST',
		],
		// --------------------------------------------- XEGLD pairs
		'xegldaed' => [
			self::DESCRIPTION => 'XEGLD-AED',
			self::PAIR => 'XEGLD-AED',
			self::SYMBOL => 'tEGLD:USD',
		],
		'xegldsar' => [
			self::DESCRIPTION => 'XEGLD-SAR',
			self::PAIR => 'XEGLD-SAR',
			self::SYMBOL => 'tEGLD:USD',
		],
		'xegldusd' => [
			self::DESCRIPTION => 'XEGLD-USD',
			self::PAIR => 'XEGLD-USD',
			self::SYMBOL => 'tEGLD:USD',
		],
		'xegldkwd' => [
			self::DESCRIPTION => 'XEGLD-KWD',
			self::PAIR => 'XEGLD-KWD',
			self::SYMBOL => 'tEGLD:USD',
		],
		'xegldomr' => [
			self::DESCRIPTION => 'XEGLD-OMR',
			self::PAIR => 'XEGLD-OMR',
			self::SYMBOL => 'tEGLD:USD',
		],
		'xegldbhd' => [
			self::DESCRIPTION => 'XEGLD-BHD',
			self::PAIR => 'XEGLD-BHD',
			self::SYMBOL => 'tEGLD:USD',
		],
		'xegldqar' => [
			self::DESCRIPTION => 'XEGLD-QAR',
			self::PAIR => 'XEGLD-QAR',
			self::SYMBOL => 'tEGLD:USD',
		],
		'xegldusdt' => [
			self::DESCRIPTION => 'XEGLD-USDT',
			self::PAIR => 'XEGLD-USDT',
			self::SYMBOL => 'tEGLD:UST',
		],
		// --------------------------------------------- KARATE pairs
		'karateaed' => [
			self::DESCRIPTION => 'KARATE-AED',
			self::PAIR => 'KARATE-AED',
			self::SYMBOL => 'tKARATE:USD',
		],
		'karatesar' => [
			self::DESCRIPTION => 'KARATE-SAR',
			self::PAIR => 'KARATE-SAR',
			self::SYMBOL => 'tKARATE:USD',
		],
		'karateusd' => [
			self::DESCRIPTION => 'KARATE-USD',
			self::PAIR => 'KARATE-USD',
			self::SYMBOL => 'tKARATE:USD',
		],
		'karatekwd' => [
			self::DESCRIPTION => 'KARATE-KWD',
			self::PAIR => 'KARATE-KWD',
			self::SYMBOL => 'tKARATE:USD',
		],
		'karateomr' => [
			self::DESCRIPTION => 'KARATE-OMR',
			self::PAIR => 'KARATE-OMR',
			self::SYMBOL => 'tKARATE:USD',
		],
		'karatebhd' => [
			self::DESCRIPTION => 'KARATE-BHD',
			self::PAIR => 'KARATE-BHD',
			self::SYMBOL => 'tKARATE:USD',
		],
		'karateqar' => [
			self::DESCRIPTION => 'KARATE-QAR',
			self::PAIR => 'KARATE-QAR',
			self::SYMBOL => 'tKARATE:USD',
		],
		'karateusdt' => [
			self::DESCRIPTION => 'KARATE-USDT',
			self::PAIR => 'KARATE-USDT',
			self::SYMBOL => 'tKARATE:UST',
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
