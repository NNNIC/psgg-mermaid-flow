<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace php\_Boot;

use \php\Boot;

/**
 * `String` implementation
 */
class HxString {
	/**
	 * @param string $str
	 * @param int $index
	 * 
	 * @return string
	 */
	public static function charAt ($str, $index) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:751: characters 10-58
		if ($index < 0) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:751: characters 22-24
			return "";
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:751: characters 27-58
			return \mb_substr($str, $index, 1);
		}
	}

	/**
	 * @param string $str
	 * @param int $index
	 * 
	 * @return int
	 */
	public static function charCodeAt ($str, $index) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:755: lines 755-757
		if (($index < 0) || ($str === "")) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:756: characters 4-15
			return null;
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:758: lines 758-760
		if ($index === 0) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:759: characters 11-30
			$code = \ord($str[0]);
			if ($code < 192) {
				return $code;
			} else if ($code < 224) {
				return (($code - 192) << 6) + \ord($str[1]) - 128;
			} else if ($code < 240) {
				return (($code - 224) << 12) + ((\ord($str[1]) - 128) << 6) + \ord($str[2]) - 128;
			} else {
				return (($code - 240) << 18) + ((\ord($str[1]) - 128) << 12) + ((\ord($str[2]) - 128) << 6) + \ord($str[3]) - 128;
			}
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:761: characters 3-46
		$char = \mb_substr($str, $index, 1);
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:762: characters 10-50
		if ($char === "") {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:762: characters 23-27
			return null;
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:762: characters 30-50
			$code = \ord($char[0]);
			if ($code < 192) {
				return $code;
			} else if ($code < 224) {
				return (($code - 192) << 6) + \ord($char[1]) - 128;
			} else if ($code < 240) {
				return (($code - 224) << 12) + ((\ord($char[1]) - 128) << 6) + \ord($char[2]) - 128;
			} else {
				return (($code - 240) << 18) + ((\ord($char[1]) - 128) << 12) + ((\ord($char[2]) - 128) << 6) + \ord($char[3]) - 128;
			}
		}
	}

	/**
	 * @param int $code
	 * 
	 * @return string
	 */
	public static function fromCharCode ($code) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:857: characters 3-29
		return \mb_chr($code);
	}

	/**
	 * @param string $str
	 * @param string $search
	 * @param int $startIndex
	 * 
	 * @return int
	 */
	public static function indexOf ($str, $search, $startIndex = null) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:766: lines 766-779
		if ($startIndex === null) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:767: characters 4-18
			$startIndex = 0;
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:769: characters 4-28
			$length = mb_strlen($str);
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:770: lines 770-775
			if ($startIndex < 0) {
				#G:\HaxeToolkit\haxe\std/php/Boot.hx:771: characters 5-25
				$startIndex += $length;
				#G:\HaxeToolkit\haxe\std/php/Boot.hx:772: lines 772-774
				if ($startIndex < 0) {
					#G:\HaxeToolkit\haxe\std/php/Boot.hx:773: characters 6-20
					$startIndex = 0;
				}
			}
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:776: lines 776-778
			if (($startIndex >= $length) && ($search !== "")) {
				#G:\HaxeToolkit\haxe\std/php/Boot.hx:777: characters 5-14
				return -1;
			}
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:780: lines 780-785
		$index = null;
		if ($search === "") {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:781: characters 4-28
			$length = mb_strlen($str);
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:780: lines 780-785
			$index = ($startIndex > $length ? $length : $startIndex);
		} else {
			$index = \mb_strpos($str, $search, $startIndex);
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:786: characters 10-39
		if ($index === false) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:786: characters 28-30
			return -1;
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:786: characters 33-38
			return $index;
		}
	}

	/**
	 * @param string $str
	 * @param string $search
	 * @param int $startIndex
	 * 
	 * @return int
	 */
	public static function lastIndexOf ($str, $search, $startIndex = null) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:790: characters 3-26
		$start = $startIndex;
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:791: lines 791-803
		if ($start === null) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:792: characters 4-13
			$start = 0;
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:794: characters 4-28
			$length = mb_strlen($str);
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:795: lines 795-802
			if ($start >= 0) {
				#G:\HaxeToolkit\haxe\std/php/Boot.hx:796: characters 5-27
				$start -= $length;
				#G:\HaxeToolkit\haxe\std/php/Boot.hx:797: lines 797-799
				if ($start > 0) {
					#G:\HaxeToolkit\haxe\std/php/Boot.hx:798: characters 6-15
					$start = 0;
				}
			} else if ($start < -$length) {
				#G:\HaxeToolkit\haxe\std/php/Boot.hx:801: characters 5-20
				$start = -$length;
			}
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:804: lines 804-809
		$index = null;
		if ($search === "") {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:805: characters 4-28
			$length = mb_strlen($str);
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:804: lines 804-809
			$index = (($startIndex === null) || ($startIndex > $length) ? $length : $startIndex);
		} else {
			$index = \mb_strrpos($str, $search, $start);
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:810: lines 810-814
		if ($index === false) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:811: characters 4-13
			return -1;
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:813: characters 4-16
			return $index;
		}
	}

	/**
	 * @param string $str
	 * @param string $delimiter
	 * 
	 * @return \Array_hx
	 */
	public static function split ($str, $delimiter) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:818: lines 818-823
		$arr = null;
		if ($delimiter === "") {
			$arr = \preg_split("//u", $str, -1, \PREG_SPLIT_NO_EMPTY);
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:821: characters 4-49
			$delimiter = \preg_quote($delimiter, "/");
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:818: lines 818-823
			$arr = \preg_split("/" . ($delimiter??'null') . "/", $str);
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:824: characters 3-41
		return \Array_hx::wrap($arr);
	}

	/**
	 * @param string $str
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return string
	 */
	public static function substr ($str, $pos, $len = null) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:828: characters 3-41
		return \mb_substr($str, $pos, $len);
	}

	/**
	 * @param string $str
	 * @param int $startIndex
	 * @param int $endIndex
	 * 
	 * @return string
	 */
	public static function substring ($str, $startIndex, $endIndex = null) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:832: lines 832-837
		if ($endIndex === null) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:833: lines 833-835
			if ($startIndex < 0) {
				#G:\HaxeToolkit\haxe\std/php/Boot.hx:834: characters 5-19
				$startIndex = 0;
			}
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:836: characters 4-44
			return \mb_substr($str, $startIndex);
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:838: lines 838-840
		if ($endIndex < 0) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:839: characters 4-16
			$endIndex = 0;
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:841: lines 841-843
		if ($startIndex < 0) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:842: characters 4-18
			$startIndex = 0;
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:844: lines 844-848
		if ($startIndex > $endIndex) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:845: characters 4-23
			$tmp = $endIndex;
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:846: characters 4-25
			$endIndex = $startIndex;
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:847: characters 4-20
			$startIndex = $tmp;
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:849: characters 3-66
		return \mb_substr($str, $startIndex, $endIndex - $startIndex);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	public static function toLowerCase ($str) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:747: characters 3-35
		return \mb_strtolower($str);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	public static function toString ($str) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:853: characters 3-13
		return $str;
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	public static function toUpperCase ($str) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:743: characters 3-35
		return \mb_strtoupper($str);
	}
}

Boot::registerClass(HxString::class, 'php._Boot.HxString');