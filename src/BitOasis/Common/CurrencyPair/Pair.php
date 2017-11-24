<?php

namespace BitOasis\Common\CurrencyPair;

/**
 * @author Daniel Robenek <daniel.robenek@me.com>
 */
interface Pair {

	public function getCurrencyCode(): string;

	public function getCryptocurrencyCode(): string;

	public function getPairCode(): string;

}