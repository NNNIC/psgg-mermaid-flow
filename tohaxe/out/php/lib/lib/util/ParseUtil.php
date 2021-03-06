<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace lib\util;

use \php\Boot;
use \system\Cs2Hx;
use \system\CsRef;

class ParseUtil {
	/**
	 * @param string $s
	 * @param bool $error
	 * 
	 * @return bool
	 */
	public static function ParseBool ($s, $error) {
		#src/lib/util/ParseUtil.hx:81: lines 81-84
		if (($s === null) || (mb_strlen($s) === 0)) {
			#src/lib/util/ParseUtil.hx:83: characters 13-25
			return $error;
		}
		#src/lib/util/ParseUtil.hx:85: lines 85-88
		if (\mb_strtolower(Cs2Hx::Trim($s)) === "true") {
			#src/lib/util/ParseUtil.hx:87: characters 13-24
			return true;
		}
		#src/lib/util/ParseUtil.hx:89: lines 89-92
		if (\mb_strtolower(Cs2Hx::Trim($s)) === "false") {
			#src/lib/util/ParseUtil.hx:91: characters 13-25
			return false;
		}
		#src/lib/util/ParseUtil.hx:93: characters 9-21
		return $error;
	}

	/**
	 * @param string $s
	 * @param float $errorvalue
	 * 
	 * @return float
	 */
	public static function ParseFloat ($s, $errorvalue = -3.402823E+38) {
		#src/lib/util/ParseUtil.hx:41: lines 41-48
		if ($errorvalue === null) {
			$errorvalue = -3.402823E+38;
		}
		#src/lib/util/ParseUtil.hx:42: characters 9-52
		$ret = new CsRef(0);
		#src/lib/util/ParseUtil.hx:43: lines 43-46
		if (Cs2Hx::TryParseFloat($s, $ret)) {
			#src/lib/util/ParseUtil.hx:45: characters 13-29
			return $ret->Value;
		}
		#src/lib/util/ParseUtil.hx:47: characters 9-26
		return $errorvalue;
	}

	/**
	 * @param string $s
	 * @param float $errorvalue
	 * 
	 * @return \Array_hx
	 */
	public static function ParseFloatList ($s, $errorvalue = -3.402823E+38) {
		#src/lib/util/ParseUtil.hx:50: lines 50-63
		if ($errorvalue === null) {
			$errorvalue = -3.402823E+38;
		}
		#src/lib/util/ParseUtil.hx:51: lines 51-54
		if (($s === null) || (mb_strlen($s) === 0)) {
			#src/lib/util/ParseUtil.hx:53: characters 13-24
			return null;
		}
		#src/lib/util/ParseUtil.hx:55: characters 9-52
		$list = new \Array_hx();
		#src/lib/util/ParseUtil.hx:56: characters 9-66
		$tokens = Cs2Hx::Split($s, \Array_hx::wrap([44]));
		#src/lib/util/ParseUtil.hx:57: lines 57-61
		$_g = 0;
		while ($_g < $tokens->length) {
			#src/lib/util/ParseUtil.hx:57: characters 14-15
			$i = ($tokens->arr[$_g] ?? null);
			#src/lib/util/ParseUtil.hx:57: lines 57-61
			++$_g;
			#src/lib/util/ParseUtil.hx:59: characters 13-53
			$f = ParseUtil::ParseFloat($i, $errorvalue);
			#src/lib/util/ParseUtil.hx:60: characters 13-25
			$list->arr[$list->length++] = $f;
		}
		#src/lib/util/ParseUtil.hx:62: characters 9-20
		return $list;
	}

	/**
	 * @param string $s
	 * @param int $errorvalue
	 * 
	 * @return int
	 */
	public static function ParseInt ($s, $errorvalue = ((int)-2147483648)) {
		#src/lib/util/ParseUtil.hx:9: lines 9-25
		if ($errorvalue === null) {
			$errorvalue = ((int)-2147483648);
		}
		#src/lib/util/ParseUtil.hx:10: lines 10-13
		if (($s === null) || (mb_strlen($s) === 0)) {
			#src/lib/util/ParseUtil.hx:12: characters 13-30
			return $errorvalue;
		}
		#src/lib/util/ParseUtil.hx:14: characters 9-48
		$ret = new CsRef(0);
		#src/lib/util/ParseUtil.hx:15: characters 9-53
		$retf = new CsRef(0);
		#src/lib/util/ParseUtil.hx:16: lines 16-19
		if (Cs2Hx::TryParseInt($s, $ret)) {
			#src/lib/util/ParseUtil.hx:18: characters 13-29
			return $ret->Value;
		}
		#src/lib/util/ParseUtil.hx:20: lines 20-23
		if (Cs2Hx::TryParseFloat($s, $retf)) {
			#src/lib/util/ParseUtil.hx:22: characters 20-39
			return (int)($retf->Value);
		}
		#src/lib/util/ParseUtil.hx:24: characters 9-26
		return $errorvalue;
	}

	/**
	 * @param string $s
	 * @param int $errorvalue
	 * 
	 * @return \Array_hx
	 */
	public static function ParseIntList ($s, $errorvalue = ((int)-2147483648)) {
		#src/lib/util/ParseUtil.hx:65: lines 65-78
		if ($errorvalue === null) {
			$errorvalue = ((int)-2147483648);
		}
		#src/lib/util/ParseUtil.hx:66: lines 66-69
		if (($s === null) || (mb_strlen($s) === 0)) {
			#src/lib/util/ParseUtil.hx:68: characters 13-24
			return null;
		}
		#src/lib/util/ParseUtil.hx:70: characters 9-48
		$list = new \Array_hx();
		#src/lib/util/ParseUtil.hx:71: characters 9-66
		$tokens = Cs2Hx::Split($s, \Array_hx::wrap([44]));
		#src/lib/util/ParseUtil.hx:72: lines 72-76
		$_g = 0;
		while ($_g < $tokens->length) {
			#src/lib/util/ParseUtil.hx:72: characters 14-15
			$i = ($tokens->arr[$_g] ?? null);
			#src/lib/util/ParseUtil.hx:72: lines 72-76
			++$_g;
			#src/lib/util/ParseUtil.hx:74: characters 13-49
			$v = ParseUtil::ParseInt($i, $errorvalue);
			#src/lib/util/ParseUtil.hx:75: characters 13-25
			$list->arr[$list->length++] = $v;
		}
		#src/lib/util/ParseUtil.hx:77: characters 9-20
		return $list;
	}

	/**
	 * @param string $s
	 * @param float $errorvalue
	 * 
	 * @return float
	 */
	public static function ParseLong ($s, $errorvalue = -9223372036854775808) {
		#src/lib/util/ParseUtil.hx:27: lines 27-39
		if ($errorvalue === null) {
			$errorvalue = -9223372036854775808;
		}
		#src/lib/util/ParseUtil.hx:28: characters 9-52
		$ret = new CsRef(0);
		#src/lib/util/ParseUtil.hx:29: characters 9-53
		$retf = new CsRef(0);
		#src/lib/util/ParseUtil.hx:30: lines 30-33
		if (Cs2Hx::TryParseFloat($s, $ret)) {
			#src/lib/util/ParseUtil.hx:32: characters 13-29
			return $ret->Value;
		}
		#src/lib/util/ParseUtil.hx:34: lines 34-37
		if (Cs2Hx::TryParseFloat($s, $retf)) {
			#src/lib/util/ParseUtil.hx:36: characters 13-30
			return $retf->Value;
		}
		#src/lib/util/ParseUtil.hx:38: characters 9-26
		return $errorvalue;
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}
}

Boot::registerClass(ParseUtil::class, 'lib.util.ParseUtil');
