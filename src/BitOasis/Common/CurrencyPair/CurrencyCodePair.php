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

		'DAI-AED' => 'DAI-AED',
		'DAI-SAR' => 'DAI-SAR',
		'DAI-TRY' => 'DAI-TRY',
		'DAI-USD' => 'DAI-USD',
		'DAI-KWD' => 'DAI-KWD',
		'DAI-OMR' => 'DAI-OMR',
		'DAI-BHD' => 'DAI-BHD',
		'DAI-QAR' => 'DAI-QAR',

		'MKR-AED' => 'MKR-AED',
		'MKR-SAR' => 'MKR-SAR',
		'MKR-TRY' => 'MKR-TRY',
		'MKR-USD' => 'MKR-USD',
		'MKR-KWD' => 'MKR-KWD',
		'MKR-OMR' => 'MKR-OMR',
		'MKR-BHD' => 'MKR-BHD',
		'MKR-QAR' => 'MKR-QAR',
		'MKR-USDT' => 'MKR-USDT',

		'KNC-AED' => 'KNC-AED',
		'KNC-SAR' => 'KNC-SAR',
		'KNC-TRY' => 'KNC-TRY',
		'KNC-USD' => 'KNC-USD',
		'KNC-KWD' => 'KNC-KWD',
		'KNC-OMR' => 'KNC-OMR',
		'KNC-BHD' => 'KNC-BHD',
		'KNC-QAR' => 'KNC-QAR',

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

		'1INCH-AED' => '1INCH-AED',
		'1INCH-SAR' => '1INCH-SAR',
		'1INCH-TRY' => '1INCH-TRY',
		'1INCH-USD' => '1INCH-USD',
		'1INCH-KWD' => '1INCH-KWD',
		'1INCH-OMR' => '1INCH-OMR',
		'1INCH-BHD' => '1INCH-BHD',
		'1INCH-QAR' => '1INCH-QAR',
		'1INCH-USDT' => '1INCH-USDT',

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

		'SNX-AED' => 'SNX-AED',
		'SNX-SAR' => 'SNX-SAR',
		'SNX-TRY' => 'SNX-TRY',
		'SNX-USD' => 'SNX-USD',
		'SNX-KWD' => 'SNX-KWD',
		'SNX-OMR' => 'SNX-OMR',
		'SNX-BHD' => 'SNX-BHD',
		'SNX-QAR' => 'SNX-QAR',
		'SNX-USDT' => 'SNX-USDT',

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

		'APE-AED' => 'APE-AED',
		'APE-SAR' => 'APE-SAR',
		'APE-USD' => 'APE-USD',
		'APE-KWD' => 'APE-KWD',
		'APE-OMR' => 'APE-OMR',
		'APE-BHD' => 'APE-BHD',
		'APE-QAR' => 'APE-QAR',
		'APE-USDT' => 'APE-USDT',

		'SAND-AED' => 'SAND-AED',
		'SAND-SAR' => 'SAND-SAR',
		'SAND-USD' => 'SAND-USD',
		'SAND-KWD' => 'SAND-KWD',
		'SAND-OMR' => 'SAND-OMR',
		'SAND-BHD' => 'SAND-BHD',
		'SAND-QAR' => 'SAND-QAR',
		'SAND-USDT' => 'SAND-USDT',

		'LDO-AED' => 'LDO-AED',
		'LDO-SAR' => 'LDO-SAR',
		'LDO-USD' => 'LDO-USD',
		'LDO-KWD' => 'LDO-KWD',
		'LDO-OMR' => 'LDO-OMR',
		'LDO-BHD' => 'LDO-BHD',
		'LDO-QAR' => 'LDO-QAR',
		'LDO-USDT' => 'LDO-USDT',

		'FET-AED' => 'FET-AED',
		'FET-SAR' => 'FET-SAR',
		'FET-USD' => 'FET-USD',
		'FET-KWD' => 'FET-KWD',
		'FET-OMR' => 'FET-OMR',
		'FET-BHD' => 'FET-BHD',
		'FET-QAR' => 'FET-QAR',
		'FET-USDT' => 'FET-USDT',

		'XDC-AED' => 'XDC-AED',
		'XDC-SAR' => 'XDC-SAR',
		'XDC-USD' => 'XDC-USD',
		'XDC-KWD' => 'XDC-KWD',
		'XDC-OMR' => 'XDC-OMR',
		'XDC-BHD' => 'XDC-BHD',
		'XDC-QAR' => 'XDC-QAR',
		'XDC-USDT' => 'XDC-USDT',

		'BTG-AED' => 'BTG-AED',
		'BTG-SAR' => 'BTG-SAR',
		'BTG-USD' => 'BTG-USD',
		'BTG-KWD' => 'BTG-KWD',
		'BTG-OMR' => 'BTG-OMR',
		'BTG-BHD' => 'BTG-BHD',
		'BTG-QAR' => 'BTG-QAR',

		'RLY-AED' => 'RLY-AED',
		'RLY-SAR' => 'RLY-SAR',
		'RLY-USD' => 'RLY-USD',
		'RLY-KWD' => 'RLY-KWD',
		'RLY-OMR' => 'RLY-OMR',
		'RLY-BHD' => 'RLY-BHD',
		'RLY-QAR' => 'RLY-QAR',
		'RLY-USDT' => 'RLY-USDT',

		'VRA-AED' => 'VRA-AED',
		'VRA-SAR' => 'VRA-SAR',
		'VRA-USD' => 'VRA-USD',
		'VRA-KWD' => 'VRA-KWD',
		'VRA-OMR' => 'VRA-OMR',
		'VRA-BHD' => 'VRA-BHD',
		'VRA-QAR' => 'VRA-QAR',
		'VRA-USDT' => 'VRA-USDT',

		'SGB-AED' => 'SGB-AED',
		'SGB-SAR' => 'SGB-SAR',
		'SGB-USD' => 'SGB-USD',
		'SGB-KWD' => 'SGB-KWD',
		'SGB-OMR' => 'SGB-OMR',
		'SGB-BHD' => 'SGB-BHD',
		'SGB-QAR' => 'SGB-QAR',
		'SGB-USDT' => 'SGB-USDT',

		'BLUR-AED' => 'BLUR-AED',
		'BLUR-SAR' => 'BLUR-SAR',
		'BLUR-USD' => 'BLUR-USD',
		'BLUR-KWD' => 'BLUR-KWD',
		'BLUR-OMR' => 'BLUR-OMR',
		'BLUR-BHD' => 'BLUR-BHD',
		'BLUR-QAR' => 'BLUR-QAR',
		'BLUR-USDT' => 'BLUR-USDT',

		'OP-AED' => 'OP-AED',
		'OP-SAR' => 'OP-SAR',
		'OP-USD' => 'OP-USD',
		'OP-KWD' => 'OP-KWD',
		'OP-OMR' => 'OP-OMR',
		'OP-BHD' => 'OP-BHD',
		'OP-QAR' => 'OP-QAR',
		'OP-USDT' => 'OP-USDT',

		'OPEN-AED' => 'OPEN-AED',
		'OPEN-SAR' => 'OPEN-SAR',
		'OPEN-USD' => 'OPEN-USD',
		'OPEN-KWD' => 'OPEN-KWD',
		'OPEN-OMR' => 'OPEN-OMR',
		'OPEN-BHD' => 'OPEN-BHD',
		'OPEN-QAR' => 'OPEN-QAR',
		'OPEN-USDT' => 'OPEN-USDT',

		'BOSON-AED' => 'BOSON-AED',
		'BOSON-SAR' => 'BOSON-SAR',
		'BOSON-USD' => 'BOSON-USD',
		'BOSON-KWD' => 'BOSON-KWD',
		'BOSON-OMR' => 'BOSON-OMR',
		'BOSON-BHD' => 'BOSON-BHD',
		'BOSON-QAR' => 'BOSON-QAR',
		'BOSON-USDT' => 'BOSON-USDT',

		'FLOKI-AED' => 'FLOKI-AED',
		'FLOKI-SAR' => 'FLOKI-SAR',
		'FLOKI-USD' => 'FLOKI-USD',
		'FLOKI-KWD' => 'FLOKI-KWD',
		'FLOKI-OMR' => 'FLOKI-OMR',
		'FLOKI-BHD' => 'FLOKI-BHD',
		'FLOKI-QAR' => 'FLOKI-QAR',
		'FLOKI-USDT' => 'FLOKI-USDT',

		'TUSD-AED' => 'TUSD-AED',
		'TUSD-SAR' => 'TUSD-SAR',
		'TUSD-USD' => 'TUSD-USD',
		'TUSD-KWD' => 'TUSD-KWD',
		'TUSD-OMR' => 'TUSD-OMR',
		'TUSD-BHD' => 'TUSD-BHD',
		'TUSD-QAR' => 'TUSD-QAR',
		'TUSD-USDT' => 'TUSD-USDT',

		'WILD-AED' => 'WILD-AED',
		'WILD-SAR' => 'WILD-SAR',
		'WILD-USD' => 'WILD-USD',
		'WILD-KWD' => 'WILD-KWD',
		'WILD-OMR' => 'WILD-OMR',
		'WILD-BHD' => 'WILD-BHD',
		'WILD-QAR' => 'WILD-QAR',
		'WILD-USDT' => 'WILD-USDT',

		'SUI-AED' => 'SUI-AED',
		'SUI-SAR' => 'SUI-SAR',
		'SUI-USD' => 'SUI-USD',
		'SUI-KWD' => 'SUI-KWD',
		'SUI-OMR' => 'SUI-OMR',
		'SUI-BHD' => 'SUI-BHD',
		'SUI-QAR' => 'SUI-QAR',
		'SUI-USDT' => 'SUI-USDT',

		'SEI-AED' => 'SEI-AED',
		'SEI-SAR' => 'SEI-SAR',
		'SEI-USD' => 'SEI-USD',
		'SEI-KWD' => 'SEI-KWD',
		'SEI-OMR' => 'SEI-OMR',
		'SEI-BHD' => 'SEI-BHD',
		'SEI-QAR' => 'SEI-QAR',
		'SEI-USDT' => 'SEI-USDT',

		'TON-AED' => 'TON-AED',
		'TON-SAR' => 'TON-SAR',
		'TON-USD' => 'TON-USD',
		'TON-KWD' => 'TON-KWD',
		'TON-OMR' => 'TON-OMR',
		'TON-BHD' => 'TON-BHD',
		'TON-QAR' => 'TON-QAR',
		'TON-USDT' => 'TON-USDT',

		'AMPL-AED' => 'AMPL-AED',
		'AMPL-SAR' => 'AMPL-SAR',
		'AMPL-USD' => 'AMPL-USD',
		'AMPL-KWD' => 'AMPL-KWD',
		'AMPL-OMR' => 'AMPL-OMR',
		'AMPL-BHD' => 'AMPL-BHD',
		'AMPL-QAR' => 'AMPL-QAR',
		'AMPL-USDT' => 'AMPL-USDT',
		'AMPL-BTC' => 'AMPL-BTC',

		'BEST-AED' => 'BEST-AED',
		'BEST-SAR' => 'BEST-SAR',
		'BEST-USD' => 'BEST-USD',
		'BEST-KWD' => 'BEST-KWD',
		'BEST-OMR' => 'BEST-OMR',
		'BEST-BHD' => 'BEST-BHD',
		'BEST-QAR' => 'BEST-QAR',

		'CELO-AED' => 'CELO-AED',
		'CELO-SAR' => 'CELO-SAR',
		'CELO-USD' => 'CELO-USD',
		'CELO-KWD' => 'CELO-KWD',
		'CELO-OMR' => 'CELO-OMR',
		'CELO-BHD' => 'CELO-BHD',
		'CELO-QAR' => 'CELO-QAR',
		'CELO-USDT' => 'CELO-USDT',

		'DUSK-AED' => 'DUSK-AED',
		'DUSK-SAR' => 'DUSK-SAR',
		'DUSK-USD' => 'DUSK-USD',
		'DUSK-KWD' => 'DUSK-KWD',
		'DUSK-OMR' => 'DUSK-OMR',
		'DUSK-BHD' => 'DUSK-BHD',
		'DUSK-QAR' => 'DUSK-QAR',

		'DVF-AED' => 'DVF-AED',
		'DVF-SAR' => 'DVF-SAR',
		'DVF-USD' => 'DVF-USD',
		'DVF-KWD' => 'DVF-KWD',
		'DVF-OMR' => 'DVF-OMR',
		'DVF-BHD' => 'DVF-BHD',
		'DVF-QAR' => 'DVF-QAR',

		'FCL-AED' => 'FCL-AED',
		'FCL-SAR' => 'FCL-SAR',
		'FCL-USD' => 'FCL-USD',
		'FCL-KWD' => 'FCL-KWD',
		'FCL-OMR' => 'FCL-OMR',
		'FCL-BHD' => 'FCL-BHD',
		'FCL-QAR' => 'FCL-QAR',
		'FCL-USDT' => 'FCL-USDT',

		'FLR-AED' => 'FLR-AED',
		'FLR-SAR' => 'FLR-SAR',
		'FLR-USD' => 'FLR-USD',
		'FLR-KWD' => 'FLR-KWD',
		'FLR-OMR' => 'FLR-OMR',
		'FLR-BHD' => 'FLR-BHD',
		'FLR-QAR' => 'FLR-QAR',
		'FLR-USDT' => 'FLR-USDT',

		'FORTH-AED' => 'FORTH-AED',
		'FORTH-SAR' => 'FORTH-SAR',
		'FORTH-USD' => 'FORTH-USD',
		'FORTH-KWD' => 'FORTH-KWD',
		'FORTH-OMR' => 'FORTH-OMR',
		'FORTH-BHD' => 'FORTH-BHD',
		'FORTH-QAR' => 'FORTH-QAR',
		'FORTH-USDT' => 'FORTH-USDT',

		'FUN-AED' => 'FUN-AED',
		'FUN-SAR' => 'FUN-SAR',
		'FUN-USD' => 'FUN-USD',
		'FUN-KWD' => 'FUN-KWD',
		'FUN-OMR' => 'FUN-OMR',
		'FUN-BHD' => 'FUN-BHD',
		'FUN-QAR' => 'FUN-QAR',

		'HMT-AED' => 'HMT-AED',
		'HMT-SAR' => 'HMT-SAR',
		'HMT-USD' => 'HMT-USD',
		'HMT-KWD' => 'HMT-KWD',
		'HMT-OMR' => 'HMT-OMR',
		'HMT-BHD' => 'HMT-BHD',
		'HMT-QAR' => 'HMT-QAR',
		'HMT-USDT' => 'HMT-USDT',

		'INJ-AED' => 'INJ-AED',
		'INJ-SAR' => 'INJ-SAR',
		'INJ-USD' => 'INJ-USD',
		'INJ-KWD' => 'INJ-KWD',
		'INJ-OMR' => 'INJ-OMR',
		'INJ-BHD' => 'INJ-BHD',
		'INJ-QAR' => 'INJ-QAR',
		'INJ-USDT' => 'INJ-USDT',

		'JUP-AED' => 'JUP-AED',
		'JUP-SAR' => 'JUP-SAR',
		'JUP-USD' => 'JUP-USD',
		'JUP-KWD' => 'JUP-KWD',
		'JUP-OMR' => 'JUP-OMR',
		'JUP-BHD' => 'JUP-BHD',
		'JUP-QAR' => 'JUP-QAR',
		'JUP-USDT' => 'JUP-USDT',

		'KAVA-AED' => 'KAVA-AED',
		'KAVA-SAR' => 'KAVA-SAR',
		'KAVA-USD' => 'KAVA-USD',
		'KAVA-KWD' => 'KAVA-KWD',
		'KAVA-OMR' => 'KAVA-OMR',
		'KAVA-BHD' => 'KAVA-BHD',
		'KAVA-QAR' => 'KAVA-QAR',
		'KAVA-USDT' => 'KAVA-USDT',

		'MEME-AED' => 'MEME-AED',
		'MEME-SAR' => 'MEME-SAR',
		'MEME-USD' => 'MEME-USD',
		'MEME-KWD' => 'MEME-KWD',
		'MEME-OMR' => 'MEME-OMR',
		'MEME-BHD' => 'MEME-BHD',
		'MEME-QAR' => 'MEME-QAR',
		'MEME-USDT' => 'MEME-USDT',

		'MIM-AED' => 'MIM-AED',
		'MIM-SAR' => 'MIM-SAR',
		'MIM-USD' => 'MIM-USD',
		'MIM-KWD' => 'MIM-KWD',
		'MIM-OMR' => 'MIM-OMR',
		'MIM-BHD' => 'MIM-BHD',
		'MIM-QAR' => 'MIM-QAR',
		'MIM-USDT' => 'MIM-USDT',

		'MLN-AED' => 'MLN-AED',
		'MLN-SAR' => 'MLN-SAR',
		'MLN-USD' => 'MLN-USD',
		'MLN-KWD' => 'MLN-KWD',
		'MLN-OMR' => 'MLN-OMR',
		'MLN-BHD' => 'MLN-BHD',
		'MLN-QAR' => 'MLN-QAR',

		'NEXO-AED' => 'NEXO-AED',
		'NEXO-SAR' => 'NEXO-SAR',
		'NEXO-USD' => 'NEXO-USD',
		'NEXO-KWD' => 'NEXO-KWD',
		'NEXO-OMR' => 'NEXO-OMR',
		'NEXO-BHD' => 'NEXO-BHD',
		'NEXO-QAR' => 'NEXO-QAR',
		'NEXO-USDT' => 'NEXO-USDT',
		'NEXO-BTC' => 'NEXO-BTC',

		'OGN-AED' => 'OGN-AED',
		'OGN-SAR' => 'OGN-SAR',
		'OGN-USD' => 'OGN-USD',
		'OGN-KWD' => 'OGN-KWD',
		'OGN-OMR' => 'OGN-OMR',
		'OGN-BHD' => 'OGN-BHD',
		'OGN-QAR' => 'OGN-QAR',
		'OGN-USDT' => 'OGN-USDT',

		'PAX-AED' => 'PAX-AED',
		'PAX-SAR' => 'PAX-SAR',
		'PAX-USD' => 'PAX-USD',
		'PAX-KWD' => 'PAX-KWD',
		'PAX-OMR' => 'PAX-OMR',
		'PAX-BHD' => 'PAX-BHD',
		'PAX-QAR' => 'PAX-QAR',
		'PAX-USDT' => 'PAX-USDT',

		'PLU-AED' => 'PLU-AED',
		'PLU-SAR' => 'PLU-SAR',
		'PLU-USD' => 'PLU-USD',
		'PLU-KWD' => 'PLU-KWD',
		'PLU-OMR' => 'PLU-OMR',
		'PLU-BHD' => 'PLU-BHD',
		'PLU-QAR' => 'PLU-QAR',

		'PNK-AED' => 'PNK-AED',
		'PNK-SAR' => 'PNK-SAR',
		'PNK-USD' => 'PNK-USD',
		'PNK-KWD' => 'PNK-KWD',
		'PNK-OMR' => 'PNK-OMR',
		'PNK-BHD' => 'PNK-BHD',
		'PNK-QAR' => 'PNK-QAR',

		'REQ-AED' => 'REQ-AED',
		'REQ-SAR' => 'REQ-SAR',
		'REQ-USD' => 'REQ-USD',
		'REQ-KWD' => 'REQ-KWD',
		'REQ-OMR' => 'REQ-OMR',
		'REQ-BHD' => 'REQ-BHD',
		'REQ-QAR' => 'REQ-QAR',

		'SIDUS-AED' => 'SIDUS-AED',
		'SIDUS-SAR' => 'SIDUS-SAR',
		'SIDUS-USD' => 'SIDUS-USD',
		'SIDUS-KWD' => 'SIDUS-KWD',
		'SIDUS-OMR' => 'SIDUS-OMR',
		'SIDUS-BHD' => 'SIDUS-BHD',
		'SIDUS-QAR' => 'SIDUS-QAR',

		'SPELL-AED' => 'SPELL-AED',
		'SPELL-SAR' => 'SPELL-SAR',
		'SPELL-USD' => 'SPELL-USD',
		'SPELL-KWD' => 'SPELL-KWD',
		'SPELL-OMR' => 'SPELL-OMR',
		'SPELL-BHD' => 'SPELL-BHD',
		'SPELL-QAR' => 'SPELL-QAR',
		'SPELL-USDT' => 'SPELL-USDT',

		'STG-AED' => 'STG-AED',
		'STG-SAR' => 'STG-SAR',
		'STG-USD' => 'STG-USD',
		'STG-KWD' => 'STG-KWD',
		'STG-OMR' => 'STG-OMR',
		'STG-BHD' => 'STG-BHD',
		'STG-QAR' => 'STG-QAR',
		'STG-USDT' => 'STG-USDT',

		'SUKU-AED' => 'SUKU-AED',
		'SUKU-SAR' => 'SUKU-SAR',
		'SUKU-USD' => 'SUKU-USD',
		'SUKU-KWD' => 'SUKU-KWD',
		'SUKU-OMR' => 'SUKU-OMR',
		'SUKU-BHD' => 'SUKU-BHD',
		'SUKU-QAR' => 'SUKU-QAR',
		'SUKU-USDT' => 'SUKU-USDT',

		'UOS-AED' => 'UOS-AED',
		'UOS-SAR' => 'UOS-SAR',
		'UOS-USD' => 'UOS-USD',
		'UOS-KWD' => 'UOS-KWD',
		'UOS-OMR' => 'UOS-OMR',
		'UOS-BHD' => 'UOS-BHD',
		'UOS-QAR' => 'UOS-QAR',
		'UOS-BTC' => 'UOS-BTC',

		'WOO-AED' => 'WOO-AED',
		'WOO-SAR' => 'WOO-SAR',
		'WOO-USD' => 'WOO-USD',
		'WOO-KWD' => 'WOO-KWD',
		'WOO-OMR' => 'WOO-OMR',
		'WOO-BHD' => 'WOO-BHD',
		'WOO-QAR' => 'WOO-QAR',
		'WOO-USDT' => 'WOO-USDT',

		'XTP-AED' => 'XTP-AED',
		'XTP-SAR' => 'XTP-SAR',
		'XTP-USD' => 'XTP-USD',
		'XTP-KWD' => 'XTP-KWD',
		'XTP-OMR' => 'XTP-OMR',
		'XTP-BHD' => 'XTP-BHD',
		'XTP-QAR' => 'XTP-QAR',
		'XTP-USDT' => 'XTP-USDT',

		'POL-AED' => 'POL-AED',
		'POL-SAR' => 'POL-SAR',
		'POL-USD' => 'POL-USD',
		'POL-KWD' => 'POL-KWD',
		'POL-OMR' => 'POL-OMR',
		'POL-BHD' => 'POL-BHD',
		'POL-QAR' => 'POL-QAR',
		'POL-USDT' => 'POL-USDT',

		'PEPE-AED' => 'PEPE-AED',
		'PEPE-SAR' => 'PEPE-SAR',
		'PEPE-USD' => 'PEPE-USD',
		'PEPE-KWD' => 'PEPE-KWD',
		'PEPE-OMR' => 'PEPE-OMR',
		'PEPE-BHD' => 'PEPE-BHD',
		'PEPE-QAR' => 'PEPE-QAR',
		'PEPE-USDT' => 'PEPE-USDT',

		'BONK-AED' => 'BONK-AED',
		'BONK-SAR' => 'BONK-SAR',
		'BONK-USD' => 'BONK-USD',
		'BONK-KWD' => 'BONK-KWD',
		'BONK-OMR' => 'BONK-OMR',
		'BONK-BHD' => 'BONK-BHD',
		'BONK-QAR' => 'BONK-QAR',
		'BONK-USDT' => 'BONK-USDT',

		'TOMI-AED' => 'TOMI-AED',
		'TOMI-SAR' => 'TOMI-SAR',
		'TOMI-USD' => 'TOMI-USD',
		'TOMI-KWD' => 'TOMI-KWD',
		'TOMI-OMR' => 'TOMI-OMR',
		'TOMI-BHD' => 'TOMI-BHD',
		'TOMI-QAR' => 'TOMI-QAR',
		'TOMI-USDT' => 'TOMI-USDT',

		'TURBO-AED' => 'TURBO-AED',
		'TURBO-SAR' => 'TURBO-SAR',
		'TURBO-USD' => 'TURBO-USD',
		'TURBO-KWD' => 'TURBO-KWD',
		'TURBO-OMR' => 'TURBO-OMR',
		'TURBO-BHD' => 'TURBO-BHD',
		'TURBO-QAR' => 'TURBO-QAR',
		'TURBO-USDT' => 'TURBO-USDT',

		'WBT-AED' => 'WBT-AED',
		'WBT-SAR' => 'WBT-SAR',
		'WBT-USD' => 'WBT-USD',
		'WBT-KWD' => 'WBT-KWD',
		'WBT-OMR' => 'WBT-OMR',
		'WBT-BHD' => 'WBT-BHD',
		'WBT-QAR' => 'WBT-QAR',
		'WBT-USDT' => 'WBT-USDT',

		'ENA-AED' => 'ENA-AED',
		'ENA-SAR' => 'ENA-SAR',
		'ENA-USD' => 'ENA-USD',
		'ENA-KWD' => 'ENA-KWD',
		'ENA-OMR' => 'ENA-OMR',
		'ENA-BHD' => 'ENA-BHD',
		'ENA-QAR' => 'ENA-QAR',
		'ENA-USDT' => 'ENA-USDT',

		'MEW-AED' => 'MEW-AED',
		'MEW-SAR' => 'MEW-SAR',
		'MEW-USD' => 'MEW-USD',
		'MEW-KWD' => 'MEW-KWD',
		'MEW-OMR' => 'MEW-OMR',
		'MEW-BHD' => 'MEW-BHD',
		'MEW-QAR' => 'MEW-QAR',
		'MEW-USDT' => 'MEW-USDT',

		'TIA-AED' => 'TIA-AED',
		'TIA-SAR' => 'TIA-SAR',
		'TIA-USD' => 'TIA-USD',
		'TIA-KWD' => 'TIA-KWD',
		'TIA-OMR' => 'TIA-OMR',
		'TIA-BHD' => 'TIA-BHD',
		'TIA-QAR' => 'TIA-QAR',
		'TIA-USDT' => 'TIA-USDT',

		'SWEAT-AED' => 'SWEAT-AED',
		'SWEAT-SAR' => 'SWEAT-SAR',
		'SWEAT-USD' => 'SWEAT-USD',
		'SWEAT-KWD' => 'SWEAT-KWD',
		'SWEAT-OMR' => 'SWEAT-OMR',
		'SWEAT-BHD' => 'SWEAT-BHD',
		'SWEAT-QAR' => 'SWEAT-QAR',
		'SWEAT-USDT' => 'SWEAT-USDT',

		'DOP-AED' => 'DOP-AED',
		'DOP-SAR' => 'DOP-SAR',
		'DOP-USD' => 'DOP-USD',
		'DOP-KWD' => 'DOP-KWD',
		'DOP-OMR' => 'DOP-OMR',
		'DOP-BHD' => 'DOP-BHD',
		'DOP-QAR' => 'DOP-QAR',
		'DOP-USDT' => 'DOP-USDT',

		'SPEC-AED' => 'SPEC-AED',
		'SPEC-SAR' => 'SPEC-SAR',
		'SPEC-USD' => 'SPEC-USD',
		'SPEC-KWD' => 'SPEC-KWD',
		'SPEC-OMR' => 'SPEC-OMR',
		'SPEC-BHD' => 'SPEC-BHD',
		'SPEC-QAR' => 'SPEC-QAR',
		'SPEC-USDT' => 'SPEC-USDT',

		'AIOZ-AED' => 'AIOZ-AED',
		'AIOZ-SAR' => 'AIOZ-SAR',
		'AIOZ-USD' => 'AIOZ-USD',
		'AIOZ-KWD' => 'AIOZ-KWD',
		'AIOZ-OMR' => 'AIOZ-OMR',
		'AIOZ-BHD' => 'AIOZ-BHD',
		'AIOZ-QAR' => 'AIOZ-QAR',

		'GOMINING-AED' => 'GOMINING-AED',
		'GOMINING-SAR' => 'GOMINING-SAR',
		'GOMINING-USD' => 'GOMINING-USD',
		'GOMINING-KWD' => 'GOMINING-KWD',
		'GOMINING-OMR' => 'GOMINING-OMR',
		'GOMINING-BHD' => 'GOMINING-BHD',
		'GOMINING-QAR' => 'GOMINING-QAR',
		'GOMINING-USDT' => 'GOMINING-USDT',

		'VELAR-AED' => 'VELAR-AED',
		'VELAR-SAR' => 'VELAR-SAR',
		'VELAR-USD' => 'VELAR-USD',
		'VELAR-KWD' => 'VELAR-KWD',
		'VELAR-OMR' => 'VELAR-OMR',
		'VELAR-BHD' => 'VELAR-BHD',
		'VELAR-QAR' => 'VELAR-QAR',
		'VELAR-USDT' => 'VELAR-USDT',

		'JUSTICE-AED' => 'JUSTICE-AED',
		'JUSTICE-SAR' => 'JUSTICE-SAR',
		'JUSTICE-USD' => 'JUSTICE-USD',
		'JUSTICE-KWD' => 'JUSTICE-KWD',
		'JUSTICE-OMR' => 'JUSTICE-OMR',
		'JUSTICE-BHD' => 'JUSTICE-BHD',
		'JUSTICE-QAR' => 'JUSTICE-QAR',
		'JUSTICE-USDT' => 'JUSTICE-USDT',

		'KAN-AED' => 'KAN-AED',
		'KAN-SAR' => 'KAN-SAR',
		'KAN-USD' => 'KAN-USD',
		'KAN-KWD' => 'KAN-KWD',
		'KAN-OMR' => 'KAN-OMR',
		'KAN-BHD' => 'KAN-BHD',
		'KAN-QAR' => 'KAN-QAR',
		'KAN-USDT' => 'KAN-USDT',

		'S-AED' => 'S-AED',
		'S-SAR' => 'S-SAR',
		'S-USD' => 'S-USD',
		'S-KWD' => 'S-KWD',
		'S-OMR' => 'S-OMR',
		'S-BHD' => 'S-BHD',
		'S-QAR' => 'S-QAR',
		'S-USDT' => 'S-USDT',
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

		// De-listed (keeping for historical support)
		'ZEC-AED', 'ZEC-USD',
		'ZEC-BTC',

		// De-listed (keeping for historical support)
		'XMR-AED', 'XMR-USD',
		'XMR-BTC',

		'XLM-AED', 'XLM-SAR', 'XLM-TRY', 'XLM-USD', 'XLM-KWD', 'XLM-OMR', 'XLM-BHD', 'XLM-QAR',
		'XLM-USDT', 'XLM-BTC',
		'XLM-ETH', // De-listed (keeping for historical support)

		'EOS-AED', 'EOS-SAR', 'EOS-TRY', 'EOS-USD', 'EOS-KWD', 'EOS-OMR', 'EOS-BHD', 'EOS-QAR',
		'EOS-USDT', 'EOS-BTC', 'EOS-ETH',

		// De-listed (keeping for historical support)
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

		// De-listed (keeping for historical support)
		'NEO-AED', 'NEO-SAR', 'NEO-TRY', 'NEO-USD', 'NEO-KWD', 'NEO-OMR', 'NEO-BHD', 'NEO-QAR',
		'NEO-USDT', 'NEO-BTC',
		'NEO-ETH',

		'XTZ-AED', 'XTZ-SAR', 'XTZ-TRY', 'XTZ-USD', 'XTZ-KWD', 'XTZ-OMR', 'XTZ-BHD', 'XTZ-QAR',
		'XTZ-USDT', 'XTZ-BTC',

		'LINK-AED', 'LINK-SAR', 'LINK-TRY', 'LINK-USD', 'LINK-KWD', 'LINK-OMR', 'LINK-BHD', 'LINK-QAR',
		'LINK-USDT',
		'LINK-BTC', 'LINK-ETH', // De-listed

		'DAI-AED', 'DAI-SAR', 'DAI-TRY', 'DAI-USD', 'DAI-KWD', 'DAI-OMR', 'DAI-BHD', 'DAI-QAR',
		'DAI-BTC', 'DAI-ETH', // De-listed

		'MKR-AED', 'MKR-SAR', 'MKR-TRY', 'MKR-USD', 'MKR-KWD', 'MKR-OMR', 'MKR-BHD', 'MKR-QAR',
		'MKR-USDT',
		'MKR-BTC', // De-listed

		// De-listed (keeping for historical support)
		'REP-AED', 'REP-USD',
		'REP-BTC',

		'KNC-AED', 'KNC-SAR', 'KNC-TRY', 'KNC-USD', 'KNC-KWD', 'KNC-OMR', 'KNC-BHD', 'KNC-QAR',
		'KNC-BTC', // De-listed

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

		// De-listed (keeping for historical support)
		'BNT-AED', 'BNT-SAR', 'BNT-TRY', 'BNT-USD', 'BNT-KWD', 'BNT-OMR', 'BNT-BHD', 'BNT-QAR',

		// De-listed (keeping for historical support)
		'ENJ-AED', 'ENJ-SAR', 'ENJ-TRY', 'ENJ-USD', 'ENJ-KWD', 'ENJ-OMR', 'ENJ-BHD', 'ENJ-QAR',

		'LRC-AED', 'LRC-SAR', 'LRC-TRY', 'LRC-USD', 'LRC-KWD', 'LRC-OMR', 'LRC-BHD', 'LRC-QAR',

		'MANA-AED', 'MANA-SAR', 'MANA-TRY', 'MANA-USD', 'MANA-KWD', 'MANA-OMR', 'MANA-BHD', 'MANA-QAR',
		'MANA-BTC',

		'MATIC-AED', 'MATIC-SAR', 'MATIC-TRY', 'MATIC-USD', 'MATIC-KWD', 'MATIC-OMR', 'MATIC-BHD', 'MATIC-QAR',
		'MATIC-USDT', 'MATIC-BTC',

		// De-listed (keeping for historical support)
		'STORJ-AED', 'STORJ-SAR', 'STORJ-TRY', 'STORJ-USD', 'STORJ-KWD', 'STORJ-OMR', 'STORJ-BHD', 'STORJ-QAR',

		'SUSHI-AED', 'SUSHI-SAR', 'SUSHI-TRY', 'SUSHI-USD', 'SUSHI-KWD', 'SUSHI-OMR', 'SUSHI-BHD', 'SUSHI-QAR',
		'SUSHI-USDT',

		'USDC-AED', 'USDC-SAR', 'USDC-TRY', 'USDC-USD', 'USDC-KWD', 'USDC-OMR', 'USDC-BHD', 'USDC-QAR',
		'USDC-USDT',

		// De-listed (keeping for historical support)
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

		// De-listed (keeping for historical support)
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
		'ATOM-USDT', 'ATOM-BTC',
		'ATOM-ETH', // De-listed

		'1INCH-AED', '1INCH-SAR', '1INCH-TRY', '1INCH-USD', '1INCH-KWD', '1INCH-OMR', '1INCH-BHD', '1INCH-QAR',
		'1INCH-USDT',

		// De-listed (keeping for historical support)
		'ANT-AED', 'ANT-SAR', 'ANT-TRY', 'ANT-USD', 'ANT-KWD', 'ANT-OMR', 'ANT-BHD', 'ANT-QAR',
		'ANT-BTC',
		'ANT-ETH', // De-listed

		'AXS-AED', 'AXS-SAR', 'AXS-TRY', 'AXS-USD', 'AXS-KWD', 'AXS-OMR', 'AXS-BHD', 'AXS-QAR',
		'AXS-USDT',

		'BAND-AED', 'BAND-SAR', 'BAND-TRY', 'BAND-USD', 'BAND-KWD', 'BAND-OMR', 'BAND-BHD', 'BAND-QAR',
		'BAND-USDT',

		'CHZ-AED', 'CHZ-SAR', 'CHZ-TRY', 'CHZ-USD', 'CHZ-KWD', 'CHZ-OMR', 'CHZ-BHD', 'CHZ-QAR',
		'CHZ-USDT',

		'CRV-AED', 'CRV-SAR', 'CRV-TRY', 'CRV-USD', 'CRV-KWD', 'CRV-OMR', 'CRV-BHD', 'CRV-QAR',
		'CRV-USDT',

		// De-listed (keeping for historical support)
		'DGB-AED', 'DGB-SAR', 'DGB-TRY', 'DGB-USD', 'DGB-KWD', 'DGB-OMR', 'DGB-BHD', 'DGB-QAR',

		// De-listed (keeping for historical support)
		'EGLD-AED', 'EGLD-SAR', 'EGLD-TRY', 'EGLD-USD', 'EGLD-KWD', 'EGLD-OMR', 'EGLD-BHD', 'EGLD-QAR',
		'EGLD-USDT',

		// De-listed (keeping for historical support)
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

		// De-listed (keeping for historical support)
		'IOTA-AED', 'IOTA-SAR', 'IOTA-TRY', 'IOTA-USD', 'IOTA-KWD', 'IOTA-OMR', 'IOTA-BHD', 'IOTA-QAR',
		'IOTA-BTC',
		'IOTA-ETH',

		'KSM-AED', 'KSM-SAR', 'KSM-TRY', 'KSM-USD', 'KSM-KWD', 'KSM-OMR', 'KSM-BHD', 'KSM-QAR',
		'KSM-USDT',

		'LEO-AED', 'LEO-SAR', 'LEO-TRY', 'LEO-USD', 'LEO-KWD', 'LEO-OMR', 'LEO-BHD', 'LEO-QAR',
		'LEO-USDT', 'LEO-BTC', 'LEO-ETH',

		// NEXO is De-listed (keeping for historical support)
		'NEXO-AED', 'NEXO-SAR', 'NEXO-TRY', 'NEXO-USD',
		'NEXO-USDT', 'NEXO-BTC',

		'OCEAN-AED', 'OCEAN-SAR', 'OCEAN-TRY', 'OCEAN-USD', 'OCEAN-KWD', 'OCEAN-OMR', 'OCEAN-BHD', 'OCEAN-QAR',
		'OCEAN-USDT',

		// De-listed (keeping for historical support)
		'QTUM-AED', 'QTUM-SAR', 'QTUM-TRY', 'QTUM-USD', 'QTUM-KWD', 'QTUM-OMR', 'QTUM-BHD', 'QTUM-QAR',
		'QTUM-BTC',

		'SNX-AED', 'SNX-SAR', 'SNX-TRY', 'SNX-USD', 'SNX-KWD', 'SNX-OMR', 'SNX-BHD', 'SNX-QAR',
		'SNX-USDT',

		// De-listed (keeping for historical support)
		'THETA-AED', 'THETA-SAR', 'THETA-TRY', 'THETA-USD', 'THETA-KWD', 'THETA-OMR', 'THETA-BHD', 'THETA-QAR',
		'THETA-USDT',

		'TRX-AED', 'TRX-SAR', 'TRX-TRY', 'TRX-USD', 'TRX-KWD', 'TRX-OMR', 'TRX-BHD', 'TRX-QAR',
		'TRX-USDT', 'TRX-BTC', 'TRX-ETH',

		// TUSD is De-listed (keeping for historical support)
		'TUSD-TRY',

		// UST is De-listed (keeping for historical support)
		'UST-AED', 'UST-SAR', 'UST-TRY', 'UST-USD',
		'UST-USDT',

		// De-listed (keeping for historical support)
		'VET-AED', 'VET-SAR', 'VET-TRY', 'VET-USD', 'VET-KWD', 'VET-OMR', 'VET-BHD', 'VET-QAR',
		'VET-USDT', 'VET-BTC',

		// De-listed (keeping for historical support)
		'XVG-AED', 'XVG-SAR', 'XVG-TRY', 'XVG-USD', 'XVG-KWD', 'XVG-OMR', 'XVG-BHD', 'XVG-QAR',

		'LUNA2-AED', 'LUNA2-SAR', 'LUNA2-TRY', 'LUNA2-USD', 'LUNA2-KWD', 'LUNA2-OMR', 'LUNA2-BHD', 'LUNA2-QAR',
		'LUNA2-USDT',

		'XAUT-AED', 'XAUT-SAR', 'XAUT-USD', 'XAUT-USDT', 'XAUT-KWD', 'XAUT-OMR', 'XAUT-BHD', 'XAUT-QAR',
		'XAUT-BTC',

		'ARB-AED', 'ARB-SAR', 'ARB-USD', 'ARB-KWD', 'ARB-OMR', 'ARB-BHD', 'ARB-QAR',
		'ARB-USDT',

		'APE-AED', 'APE-SAR', 'APE-USD', 'APE-KWD', 'APE-OMR', 'APE-BHD', 'APE-QAR',
		'APE-USDT',

		'SAND-AED', 'SAND-SAR', 'SAND-USD', 'SAND-KWD', 'SAND-OMR', 'SAND-BHD', 'SAND-QAR',
		'SAND-USDT',

		'LDO-AED', 'LDO-SAR', 'LDO-USD', 'LDO-KWD', 'LDO-OMR', 'LDO-BHD', 'LDO-QAR',
		'LDO-USDT',

		'FET-AED', 'FET-SAR', 'FET-USD', 'FET-KWD', 'FET-OMR', 'FET-BHD', 'FET-QAR',
		'FET-USDT',

		'XDC-AED', 'XDC-SAR', 'XDC-USD', 'XDC-KWD', 'XDC-OMR', 'XDC-BHD', 'XDC-QAR',
		'XDC-USDT',

		'BTG-AED', 'BTG-SAR', 'BTG-USD', 'BTG-KWD', 'BTG-OMR', 'BTG-BHD', 'BTG-QAR',

		'RLY-AED', 'RLY-SAR', 'RLY-USD', 'RLY-KWD', 'RLY-OMR', 'RLY-BHD', 'RLY-QAR',
		'RLY-USDT',

		// De-listed (keeping for historical support)
		'RBTC-AED', 'RBTC-SAR', 'RBTC-USD', 'RBTC-KWD', 'RBTC-OMR', 'RBTC-BHD', 'RBTC-QAR',

		'VRA-AED', 'VRA-SAR', 'VRA-USD', 'VRA-KWD', 'VRA-OMR', 'VRA-BHD', 'VRA-QAR',
		'VRA-USDT',

		// De-listed (keeping for historical support)
		'UTK-AED', 'UTK-SAR', 'UTK-USD', 'UTK-KWD', 'UTK-OMR', 'UTK-BHD', 'UTK-QAR',

		'SGB-AED', 'SGB-SAR', 'SGB-USD', 'SGB-KWD', 'SGB-OMR', 'SGB-BHD', 'SGB-QAR',
		'SGB-USDT',

		'BLUR-AED', 'BLUR-SAR', 'BLUR-USD', 'BLUR-KWD', 'BLUR-OMR', 'BLUR-BHD', 'BLUR-QAR',
		'BLUR-USDT',

		'OP-AED', 'OP-SAR', 'OP-USD', 'OP-KWD', 'OP-OMR', 'OP-BHD', 'OP-QAR',
		'OP-USDT',

		'OPEN-AED', 'OPEN-SAR', 'OPEN-USD', 'OPEN-KWD', 'OPEN-OMR', 'OPEN-BHD', 'OPEN-QAR',
		'OPEN-USDT',

		'BOSON-AED', 'BOSON-SAR', 'BOSON-USD', 'BOSON-KWD', 'BOSON-OMR', 'BOSON-BHD', 'BOSON-QAR',
		'BOSON-USDT',

		'FLOKI-AED', 'FLOKI-SAR', 'FLOKI-USD', 'FLOKI-KWD', 'FLOKI-OMR', 'FLOKI-BHD', 'FLOKI-QAR',
		'FLOKI-USDT',

		'TUSD-AED', 'TUSD-SAR', 'TUSD-USD', 'TUSD-KWD', 'TUSD-OMR', 'TUSD-BHD', 'TUSD-QAR',
		'TUSD-USDT',

		'WILD-AED', 'WILD-SAR', 'WILD-USD', 'WILD-KWD', 'WILD-OMR', 'WILD-BHD', 'WILD-QAR',
		'WILD-USDT',

		'SUI-AED', 'SUI-SAR', 'SUI-USD', 'SUI-KWD', 'SUI-OMR', 'SUI-BHD', 'SUI-QAR',
		'SUI-USDT',

		'SEI-AED', 'SEI-SAR', 'SEI-USD', 'SEI-KWD', 'SEI-OMR', 'SEI-BHD', 'SEI-QAR',
		'SEI-USDT',

		'TON-AED', 'TON-SAR', 'TON-USD', 'TON-KWD', 'TON-OMR', 'TON-BHD', 'TON-QAR',
		'TON-USDT',

		'AMPL-AED', 'AMPL-SAR', 'AMPL-USD', 'AMPL-KWD', 'AMPL-OMR', 'AMPL-BHD', 'AMPL-QAR',
		'AMPL-USDT', 'AMPL-BTC',

		'BEST-AED', 'BEST-SAR', 'BEST-USD', 'BEST-KWD', 'BEST-OMR', 'BEST-BHD', 'BEST-QAR',

		'CELO-AED', 'CELO-SAR', 'CELO-USD', 'CELO-KWD', 'CELO-OMR', 'CELO-BHD', 'CELO-QAR',
		'CELO-USDT',

		'DUSK-AED', 'DUSK-SAR', 'DUSK-USD', 'DUSK-KWD', 'DUSK-OMR', 'DUSK-BHD', 'DUSK-QAR',

		'DVF-AED', 'DVF-SAR', 'DVF-USD', 'DVF-KWD', 'DVF-OMR', 'DVF-BHD', 'DVF-QAR',

		'FCL-AED', 'FCL-SAR', 'FCL-USD', 'FCL-KWD', 'FCL-OMR', 'FCL-BHD', 'FCL-QAR',
		'FCL-USDT',

		'FLR-AED', 'FLR-SAR', 'FLR-USD', 'FLR-KWD', 'FLR-OMR', 'FLR-BHD', 'FLR-QAR',
		'FLR-USDT',

		'FORTH-AED', 'FORTH-SAR', 'FORTH-USD', 'FORTH-KWD', 'FORTH-OMR', 'FORTH-BHD', 'FORTH-QAR',
		'FORTH-USDT',

		'FUN-AED', 'FUN-SAR', 'FUN-USD', 'FUN-KWD', 'FUN-OMR', 'FUN-BHD', 'FUN-QAR',

		'HMT-AED', 'HMT-SAR', 'HMT-USD', 'HMT-KWD', 'HMT-OMR', 'HMT-BHD', 'HMT-QAR',
		'HMT-USDT',

		'INJ-AED', 'INJ-SAR', 'INJ-USD', 'INJ-KWD', 'INJ-OMR', 'INJ-BHD', 'INJ-QAR',
		'INJ-USDT',

		'JUP-AED', 'JUP-SAR', 'JUP-USD', 'JUP-KWD', 'JUP-OMR', 'JUP-BHD', 'JUP-QAR',
		'JUP-USDT',

		'KAVA-AED', 'KAVA-SAR', 'KAVA-USD', 'KAVA-KWD', 'KAVA-OMR', 'KAVA-BHD', 'KAVA-QAR',
		'KAVA-USDT',

		'MEME-AED', 'MEME-SAR', 'MEME-USD', 'MEME-KWD', 'MEME-OMR', 'MEME-BHD', 'MEME-QAR',
		'MEME-USDT',

		'MIM-AED', 'MIM-SAR', 'MIM-USD', 'MIM-KWD', 'MIM-OMR', 'MIM-BHD', 'MIM-QAR',
		'MIM-USDT',

		'MLN-AED', 'MLN-SAR', 'MLN-USD', 'MLN-KWD', 'MLN-OMR', 'MLN-BHD', 'MLN-QAR',

		'NEXO-AED', 'NEXO-SAR', 'NEXO-USD', 'NEXO-KWD', 'NEXO-OMR', 'NEXO-BHD', 'NEXO-QAR',
		'NEXO-USDT', 'NEXO-BTC',

		'OGN-AED', 'OGN-SAR', 'OGN-USD', 'OGN-KWD', 'OGN-OMR', 'OGN-BHD', 'OGN-QAR',
		'OGN-USDT',

		'PAX-AED', 'PAX-SAR', 'PAX-USD', 'PAX-KWD', 'PAX-OMR', 'PAX-BHD', 'PAX-QAR',
		'PAX-USDT',

		'PLU-AED', 'PLU-SAR', 'PLU-USD', 'PLU-KWD', 'PLU-OMR', 'PLU-BHD', 'PLU-QAR',

		'PNK-AED', 'PNK-SAR', 'PNK-USD', 'PNK-KWD', 'PNK-OMR', 'PNK-BHD', 'PNK-QAR',

		'REQ-AED', 'REQ-SAR', 'REQ-USD', 'REQ-KWD', 'REQ-OMR', 'REQ-BHD', 'REQ-QAR',

		'SIDUS-AED', 'SIDUS-SAR', 'SIDUS-USD', 'SIDUS-KWD', 'SIDUS-OMR', 'SIDUS-BHD', 'SIDUS-QAR',

		'SPELL-AED', 'SPELL-SAR', 'SPELL-USD', 'SPELL-KWD', 'SPELL-OMR', 'SPELL-BHD', 'SPELL-QAR',
		'SPELL-USDT',

		'STG-AED', 'STG-SAR', 'STG-USD', 'STG-KWD', 'STG-OMR', 'STG-BHD', 'STG-QAR',
		'STG-USDT',

		'SUKU-AED', 'SUKU-SAR', 'SUKU-USD', 'SUKU-KWD', 'SUKU-OMR', 'SUKU-BHD', 'SUKU-QAR',
		'SUKU-USDT',

		'UOS-AED', 'UOS-SAR', 'UOS-USD', 'UOS-KWD', 'UOS-OMR', 'UOS-BHD', 'UOS-QAR',
		'UOS-BTC',

		'WOO-AED', 'WOO-SAR', 'WOO-USD', 'WOO-KWD', 'WOO-OMR', 'WOO-BHD', 'WOO-QAR',
		'WOO-USDT',

		'XTP-AED', 'XTP-SAR', 'XTP-USD', 'XTP-KWD', 'XTP-OMR', 'XTP-BHD', 'XTP-QAR',
		'XTP-USDT',

		'POL-AED', 'POL-SAR', 'POL-USD', 'POL-KWD', 'POL-OMR', 'POL-BHD', 'POL-QAR',
		'POL-USDT',

		'PEPE-AED', 'PEPE-SAR', 'PEPE-USD', 'PEPE-KWD', 'PEPE-OMR', 'PEPE-BHD', 'PEPE-QAR',
		'PEPE-USDT',

		'BONK-AED', 'BONK-SAR', 'BONK-USD', 'BONK-KWD', 'BONK-OMR', 'BONK-BHD', 'BONK-QAR',
		'BONK-USDT',

		'TOMI-AED', 'TOMI-SAR', 'TOMI-USD', 'TOMI-KWD', 'TOMI-OMR', 'TOMI-BHD', 'TOMI-QAR',
		'TOMI-USDT',

		'TURBO-AED', 'TURBO-SAR', 'TURBO-USD', 'TURBO-KWD', 'TURBO-OMR', 'TURBO-BHD', 'TURBO-QAR',
		'TURBO-USDT',

		'WBT-AED', 'WBT-SAR', 'WBT-USD', 'WBT-KWD', 'WBT-OMR', 'WBT-BHD', 'WBT-QAR',
		'WBT-USDT',

		'ENA-AED', 'ENA-SAR', 'ENA-USD', 'ENA-KWD', 'ENA-OMR', 'ENA-BHD', 'ENA-QAR',
		'ENA-USDT',

		'MEW-AED', 'MEW-SAR', 'MEW-USD', 'MEW-KWD', 'MEW-OMR', 'MEW-BHD', 'MEW-QAR',
		'MEW-USDT',

		'TIA-AED', 'TIA-SAR', 'TIA-USD', 'TIA-KWD', 'TIA-OMR', 'TIA-BHD', 'TIA-QAR',
		'TIA-USDT',

		'SWEAT-AED', 'SWEAT-SAR', 'SWEAT-USD', 'SWEAT-KWD', 'SWEAT-OMR', 'SWEAT-BHD', 'SWEAT-QAR',
		'SWEAT-USDT',

		'DOP-AED', 'DOP-SAR', 'DOP-USD', 'DOP-KWD', 'DOP-OMR', 'DOP-BHD', 'DOP-QAR',
		'DOP-USDT',

		'SPEC-AED', 'SPEC-SAR', 'SPEC-USD', 'SPEC-KWD', 'SPEC-OMR', 'SPEC-BHD', 'SPEC-QAR',
		'SPEC-USDT',

		'AIOZ-AED', 'AIOZ-SAR', 'AIOZ-USD', 'AIOZ-KWD', 'AIOZ-OMR', 'AIOZ-BHD', 'AIOZ-QAR',

		'GOMINING-AED', 'GOMINING-SAR', 'GOMINING-USD', 'GOMINING-KWD', 'GOMINING-OMR', 'GOMINING-BHD', 'GOMINING-QAR',
		'GOMINING-USDT',

		'VELAR-AED', 'VELAR-SAR', 'VELAR-USD', 'VELAR-KWD', 'VELAR-OMR', 'VELAR-BHD', 'VELAR-QAR',
		'VELAR-USDT',

		'JUSTICE-AED', 'JUSTICE-SAR', 'JUSTICE-USD', 'JUSTICE-KWD', 'JUSTICE-OMR', 'JUSTICE-BHD', 'JUSTICE-QAR',
		'JUSTICE-USDT',

		'KAN-AED', 'KAN-SAR', 'KAN-USD', 'KAN-KWD', 'KAN-OMR', 'KAN-BHD', 'KAN-QAR',
		'KAN-USDT',

		'S-AED', 'S-SAR', 'S-USD', 'S-KWD', 'S-OMR', 'S-BHD', 'S-QAR',
		'S-USDT',
	];
	const FIAT_CRYPTOCURRENCY_CODES = ['USD', 'AED', 'SAR', 'TRY', 'KWD', 'OMR', 'QAR', 'BHD'];
	const VALID_BASE_CRYPTOCURRENCIES = ['USD', 'AED', 'BTC', 'ETH', 'USDT', 'SAR', 'TRY', 'KWD', 'OMR', 'QAR', 'BHD']; // This is ment to be quote cryptocurrency codes
	const STABLE_CRYPTOCURRENCY_CODES = ['USDC', 'USDT', 'DAI', 'UST', 'TUSD', 'MIM', 'PAX'];

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
