<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace tool;

use \php\Boot;
use \php\_Boot\HxEnum;

class IniUtilReadControl_STATE extends HxEnum {
	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_CHECK () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_CHECK', 1, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_CHECK_MAPG () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_CHECK_MAPG', 2, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_CREATE_MAPG () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_CREATE_MAPG', 3, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_END () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_END', 4, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_GET_GROUPNAME () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_GET_GROUPNAME', 5, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_GET_KEY_VAL () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_GET_KEY_VAL', 6, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_GET_KEY_VAL1 () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_GET_KEY_VAL1', 7, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_IF_MAPG_EXISTS () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_IF_MAPG_EXISTS', 8, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_INIT () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_INIT', 9, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_LOP000 () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_LOP000', 10, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_LOP000_Check____ () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_LOP000_Check____', 11, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_LOP000_Next____ () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_LOP000_Next____', 12, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_PAS000 () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_PAS000', 13, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_REGISTER_MAPG () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_REGISTER_MAPG', 14, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_RET000 () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_RET000', 15, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_SBS000 () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_SBS000', 16, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_SBS001 () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_SBS001', 17, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_SPLIT () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_SPLIT', 18, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function S_START () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('S_START', 19, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function none () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('none', 0, []);
		return $inst;
	}

	/**
	 * @return IniUtilReadControl_STATE
	 */
	static public function unknown () {
		static $inst = null;
		if (!$inst) $inst = new IniUtilReadControl_STATE('unknown', 20, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			1 => 'S_CHECK',
			2 => 'S_CHECK_MAPG',
			3 => 'S_CREATE_MAPG',
			4 => 'S_END',
			5 => 'S_GET_GROUPNAME',
			6 => 'S_GET_KEY_VAL',
			7 => 'S_GET_KEY_VAL1',
			8 => 'S_IF_MAPG_EXISTS',
			9 => 'S_INIT',
			10 => 'S_LOP000',
			11 => 'S_LOP000_Check____',
			12 => 'S_LOP000_Next____',
			13 => 'S_PAS000',
			14 => 'S_REGISTER_MAPG',
			15 => 'S_RET000',
			16 => 'S_SBS000',
			17 => 'S_SBS001',
			18 => 'S_SPLIT',
			19 => 'S_START',
			0 => 'none',
			20 => 'unknown',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'S_CHECK' => 0,
			'S_CHECK_MAPG' => 0,
			'S_CREATE_MAPG' => 0,
			'S_END' => 0,
			'S_GET_GROUPNAME' => 0,
			'S_GET_KEY_VAL' => 0,
			'S_GET_KEY_VAL1' => 0,
			'S_IF_MAPG_EXISTS' => 0,
			'S_INIT' => 0,
			'S_LOP000' => 0,
			'S_LOP000_Check____' => 0,
			'S_LOP000_Next____' => 0,
			'S_PAS000' => 0,
			'S_REGISTER_MAPG' => 0,
			'S_RET000' => 0,
			'S_SBS000' => 0,
			'S_SBS001' => 0,
			'S_SPLIT' => 0,
			'S_START' => 0,
			'none' => 0,
			'unknown' => 0,
		];
	}
}

Boot::registerClass(IniUtilReadControl_STATE::class, 'tool.IniUtilReadControl_STATE');
