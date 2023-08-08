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
