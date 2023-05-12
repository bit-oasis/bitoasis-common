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
		'BTC-USD' => 'BTC-USD',
		'BTC-KWD' => 'BTC-KWD',
		'BTC-OMR' => 'BTC-OMR',
		'BTC-BHD' => 'BTC-BHD',
		'BTC-QAR' => 'BTC-QAR',
		'BTC-USDT' => 'BTC-USDT',

		'ETH-AED' => 'ETH-AED',
		'ETH-SAR' => 'ETH-SAR',
		'ETH-TRY' => 'ETH-TRY',
		'ETH-USD' => 'ETH-USD',
		'ETH-KWD' => 'ETH-KWD',
		'ETH-OMR' => 'ETH-OMR',
		'ETH-BHD' => 'ETH-BHD',
		'ETH-QAR' => 'ETH-QAR',
		'ETH-USDT' => 'ETH-USDT',
		'ETH-BTC' => 'ETH-BTC',

		'ETHW-AED' => 'ETHW-AED',
		'ETHW-SAR' => 'ETHW-SAR',
		'ETHW-TRY' => 'ETHW-TRY',
		'ETHW-USD' => 'ETHW-USD',
		'ETHW-KWD' => 'ETHW-KWD',
		'ETHW-OMR' => 'ETHW-OMR',
		'ETHW-BHD' => 'ETHW-BHD',
		'ETHW-QAR' => 'ETHW-QAR',
		'ETHW-USDT' => 'ETHW-USDT',

		'BCH-AED' => 'BCH-AED',
		'BCH-SAR' => 'BCH-SAR',
		'BCH-TRY' => 'BCH-TRY',
		'BCH-USD' => 'BCH-USD',
		'BCH-KWD' => 'BCH-KWD',
		'BCH-OMR' => 'BCH-OMR',
		'BCH-BHD' => 'BCH-BHD',
		'BCH-QAR' => 'BCH-QAR',
		'BCH-BTC' => 'BCH-BTC',

		'XRP-AED' => 'XRP-AED',
		'XRP-SAR' => 'XRP-SAR',
		'XRP-TRY' => 'XRP-TRY',
		'XRP-USD' => 'XRP-USD',
		'XRP-KWD' => 'XRP-KWD',
		'XRP-OMR' => 'XRP-OMR',
		'XRP-BHD' => 'XRP-BHD',
		'XRP-QAR' => 'XRP-QAR',
		'XRP-USDT' => 'XRP-USDT',
		'XRP-BTC' => 'XRP-BTC',

		'ETC-AED' => 'ETC-AED',
		'ETC-SAR' => 'ETC-SAR',
		'ETC-TRY' => 'ETC-TRY',
		'ETC-USD' => 'ETC-USD',
		'ETC-KWD' => 'ETC-KWD',
		'ETC-OMR' => 'ETC-OMR',
		'ETC-BHD' => 'ETC-BHD',
		'ETC-QAR' => 'ETC-QAR',
		'ETC-BTC' => 'ETC-BTC',
		'ETC-USDT' => 'ETC-USDT',

		'LTC-AED' => 'LTC-AED',
		'LTC-SAR' => 'LTC-SAR',
		'LTC-TRY' => 'LTC-TRY',
		'LTC-USD' => 'LTC-USD',
		'LTC-KWD' => 'LTC-KWD',
		'LTC-OMR' => 'LTC-OMR',
		'LTC-BHD' => 'LTC-BHD',
		'LTC-QAR' => 'LTC-QAR',
		'LTC-USDT' => 'LTC-USDT',
		'LTC-BTC' => 'LTC-BTC',

		'ZEC-AED' => 'ZEC-AED',
		'ZEC-BTC' => 'ZEC-BTC',

		'XMR-AED' => 'XMR-AED',
		'XMR-BTC' => 'XMR-BTC',

		'XLM-AED' => 'XLM-AED',
		'XLM-SAR' => 'XLM-SAR',
		'XLM-TRY' => 'XLM-TRY',
		'XLM-USD' => 'XLM-USD',
		'XLM-KWD' => 'XLM-KWD',
		'XLM-OMR' => 'XLM-OMR',
		'XLM-BHD' => 'XLM-BHD',
		'XLM-QAR' => 'XLM-QAR',
		'XLM-USDT' => 'XLM-USDT',
		'XLM-BTC' => 'XLM-BTC',

		'EOS-AED' => 'EOS-AED',
		'EOS-SAR' => 'EOS-SAR',
		'EOS-TRY' => 'EOS-TRY',
		'EOS-USD' => 'EOS-USD',
		'EOS-KWD' => 'EOS-KWD',
		'EOS-OMR' => 'EOS-OMR',
		'EOS-BHD' => 'EOS-BHD',
		'EOS-QAR' => 'EOS-QAR',
		'EOS-USDT' => 'EOS-USDT',
		'EOS-BTC' => 'EOS-BTC',
		'EOS-ETH' => 'EOS-ETH',

		'BSV-AED' => 'BSV-AED',
		'BSV-BTC' => 'BSV-BTC',

		'OMG-AED' => 'OMG-AED',
		'OMG-SAR' => 'OMG-SAR',
		'OMG-TRY' => 'OMG-TRY',
		'OMG-USD' => 'OMG-USD',
		'OMG-KWD' => 'OMG-KWD',
		'OMG-OMR' => 'OMG-OMR',
		'OMG-BHD' => 'OMG-BHD',
		'OMG-QAR' => 'OMG-QAR',
		'OMG-BTC' => 'OMG-BTC',
		'OMG-ETH' => 'OMG-ETH',

		'ZRX-AED' => 'ZRX-AED',
		'ZRX-SAR' => 'ZRX-SAR',
		'ZRX-TRY' => 'ZRX-TRY',
		'ZRX-USD' => 'ZRX-USD',
		'ZRX-KWD' => 'ZRX-KWD',
		'ZRX-OMR' => 'ZRX-OMR',
		'ZRX-BHD' => 'ZRX-BHD',
		'ZRX-QAR' => 'ZRX-QAR',

		'BAT-AED' => 'BAT-AED',
		'BAT-SAR' => 'BAT-SAR',
		'BAT-TRY' => 'BAT-TRY',
		'BAT-USD' => 'BAT-USD',
		'BAT-KWD' => 'BAT-KWD',
		'BAT-OMR' => 'BAT-OMR',
		'BAT-BHD' => 'BAT-BHD',
		'BAT-QAR' => 'BAT-QAR',
		'BAT-USDT' => 'BAT-USDT',
		'BAT-BTC' => 'BAT-BTC',

		'ALGO-AED' => 'ALGO-AED',
		'ALGO-SAR' => 'ALGO-SAR',
		'ALGO-TRY' => 'ALGO-TRY',
		'ALGO-USD' => 'ALGO-USD',
		'ALGO-KWD' => 'ALGO-KWD',
		'ALGO-OMR' => 'ALGO-OMR',
		'ALGO-BHD' => 'ALGO-BHD',
		'ALGO-QAR' => 'ALGO-QAR',
		'ALGO-USDT' => 'ALGO-USDT',
		'ALGO-BTC' => 'ALGO-BTC',

		'USDT-AED' => 'USDT-AED',
		'USDT-SAR' => 'USDT-SAR',
		'USDT-TRY' => 'USDT-TRY',
		'USDT-USD' => 'USDT-USD',
		'USDT-KWD' => 'USDT-KWD',
		'USDT-OMR' => 'USDT-OMR',
		'USDT-BHD' => 'USDT-BHD',
		'USDT-QAR' => 'USDT-QAR',

		'NEO-AED' => 'NEO-AED',
		'NEO-SAR' => 'NEO-SAR',
		'NEO-TRY' => 'NEO-TRY',
		'NEO-USD' => 'NEO-USD',
		'NEO-KWD' => 'NEO-KWD',
		'NEO-OMR' => 'NEO-OMR',
		'NEO-BHD' => 'NEO-BHD',
		'NEO-QAR' => 'NEO-QAR',
		'NEO-USDT' => 'NEO-USDT',
		'NEO-BTC' => 'NEO-BTC',

		'XTZ-AED' => 'XTZ-AED',
		'XTZ-SAR' => 'XTZ-SAR',
		'XTZ-TRY' => 'XTZ-TRY',
		'XTZ-USD' => 'XTZ-USD',
		'XTZ-KWD' => 'XTZ-KWD',
		'XTZ-OMR' => 'XTZ-OMR',
		'XTZ-BHD' => 'XTZ-BHD',
		'XTZ-QAR' => 'XTZ-QAR',
		'XTZ-USDT' => 'XTZ-USDT',
		'XTZ-BTC' => 'XTZ-BTC',

		'LINK-AED' => 'LINK-AED',
		'LINK-SAR' => 'LINK-SAR',
		'LINK-TRY' => 'LINK-TRY',
		'LINK-USD' => 'LINK-USD',
		'LINK-KWD' => 'LINK-KWD',
		'LINK-OMR' => 'LINK-OMR',
		'LINK-BHD' => 'LINK-BHD',
		'LINK-QAR' => 'LINK-QAR',
		'LINK-USDT' => 'LINK-USDT',
		'LINK-BTC' => 'LINK-BTC',
		'LINK-ETH' => 'LINK-ETH',

		'DAI-AED' => 'DAI-AED',
		'DAI-SAR' => 'DAI-SAR',
		'DAI-TRY' => 'DAI-TRY',
		'DAI-USD' => 'DAI-USD',
		'DAI-KWD' => 'DAI-KWD',
		'DAI-OMR' => 'DAI-OMR',
		'DAI-BHD' => 'DAI-BHD',
		'DAI-QAR' => 'DAI-QAR',
		'DAI-BTC' => 'DAI-BTC',

		'MKR-AED' => 'MKR-AED',
		'MKR-SAR' => 'MKR-SAR',
		'MKR-TRY' => 'MKR-TRY',
		'MKR-USD' => 'MKR-USD',
		'MKR-KWD' => 'MKR-KWD',
		'MKR-OMR' => 'MKR-OMR',
		'MKR-BHD' => 'MKR-BHD',
		'MKR-QAR' => 'MKR-QAR',
		'MKR-USDT' => 'MKR-USDT',
		'MKR-BTC' => 'MKR-BTC',

		'REP-AED' => 'REP-AED',

		'KNC-AED' => 'KNC-AED',
		'KNC-SAR' => 'KNC-SAR',
		'KNC-TRY' => 'KNC-TRY',
		'KNC-USD' => 'KNC-USD',
		'KNC-KWD' => 'KNC-KWD',
		'KNC-OMR' => 'KNC-OMR',
		'KNC-BHD' => 'KNC-BHD',
		'KNC-QAR' => 'KNC-QAR',
		'KNC-BTC' => 'KNC-BTC',

		'UNI-AED' => 'UNI-AED',
		'UNI-SAR' => 'UNI-SAR',
		'UNI-TRY' => 'UNI-TRY',
		'UNI-USD' => 'UNI-USD',
		'UNI-KWD' => 'UNI-KWD',
		'UNI-OMR' => 'UNI-OMR',
		'UNI-BHD' => 'UNI-BHD',
		'UNI-QAR' => 'UNI-QAR',
		'UNI-USDT' => 'UNI-USDT',

		'YFI-AED' => 'YFI-AED',
		'YFI-SAR' => 'YFI-SAR',
		'YFI-TRY' => 'YFI-TRY',
		'YFI-USD' => 'YFI-USD',
		'YFI-KWD' => 'YFI-KWD',
		'YFI-OMR' => 'YFI-OMR',
		'YFI-BHD' => 'YFI-BHD',
		'YFI-QAR' => 'YFI-QAR',
		'YFI-USDT' => 'YFI-USDT',

		'BAL-AED' => 'BAL-AED',
		'BAL-SAR' => 'BAL-SAR',
		'BAL-TRY' => 'BAL-TRY',
		'BAL-USD' => 'BAL-USD',
		'BAL-KWD' => 'BAL-KWD',
		'BAL-OMR' => 'BAL-OMR',
		'BAL-BHD' => 'BAL-BHD',
		'BAL-QAR' => 'BAL-QAR',
		'BAL-USDT' => 'BAL-USDT',

		'COMP-AED' => 'COMP-AED',
		'COMP-SAR' => 'COMP-SAR',
		'COMP-TRY' => 'COMP-TRY',
		'COMP-USD' => 'COMP-USD',
		'COMP-KWD' => 'COMP-KWD',
		'COMP-OMR' => 'COMP-OMR',
		'COMP-BHD' => 'COMP-BHD',
		'COMP-QAR' => 'COMP-QAR',
		'COMP-USDT' => 'COMP-USDT',

		'DOGE-AED' => 'DOGE-AED',
		'DOGE-SAR' => 'DOGE-SAR',
		'DOGE-TRY' => 'DOGE-TRY',
		'DOGE-USD' => 'DOGE-USD',
		'DOGE-KWD' => 'DOGE-KWD',
		'DOGE-OMR' => 'DOGE-OMR',
		'DOGE-BHD' => 'DOGE-BHD',
		'DOGE-QAR' => 'DOGE-QAR',
		'DOGE-BTC' => 'DOGE-BTC',
		'DOGE-USDT' => 'DOGE-USDT',

		'AAVE-AED' => 'AAVE-AED',
		'AAVE-SAR' => 'AAVE-SAR',
		'AAVE-TRY' => 'AAVE-TRY',
		'AAVE-USD' => 'AAVE-USD',
		'AAVE-KWD' => 'AAVE-KWD',
		'AAVE-OMR' => 'AAVE-OMR',
		'AAVE-BHD' => 'AAVE-BHD',
		'AAVE-QAR' => 'AAVE-QAR',
		'AAVE-USDT' => 'AAVE-USDT',

		'BNT-AED' => 'BNT-AED',
		'BNT-SAR' => 'BNT-SAR',
		'BNT-TRY' => 'BNT-TRY',
		'BNT-USD' => 'BNT-USD',
		'BNT-KWD' => 'BNT-KWD',
		'BNT-OMR' => 'BNT-OMR',
		'BNT-BHD' => 'BNT-BHD',
		'BNT-QAR' => 'BNT-QAR',

		'ENJ-AED' => 'ENJ-AED',
		'ENJ-SAR' => 'ENJ-SAR',
		'ENJ-TRY' => 'ENJ-TRY',
		'ENJ-USD' => 'ENJ-USD',
		'ENJ-KWD' => 'ENJ-KWD',
		'ENJ-OMR' => 'ENJ-OMR',
		'ENJ-BHD' => 'ENJ-BHD',
		'ENJ-QAR' => 'ENJ-QAR',

		'LRC-AED' => 'LRC-AED',
		'LRC-SAR' => 'LRC-SAR',
		'LRC-TRY' => 'LRC-TRY',
		'LRC-USD' => 'LRC-USD',
		'LRC-KWD' => 'LRC-KWD',
		'LRC-OMR' => 'LRC-OMR',
		'LRC-BHD' => 'LRC-BHD',
		'LRC-QAR' => 'LRC-QAR',

		'MANA-AED' => 'MANA-AED',
		'MANA-SAR' => 'MANA-SAR',
		'MANA-TRY' => 'MANA-TRY',
		'MANA-USD' => 'MANA-USD',
		'MANA-KWD' => 'MANA-KWD',
		'MANA-OMR' => 'MANA-OMR',
		'MANA-BHD' => 'MANA-BHD',
		'MANA-QAR' => 'MANA-QAR',
		'MANA-BTC' => 'MANA-BTC',

		'MATIC-AED' => 'MATIC-AED',
		'MATIC-SAR' => 'MATIC-SAR',
		'MATIC-TRY' => 'MATIC-TRY',
		'MATIC-USD' => 'MATIC-USD',
		'MATIC-KWD' => 'MATIC-KWD',
		'MATIC-OMR' => 'MATIC-OMR',
		'MATIC-BHD' => 'MATIC-BHD',
		'MATIC-QAR' => 'MATIC-QAR',
		'MATIC-USDT' => 'MATIC-USDT',
		'MATIC-BTC' => 'MATIC-BTC',

		'STORJ-AED' => 'STORJ-AED',
		'STORJ-SAR' => 'STORJ-SAR',
		'STORJ-TRY' => 'STORJ-TRY',
		'STORJ-USD' => 'STORJ-USD',
		'STORJ-KWD' => 'STORJ-KWD',
		'STORJ-OMR' => 'STORJ-OMR',
		'STORJ-BHD' => 'STORJ-BHD',
		'STORJ-QAR' => 'STORJ-QAR',

		'SUSHI-AED' => 'SUSHI-AED',
		'SUSHI-SAR' => 'SUSHI-SAR',
		'SUSHI-TRY' => 'SUSHI-TRY',
		'SUSHI-USD' => 'SUSHI-USD',
		'SUSHI-KWD' => 'SUSHI-KWD',
		'SUSHI-OMR' => 'SUSHI-OMR',
		'SUSHI-BHD' => 'SUSHI-BHD',
		'SUSHI-QAR' => 'SUSHI-QAR',
		'SUSHI-USDT' => 'SUSHI-USDT',

		'USDC-AED' => 'USDC-AED',
		'USDC-SAR' => 'USDC-SAR',
		'USDC-TRY' => 'USDC-TRY',
		'USDC-USD' => 'USDC-USD',
		'USDC-KWD' => 'USDC-KWD',
		'USDC-OMR' => 'USDC-OMR',
		'USDC-BHD' => 'USDC-BHD',
		'USDC-QAR' => 'USDC-QAR',
		'USDC-USDT' => 'USDC-USDT',

		'WAVES-AED' => 'WAVES-AED',
		'WAVES-SAR' => 'WAVES-SAR',
		'WAVES-TRY' => 'WAVES-TRY',
		'WAVES-USD' => 'WAVES-USD',
		'WAVES-KWD' => 'WAVES-KWD',
		'WAVES-OMR' => 'WAVES-OMR',
		'WAVES-BHD' => 'WAVES-BHD',
		'WAVES-QAR' => 'WAVES-QAR',
		'WAVES-USDT' => 'WAVES-USDT',

		'SOL-AED' => 'SOL-AED',
		'SOL-SAR' => 'SOL-SAR',
		'SOL-TRY' => 'SOL-TRY',
		'SOL-USD' => 'SOL-USD',
		'SOL-KWD' => 'SOL-KWD',
		'SOL-OMR' => 'SOL-OMR',
		'SOL-BHD' => 'SOL-BHD',
		'SOL-QAR' => 'SOL-QAR',
		'SOL-USDT' => 'SOL-USDT',
		'SOL-BTC' => 'SOL-BTC',

		'ADA-AED' => 'ADA-AED',
		'ADA-SAR' => 'ADA-SAR',
		'ADA-TRY' => 'ADA-TRY',
		'ADA-USD' => 'ADA-USD',
		'ADA-KWD' => 'ADA-KWD',
		'ADA-OMR' => 'ADA-OMR',
		'ADA-BHD' => 'ADA-BHD',
		'ADA-QAR' => 'ADA-QAR',
		'ADA-USDT' => 'ADA-USDT',

		'DOT-AED' => 'DOT-AED',
		'DOT-SAR' => 'DOT-SAR',
		'DOT-TRY' => 'DOT-TRY',
		'DOT-USD' => 'DOT-USD',
		'DOT-KWD' => 'DOT-KWD',
		'DOT-OMR' => 'DOT-OMR',
		'DOT-BHD' => 'DOT-BHD',
		'DOT-QAR' => 'DOT-QAR',
		'DOT-USDT' => 'DOT-USDT',
		'DOT-BTC' => 'DOT-BTC',

		'SHIB-AED' => 'SHIB-AED',
		'SHIB-SAR' => 'SHIB-SAR',
		'SHIB-TRY' => 'SHIB-TRY',
		'SHIB-USD' => 'SHIB-USD',
		'SHIB-KWD' => 'SHIB-KWD',
		'SHIB-OMR' => 'SHIB-OMR',
		'SHIB-BHD' => 'SHIB-BHD',
		'SHIB-QAR' => 'SHIB-QAR',
		'SHIB-USDT' => 'SHIB-USDT',

		'AVAX-AED' => 'AVAX-AED',
		'AVAX-SAR' => 'AVAX-SAR',
		'AVAX-TRY' => 'AVAX-TRY',
		'AVAX-USD' => 'AVAX-USD',
		'AVAX-KWD' => 'AVAX-KWD',
		'AVAX-OMR' => 'AVAX-OMR',
		'AVAX-BHD' => 'AVAX-BHD',
		'AVAX-QAR' => 'AVAX-QAR',
		'AVAX-USDT' => 'AVAX-USDT',

		'NEAR-AED' => 'NEAR-AED',
		'NEAR-SAR' => 'NEAR-SAR',
		'NEAR-TRY' => 'NEAR-TRY',
		'NEAR-USD' => 'NEAR-USD',
		'NEAR-KWD' => 'NEAR-KWD',
		'NEAR-OMR' => 'NEAR-OMR',
		'NEAR-BHD' => 'NEAR-BHD',
		'NEAR-QAR' => 'NEAR-QAR',
		'NEAR-USDT' => 'NEAR-USDT',

		'FTM-AED' => 'FTM-AED',
		'FTM-SAR' => 'FTM-SAR',
		'FTM-TRY' => 'FTM-TRY',
		'FTM-USD' => 'FTM-USD',
		'FTM-KWD' => 'FTM-KWD',
		'FTM-OMR' => 'FTM-OMR',
		'FTM-BHD' => 'FTM-BHD',
		'FTM-QAR' => 'FTM-QAR',
		'FTM-USDT' => 'FTM-USDT',

		'WBTC-AED' => 'WBTC-AED',
		'WBTC-SAR' => 'WBTC-SAR',
		'WBTC-TRY' => 'WBTC-TRY',
		'WBTC-USD' => 'WBTC-USD',
		'WBTC-KWD' => 'WBTC-KWD',
		'WBTC-OMR' => 'WBTC-OMR',
		'WBTC-BHD' => 'WBTC-BHD',
		'WBTC-QAR' => 'WBTC-QAR',

		'ATOM-AED' => 'ATOM-AED',
		'ATOM-SAR' => 'ATOM-SAR',
		'ATOM-TRY' => 'ATOM-TRY',
		'ATOM-USD' => 'ATOM-USD',
		'ATOM-KWD' => 'ATOM-KWD',
		'ATOM-OMR' => 'ATOM-OMR',
		'ATOM-BHD' => 'ATOM-BHD',
		'ATOM-QAR' => 'ATOM-QAR',
		'ATOM-USDT' => 'ATOM-USDT',
		'ATOM-BTC' => 'ATOM-BTC',
		'ATOM-ETH' => 'ATOM-ETH',

		'1INCH-AED' => '1INCH-AED',
		'1INCH-SAR' => '1INCH-SAR',
		'1INCH-TRY' => '1INCH-TRY',
		'1INCH-USD' => '1INCH-USD',
		'1INCH-KWD' => '1INCH-KWD',
		'1INCH-OMR' => '1INCH-OMR',
		'1INCH-BHD' => '1INCH-BHD',
		'1INCH-QAR' => '1INCH-QAR',
		'1INCH-USDT' => '1INCH-USDT',

		'ANT-AED' => 'ANT-AED',
		'ANT-SAR' => 'ANT-SAR',
		'ANT-TRY' => 'ANT-TRY',
		'ANT-USD' => 'ANT-USD',
		'ANT-KWD' => 'ANT-KWD',
		'ANT-OMR' => 'ANT-OMR',
		'ANT-BHD' => 'ANT-BHD',
		'ANT-QAR' => 'ANT-QAR',
		'ANT-BTC' => 'ANT-BTC',
		'ANT-ETH' => 'ANT-ETH',

		'AXS-AED' => 'AXS-AED',
		'AXS-SAR' => 'AXS-SAR',
		'AXS-TRY' => 'AXS-TRY',
		'AXS-USD' => 'AXS-USD',
		'AXS-KWD' => 'AXS-KWD',
		'AXS-OMR' => 'AXS-OMR',
		'AXS-BHD' => 'AXS-BHD',
		'AXS-QAR' => 'AXS-QAR',
		'AXS-USDT' => 'AXS-USDT',

		'BAND-AED' => 'BAND-AED',
		'BAND-SAR' => 'BAND-SAR',
		'BAND-TRY' => 'BAND-TRY',
		'BAND-USD' => 'BAND-USD',
		'BAND-KWD' => 'BAND-KWD',
		'BAND-OMR' => 'BAND-OMR',
		'BAND-BHD' => 'BAND-BHD',
		'BAND-QAR' => 'BAND-QAR',
		'BAND-USDT' => 'BAND-USDT',

		'CHZ-AED' => 'CHZ-AED',
		'CHZ-SAR' => 'CHZ-SAR',
		'CHZ-TRY' => 'CHZ-TRY',
		'CHZ-USD' => 'CHZ-USD',
		'CHZ-KWD' => 'CHZ-KWD',
		'CHZ-OMR' => 'CHZ-OMR',
		'CHZ-BHD' => 'CHZ-BHD',
		'CHZ-QAR' => 'CHZ-QAR',
		'CHZ-USDT' => 'CHZ-USDT',

		'CRV-AED' => 'CRV-AED',
		'CRV-SAR' => 'CRV-SAR',
		'CRV-TRY' => 'CRV-TRY',
		'CRV-USD' => 'CRV-USD',
		'CRV-KWD' => 'CRV-KWD',
		'CRV-OMR' => 'CRV-OMR',
		'CRV-BHD' => 'CRV-BHD',
		'CRV-QAR' => 'CRV-QAR',
		'CRV-USDT' => 'CRV-USDT',

		'DGB-AED' => 'DGB-AED',
		'DGB-SAR' => 'DGB-SAR',
		'DGB-TRY' => 'DGB-TRY',
		'DGB-USD' => 'DGB-USD',
		'DGB-KWD' => 'DGB-KWD',
		'DGB-OMR' => 'DGB-OMR',
		'DGB-BHD' => 'DGB-BHD',
		'DGB-QAR' => 'DGB-QAR',

		'EGLD-AED' => 'EGLD-AED',
		'EGLD-SAR' => 'EGLD-SAR',
		'EGLD-TRY' => 'EGLD-TRY',
		'EGLD-USD' => 'EGLD-USD',
		'EGLD-KWD' => 'EGLD-KWD',
		'EGLD-OMR' => 'EGLD-OMR',
		'EGLD-BHD' => 'EGLD-BHD',
		'EGLD-QAR' => 'EGLD-QAR',
		'EGLD-USDT' => 'EGLD-USDT',

		'FIL-AED' => 'FIL-AED',
		'FIL-SAR' => 'FIL-SAR',
		'FIL-TRY' => 'FIL-TRY',
		'FIL-USD' => 'FIL-USD',
		'FIL-KWD' => 'FIL-KWD',
		'FIL-OMR' => 'FIL-OMR',
		'FIL-BHD' => 'FIL-BHD',
		'FIL-QAR' => 'FIL-QAR',
		'FIL-USDT' => 'FIL-USDT',

		'GALA-AED' => 'GALA-AED',
		'GALA-SAR' => 'GALA-SAR',
		'GALA-TRY' => 'GALA-TRY',
		'GALA-USD' => 'GALA-USD',
		'GALA-KWD' => 'GALA-KWD',
		'GALA-OMR' => 'GALA-OMR',
		'GALA-BHD' => 'GALA-BHD',
		'GALA-QAR' => 'GALA-QAR',
		'GALA-USDT' => 'GALA-USDT',

		'GNO-AED' => 'GNO-AED',
		'GNO-SAR' => 'GNO-SAR',
		'GNO-TRY' => 'GNO-TRY',
		'GNO-USD' => 'GNO-USD',
		'GNO-KWD' => 'GNO-KWD',
		'GNO-OMR' => 'GNO-OMR',
		'GNO-BHD' => 'GNO-BHD',
		'GNO-QAR' => 'GNO-QAR',

		'GRT-AED' => 'GRT-AED',
		'GRT-SAR' => 'GRT-SAR',
		'GRT-TRY' => 'GRT-TRY',
		'GRT-USD' => 'GRT-USD',
		'GRT-KWD' => 'GRT-KWD',
		'GRT-OMR' => 'GRT-OMR',
		'GRT-BHD' => 'GRT-BHD',
		'GRT-QAR' => 'GRT-QAR',
		'GRT-USDT' => 'GRT-USDT',

		'IOTA-AED' => 'IOTA-AED',
		'IOTA-SAR' => 'IOTA-SAR',
		'IOTA-TRY' => 'IOTA-TRY',
		'IOTA-USD' => 'IOTA-USD',
		'IOTA-KWD' => 'IOTA-KWD',
		'IOTA-OMR' => 'IOTA-OMR',
		'IOTA-BHD' => 'IOTA-BHD',
		'IOTA-QAR' => 'IOTA-QAR',
		'IOTA-BTC' => 'IOTA-BTC',

		'KSM-AED' => 'KSM-AED',
		'KSM-SAR' => 'KSM-SAR',
		'KSM-TRY' => 'KSM-TRY',
		'KSM-USD' => 'KSM-USD',
		'KSM-KWD' => 'KSM-KWD',
		'KSM-OMR' => 'KSM-OMR',
		'KSM-BHD' => 'KSM-BHD',
		'KSM-QAR' => 'KSM-QAR',
		'KSM-USDT' => 'KSM-USDT',

		'LEO-AED' => 'LEO-AED',
		'LEO-SAR' => 'LEO-SAR',
		'LEO-TRY' => 'LEO-TRY',
		'LEO-USD' => 'LEO-USD',
		'LEO-KWD' => 'LEO-KWD',
		'LEO-OMR' => 'LEO-OMR',
		'LEO-BHD' => 'LEO-BHD',
		'LEO-QAR' => 'LEO-QAR',
		'LEO-USDT' => 'LEO-USDT',
		'LEO-BTC' => 'LEO-BTC',
		'LEO-ETH' => 'LEO-ETH',

		'OCEAN-AED' => 'OCEAN-AED',
		'OCEAN-SAR' => 'OCEAN-SAR',
		'OCEAN-TRY' => 'OCEAN-TRY',
		'OCEAN-USD' => 'OCEAN-USD',
		'OCEAN-KWD' => 'OCEAN-KWD',
		'OCEAN-OMR' => 'OCEAN-OMR',
		'OCEAN-BHD' => 'OCEAN-BHD',
		'OCEAN-QAR' => 'OCEAN-QAR',
		'OCEAN-USDT' => 'OCEAN-USDT',

		'QTUM-AED' => 'QTUM-AED',
		'QTUM-SAR' => 'QTUM-SAR',
		'QTUM-TRY' => 'QTUM-TRY',
		'QTUM-USD' => 'QTUM-USD',
		'QTUM-KWD' => 'QTUM-KWD',
		'QTUM-OMR' => 'QTUM-OMR',
		'QTUM-BHD' => 'QTUM-BHD',
		'QTUM-QAR' => 'QTUM-QAR',
		'QTUM-BTC' => 'QTUM-BTC',

		'SNX-AED' => 'SNX-AED',
		'SNX-SAR' => 'SNX-SAR',
		'SNX-TRY' => 'SNX-TRY',
		'SNX-USD' => 'SNX-USD',
		'SNX-KWD' => 'SNX-KWD',
		'SNX-OMR' => 'SNX-OMR',
		'SNX-BHD' => 'SNX-BHD',
		'SNX-QAR' => 'SNX-QAR',
		'SNX-USDT' => 'SNX-USDT',

		'THETA-AED' => 'THETA-AED',
		'THETA-SAR' => 'THETA-SAR',
		'THETA-TRY' => 'THETA-TRY',
		'THETA-USD' => 'THETA-USD',
		'THETA-KWD' => 'THETA-KWD',
		'THETA-OMR' => 'THETA-OMR',
		'THETA-BHD' => 'THETA-BHD',
		'THETA-QAR' => 'THETA-QAR',
		'THETA-USDT' => 'THETA-USDT',

		'TRX-AED' => 'TRX-AED',
		'TRX-SAR' => 'TRX-SAR',
		'TRX-TRY' => 'TRX-TRY',
		'TRX-USD' => 'TRX-USD',
		'TRX-KWD' => 'TRX-KWD',
		'TRX-OMR' => 'TRX-OMR',
		'TRX-BHD' => 'TRX-BHD',
		'TRX-QAR' => 'TRX-QAR',
		'TRX-USDT' => 'TRX-USDT',
		'TRX-BTC' => 'TRX-BTC',
		'TRX-ETH' => 'TRX-ETH',

		'VET-AED' => 'VET-AED',
		'VET-SAR' => 'VET-SAR',
		'VET-TRY' => 'VET-TRY',
		'VET-USD' => 'VET-USD',
		'VET-KWD' => 'VET-KWD',
		'VET-OMR' => 'VET-OMR',
		'VET-BHD' => 'VET-BHD',
		'VET-QAR' => 'VET-QAR',
		'VET-USDT' => 'VET-USDT',
		'VET-BTC' => 'VET-BTC',

		'XVG-AED' => 'XVG-AED',
		'XVG-SAR' => 'XVG-SAR',
		'XVG-TRY' => 'XVG-TRY',
		'XVG-USD' => 'XVG-USD',
		'XVG-KWD' => 'XVG-KWD',
		'XVG-OMR' => 'XVG-OMR',
		'XVG-BHD' => 'XVG-BHD',
		'XVG-QAR' => 'XVG-QAR',

		'LUNA2-AED' => 'LUNA2-AED',
		'LUNA2-SAR' => 'LUNA2-SAR',
		'LUNA2-TRY' => 'LUNA2-TRY',
		'LUNA2-USD' => 'LUNA2-USD',
		'LUNA2-KWD' => 'LUNA2-KWD',
		'LUNA2-OMR' => 'LUNA2-OMR',
		'LUNA2-BHD' => 'LUNA2-BHD',
		'LUNA2-QAR' => 'LUNA2-QAR',
		'LUNA2-USDT' => 'LUNA2-USDT',

		'XAUT-AED' => 'XAUT-AED',
		'XAUT-SAR' => 'XAUT-SAR',
		'XAUT-USD' => 'XAUT-USD',
		'XAUT-KWD' => 'XAUT-KWD',
		'XAUT-OMR' => 'XAUT-OMR',
		'XAUT-BHD' => 'XAUT-BHD',
		'XAUT-QAR' => 'XAUT-QAR',
		'XAUT-USDT' => 'XAUT-USDT',
		'XAUT-BTC' => 'XAUT-BTC',

		'ARB-AED' => 'ARB-AED',
		'ARB-SAR' => 'ARB-SAR',
		'ARB-USD' => 'ARB-USD',
		'ARB-KWD' => 'ARB-KWD',
		'ARB-OMR' => 'ARB-OMR',
		'ARB-BHD' => 'ARB-BHD',
		'ARB-QAR' => 'ARB-QAR',
		'ARB-USDT' => 'ARB-USDT',
	];

	const VALID_PAIRS = [
		'BTC-AED', 'BTC-SAR', 'BTC-TRY', 'BTC-USD', 'BTC-KWD', 'BTC-OMR', 'BTC-BHD', 'BTC-QAR',
		'BTC-USDT',

		'ETH-AED', 'ETH-SAR', 'ETH-TRY', 'ETH-USD', 'ETH-KWD', 'ETH-OMR', 'ETH-BHD', 'ETH-QAR',
		'ETH-USDT', 'ETH-BTC',

		'ETHW-AED', 'ETHW-SAR', 'ETHW-TRY', 'ETHW-USD', 'ETHW-KWD', 'ETHW-OMR', 'ETHW-BHD', 'ETHW-QAR',
		'ETHW-USDT',

		'BCH-AED', 'BCH-SAR', 'BCH-TRY', 'BCH-USD', 'BCH-KWD', 'BCH-OMR', 'BCH-BHD', 'BCH-QAR',
		'BCH-BTC', 'BCH-ETH',

		'XRP-AED', 'XRP-SAR', 'XRP-TRY', 'XRP-USD', 'XRP-KWD', 'XRP-OMR', 'XRP-BHD', 'XRP-QAR',
		'XRP-USDT', 'XRP-BTC',

		'ETC-AED', 'ETC-SAR', 'ETC-TRY', 'ETC-USD', 'ETC-KWD', 'ETC-OMR', 'ETC-BHD', 'ETC-QAR',
		'ETC-BTC', 'ETC-USDT',

		'LTC-AED', 'LTC-SAR', 'LTC-TRY', 'LTC-USD', 'LTC-KWD', 'LTC-OMR', 'LTC-BHD', 'LTC-QAR',
		'LTC-USDT', 'LTC-BTC',

		'ZEC-AED', 'ZEC-USD',
		'ZEC-BTC',

		'XMR-AED', 'XMR-USD',
		'XMR-BTC',

		'XLM-AED', 'XLM-SAR', 'XLM-TRY', 'XLM-USD', 'XLM-KWD', 'XLM-OMR', 'XLM-BHD', 'XLM-QAR',
		'XLM-USDT', 'XLM-BTC',
		'XLM-ETH', // De-listed (keeping for historical support)

		'EOS-AED', 'EOS-SAR', 'EOS-TRY', 'EOS-USD', 'EOS-KWD', 'EOS-OMR', 'EOS-BHD', 'EOS-QAR',
		'EOS-USDT', 'EOS-BTC', 'EOS-ETH',

		'BSV-AED', 'BSV-USD',
		'BSV-BTC',

		'OMG-AED', 'OMG-SAR', 'OMG-TRY', 'OMG-USD', 'OMG-KWD', 'OMG-OMR', 'OMG-BHD', 'OMG-QAR',
		'OMG-BTC', 'OMG-ETH',

		'ZRX-AED', 'ZRX-SAR', 'ZRX-TRY', 'ZRX-USD', 'ZRX-KWD', 'ZRX-OMR', 'ZRX-BHD', 'ZRX-QAR',
		'ZRX-BTC', 'ZRX-ETH', // De-listed

		'BAT-AED', 'BAT-SAR', 'BAT-TRY', 'BAT-USD', 'BAT-KWD', 'BAT-OMR', 'BAT-BHD', 'BAT-QAR',
		'BAT-USDT', 'BAT-BTC',

		'ALGO-AED', 'ALGO-SAR', 'ALGO-TRY', 'ALGO-USD', 'ALGO-KWD', 'ALGO-OMR', 'ALGO-BHD', 'ALGO-QAR',
		'ALGO-USDT', 'ALGO-BTC',

		'USDT-AED', 'USDT-SAR', 'USDT-TRY', 'USDT-USD', 'USDT-KWD', 'USDT-OMR', 'USDT-BHD', 'USDT-QAR',

		'NEO-AED', 'NEO-SAR', 'NEO-TRY', 'NEO-USD', 'NEO-KWD', 'NEO-OMR', 'NEO-BHD', 'NEO-QAR',
		'NEO-USDT', 'NEO-BTC',
		'NEO-ETH', // De-listed (keeping for historical support)

		'XTZ-AED', 'XTZ-SAR', 'XTZ-TRY', 'XTZ-USD', 'XTZ-KWD', 'XTZ-OMR', 'XTZ-BHD', 'XTZ-QAR',
		'XTZ-USDT', 'XTZ-BTC',

		'LINK-AED', 'LINK-SAR', 'LINK-TRY', 'LINK-USD', 'LINK-KWD', 'LINK-OMR', 'LINK-BHD', 'LINK-QAR',
		'LINK-USDT', 'LINK-BTC', 'LINK-ETH',

		'DAI-AED', 'DAI-SAR', 'DAI-TRY', 'DAI-USD', 'DAI-KWD', 'DAI-OMR', 'DAI-BHD', 'DAI-QAR',
		'DAI-BTC',
		'DAI-ETH', // De-listed

		'MKR-AED', 'MKR-SAR', 'MKR-TRY', 'MKR-USD', 'MKR-KWD', 'MKR-OMR', 'MKR-BHD', 'MKR-QAR',
		'MKR-USDT', 'MKR-BTC',

		'REP-AED', 'REP-USD',
		'REP-BTC',

		'KNC-AED', 'KNC-SAR', 'KNC-TRY', 'KNC-USD', 'KNC-KWD', 'KNC-OMR', 'KNC-BHD', 'KNC-QAR',
		'KNC-BTC',

		'UNI-AED', 'UNI-SAR', 'UNI-TRY', 'UNI-USD', 'UNI-KWD', 'UNI-OMR', 'UNI-BHD', 'UNI-QAR',
		'UNI-USDT',

		'YFI-AED', 'YFI-SAR', 'YFI-TRY', 'YFI-USD', 'YFI-KWD', 'YFI-OMR', 'YFI-BHD', 'YFI-QAR',
		'YFI-USDT',

		'BAL-AED', 'BAL-SAR', 'BAL-TRY', 'BAL-USD', 'BAL-KWD', 'BAL-OMR', 'BAL-BHD', 'BAL-QAR',
		'BAL-USDT',

		'COMP-AED', 'COMP-SAR', 'COMP-TRY', 'COMP-USD', 'COMP-KWD', 'COMP-OMR', 'COMP-BHD', 'COMP-QAR',
		'COMP-USDT',

		'DOGE-AED', 'DOGE-SAR', 'DOGE-TRY', 'DOGE-USD', 'DOGE-KWD', 'DOGE-OMR', 'DOGE-BHD', 'DOGE-QAR',
		'DOGE-BTC', 'DOGE-USDT',

		'AAVE-AED', 'AAVE-SAR', 'AAVE-TRY', 'AAVE-USD', 'AAVE-KWD', 'AAVE-OMR', 'AAVE-BHD', 'AAVE-QAR',
		'AAVE-USDT',

		'BNT-AED', 'BNT-SAR', 'BNT-TRY', 'BNT-USD', 'BNT-KWD', 'BNT-OMR', 'BNT-BHD', 'BNT-QAR',

		'ENJ-AED', 'ENJ-SAR', 'ENJ-TRY', 'ENJ-USD', 'ENJ-KWD', 'ENJ-OMR', 'ENJ-BHD', 'ENJ-QAR',

		'LRC-AED', 'LRC-SAR', 'LRC-TRY', 'LRC-USD', 'LRC-KWD', 'LRC-OMR', 'LRC-BHD', 'LRC-QAR',

		'MANA-AED', 'MANA-SAR', 'MANA-TRY', 'MANA-USD', 'MANA-KWD', 'MANA-OMR', 'MANA-BHD', 'MANA-QAR',
		'MANA-BTC',

		'MATIC-AED', 'MATIC-SAR', 'MATIC-TRY', 'MATIC-USD', 'MATIC-KWD', 'MATIC-OMR', 'MATIC-BHD', 'MATIC-QAR',
		'MATIC-USDT', 'MATIC-BTC',

		'STORJ-AED', 'STORJ-SAR', 'STORJ-TRY', 'STORJ-USD', 'STORJ-KWD', 'STORJ-OMR', 'STORJ-BHD', 'STORJ-QAR',

		'SUSHI-AED', 'SUSHI-SAR', 'SUSHI-TRY', 'SUSHI-USD', 'SUSHI-KWD', 'SUSHI-OMR', 'SUSHI-BHD', 'SUSHI-QAR',
		'SUSHI-USDT',

		'USDC-AED', 'USDC-SAR', 'USDC-TRY', 'USDC-USD', 'USDC-KWD', 'USDC-OMR', 'USDC-BHD', 'USDC-QAR',
		'USDC-USDT',

		'WAVES-AED', 'WAVES-SAR', 'WAVES-TRY', 'WAVES-USD', 'WAVES-KWD', 'WAVES-OMR', 'WAVES-BHD', 'WAVES-QAR',
		'WAVES-USDT',

		'SOL-AED', 'SOL-SAR', 'SOL-TRY', 'SOL-USD', 'SOL-KWD', 'SOL-OMR', 'SOL-BHD', 'SOL-QAR',
		'SOL-USDT', 'SOL-BTC',

		'ADA-AED', 'ADA-SAR', 'ADA-TRY', 'ADA-USD', 'ADA-KWD', 'ADA-OMR', 'ADA-BHD', 'ADA-QAR',
		'ADA-USDT',

		'DOT-AED', 'DOT-SAR', 'DOT-TRY', 'DOT-USD', 'DOT-KWD', 'DOT-OMR', 'DOT-BHD', 'DOT-QAR',
		'DOT-USDT', 'DOT-BTC',

		'SHIB-AED', 'SHIB-SAR', 'SHIB-TRY', 'SHIB-USD', 'SHIB-KWD', 'SHIB-OMR', 'SHIB-BHD', 'SHIB-QAR',
		'SHIB-USDT',

		'AVAX-AED', 'AVAX-SAR', 'AVAX-TRY', 'AVAX-USD', 'AVAX-KWD', 'AVAX-OMR', 'AVAX-BHD', 'AVAX-QAR',
		'AVAX-USDT',

		// LUNA is De-listed (keeping for historical support)
		'LUNA-AED', 'LUNA-SAR', 'LUNA-TRY', 'LUNA-USD',
		'LUNA-USDT', 'LUNA-BTC', 'LUNA-ETH',

		'NEAR-AED', 'NEAR-SAR', 'NEAR-TRY', 'NEAR-USD', 'NEAR-KWD', 'NEAR-OMR', 'NEAR-BHD', 'NEAR-QAR',
		'NEAR-USDT',

		'FTM-AED', 'FTM-SAR', 'FTM-TRY', 'FTM-USD', 'FTM-KWD', 'FTM-OMR', 'FTM-BHD', 'FTM-QAR',
		'FTM-USDT',

		'WBTC-AED', 'WBTC-SAR', 'WBTC-TRY', 'WBTC-USD', 'WBTC-KWD', 'WBTC-OMR', 'WBTC-BHD', 'WBTC-QAR',

		'ATOM-AED', 'ATOM-SAR', 'ATOM-TRY', 'ATOM-USD', 'ATOM-KWD', 'ATOM-OMR', 'ATOM-BHD', 'ATOM-QAR',
		'ATOM-USDT', 'ATOM-BTC', 'ATOM-ETH',

		'1INCH-AED', '1INCH-SAR', '1INCH-TRY', '1INCH-USD', '1INCH-KWD', '1INCH-OMR', '1INCH-BHD', '1INCH-QAR',
		'1INCH-USDT',

		'ANT-AED', 'ANT-SAR', 'ANT-TRY', 'ANT-USD', 'ANT-KWD', 'ANT-OMR', 'ANT-BHD', 'ANT-QAR',
		'ANT-BTC', 'ANT-ETH',

		'AXS-AED', 'AXS-SAR', 'AXS-TRY', 'AXS-USD', 'AXS-KWD', 'AXS-OMR', 'AXS-BHD', 'AXS-QAR',
		'AXS-USDT',

		'BAND-AED', 'BAND-SAR', 'BAND-TRY', 'BAND-USD', 'BAND-KWD', 'BAND-OMR', 'BAND-BHD', 'BAND-QAR',
		'BAND-USDT',

		'CHZ-AED', 'CHZ-SAR', 'CHZ-TRY', 'CHZ-USD', 'CHZ-KWD', 'CHZ-OMR', 'CHZ-BHD', 'CHZ-QAR',
		'CHZ-USDT',

		'CRV-AED', 'CRV-SAR', 'CRV-TRY', 'CRV-USD', 'CRV-KWD', 'CRV-OMR', 'CRV-BHD', 'CRV-QAR',
		'CRV-USDT',

		'DGB-AED', 'DGB-SAR', 'DGB-TRY', 'DGB-USD', 'DGB-KWD', 'DGB-OMR', 'DGB-BHD', 'DGB-QAR',

		'EGLD-AED', 'EGLD-SAR', 'EGLD-TRY', 'EGLD-USD', 'EGLD-KWD', 'EGLD-OMR', 'EGLD-BHD', 'EGLD-QAR',
		'EGLD-USDT',

		'FIL-AED', 'FIL-SAR', 'FIL-TRY', 'FIL-USD', 'FIL-KWD', 'FIL-OMR', 'FIL-BHD', 'FIL-QAR',
		'FIL-USDT',

		// FTT is De-listed (keeping for historical support)
		'FTT-AED', 'FTT-SAR', 'FTT-TRY', 'FTT-USD',
		'FTT-USDT',

		'GALA-AED', 'GALA-SAR', 'GALA-TRY', 'GALA-USD', 'GALA-KWD', 'GALA-OMR', 'GALA-BHD', 'GALA-QAR',
		'GALA-USDT',

		'GNO-AED', 'GNO-SAR', 'GNO-TRY', 'GNO-USD', 'GNO-KWD', 'GNO-OMR', 'GNO-BHD', 'GNO-QAR',

		'GRT-AED', 'GRT-SAR', 'GRT-TRY', 'GRT-USD', 'GRT-KWD', 'GRT-OMR', 'GRT-BHD', 'GRT-QAR',
		'GRT-USDT',

		'IOTA-AED', 'IOTA-SAR', 'IOTA-TRY', 'IOTA-USD', 'IOTA-KWD', 'IOTA-OMR', 'IOTA-BHD', 'IOTA-QAR',
		'IOTA-BTC',
		'IOTA-ETH', // De-listed

		'KSM-AED', 'KSM-SAR', 'KSM-TRY', 'KSM-USD', 'KSM-KWD', 'KSM-OMR', 'KSM-BHD', 'KSM-QAR',
		'KSM-USDT',

		'LEO-AED', 'LEO-SAR', 'LEO-TRY', 'LEO-USD', 'LEO-KWD', 'LEO-OMR', 'LEO-BHD', 'LEO-QAR',
		'LEO-USDT', 'LEO-BTC', 'LEO-ETH',

		// NEXO is De-listed (keeping for historical support)
		'NEXO-AED', 'NEXO-SAR', 'NEXO-TRY', 'NEXO-USD',
		'NEXO-USDT', 'NEXO-BTC',

		'OCEAN-AED', 'OCEAN-SAR', 'OCEAN-TRY', 'OCEAN-USD', 'OCEAN-KWD', 'OCEAN-OMR', 'OCEAN-BHD', 'OCEAN-QAR',
		'OCEAN-USDT',

		'QTUM-AED', 'QTUM-SAR', 'QTUM-TRY', 'QTUM-USD', 'QTUM-KWD', 'QTUM-OMR', 'QTUM-BHD', 'QTUM-QAR',
		'QTUM-BTC',

		'SNX-AED', 'SNX-SAR', 'SNX-TRY', 'SNX-USD', 'SNX-KWD', 'SNX-OMR', 'SNX-BHD', 'SNX-QAR',
		'SNX-USDT',

		'THETA-AED', 'THETA-SAR', 'THETA-TRY', 'THETA-USD', 'THETA-KWD', 'THETA-OMR', 'THETA-BHD', 'THETA-QAR',
		'THETA-USDT',

		'TRX-AED', 'TRX-SAR', 'TRX-TRY', 'TRX-USD', 'TRX-KWD', 'TRX-OMR', 'TRX-BHD', 'TRX-QAR',
		'TRX-USDT', 'TRX-BTC', 'TRX-ETH',

		// TUSD is De-listed (keeping for historical support)
		'TUSD-AED', 'TUSD-SAR', 'TUSD-TRY', 'TUSD-USD',
		'TUSD-USDT',

		// UST is De-listed (keeping for historical support)
		'UST-AED', 'UST-SAR', 'UST-TRY', 'UST-USD',
		'UST-USDT',

		'VET-AED', 'VET-SAR', 'VET-TRY', 'VET-USD', 'VET-KWD', 'VET-OMR', 'VET-BHD', 'VET-QAR',
		'VET-USDT', 'VET-BTC',

		'XVG-AED', 'XVG-SAR', 'XVG-TRY', 'XVG-USD', 'XVG-KWD', 'XVG-OMR', 'XVG-BHD', 'XVG-QAR',

		'LUNA2-AED', 'LUNA2-SAR', 'LUNA2-TRY', 'LUNA2-USD', 'LUNA2-KWD', 'LUNA2-OMR', 'LUNA2-BHD', 'LUNA2-QAR',
		'LUNA2-USDT',

		'XAUT-AED', 'XAUT-SAR', 'XAUT-USD', 'XAUT-USDT', 'XAUT-KWD', 'XAUT-OMR', 'XAUT-BHD', 'XAUT-QAR',
		'XAUT-BTC',

		'ARB-AED', 'ARB-SAR', 'ARB-USD', 'ARB-KWD', 'ARB-OMR', 'ARB-BHD', 'ARB-QAR',
		'ARB-USDT',
	];
	const FIAT_CRYPTOCURRENCY_CODES = ['USD', 'AED', 'SAR', 'TRY', 'KWD', 'OMR', 'QAR', 'BHD'];
	const VALID_BASE_CRYPTOCURRENCIES = ['USD', 'AED', 'BTC', 'ETH', 'USDT', 'SAR', 'TRY', 'KWD', 'OMR', 'QAR', 'BHD']; // This is ment to be quote cryptocurrency codes
	const STABLE_CRYPTOCURRENCY_CODES = ['USDC', 'USDT', 'DAI', 'UST', 'TUSD'];

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
		if (!self::isPairValid($cryptocurrencyCode . '-' . $baseCryptocurrencyCode)) {
			throw new InvalidCurrencyPairException('Unsupported currency pair ' . $cryptocurrencyCode . '-' . $baseCryptocurrencyCode);
		}
		$this->baseCryptocurrencyCode = $baseCryptocurrencyCode;
		$this->cryptocurrencyCode = $cryptocurrencyCode;
	}

	/**
	 * @return string
	 * @deprecated 1.1.0 use {@see getBaseCryptocurrencyCode}
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
		return strtoupper($this->cryptocurrencyCode) . '-' . strtoupper($this->baseCryptocurrencyCode);
	}

	/**
	 * @param string $codePair
	 * @return bool
	 * @deprecated 1.1.0 use {@see equalsPairIgnoreUsdAedDifference}
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
		if (count($currencies) !== 2) {
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

	public static function isStableCoin(string $code): bool {
		return in_array($code, self::STABLE_CRYPTOCURRENCY_CODES, true);
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
