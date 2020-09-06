<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace system;

use \php\Boot;

class InvalidOperationException extends Exception {
	/**
	 * @param string $msg
	 * 
	 * @return void
	 */
	public function __construct ($msg = "Invalid operation") {
		#src/system/InvalidOperationException.hx:7: characters 3-13
		if ($msg === null) {
			$msg = "Invalid operation";
		}
		parent::__construct($msg);
	}
}

Boot::registerClass(InvalidOperationException::class, 'system.InvalidOperationException');