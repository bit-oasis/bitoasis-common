<?php

namespace BitOasis\Common\CurrencyPair;

/**
 * @author Daniel Robenek <daniel.robenek@me.com>
 */
interface Pair {

	/**
	 * @deprecated 1.1.0 use {@see getBaseCryptocurrencyCode}
	 * @return string
	 */
	public function getCurrencyCode(): string;
	
	public function getBaseCryptocurrencyCode(): string;

	public function getCryptocurrencyCode(): string;

	public function getPairCode(): string;

}