<?php

namespace BitOasis\Common\Console;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Daniel Robenek <daniel.robenek@me.com>
 */
class ConsoleLogger extends \Consolidation\Log\Logger {

	public function __construct(OutputInterface $output, array $verbosityLevelMap = array(), array $formatLevelMap = array(), array $formatFunctionMap = array()) {
		parent::__construct($output, $verbosityLevelMap, $formatLevelMap, $formatFunctionMap);
		$output->setFormatter(new DateTimeOutputFormatter());
	}

}