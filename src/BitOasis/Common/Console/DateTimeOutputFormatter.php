<?php

namespace BitOasis\Common\Console;

use Symfony\Component\Console\Formatter\OutputFormatter;

class DateTimeOutputFormatter extends OutputFormatter {

	public function format($message) {
		$message = parent::format($message);

		if ($message === "\n" || $message === '') {
			return $message;
		}

		return date('Y-m-d H:i:s') . ' ' . $message;
	}

}
