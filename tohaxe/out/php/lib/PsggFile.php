<?php
/**
 * Generated by Haxe 4.1.3
 */

use \haxe\io\_BytesData\Container;
use \php\Boot;
use \haxe\io\BytesBuffer;
use \sys\io\File;
use \haxe\io\Error;
use \php\_Boot\HxString;
use \haxe\Exception as HaxeException;
use \haxe\io\Bytes;

class PsggFile {
	/**
	 * @param string $path
	 * 
	 * @return bool
	 */
	public static function HasBomUTF8 ($path) {
		#src/PsggFile.hx:10: characters 9-40
		$data = File::getBytes($path);
		#src/PsggFile.hx:11: lines 11-13
		if (($data === null) || ($data->length < 3)) {
			#src/PsggFile.hx:12: characters 13-25
			return false;
		}
		#src/PsggFile.hx:14: characters 16-83
		if ((ord($data->b->s[0]) === 239) && (ord($data->b->s[1]) === 187)) {
			#src/PsggFile.hx:14: characters 63-82
			return ord($data->b->s[2]) === 191;
		} else {
			#src/PsggFile.hx:14: characters 16-83
			return false;
		}
	}

	/**
	 * @param string $path
	 * 
	 * @return string
	 */
	public static function ReadASCII ($path) {
		#src/PsggFile.hx:27: characters 9-30
		return PsggFile::ReadUTF8($path);
	}

	/**
	 * @param string $path
	 * 
	 * @return Bytes
	 */
	public static function ReadAllBytes ($path) {
		#src/PsggFile.hx:47: characters 9-35
		return File::getBytes($path);
	}

	/**
	 * @param string $path
	 * 
	 * @return string
	 */
	public static function ReadUTF8 ($path) {
		#src/PsggFile.hx:17: characters 9-40
		$data = File::getBytes($path);
		#src/PsggFile.hx:18: characters 17-46
		$len = $data->length;
		#src/PsggFile.hx:18: characters 9-47
		$s = null;
		#src/PsggFile.hx:18: characters 17-46
		if (($len < 0) || ($len > $data->length)) {
			throw HaxeException::thrown(Error::OutsideBounds());
		} else {
			#src/PsggFile.hx:18: characters 9-47
			$s = substr($data->b->s, 0, $len);
		}
		#src/PsggFile.hx:19: lines 19-23
		if (($s !== null) && (mb_strlen($s) > 0)) {
			#src/PsggFile.hx:20: lines 20-22
			if (HxString::charCodeAt($s, 0) === 65279) {
				#src/PsggFile.hx:21: characters 24-35
				return mb_substr($s, 1, null);
			}
		}
		#src/PsggFile.hx:24: characters 9-17
		return $s;
	}

	/**
	 * @param string $path
	 * @param string $buf
	 * 
	 * @return void
	 */
	public static function WriteASCII ($path, $buf) {
		#src/PsggFile.hx:43: characters 9-34
		PsggFile::WriteUTF8($path, $buf, false);
	}

	/**
	 * @param string $path
	 * @param string $buf
	 * @param bool $bom
	 * 
	 * @return void
	 */
	public static function WriteUTF8 ($path, $buf, $bom) {
		#src/PsggFile.hx:30: characters 20-39
		$data = strlen($buf);
		#src/PsggFile.hx:30: characters 9-40
		$data1 = new Bytes($data, new Container($buf));
		#src/PsggFile.hx:31: characters 9-41
		$databuf = new BytesBuffer();
		#src/PsggFile.hx:32: lines 32-36
		if ($bom) {
			#src/PsggFile.hx:33: characters 13-34
			$databuf->b = ($databuf->b . chr(239));
			#src/PsggFile.hx:34: characters 13-34
			$databuf->b = ($databuf->b . chr(187));
			#src/PsggFile.hx:35: characters 13-34
			$databuf->b = ($databuf->b . chr(191));
		}
		#src/PsggFile.hx:37: characters 9-26
		$databuf->b = ($databuf->b . $data1->b->s);
		#src/PsggFile.hx:39: characters 9-48
		File::saveBytes($path, $databuf->getBytes());
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}
}

Boot::registerClass(PsggFile::class, 'PsggFile');
