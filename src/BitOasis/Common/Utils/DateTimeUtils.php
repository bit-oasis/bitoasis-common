<?php

namespace BitOasis\Common\Utils;

use InvalidArgumentException;

/**
 * @author David Fiedor <davefu@seznam.cz>
 */
class DateTimeUtils {

	/**
	 * @param string|int|float $timestamp UNIX timestamp with or wo microseconds as decimal places
	 * @return \DateTime|null
	 * @throws InvalidArgumentException
	 */
	public static function createDateTimeFromTimestamp($timestamp) {
		if (\is_numeric($timestamp)) {
			$format = \strpos((string)$timestamp, '.') === false ? 'U' : 'U.u';
			return \DateTime::createFromFormat($format, $timestamp);
		}
		if (empty($timestamp)) {
			return null;
		}
		throw new InvalidArgumentException('Invalid timestamp!');
	}

	/**
	 * @param \DateTime $dateTime
	 * @return string UNIX timestamp with microseconds as decimal places
	 */
	public static function getTimestamp(\DateTime $dateTime): string {
		return $dateTime->format('U.u');
	}
}
