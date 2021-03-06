<?php
/**
 * Generated by Haxe 4.1.3
 */

namespace sys\io;

use \haxe\io\_BytesData\Container;
use \php\Boot;
use \haxe\io\Bytes;

/**
 * API for reading and writing files.
 * See `sys.FileSystem` for the complementary file system API.
 */
class File {
	/**
	 * Retrieves the binary content of the file specified by `path`.
	 * If the file does not exist or can not be read, an exception is thrown.
	 * `sys.FileSystem.exists` can be used to check for existence.
	 * If `path` is null, the result is unspecified.
	 * 
	 * @param string $path
	 * 
	 * @return Bytes
	 */
	public static function getBytes ($path) {
		#G:\HaxeToolkit\haxe\std/php/_std/sys/io/File.hx:34: characters 10-57
		$s = \file_get_contents($path);
		$tmp = \strlen($s);
		return new Bytes($tmp, new Container($s));
	}

	/**
	 * Stores `bytes` in the file specified by `path` in binary mode.
	 * If the file cannot be written to, an exception is thrown.
	 * If `path` or `bytes` are null, the result is unspecified.
	 * 
	 * @param string $path
	 * @param Bytes $bytes
	 * 
	 * @return void
	 */
	public static function saveBytes ($path, $bytes) {
		#G:\HaxeToolkit\haxe\std/php/_std/sys/io/File.hx:42: characters 3-23
		$f = File::write($path);
		#G:\HaxeToolkit\haxe\std/php/_std/sys/io/File.hx:43: characters 3-17
		$f->write($bytes);
		#G:\HaxeToolkit\haxe\std/php/_std/sys/io/File.hx:44: characters 3-12
		$f->close();
	}

	/**
	 * Returns an `FileOutput` handle to the file specified by `path`.
	 * If `binary` is true, the file is opened in binary mode. Otherwise it is
	 * opened in non-binary mode.
	 * If the file cannot be written to, an exception is thrown.
	 * Operations on the returned `FileOutput` handle write to the opened file.
	 * If the file existed, its previous content is overwritten.
	 * File handles should be closed via `FileOutput.close` once the operation
	 * is complete.
	 * If `path` is null, the result is unspecified.
	 * 
	 * @param string $path
	 * @param bool $binary
	 * 
	 * @return FileOutput
	 */
	public static function write ($path, $binary = true) {
		#G:\HaxeToolkit\haxe\std/php/_std/sys/io/File.hx:52: characters 3-66
		if ($binary === null) {
			$binary = true;
		}
		return new FileOutput(\fopen($path, ($binary ? "wb" : "w")));
	}
}

Boot::registerClass(File::class, 'sys.io.File');
