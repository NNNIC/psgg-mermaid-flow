<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace lib\util;

use \php\Boot;

class BranchUtil_Item {
	/**
	 * @var \Array_hx
	 */
	public $br_api_list;
	/**
	 * @var \Array_hx
	 */
	public $br_cmt_list;
	/**
	 * @var \Array_hx
	 */
	public $br_cond_list;
	/**
	 * @var \Array_hx
	 */
	public $br_raw_list;
	/**
	 * @var \Array_hx
	 */
	public $br_state_list;

	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @return int
	 */
	public function count () {
		#src/lib/util/BranchUtil_Item.hx:15: characters 16-60
		if ($this->br_api_list !== null) {
			#src/lib/util/BranchUtil_Item.hx:15: characters 38-56
			return $this->br_api_list->length;
		} else {
			#src/lib/util/BranchUtil_Item.hx:15: characters 59-60
			return 0;
		}
	}

	/**
	 * @param int $n
	 * 
	 * @return string
	 */
	public function get_api ($n) {
		#src/lib/util/BranchUtil_Item.hx:19: characters 9-62
		$s = ListUtil::Get($this->br_api_list, $n);
		#src/lib/util/BranchUtil_Item.hx:20: lines 20-23
		if ($s === null) {
			#src/lib/util/BranchUtil_Item.hx:22: characters 13-22
			return "";
		}
		#src/lib/util/BranchUtil_Item.hx:24: lines 24-27
		if (\mb_substr($s, 0, mb_strlen("brif")) === "brif") {
			#src/lib/util/BranchUtil_Item.hx:26: characters 13-22
			return "";
		}
		#src/lib/util/BranchUtil_Item.hx:28: lines 28-31
		if (\mb_substr($s, 0, mb_strlen("brelseif")) === "brelseif") {
			#src/lib/util/BranchUtil_Item.hx:30: characters 13-22
			return "";
		}
		#src/lib/util/BranchUtil_Item.hx:32: lines 32-35
		if (\mb_substr($s, 0, mb_strlen("brelse")) === "brelse") {
			#src/lib/util/BranchUtil_Item.hx:34: characters 13-26
			return "else";
		}
		#src/lib/util/BranchUtil_Item.hx:36: characters 9-17
		return $s;
	}

	/**
	 * @param int $n
	 * 
	 * @return string
	 */
	public function get_cmt ($n) {
		#src/lib/util/BranchUtil_Item.hx:62: characters 9-62
		$s = ListUtil::Get($this->br_cmt_list, $n);
		#src/lib/util/BranchUtil_Item.hx:63: lines 63-66
		if ($s === null) {
			#src/lib/util/BranchUtil_Item.hx:65: characters 13-22
			return "";
		}
		#src/lib/util/BranchUtil_Item.hx:67: characters 9-17
		return $s;
	}

	/**
	 * @param int $n
	 * 
	 * @return string
	 */
	public function get_cond ($n) {
		#src/lib/util/BranchUtil_Item.hx:49: characters 9-63
		$s = ListUtil::Get($this->br_cond_list, $n);
		#src/lib/util/BranchUtil_Item.hx:50: lines 50-53
		if ($s === null) {
			#src/lib/util/BranchUtil_Item.hx:52: characters 13-22
			return "";
		}
		#src/lib/util/BranchUtil_Item.hx:54: lines 54-57
		if ($s === "?") {
			#src/lib/util/BranchUtil_Item.hx:56: characters 13-22
			return "";
		}
		#src/lib/util/BranchUtil_Item.hx:58: characters 9-17
		return $s;
	}

	/**
	 * @param int $n
	 * 
	 * @return string
	 */
	public function get_state ($n) {
		#src/lib/util/BranchUtil_Item.hx:40: characters 9-64
		$s = ListUtil::Get($this->br_state_list, $n);
		#src/lib/util/BranchUtil_Item.hx:41: lines 41-44
		if ($s === null) {
			#src/lib/util/BranchUtil_Item.hx:43: characters 13-22
			return "";
		}
		#src/lib/util/BranchUtil_Item.hx:45: characters 9-17
		return $s;
	}
}

Boot::registerClass(BranchUtil_Item::class, 'lib.util.BranchUtil_Item');