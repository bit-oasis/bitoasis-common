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
		// --------------------------------------------- ETC pairs / Deprecated
		'etcaed' => [
			self::DESCRIPTION => 'ETC',
			self::PAIR => 'ETC-AED',
			self::SYMBOL => 'tETCUSD',
		],
		'etcbtc' => [
			self::DESCRIPTION => 'ETC-BTC',
			self::PAIR => 'ETC-BTC',
			self::SYMBOL => 'tETCBTC',
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
		'xlmeth' => [
			self::DESCRIPTION => 'XLM-ETH',
			self::PAIR => 'XLM-ETH',
			self::SYMBOL => 'tXLMETH',
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
		'zrxbtc' => [
			self::DESCRIPTION => 'ZRX-BTC',
			self::PAIR => 'ZRX-BTC',
			self::SYMBOL => 'tZRXBTC',
		],
		'zrxeth' => [
			self::DESCRIPTION => 'ZRX-ETH',
			self::PAIR => 'ZRX-ETH',
			self::SYMBOL => 'tZRXETH',
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
		'neoeth' => [
			self::DESCRIPTION => 'NEO-ETH',
			self::PAIR => 'NEO-ETH',
			self::SYMBOL => 'tNEOETH',
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
		'daibtc' => [
			self::DESCRIPTION => 'DAI-BTC',
			self::PAIR => 'DAI-BTC',
			self::SYMBOL => 'tDAIBTC',
		],
		'daieth' => [
			self::DESCRIPTION => 'DAI-ETH',
			self::PAIR => 'DAI-ETH',
			self::SYMBOL => 'tDAIETH',
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
		'repbtc' => [
			self::DESCRIPTION => 'REP-BTC',
			self::PAIR => 'REP-BTC',
			self::SYMBOL => 'tREPBTC',
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
		'avaxusdt' => [
			self::DESCRIPTION => 'AVAX-USDT',
			self::PAIR => 'AVAX-USDT',
			self::SYMBOL => 'tAVAX:UST',
		],
		// --------------------------------------------- LUNA pairs
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
		'lunatry' => [
			self::DESCRIPTION => 'LUNA-TRY',
			self::PAIR => 'LUNA-TRY',
			self::SYMBOL => 'tLUNA:USD',
		],
		'lunausd' => [
			self::DESCRIPTION => 'LUNA-USD',
			self::PAIR => 'LUNA-USD',
			self::SYMBOL => 'tLUNA:USD',
		],
		'lunausdt' => [
			self::DESCRIPTION => 'LUNA-USDT',
			self::PAIR => 'LUNA-USDT',
			self::SYMBOL => 'tLUNA:UST',
		],
		'lunabtc' => [
			self::DESCRIPTION => 'LUNA-BTC',
			self::PAIR => 'LUNA-BTC',
			self::SYMBOL => 'tLUNA:BTC',
		],
		'lunaeth' => [
			self::DESCRIPTION => 'LUNA-ETH',
			self::PAIR => 'LUNA-ETH',
			self::SYMBOL => 'tLUNA:ETH',
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
		'filusdt' => [
			self::DESCRIPTION => 'FIL-USDT',
			self::PAIR => 'FIL-USDT',
			self::SYMBOL => 'tFILUST',
		],
		// --------------------------------------------- FTT pairs
		'fttaed' => [
			self::DESCRIPTION => 'FTT-AED',
			self::PAIR => 'FTT-AED',
			self::SYMBOL => 'tFTTUSD',
		],
		'fttsar' => [
			self::DESCRIPTION => 'FTT-SAR',
			self::PAIR => 'FTT-SAR',
			self::SYMBOL => 'tFTTUSD',
		],
		'ftttry' => [
			self::DESCRIPTION => 'FTT-TRY',
			self::PAIR => 'FTT-TRY',
			self::SYMBOL => 'tFTTUSD',
		],
		'fttusd' => [
			self::DESCRIPTION => 'FTT-USD',
			self::PAIR => 'FTT-USD',
			self::SYMBOL => 'tFTTUSD',
		],
		'fttusdt' => [
			self::DESCRIPTION => 'FTT-USDT',
			self::PAIR => 'FTT-USDT',
			self::SYMBOL => 'tFTTUST',
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
		'iotabtc' => [
			self::DESCRIPTION => 'IOTA-BTC',
			self::PAIR => 'IOTA-BTC',
			self::SYMBOL => 'tIOTBTC',
		],
		'iotaeth' => [
			self::DESCRIPTION => 'IOTA-ETH',
			self::PAIR => 'IOTA-ETH',
			self::SYMBOL => 'tIOTETH',
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
		'nexotry' => [
			self::DESCRIPTION => 'NEXO-TRY',
			self::PAIR => 'NEXO-TRY',
			self::SYMBOL => 'tNEXO:USD',
		],
		'nexousd' => [
			self::DESCRIPTION => 'NEXO-USD',
			self::PAIR => 'NEXO-USD',
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
		'tusdtry' => [
			self::DESCRIPTION => 'TUSD-TRY',
			self::PAIR => 'TUSD-TRY',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdusd' => [
			self::DESCRIPTION => 'TUSD-USD',
			self::PAIR => 'TUSD-USD',
			self::SYMBOL => 'tTSDUSD',
		],
		'tusdusdt' => [
			self::DESCRIPTION => 'TUSD-USDT',
			self::PAIR => 'TUSD-USDT',
			self::SYMBOL => 'tTSDUST',
		],
		// --------------------------------------------- UST pairs
		'ustaed' => [
			self::DESCRIPTION => 'UST-AED',
			self::PAIR => 'UST-AED',
			self::SYMBOL => 'tTERRAUST:USD',
		],
		'ustsar' => [
			self::DESCRIPTION => 'UST-SAR',
			self::PAIR => 'UST-SAR',
			self::SYMBOL => 'tTERRAUST:USD',
		],
		'usttry' => [
			self::DESCRIPTION => 'UST-TRY',
			self::PAIR => 'UST-TRY',
			self::SYMBOL => 'tTERRAUST:USD',
		],
		'ustusd' => [
			self::DESCRIPTION => 'UST-USD',
			self::PAIR => 'UST-USD',
			self::SYMBOL => 'tTERRAUST:USD',
		],
		'ustusdt' => [
			self::DESCRIPTION => 'UST-USDT',
			self::PAIR => 'UST-USDT',
			self::SYMBOL => 'tTERRAUST:UST',
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
		'luna2usdt' => [
			self::DESCRIPTION => 'LUNA2-USDT',
			self::PAIR => 'LUNA2-USDT',
			self::SYMBOL => 'tLUNA2:UST',
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
