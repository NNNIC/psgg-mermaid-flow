<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace php\_Boot;

use \php\Boot;

/**
 * For Dynamic access which looks like String.
 * Instances of this class should not be saved anywhere.
 * Instead it should be used to immediately invoke a String field right after instance creation one time only.
 */
class HxDynamicStr extends HxClosure {
	/**
	 * @var string
	 */
	static public $hxString;

	/**
	 * @param string $str
	 * @param string $method
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public static function invoke ($str, $method, $args) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:884: characters 3-34
		\array_unshift($args, $str);
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:885: characters 3-69
		return \call_user_func_array((HxDynamicStr::$hxString??'null') . "::" . ($method??'null'), $args);
	}

	/**
	 * Returns HxDynamicStr instance if `value` is a string.
	 * Otherwise returns `value` as-is.
	 * 
	 * @param mixed $value
	 * 
	 * @return mixed
	 */
	public static function wrap ($value) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:876: lines 876-880
		if (\is_string($value)) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:877: characters 4-34
			return new HxDynamicStr($value);
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:879: characters 4-16
			return $value;
		}
	}

	/**
	 * @param string $str
	 * 
	 * @return void
	 */
	public function __construct ($str) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:889: characters 3-19
		parent::__construct($str, null);
	}

	/**
	 * @param string $method
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function __call ($method, $args) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:905: characters 10-38
		\array_unshift($args, $this->target);
		return \call_user_func_array((HxDynamicStr::$hxString??'null') . "::" . ($method??'null'), $args);
	}

	/**
	 * @param string $field
	 * 
	 * @return mixed
	 */
	public function __get ($field) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:894: lines 894-900
		if ($field === "length") {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:896: characters 5-36
			return mb_strlen($this->target);
		} else {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:898: characters 5-17
			$this->func = $field;
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:899: characters 5-16
			return $this;
		}
	}

	/**
	 * @see http://php.net/manual/en/language.oop5.magic.php#object.invoke
	 * 
	 * @return mixed
	 */
	public function __invoke () {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:913: characters 10-54
		$str = $this->target;
		$method = $this->func;
		$args = \func_get_args();
		\array_unshift($args, $str);
		return \call_user_func_array((HxDynamicStr::$hxString??'null') . "::" . ($method??'null'), $args);
	}

	/**
	 * Invoke this closure with `newThis` instead of `this`
	 * 
	 * @param mixed $newThis
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function callWith ($newThis, $args) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:930: lines 930-932
		if ($newThis === null) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:931: characters 4-20
			$newThis = $this->target;
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:933: characters 10-37
		$method = $this->func;
		\array_unshift($args, $newThis);
		return \call_user_func_array((HxDynamicStr::$hxString??'null') . "::" . ($method??'null'), $args);
	}

	/**
	 * Generates callable value for PHP
	 * 
	 * @param mixed $eThis
	 * 
	 * @return mixed
	 */
	public function getCallback ($eThis = null) {
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:920: lines 920-922
		if ($eThis === null) {
			#G:\HaxeToolkit\haxe\std/php/Boot.hx:921: characters 4-51
			return [$this, $this->func];
		}
		#G:\HaxeToolkit\haxe\std/php/Boot.hx:923: characters 3-69
		return [new HxDynamicStr($eThis), $this->func];
	}

	/**
	 * @internal
	 * @access private
	 */
	static public function __hx__init ()
	{
		static $called = false;
		if ($called) return;
		$called = true;


		self::$hxString = Boot::getClass(HxString::class)->phpClassName;
	}
}

Boot::registerClass(HxDynamicStr::class, 'php._Boot.HxDynamicStr');
HxDynamicStr::__hx__init();