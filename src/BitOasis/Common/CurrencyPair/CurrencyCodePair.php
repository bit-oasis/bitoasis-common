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
		'BTC-USDT' => 'BTC-USDT',

		'ETH-AED' => 'ETH-AED',
		'ETH-SAR' => 'ETH-SAR',
		'ETH-TRY' => 'ETH-TRY',
		'ETH-USD' => 'ETH-USD',
		'ETH-USDT' => 'ETH-USDT',
		'ETH-BTC' => 'ETH-BTC',

		'BCH-AED' => 'BCH-AED',
		'BCH-SAR' => 'BCH-SAR',
		'BCH-TRY' => 'BCH-TRY',
		'BCH-USD' => 'BCH-USD',
		'BCH-BTC' => 'BCH-BTC',
//		'BCH-ETH' => 'BCH-ETH', No longer supported

		'XRP-AED' => 'XRP-AED',
		'XRP-SAR' => 'XRP-SAR',
		'XRP-TRY' => 'XRP-TRY',
		'XRP-USD' => 'XRP-USD',
		'XRP-USDT' => 'XRP-USDT',
		'XRP-BTC' => 'XRP-BTC',

		'ETC-AED' => 'ETC-AED',
		'ETC-BTC' => 'ETC-BTC',

		'LTC-AED' => 'LTC-AED',
		'LTC-SAR' => 'LTC-SAR',
		'LTC-TRY' => 'LTC-TRY',
		'LTC-USD' => 'LTC-USD',
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
		'XLM-USDT' => 'XLM-USDT',
		'XLM-BTC' => 'XLM-BTC',
		'XLM-ETH' => 'XLM-ETH',

		'EOS-AED' => 'EOS-AED',
		'EOS-SAR' => 'EOS-SAR',
		'EOS-TRY' => 'EOS-TRY',
		'EOS-USD' => 'EOS-USD',
		'EOS-USDT' => 'EOS-USDT',
		'EOS-BTC' => 'EOS-BTC',
		'EOS-ETH' => 'EOS-ETH',

		'BSV-AED' => 'BSV-AED',
		'BSV-BTC' => 'BSV-BTC',

		'OMG-AED' => 'OMG-AED',
		'OMG-SAR' => 'OMG-SAR',
		'OMG-TRY' => 'OMG-TRY',
		'OMG-USD' => 'OMG-USD',
		'OMG-BTC' => 'OMG-BTC',
		'OMG-ETH' => 'OMG-ETH',

		'ZRX-AED' => 'ZRX-AED',
		'ZRX-SAR' => 'ZRX-SAR',
		'ZRX-TRY' => 'ZRX-TRY',
		'ZRX-USD' => 'ZRX-USD',
		'ZRX-BTC' => 'ZRX-BTC',
		'ZRX-ETH' => 'ZRX-ETH',

		'BAT-AED' => 'BAT-AED',
		'BAT-SAR' => 'BAT-SAR',
		'BAT-TRY' => 'BAT-TRY',
		'BAT-USD' => 'BAT-USD',
		'BAT-USDT' => 'BAT-USDT',
		'BAT-BTC' => 'BAT-BTC',

		'ALGO-AED' => 'ALGO-AED',
		'ALGO-SAR' => 'ALGO-SAR',
		'ALGO-TRY' => 'ALGO-TRY',
		'ALGO-USD' => 'ALGO-USD',
		'ALGO-USDT' => 'ALGO-USDT',
		'ALGO-BTC' => 'ALGO-BTC',

		'USDT-AED' => 'USDT-AED',
		'USDT-SAR' => 'USDT-SAR',
		'USDT-TRY' => 'USDT-TRY',
		'USDT-USD' => 'USDT-USD',

		'NEO-AED' => 'NEO-AED',
		'NEO-SAR' => 'NEO-SAR',
		'NEO-TRY' => 'NEO-TRY',
		'NEO-USD' => 'NEO-USD',
		'NEO-USDT' => 'NEO-USDT',
		'NEO-BTC' => 'NEO-BTC',
		'NEO-ETH' => 'NEO-ETH',

		'XTZ-AED' => 'XTZ-AED',
		'XTZ-SAR' => 'XTZ-SAR',
		'XTZ-TRY' => 'XTZ-TRY',
		'XTZ-USD' => 'XTZ-USD',
		'XTZ-USDT' => 'XTZ-USDT',
		'XTZ-BTC' => 'XTZ-BTC',

		'LINK-AED' => 'LINK-AED',
		'LINK-SAR' => 'LINK-SAR',
		'LINK-TRY' => 'LINK-TRY',
		'LINK-USD' => 'LINK-USD',
		'LINK-USDT' => 'LINK-USDT',
		'LINK-BTC' => 'LINK-BTC',
		'LINK-ETH' => 'LINK-ETH',

		'DAI-AED' => 'DAI-AED',
		'DAI-SAR' => 'DAI-SAR',
		'DAI-TRY' => 'DAI-TRY',
		'DAI-USD' => 'DAI-USD',
		'DAI-BTC' => 'DAI-BTC',
		'DAI-ETH' => 'DAI-ETH',

		'MKR-AED' => 'MKR-AED',
		'MKR-SAR' => 'MKR-SAR',
		'MKR-TRY' => 'MKR-TRY',
		'MKR-USD' => 'MKR-USD',
		'MKR-USDT' => 'MKR-USDT',
		'MKR-BTC' => 'MKR-BTC',

		'REP-AED' => 'REP-AED',
		'REP-BTC' => 'REP-BTC',

		'KNC-AED' => 'KNC-AED',
		'KNC-SAR' => 'KNC-SAR',
		'KNC-TRY' => 'KNC-TRY',
		'KNC-USD' => 'KNC-USD',
		'KNC-BTC' => 'KNC-BTC',

		'UNI-AED' => 'UNI-AED',
		'UNI-SAR' => 'UNI-SAR',
		'UNI-TRY' => 'UNI-TRY',
		'UNI-USD' => 'UNI-USD',
		'UNI-USDT' => 'UNI-USDT',

		'YFI-AED' => 'YFI-AED',
		'YFI-SAR' => 'YFI-SAR',
		'YFI-TRY' => 'YFI-TRY',
		'YFI-USD' => 'YFI-USD',
		'YFI-USDT' => 'YFI-USDT',

		'BAL-AED' => 'BAL-AED',
		'BAL-SAR' => 'BAL-SAR',
		'BAL-TRY' => 'BAL-TRY',
		'BAL-USD' => 'BAL-USD',
		'BAL-USDT' => 'BAL-USDT',

		'COMP-AED' => 'COMP-AED',
		'COMP-SAR' => 'COMP-SAR',
		'COMP-TRY' => 'COMP-TRY',
		'COMP-USD' => 'COMP-USD',
		'COMP-USDT' => 'COMP-USDT',

		'DOGE-AED' => 'DOGE-AED',
		'DOGE-SAR' => 'DOGE-SAR',
		'DOGE-TRY' => 'DOGE-TRY',
		'DOGE-USD' => 'DOGE-USD',
		'DOGE-BTC' => 'DOGE-BTC',
		'DOGE-USDT' => 'DOGE-USDT',

		'AAVE-AED' => 'AAVE-AED',
		'AAVE-SAR' => 'AAVE-SAR',
		'AAVE-TRY' => 'AAVE-TRY',
		'AAVE-USD' => 'AAVE-USD',
		'AAVE-USDT' => 'AAVE-USDT',

		'BNT-AED' => 'BNT-AED',
		'BNT-SAR' => 'BNT-SAR',
		'BNT-TRY' => 'BNT-TRY',
		'BNT-USD' => 'BNT-USD',

		'ENJ-AED' => 'ENJ-AED',
		'ENJ-SAR' => 'ENJ-SAR',
		'ENJ-TRY' => 'ENJ-TRY',
		'ENJ-USD' => 'ENJ-USD',

		'LRC-AED' => 'LRC-AED',
		'LRC-SAR' => 'LRC-SAR',
		'LRC-TRY' => 'LRC-TRY',
		'LRC-USD' => 'LRC-USD',

		'MANA-AED' => 'MANA-AED',
		'MANA-SAR' => 'MANA-SAR',
		'MANA-TRY' => 'MANA-TRY',
		'MANA-USD' => 'MANA-USD',
		'MANA-BTC' => 'MANA-BTC',

		'MATIC-AED' => 'MATIC-AED',
		'MATIC-SAR' => 'MATIC-SAR',
		'MATIC-TRY' => 'MATIC-TRY',
		'MATIC-USD' => 'MATIC-USD',
		'MATIC-USDT' => 'MATIC-USDT',
		'MATIC-BTC' => 'MATIC-BTC',

		'STORJ-AED' => 'STORJ-AED',
		'STORJ-SAR' => 'STORJ-SAR',
		'STORJ-TRY' => 'STORJ-TRY',
		'STORJ-USD' => 'STORJ-USD',

		'SUSHI-AED' => 'SUSHI-AED',
		'SUSHI-SAR' => 'SUSHI-SAR',
		'SUSHI-TRY' => 'SUSHI-TRY',
		'SUSHI-USD' => 'SUSHI-USD',
		'SUSHI-USDT' => 'SUSHI-USDT',

		'USDC-AED' => 'USDC-AED',
		'USDC-SAR' => 'USDC-SAR',
		'USDC-TRY' => 'USDC-TRY',
		'USDC-USD' => 'USDC-USD',
		'USDC-USDT' => 'USDC-USDT',

		'WAVES-AED' => 'WAVES-AED',
		'WAVES-SAR' => 'WAVES-SAR',
		'WAVES-TRY' => 'WAVES-TRY',
		'WAVES-USD' => 'WAVES-USD',
		'WAVES-USDT' => 'WAVES-USDT',

		'SOL-AED' => 'SOL-AED',
		'SOL-SAR' => 'SOL-SAR',
		'SOL-TRY' => 'SOL-TRY',
		'SOL-USD' => 'SOL-USD',
		'SOL-USDT' => 'SOL-USDT',
		'SOL-BTC' => 'SOL-BTC',

		'ADA-AED' => 'ADA-AED',
		'ADA-SAR' => 'ADA-SAR',
		'ADA-TRY' => 'ADA-TRY',
		'ADA-USD' => 'ADA-USD',
		'ADA-USDT' => 'ADA-USDT',

		'DOT-AED' => 'DOT-AED',
		'DOT-SAR' => 'DOT-SAR',
		'DOT-TRY' => 'DOT-TRY',
		'DOT-USD' => 'DOT-USD',
		'DOT-USDT' => 'DOT-USDT',
		'DOT-BTC' => 'DOT-BTC',

		'SHIB-AED' => 'SHIB-AED',
		'SHIB-SAR' => 'SHIB-SAR',
		'SHIB-TRY' => 'SHIB-TRY',
		'SHIB-USD' => 'SHIB-USD',
		'SHIB-USDT' => 'SHIB-USDT',

		'AVAX-AED' => 'AVAX-AED',
		'AVAX-SAR' => 'AVAX-SAR',
		'AVAX-USDT' => 'AVAX-USDT',

		'LUNA-AED' => 'LUNA-AED',
		'LUNA-SAR' => 'LUNA-SAR',
		'LUNA-TRY' => 'LUNA-TRY',
		'LUNA-USD' => 'LUNA-USD',
		'LUNA-USDT' => 'LUNA-USDT',
		'LUNA-BTC' => 'LUNA-BTC',
		'LUNA-ETH' => 'LUNA-ETH',

		'NEAR-AED' => 'NEAR-AED',
		'NEAR-SAR' => 'NEAR-SAR',
		'NEAR-TRY' => 'NEAR-TRY',
		'NEAR-USD' => 'NEAR-USD',
		'NEAR-USDT' => 'NEAR-USDT',

		'FTM-AED' => 'FTM-AED',
		'FTM-SAR' => 'FTM-SAR',
		'FTM-TRY' => 'FTM-TRY',
		'FTM-USD' => 'FTM-USD',
		'FTM-USDT' => 'FTM-USDT',

		'WBTC-AED' => 'WBTC-AED',
		'WBTC-SAR' => 'WBTC-SAR',
		'WBTC-TRY' => 'WBTC-TRY',
		'WBTC-USD' => 'WBTC-USD',

		'ATOM-AED' => 'ATOM-AED',
		'ATOM-SAR' => 'ATOM-SAR',
		'ATOM-TRY' => 'ATOM-TRY',
		'ATOM-USD' => 'ATOM-USD',
		'ATOM-USDT' => 'ATOM-USDT',
		'ATOM-BTC' => 'ATOM-BTC',
		'ATOM-ETH' => 'ATOM-ETH',

		'1INCH-AED' => '1INCH-AED',
		'1INCH-SAR' => '1INCH-SAR',
		'1INCH-TRY' => '1INCH-TRY',
		'1INCH-USD' => '1INCH-USD',
		'1INCH-USDT' => '1INCH-USDT',

		'ANT-AED' => 'ANT-AED',
		'ANT-SAR' => 'ANT-SAR',
		'ANT-TRY' => 'ANT-TRY',
		'ANT-USD' => 'ANT-USD',
		'ANT-BTC' => 'ANT-BTC',
		'ANT-ETH' => 'ANT-ETH',

		'AXS-AED' => 'AXS-AED',
		'AXS-SAR' => 'AXS-SAR',
		'AXS-TRY' => 'AXS-TRY',
		'AXS-USD' => 'AXS-USD',
		'AXS-USDT' => 'AXS-USDT',

		'BAND-AED' => 'BAND-AED',
		'BAND-SAR' => 'BAND-SAR',
		'BAND-TRY' => 'BAND-TRY',
		'BAND-USD' => 'BAND-USD',
		'BAND-USDT' => 'BAND-USDT',

		'CHZ-AED' => 'CHZ-AED',
		'CHZ-SAR' => 'CHZ-SAR',
		'CHZ-TRY' => 'CHZ-TRY',
		'CHZ-USD' => 'CHZ-USD',
		'CHZ-USDT' => 'CHZ-USDT',

		'CRV-AED' => 'CRV-AED',
		'CRV-SAR' => 'CRV-SAR',
		'CRV-TRY' => 'CRV-TRY',
		'CRV-USD' => 'CRV-USD',
		'CRV-USDT' => 'CRV-USDT',

		'DGB-AED' => 'DGB-AED',
		'DGB-SAR' => 'DGB-SAR',
		'DGB-TRY' => 'DGB-TRY',
		'DGB-USD' => 'DGB-USD',

		'EGLD-AED' => 'EGLD-AED',
		'EGLD-SAR' => 'EGLD-SAR',
		'EGLD-TRY' => 'EGLD-TRY',
		'EGLD-USD' => 'EGLD-USD',
		'EGLD-USDT' => 'EGLD-USDT',

		'FIL-AED' => 'FIL-AED',
		'FIL-SAR' => 'FIL-SAR',
		'FIL-TRY' => 'FIL-TRY',
		'FIL-USD' => 'FIL-USD',
		'FIL-USDT' => 'FIL-USDT',

		'FTT-AED' => 'FTT-AED',
		'FTT-SAR' => 'FTT-SAR',
		'FTT-TRY' => 'FTT-TRY',
		'FTT-USD' => 'FTT-USD',
		'FTT-USDT' => 'FTT-USDT',

		'GALA-AED' => 'GALA-AED',
		'GALA-SAR' => 'GALA-SAR',
		'GALA-TRY' => 'GALA-TRY',
		'GALA-USD' => 'GALA-USD',
		'GALA-USDT' => 'GALA-USDT',

		'GNO-AED' => 'GNO-AED',
		'GNO-SAR' => 'GNO-SAR',
		'GNO-TRY' => 'GNO-TRY',
		'GNO-USD' => 'GNO-USD',

		'GRT-AED' => 'GRT-AED',
		'GRT-SAR' => 'GRT-SAR',
		'GRT-TRY' => 'GRT-TRY',
		'GRT-USD' => 'GRT-USD',
		'GRT-USDT' => 'GRT-USDT',

		'IOTA-AED' => 'IOTA-AED',
		'IOTA-SAR' => 'IOTA-SAR',
		'IOTA-TRY' => 'IOTA-TRY',
		'IOTA-USD' => 'IOTA-USD',
		'IOTA-BTC' => 'IOTA-BTC',
		'IOTA-ETH' => 'IOTA-ETH',

		'KSM-AED' => 'KSM-AED',
		'KSM-SAR' => 'KSM-SAR',
		'KSM-TRY' => 'KSM-TRY',
		'KSM-USD' => 'KSM-USD',
		'KSM-USDT' => 'KSM-USDT',

		'LEO-AED' => 'LEO-AED',
		'LEO-SAR' => 'LEO-SAR',
		'LEO-TRY' => 'LEO-TRY',
		'LEO-USD' => 'LEO-USD',
		'LEO-USDT' => 'LEO-USDT',
		'LEO-BTC' => 'LEO-BTC',
		'LEO-ETH' => 'LEO-ETH',

		'NEXO-AED' => 'NEXO-AED',
		'NEXO-SAR' => 'NEXO-SAR',
		'NEXO-TRY' => 'NEXO-TRY',
		'NEXO-USD' => 'NEXO-USD',
		'NEXO-USDT' => 'NEXO-USDT',
		'NEXO-BTC' => 'NEXO-BTC',

		'OCEAN-AED' => 'OCEAN-AED',
		'OCEAN-SAR' => 'OCEAN-SAR',
		'OCEAN-TRY' => 'OCEAN-TRY',
		'OCEAN-USD' => 'OCEAN-USD',
		'OCEAN-USDT' => 'OCEAN-USDT',

		'QTUM-AED' => 'QTUM-AED',
		'QTUM-SAR' => 'QTUM-SAR',
		'QTUM-TRY' => 'QTUM-TRY',
		'QTUM-USD' => 'QTUM-USD',
		'QTUM-BTC' => 'QTUM-BTC',

		'SNX-AED' => 'SNX-AED',
		'SNX-SAR' => 'SNX-SAR',
		'SNX-TRY' => 'SNX-TRY',
		'SNX-USD' => 'SNX-USD',
		'SNX-USDT' => 'SNX-USDT',

		'THETA-AED' => 'THETA-AED',
		'THETA-SAR' => 'THETA-SAR',
		'THETA-TRY' => 'THETA-TRY',
		'THETA-USD' => 'THETA-USD',
		'THETA-USDT' => 'THETA-USDT',

		'TRX-AED' => 'TRX-AED',
		'TRX-SAR' => 'TRX-SAR',
		'TRX-TRY' => 'TRX-TRY',
		'TRX-USD' => 'TRX-USD',
		'TRX-USDT' => 'TRX-USDT',
		'TRX-BTC' => 'TRX-BTC',
		'TRX-ETH' => 'TRX-ETH',

		'TUSD-AED' => 'TUSD-AED',
		'TUSD-SAR' => 'TUSD-SAR',
		'TUSD-TRY' => 'TUSD-TRY',
		'TUSD-USD' => 'TUSD-USD',
		'TUSD-USDT' => 'TUSD-USDT',

		'UST-AED' => 'UST-AED',
		'UST-SAR' => 'UST-SAR',
		'UST-TRY' => 'UST-TRY',
		'UST-USD' => 'UST-USD',
		'UST-USDT' => 'UST-USDT',

		'VET-AED' => 'VET-AED',
		'VET-SAR' => 'VET-SAR',
		'VET-TRY' => 'VET-TRY',
		'VET-USD' => 'VET-USD',
		'VET-USDT' => 'VET-USDT',
		'VET-BTC' => 'VET-BTC',

		'XVG-AED' => 'XVG-AED',
		'XVG-SAR' => 'XVG-SAR',
		'XVG-TRY' => 'XVG-TRY',
		'XVG-USD' => 'XVG-USD',

		'LUNA2-AED' => 'LUNA2-AED',
		'LUNA2-SAR' => 'LUNA2-SAR',
		'LUNA2-TRY' => 'LUNA2-TRY',
		'LUNA2-USD' => 'LUNA2-USD',
		'LUNA2-USDT' => 'LUNA2-USDT',
	];

	const VALID_PAIRS = [
		'BTC-AED', 'BTC-SAR', 'BTC-TRY', 'BTC-USD', 'BTC-KWD',
		'BTC-USDT',

		'ETH-AED', 'ETH-SAR', 'ETH-TRY', 'ETH-USD',
		'ETH-USDT', 'ETH-BTC',

		'BCH-AED', 'BCH-SAR', 'BCH-TRY', 'BCH-USD',
		'BCH-BTC', 'BCH-ETH',

		'XRP-AED', 'XRP-SAR', 'XRP-TRY', 'XRP-USD',
		'XRP-USDT', 'XRP-BTC',

		'ETC-AED', 'ETC-USD',
		'ETC-BTC',

		'LTC-AED', 'LTC-SAR', 'LTC-TRY', 'LTC-USD',
		'LTC-USDT', 'LTC-BTC',

		'ZEC-AED', 'ZEC-USD',
		'ZEC-BTC',

		'XMR-AED', 'XMR-USD',
		'XMR-BTC',

		'XLM-AED', 'XLM-SAR', 'XLM-TRY', 'XLM-USD',
		'XLM-USDT', 'XLM-BTC', 'XLM-ETH',

		'EOS-AED', 'EOS-SAR', 'EOS-TRY', 'EOS-USD',
		'EOS-USDT', 'EOS-BTC', 'EOS-ETH',

		'BSV-AED', 'BSV-USD',
		'BSV-BTC',

		'OMG-AED', 'OMG-SAR', 'OMG-TRY', 'OMG-USD',
		'OMG-BTC', 'OMG-ETH',

		'ZRX-AED', 'ZRX-SAR', 'ZRX-TRY', 'ZRX-USD',
		'ZRX-BTC', 'ZRX-ETH',

		'BAT-AED', 'BAT-SAR', 'BAT-TRY', 'BAT-USD',
		'BAT-USDT', 'BAT-BTC',

		'ALGO-AED', 'ALGO-SAR', 'ALGO-TRY', 'ALGO-USD',
		'ALGO-USDT', 'ALGO-BTC',

		'USDT-AED', 'USDT-SAR', 'USDT-TRY', 'USDT-USD',

		'NEO-AED', 'NEO-SAR', 'NEO-TRY', 'NEO-USD',
		'NEO-USDT', 'NEO-BTC', 'NEO-ETH',

		'XTZ-AED', 'XTZ-SAR', 'XTZ-TRY', 'XTZ-USD',
		'XTZ-USDT', 'XTZ-BTC',

		'LINK-AED', 'LINK-SAR', 'LINK-TRY', 'LINK-USD',
		'LINK-USDT', 'LINK-BTC', 'LINK-ETH',

		'DAI-AED', 'DAI-SAR', 'DAI-TRY', 'DAI-USD',
		'DAI-BTC', 'DAI-ETH',

		'MKR-AED', 'MKR-SAR', 'MKR-TRY', 'MKR-USD',
		'MKR-USDT', 'MKR-BTC',

		'REP-AED', 'REP-USD',
		'REP-BTC',

		'KNC-AED', 'KNC-SAR', 'KNC-TRY', 'KNC-USD',
		'KNC-BTC',

		'UNI-AED', 'UNI-SAR', 'UNI-TRY', 'UNI-USD',
		'UNI-USDT',

		'YFI-AED', 'YFI-SAR', 'YFI-TRY', 'YFI-USD',
		'YFI-USDT',

		'BAL-AED', 'BAL-SAR', 'BAL-TRY', 'BAL-USD',
		'BAL-USDT',

		'COMP-AED', 'COMP-SAR', 'COMP-TRY', 'COMP-USD',
		'COMP-USDT',

		'DOGE-AED', 'DOGE-SAR', 'DOGE-TRY', 'DOGE-USD',
		'DOGE-BTC', 'DOGE-USDT',

		'AAVE-AED', 'AAVE-SAR', 'AAVE-TRY', 'AAVE-USD',
		'AAVE-USDT',

		'BNT-AED', 'BNT-SAR', 'BNT-TRY', 'BNT-USD',

		'ENJ-AED', 'ENJ-SAR', 'ENJ-TRY', 'ENJ-USD',

		'LRC-AED', 'LRC-SAR', 'LRC-TRY', 'LRC-USD',

		'MANA-AED', 'MANA-SAR', 'MANA-TRY', 'MANA-USD',
		'MANA-BTC',

		'MATIC-AED', 'MATIC-SAR', 'MATIC-TRY', 'MATIC-USD',
		'MATIC-USDT', 'MATIC-BTC',

		'STORJ-AED', 'STORJ-SAR', 'STORJ-TRY', 'STORJ-USD',

		'SUSHI-AED', 'SUSHI-SAR', 'SUSHI-TRY', 'SUSHI-USD',
		'SUSHI-USDT',

		'USDC-AED', 'USDC-SAR', 'USDC-TRY', 'USDC-USD',
		'USDC-USDT',

		'WAVES-AED', 'WAVES-SAR', 'WAVES-TRY', 'WAVES-USD',
		'WAVES-USDT',

		'SOL-AED', 'SOL-SAR', 'SOL-TRY', 'SOL-USD',
		'SOL-USDT', 'SOL-BTC',

		'ADA-AED', 'ADA-SAR', 'ADA-TRY', 'ADA-USD',
		'ADA-USDT',

		'DOT-AED', 'DOT-SAR', 'DOT-TRY', 'DOT-USD',
		'DOT-USDT', 'DOT-BTC',

		'SHIB-AED', 'SHIB-SAR', 'SHIB-TRY', 'SHIB-USD',
		'SHIB-USDT',

		'AVAX-AED', 'AVAX-SAR', 'AVAX-TRY', 'AVAX-USD',
		'AVAX-USDT',

		'LUNA-AED', 'LUNA-SAR', 'LUNA-TRY', 'LUNA-USD',
		'LUNA-USDT', 'LUNA-BTC', 'LUNA-ETH',

		'NEAR-AED', 'NEAR-SAR', 'NEAR-TRY', 'NEAR-USD',
		'NEAR-USDT',

		'FTM-AED', 'FTM-SAR', 'FTM-TRY', 'FTM-USD',
		'FTM-USDT',

		'WBTC-AED', 'WBTC-SAR', 'WBTC-TRY', 'WBTC-USD',

		'ATOM-AED', 'ATOM-SAR', 'ATOM-TRY', 'ATOM-USD',
		'ATOM-USDT', 'ATOM-BTC', 'ATOM-ETH',

		'1INCH-AED', '1INCH-SAR', '1INCH-TRY', '1INCH-USD',
		'1INCH-USDT',

		'ANT-AED', 'ANT-SAR', 'ANT-TRY', 'ANT-USD',
		'ANT-BTC', 'ANT-ETH',

		'AXS-AED', 'AXS-SAR', 'AXS-TRY', 'AXS-USD',
		'AXS-USDT',

		'BAND-AED', 'BAND-SAR', 'BAND-TRY', 'BAND-USD',
		'BAND-USDT',

		'CHZ-AED', 'CHZ-SAR', 'CHZ-TRY', 'CHZ-USD',
		'CHZ-USDT',

		'CRV-AED', 'CRV-SAR', 'CRV-TRY', 'CRV-USD',
		'CRV-USDT',

		'DGB-AED', 'DGB-SAR', 'DGB-TRY', 'DGB-USD',

		'EGLD-AED', 'EGLD-SAR', 'EGLD-TRY', 'EGLD-USD',
		'EGLD-USDT',

		'FIL-AED', 'FIL-SAR', 'FIL-TRY', 'FIL-USD',
		'FIL-USDT',

		'FTT-AED', 'FTT-SAR', 'FTT-TRY', 'FTT-USD',
		'FTT-USDT',

		'GALA-AED', 'GALA-SAR', 'GALA-TRY', 'GALA-USD',
		'GALA-USDT',

		'GNO-AED', 'GNO-SAR', 'GNO-TRY', 'GNO-USD',

		'GRT-AED', 'GRT-SAR', 'GRT-TRY', 'GRT-USD',
		'GRT-USDT',

		'IOTA-AED', 'IOTA-SAR', 'IOTA-TRY', 'IOTA-USD',
		'IOTA-BTC', 'IOTA-ETH',

		'KSM-AED', 'KSM-SAR', 'KSM-TRY', 'KSM-USD',
		'KSM-USDT',

		'LEO-AED', 'LEO-SAR', 'LEO-TRY', 'LEO-USD',
		'LEO-USDT', 'LEO-BTC', 'LEO-ETH',

		'NEXO-AED', 'NEXO-SAR', 'NEXO-TRY', 'NEXO-USD',
		'NEXO-USDT', 'NEXO-BTC',

		'OCEAN-AED', 'OCEAN-SAR', 'OCEAN-TRY', 'OCEAN-USD',
		'OCEAN-USDT',

		'QTUM-AED', 'QTUM-SAR', 'QTUM-TRY', 'QTUM-USD',
		'QTUM-BTC',

		'SNX-AED', 'SNX-SAR', 'SNX-TRY', 'SNX-USD',
		'SNX-USDT',

		'THETA-AED', 'THETA-SAR', 'THETA-TRY', 'THETA-USD',
		'THETA-USDT',

		'TRX-AED', 'TRX-SAR', 'TRX-TRY', 'TRX-USD',
		'TRX-USDT', 'TRX-BTC', 'TRX-ETH',

		'TUSD-AED', 'TUSD-SAR', 'TUSD-TRY', 'TUSD-USD',
		'TUSD-USDT',

		'UST-AED', 'UST-SAR', 'UST-TRY', 'UST-USD',
		'UST-USDT',

		'VET-AED', 'VET-SAR', 'VET-TRY', 'VET-USD',
		'VET-USDT', 'VET-BTC',

		'XVG-AED', 'XVG-SAR', 'XVG-TRY', 'XVG-USD',

		'LUNA2-AED', 'LUNA2-SAR', 'LUNA2-TRY', 'LUNA2-USD',
		'LUNA2-USDT',
	];
	const FIAT_CRYPTOCURRENCY_CODES = ['USD', 'AED', 'SAR', 'TRY'];
	const VALID_BASE_CRYPTOCURRENCIES = ['USD', 'AED', 'BTC', 'ETH', 'USDT', 'SAR', 'TRY']; // This is ment to be quote cryptocurrency codes
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
		return strtoupper($this->cryptocurrencyCode) . '-' . strtoupper($this->baseCryptocurrencyCode);
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
