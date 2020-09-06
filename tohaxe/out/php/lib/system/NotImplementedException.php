<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace system;

use \php\Boot;

class NotImplementedException extends Exception {
	/**
	 * @param string $msg
	 * 
	 * @return void
	 */
	public function __construct ($msg = "NotImplementedException") {
		#src/system/NotImplementedException.hx:6: characters 3-13
		if ($msg === null) {
			$msg = "NotImplementedException";
		}
		parent::__construct($msg);
	}
}

Boot::registerClass(NotImplementedException::class, 'system.NotImplementedException');
