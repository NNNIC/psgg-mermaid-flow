<?php
/**
 * Generated by Haxe 4.1.3
 */

use \php\Boot;

/**
 * The Reflect API is a way to manipulate values dynamically through an
 * abstract interface in an untyped manner. Use with care.
 * @see https://haxe.org/manual/std-reflection.html
 */
class Reflect {
	/**
	 * Compares `a` and `b`.
	 * If `a` is less than `b`, the result is negative. If `b` is less than
	 * `a`, the result is positive. If `a` and `b` are equal, the result is 0.
	 * This function is only defined if `a` and `b` are of the same type.
	 * If that type is a function, the result is unspecified and
	 * `Reflect.compareMethods` should be used instead.
	 * For all other types, the result is 0 if `a` and `b` are equal. If they
	 * are not equal, the result depends on the type and is negative if:
	 * - Numeric types: a is less than b
	 * - String: a is lexicographically less than b
	 * - Other: unspecified
	 * If `a` and `b` are null, the result is 0. If only one of them is null,
	 * the result is unspecified.
	 * 
	 * @param mixed $a
	 * @param mixed $b
	 * 
	 * @return int
	 */
	public static function compare ($a, $b) {
		#G:\HaxeToolkit\haxe\std/php/_std/Reflect.hx:128: lines 128-129
		if (Boot::equal($a, $b)) {
			#G:\HaxeToolkit\haxe\std/php/_std/Reflect.hx:129: characters 4-12
			return 0;
		}
		#G:\HaxeToolkit\haxe\std/php/_std/Reflect.hx:130: lines 130-134
		if (is_string($a)) {
			#G:\HaxeToolkit\haxe\std/php/_std/Reflect.hx:131: characters 4-40
			return strcmp($a, $b);
		} else if ($a > $b) {
			#G:\HaxeToolkit\haxe\std/php/_std/Reflect.hx:133: characters 34-35
			return 1;
		} else {
			#G:\HaxeToolkit\haxe\std/php/_std/Reflect.hx:133: characters 38-40
			return -1;
		}
	}
}

Boot::registerClass(Reflect::class, 'Reflect');
